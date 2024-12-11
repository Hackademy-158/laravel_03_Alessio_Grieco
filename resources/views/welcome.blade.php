<x-layout>
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <h1>Lista di Anime</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center d-flex">
            @foreach ($animes as $anime)
                <div class="col-12 col-md-3 m-2">
                    <x-card
                        title="{{$anime['title']}}"
                        img="{{$anime['images']['webp']['image_url']}}"
                        episodes="{{$anime['episodes']}}"
                        synopsis="{{$anime['synopsis']}}"
                        id="{{$anime['mal_id']}}"
                    />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>