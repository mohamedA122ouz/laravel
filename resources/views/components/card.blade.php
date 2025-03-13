@props(["name","details","src","href","alt","price","discount"])
<div class="card col" style="width: 18rem;" title = {{ $details }}>
    <span class="discount" style="visibility: {{ $discount>0?"visible":"hidden" }}">-%{{ $discount>0?$discount*100:"" }}</span>
    <img src={{ $src }} class="card-img-top" alt={{ $alt }}>
    <div class="card-body">
      <h5 class="card-title">{{$name}}</h5>
      <p class="card-text">{{$details}}</p>
      <p class="card-text"><span style="text-decoration:line-through;font-size:0.8rem">{{ $discount>0?$price."EGP":"" }}</span> {{$price - ($price*$discount)}} EGP</p>
      <a href={{ $href }} class="btn btn-primary">more details</a>
    </div>
  </div>
