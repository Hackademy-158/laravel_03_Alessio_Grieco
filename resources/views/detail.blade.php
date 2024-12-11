<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                @if(isset($anime['title']))
                    <h1>{{ $anime['title'] }}</h1>
                @else
                    <h1>Titolo non disponibile</h1>
                @endif

                @if(isset($anime['images']['webp']['image_url']))
                    <img src="{{ $anime['images']['webp']['image_url'] }}" alt="{{ $anime['title'] }}" class="img-fluid my-3">
                @else
                    <img src="default-image.jpg" alt="Immagine non disponibile" class="img-fluid my-3">
                @endif

                @if(isset($anime['episodes']))
                    <p><b>Episodi:</b> {{ $anime['episodes'] }}</p>
                @else
                    <p><b>Episodi:</b> Dati non disponibili</p>
                @endif

                @if(isset($anime['synopsis']))
                    <p>{{ $anime['synopsis'] }}</p>
                @else
                    <p>Sinossi non disponibile</p>
                @endif

                <a href="{{ route('welcome') }}" class="btn btn-secondary mt-3">Torna alla lista</a>
            </div>
        </div>
    </div>
</x-layout>
