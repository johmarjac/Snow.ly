<div class="alert {{ $type ?? '' }}">
    <div class="alert-icon">
        <i class="far fa-bell"></i>
    </div>
    <div class="alert-message">
        {{ $message }}
    </div>
    <div class="alert-button" data-close-on-click="alert">
        <i class="far fa-times-circle"></i>
    </div>
</div>
