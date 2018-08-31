<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    //API
    public function get()
    {
        return Project::all()->sortByDesc('stars')->values()->toJson();
    }

    public function index()
    {
        if(config('snowly.hidden_sections.projects'))
            abort(404);

        return view('pages/projects')->with(['projects' => Project::all()->sortByDesc('stars')]);
    }

    public function fetch()
    {
        if(!session('admin'))
            abort(403);

        //Clear database first
        DB::table('projects')->truncate();

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.github.com/users/' . config('snowly.github_username') . '/repos');
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($curl, CURLOPT_USERAGENT, 'Snowly');
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

        $content = curl_exec($curl);
        curl_close($curl);

        $repos = json_decode( $content, true );

        foreach( $repos as $i => $repo )
        {
            $project = new Project();
            $project->name = $repo['name'];
            $project->description = $repo['description'];
            $project->url = $repo['html_url'];
            $project->stars = $repo['stargazers_count'];
            $project->forks = $repo['forks_count'];
            $project->watchers = $repo['watchers'];
            $project->release_url = $repo['html_url'] . '/releases';
            $project->language = $repo['language'];
            $project->save();
        }

        session()->flash('alert', ['text' => count( $repos ) . ' projects fetched successfully. Do not use this function too often to prevent yourself from getting temporarily API locked.
        This will later be hooked to webhooks for ease of use and automatic fetching - if you want to update your project\'s score, just click "Update".', 'type' => 'alert-success']);

        return redirect()->back();
    }

    public function update()
    {
        if(!session('admin'))
            abort(403);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.github.com/users/' . config('snowly.github_username') . '/repos');
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($curl, CURLOPT_USERAGENT, 'Snowly');
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

        $content = curl_exec($curl);
        curl_close($curl);

        $repos = json_decode( $content, true );

        foreach( $repos as $i => $repo )
        {
            $project = Project::where('name', 'like', $repo['name'])->get()->first();

            if(!$project)
                continue;

            $project->name = $repo['name'];
            $project->description = $repo['description'];
            $project->url = $repo['html_url'];
            $project->stars = $repo['stargazers_count'];
            $project->forks = $repo['forks_count'];
            $project->watchers = $repo['watchers'];
            $project->release_url = $repo['html_url'] . '/releases';
            $project->language = $repo['language'];
            $project->save();
        }

        session()->flash('alert', ['text' => "Repositories updated! If you've added new repositories recently, it's suggested to use \"Fetch\" instead.", 'type' => 'alert-success']);

        return redirect()->back();
    }
}
