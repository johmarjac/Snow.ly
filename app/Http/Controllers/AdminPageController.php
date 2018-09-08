<?php

namespace App\Http\Controllers;

use App\Post;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminPageController extends Controller
{
    public function updateSettings(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'name' => 'required',
            'user' => 'required',
            'password' => 'required',
            'email' => 'required',
            'content' => 'required',
            'description' => 'required',
            'avatar' => 'image'
        ]);

        $avatar_url = '/storage/content/avatar.png';

        if($request->hasFile('avatar'))
            Storage::disk( 'public' )->put( '/content/avatar.png', file_get_contents( $request->avatar ) );

        if($request->use_github_avatar)
        {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, 'https://api.github.com/users/' . config('snowly.github_username'));
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
            curl_setopt($curl, CURLOPT_USERAGENT, 'Snowly');
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

            $content = curl_exec($curl);
            curl_close($curl);

            $data = json_decode( $content, true );

            $avatar_url = $data['avatar_url'];
        }

        DB::table('settings')->update(
        [
            'name' => $request->name,
            'user' => $request->user,
            'password' => Hash::make($request->password),
            'github_username' => $request->github_username,
            'theme' => $request->theme ?? '',
            'page_name' => $request->page_name,
            'avatar_url' => $avatar_url ?? config('snowly.avatar_url'),
            'hidden_sections' => implode(',',
            [
                $request->hiddensection_blog == 'on' ? 'blog' : '',
                $request->hiddensection_articles == 'on' ? 'articles' : '',
                $request->hiddensection_about == 'on' ? 'about' : '',
                $request->hiddensection_projects == 'on' ? 'projects' : ''
            ])
        ]);

        session()->flash('alert', ['text' => "Settings updated successfully.", 'type' => 'alert-success']);

        return redirect()->back();
    }

    public function updateAbout(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'about' => 'required',
        ]);

        DB::table('settings')->update(['about_content' => $request->content]);

        session()->flash('alert', ['text' => "About page has been updated successfully.", 'type' => 'alert-success']);

        return redirect()->back();
    }

    public function signin(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'user' => 'required',
            'password' => 'required',
        ]);

        $setting = DB::table('settings')
            ->select()
            ->where('user', $request->user)
            ->limit(1)
            ->first();

        if ($setting && Hash::check($request->password, $setting->password))
        {
            session(['admin' => true]);

            if( Hash::check($request->password, 'snow.ly') )
                session()->flash('alert', ['text' => "You still haven't changed your password from 'snow.ly' - this is a security risk!", 'type' => 'alert-danger']);

            return redirect()->action('AdminPageController@index');
        }

        session()->flash('alert', ['text' => "Your access couldn't be authorized due to wrong credidentials.", 'type' => 'alert-danger']);

        return redirect()->back();
    }

    public function index()
    {
        if(!session('admin'))
            return view('pages/admin/login');

        return view('pages/admin/index')->with(['messages' => Message::all()]);
    }
}
