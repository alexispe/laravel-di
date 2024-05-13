<x-layout :title="$product->name">
    <h1>{{ $product->name }}</h1>

    <div class="d-flex flex-row gap-2">
        @can('update', $product)
            <div>
                <a href="{{ route('products.edit', $product) }}" class="btn btn-outline-primary">
                    Modifier
                </a>
            </div>
        @endcan

        @can('delete', $product)
            <form action="{{ route('products.destroy', $product) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger">Supprimer</button>
            </form>
        @endcan
    </div>

    <hr>

    <strong>{{ $product->price / 100 }} €</strong>

    <p>{{ $product->description }}</p>

    <img src="{{ $product->image }}" alt=""/>
</x-layout>
