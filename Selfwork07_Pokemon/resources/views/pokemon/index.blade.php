<x-main>
    <h1 class="nes-text is-primary">TEST</h1>

    @foreach ($pokemons['results'] as $pokemon)

        <div class="nes-container m-5 rounded">
            <p class="title text-capitalize">{{ $pokemon['name'] }}</p>
            <a class="nes-btn is-primary" href="{{route('pokemon.show',['id' => $pokemon['url']])}}">INFO</a>
        </div>
    @endforeach
</x-main>
