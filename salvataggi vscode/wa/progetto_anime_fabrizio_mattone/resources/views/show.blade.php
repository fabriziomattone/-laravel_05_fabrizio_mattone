<x-layout>

<div class="container my-5">

    <div class="row">
        <h2>{{ $anime['title'] }}</h2>
    </div>

</div>

<div class="container my-5">

    <div class="row">
        <div class="col-12 col-md-6">
            <img src="{{$anime['images']['jpg']['large_image_url']}}" alt="">
        </div>

        <div class="col-12 col-md-6">
           <p>genre</p> 
           <ul>
            @foreach ($anime['genres'] as $genre)
                <li>{{$genre['name']}}</li>
            @endforeach
           </ul>
           <p>episodes: {{$anime['episodes']}}</p>
           <p>{{$anime['synopsis']}}</p>
        </div>


    </div>
    

</div>

</x-layout>