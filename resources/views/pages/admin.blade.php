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

<div class="nav nav-tabs mb-4" role="tablist">
    <a class="nav-item nav-link active" id="blog-tab" data-toggle="tab" href="#blog-content" role="tab" aria-controls="blog-content" aria-selected="true">Blog</a>
    <a class="nav-item nav-link" id="articles-tab" data-toggle="tab" href="#articles-content" role="tab" aria-controls="articles-content" aria-selected="false">Articles</a>
    <a class="nav-item nav-link" id="projects-tab" data-toggle="tab" href="#projects-content" role="tab" aria-controls="projects-content" aria-selected="false">Projects</a>
    <a class="nav-item nav-link" id="about-tab" data-toggle="tab" href="#about-content" role="tab" aria-controls="about-content" aria-selected="false">About</a>
    <a class="nav-item nav-link" id="settings-tab" data-toggle="tab" href="#settings-content" role="tab" aria-controls="settings-content" aria-selected="false">Settings</a>
</div>
<div class="tab-content vue">
    <div class="tab-pane fade show active" id="blog-content" role="tabpanel" aria-labelledby="blog-tab">
        <div class="row">
            <div class="col-2">
                <div class="list-group" role="tablist" aria-orientation="vertical">
                    <a class="list-group-item list-group-item-action active" id="blog-content-new-tab" data-toggle="pill" href="#blog-content-new" role="tab" aria-controls="blog-content-new" aria-selected="true">New</a>
                    <a class="list-group-item list-group-item-action" id="blog-content-manage-tab" data-toggle="pill" href="#blog-content-manage" role="tab" aria-controls="blog-content-manage" aria-selected="false">Manage</a>
                </div>
            </div>
            <div class="col-10">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="blog-content-new" role="tabpanel" aria-labelledby="blog-content-new-tab">
                        <form action="/blog" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Title</span>
                                </div>
                                <input type="text" name="title" class="form-control" placeholder="Post title">
                                <div class="input-group-prepend ml-2">
                                    <span class="input-group-text">Tags</span>
                                </div>
                                <input type="text" name="tags" class="form-control" placeholder="tag1,tag2..">
                            </div>
                            <html-editor inputname="text"></html-editor>
                            <button class="btn btn-success btn-block">Submit</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="blog-content-manage" role="tabpanel" aria-labelledby="blog-content-manage-tab">
                        <api-form action="/blog" method="POST" url="/api/v1/blog">
                            <template slot-scope="props">
                                <select class="form-control mb-3" v-model="props.selected">
                                    <option v-for="entry, i in props.results" :value="entry">@{{ entry.title }}</option>
                                </select>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Title</span>
                                    </div>
                                    <input type="text" name="title" class="form-control" placeholder="Post title" v-if="props.results[props.selected]" :value="props.results[props.selected].title">
                                    <div class="input-group-prepend ml-2">
                                        <span class="input-group-text">Tags</span>
                                    </div>
                                    <input type="text" name="tags" class="form-control" placeholder="tag1,tag2.." v-if="props.results[props.selected]" :value="props.results[props.selected].tags">
                                </div>
                                <html-editor inputname="text" inputvalue="TEST"></html-editor>
                                <button class="btn btn-primary">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </template>
                        </api-form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="tab-pane fade" id="articles-content" role="tabpanel" aria-labelledby="articles-tab">
        <div class="row">
            <div class="col-2">
                <div class="list-group" role="tablist" aria-orientation="vertical">
                    <a class="list-group-item list-group-item-action active" id="articles-content-new-tab" data-toggle="pill" href="#articles-content-new" role="tab" aria-controls="articles-content-new" aria-selected="true">New</a>
                    <a class="list-group-item list-group-item-action" id="articles-content-manage-tab" data-toggle="pill" href="#articles-content-manage" role="tab" aria-controls="articles-content-manage" aria-selected="false">Manage</a>
                </div>
            </div>
            <div class="col-10">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="articles-content-new" role="tabpanel" aria-labelledby="articles-content-new-tab">
                        <form action="/blog" method="POST">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Title</span>
                                </div>
                                <input type="text" name="title" class="form-control" placeholder="Post title">
                                <div class="input-group-prepend ml-2">
                                    <span class="input-group-text">Tags</span>
                                </div>
                                <input type="text" name="tags" class="form-control" placeholder="tag1,tag2..">
                            </div>
                            <html-editor inputname="text"></html-editor>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="articles-content-manage" role="tabpanel" aria-labelledby="articles-content-manage-tab">

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="tab-pane fade" id="projects-content" role="tabpanel" aria-labelledby="projects-tab">

    </div>


    <div class="tab-pane fade" id="about-content" role="tabpanel" aria-labelledby="about-tab">

    </div>


    <div class="tab-pane fade" id="settings-content" role="tabpanel" aria-labelledby="settings-tab">

    </div>
</div>

@endsection
