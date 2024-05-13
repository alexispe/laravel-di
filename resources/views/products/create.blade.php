<x-layout title="Créer un produit">
    <h1 class="display-1">Créer un produit</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="post">
        @csrf

        <input type="text" name="name" value="{{ old('name') }}">
        <textarea name="description">{{ old('description') }}</textarea>
        <input type="number" name="price" value="{{ old('price') }}">
        <input type="text" name="image" value="{{ old('image') }}">

        <button type="submit">Créer</button>
    </form>

</x-layout>
