<x-main>
    <h1 class="nes-text is-primary">TEST</h1>


    @foreach ($pokemon as $item)

        <div class="nes-container m-5 rounded">
            <p class="title text-capitalize">{{ $item['name'] }}</p>
            <a class="nes-btn is-primary" href="{{route('pokemon.show',['id' => $item['id']])}}">INFO</a>
        </div>
    @endforeach
</x-main>
