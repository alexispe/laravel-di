<x-layout :title="$product->name">
    <h1>{{ $product->name }}</h1>

    <a href="{{ route('products.edit', $product) }}" class="btn btn-outline-primary">
        Modifier
    </a>

    <hr>

    <strong>{{ $product->price / 100 }} €</strong>

    <p>{{ $product->description }}</p>

    <img src="{{ $product->image }}" alt=""/>
</x-layout>
