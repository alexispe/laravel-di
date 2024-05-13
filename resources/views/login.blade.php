<x-layout title="Connexion">

    <div class="row justify-content-center align-items-center">

        <form action="{{ route('login') }}" method="post" class="col-6">
            @error('email')
                {{ $message }}
            @enderror

            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <button class="btn btn-primary" type="submit">Se connecter</button>
        </form>
    </div>

</x-layout>
