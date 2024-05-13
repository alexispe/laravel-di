<x-layout title="Modifier un produit">
    <h1 class="display-1">Modifier un produit</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product) }}" method="post">
        @method('PUT')
        @csrf

        <input type="text" name="name" value="{{ old('name', $product->name) }}">
        <textarea name="description">{{ old('description', $product->description) }}</textarea>
        <input type="number" name="price" value="{{ old('price', $product->price) }}">
        <input type="text" name="image" value="{{ old('image', $product->image) }}">

        <button type="submit">Modifier</button>
    </form>

</x-layout>
