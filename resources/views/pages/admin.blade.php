@extends('layouts/admin')
@section('content')
<br>
<div class="alert alert-info" role="alert">
    <h3>Welcome!</h3>
    <p>This admin panel will help you to maintain your website, configure every aspect of it and add or manage
    existing content.
    <br><br>
    If you haven't changed a password from 'snow.ly' to your own password yet, an alert should pop
    every time you log into admin panel.</p>
</div>
<hr>
<div>
    <h4>Blog</h4>
    <p>Section dedicated to management of blog posts. Here you can add, edit or delete posts using built-in editor.</p>
    <h5>New</h5>
    <form action="">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Title</span>
            </div>
            <input type="text" class="form-control" placeholder="Title" aria-label="Title">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Tags</span>
            </div>
            <input type="text" class="form-control" placeholder="tag1,tag2,tag3" aria-label="Tags">
        </div>
        <div class="vue">
            <html-editor></html-editor>
        </div>
    </form>
</div>
<hr>
<div>
    <h4>Articles</h4>
    <p>Section dedicated to management of articles. Here you can add, edit or delete articles using built-in editor.</p>
</div>
<hr>
<div>
    <h4>Projects</h4>
    <p>Section dedicated to management of projects. Here you can force a reset and initialization of the project's database.</p>
</div>
<hr>
<div>
    <h4>About</h4>
    <p>Section dedicated to management of your About page. Here you can edit the page using built-in editor.</p>
</div>
<hr>
<div>
    <h4>Settings</h4>
    <p>Section dedicated to configuration of the website. Here you can change your username, avatar, logo etc.</p>
</div>
@endsection
