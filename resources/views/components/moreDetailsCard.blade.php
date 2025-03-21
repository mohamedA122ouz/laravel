@props(['name', 'src', 'alt', 'more_details'])
<style>
.more-details-image{
    display: flex;
    justify-content: center;
    align-items: center;
    object-fit: contain;
    background:black;
}
</style>
@php
if (strpos($src, 'storage/image') == 0) {
    $src = asset($src);
}
@endphp
<div class="card mb-3" style="max-width: 100%;">
    <div class="row g-0">
        <div class="col-md-4 more-details-image">
            <img src={{ $src }} class="img-fluid rounded-start" alt={{ $alt }}>
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $name }}</h5>
                <p class="card-text">{{ $more_details }}</p>
            </div>
        </div>
    </div>
</div>
