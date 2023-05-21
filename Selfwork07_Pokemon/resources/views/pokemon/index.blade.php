<x-main>
    <h1 class="nes-text is-primary">TEST</h1>

    @foreach ($pokemons['results'] as $pokemon)
        <div class="nes-container m-5 is-rounded">
            <p class="title text-capitalize">{{ $pokemon['name'] }}</p>
        </div>
    @endforeach
</x-main>
