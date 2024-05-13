<x-layout :title="$product->name">
    <h1>{{ $product->name }}</h1>

    <strong>{{ $product->price / 100 }} €</strong>

    <p>{{ $product->description }}</p>

    <img src="{{ $product->image }}" alt=""/>
</x-layout>
