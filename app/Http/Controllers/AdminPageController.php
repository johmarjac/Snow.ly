<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminPageController extends Controller
{
    public function updateSettings(Request $request)
    {
        DB::table('settings')->update(
        [
            'name' => $request->name,
            'user' => $request->user,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'github_username' => $request->github_username,
            'theme' => $request->theme,
            'page_name' => $request->page_name,
            'hidden_sections' => implode(',', [$request->hiddensection_blog, $request->hiddensection_articles, $request->hiddensection_about, $request->hiddensection_projects])
        ]);

        session()->flash('alert', ['text' => "Settings updated successfully.", 'type' => 'alert-success']);

        return redirect()->back();
    }

    public function updateAbout(Request $request)
    {
        DB::table('settings')->update(['about_content' => $request->content]);

        session()->flash('alert', ['text' => "About page has been updated successfully.", 'type' => 'alert-success']);

        return redirect()->back();
    }

    public function signin(Request $request)
    {
        if( $request->user == config('snowly.user') && Hash::check( $request->password, config('snowly.password') ) )
        {
            session(['admin' => true]);

            return redirect()->action('AdminPageController@index');
        }

        session()->flash('alert', ['text' => "Your access couldn't be authorized due to wrong credidentials.", 'type' => 'alert-danger']);

        return redirect()->back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!session('admin'))
            return view('pages/admin/login');

        return view('pages/admin/index');
    }
}
