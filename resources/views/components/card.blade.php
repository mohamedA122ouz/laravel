@props(["name","details","src","href","alt"])
<div class="card col" style="width: 18rem;" title = {{ $details }}>
    <img src={{ $src }} class="card-img-top" alt={{ $alt }}>
    <div class="card-body">
      <h5 class="card-title">{{$name}}</h5>
      <p class="card-text">{{$details}}</p>
      <a href={{ $href }} class="btn btn-primary">more details</a>
    </div>
  </div>
