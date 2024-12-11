<div class="card" style="width: 18rem;">
    <img src="{{ $img }}" class="card-img-top" alt="">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">Episodi: {{ $episodes }}</p>
        <p class="card-text">{{Str::limit($synopsis, 100) }}</p>
        <a href="{{ route('anime.detail', ['id' => $id]) }}" class="btn btn-primary">Guarda subito!</a>
    </div>
</div>