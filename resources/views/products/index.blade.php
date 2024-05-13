<x-layout title="Catalogue des produits">
    <h1 class="display-1">Liste des produits</h1>

    <ul>
        @foreach($products as $product)
            <li>
                <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a> : {{ $product->price / 100 }} €
            </li>
        @endforeach
    </ul>

    {{ $products->links() }}
</x-layout>
