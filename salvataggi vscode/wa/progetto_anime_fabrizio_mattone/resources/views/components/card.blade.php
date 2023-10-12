<div class="card" style="width: 18rem;">
    <img src="{{$anime['images']['jpg']['image_url']}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $anime['title'] }}</h5>
      <p class="card-text">{{ Str::limit($anime['synopsis'],30) }}</p>
      <a href="{{route('anime.show',[ 'id' => $anime['mal_id']])}}" class="btn btn-primary">detail</a>
    </div>
  </div>