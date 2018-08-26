<div class="project">
    <div class="project-header">
        <span><a href="{{ $project->url }}">{{ $project->name }}</a></span>
        <span class="flexitem-right">{{ $project->language ?? '' }}</span>
    </div>
    <div class="project-description">
        <p>{{ $project->description }}</p>
    </div>
    <div class="project-footer">
        <i class="far fa-fw fa-star"></i><span>{{ $project->stars }}</span>
        <i class="fas fa-fw fa-code-branch"></i><span>{{ $project->forks }} </span>
        <i class="far fa-fw fa-eye"></i><span>{{ $project->watchers }}</span>
        <a class="flexitem-right" href="{{ $project->release_url }}"><i class="fas fa-file-download"></i></a>
    </div>
</div>
