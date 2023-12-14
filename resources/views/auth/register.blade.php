@extends("layouts.guest")

@section("content")
<div class="card">
    <div class="card-body">

        <h3 class="text-center m-0">
            <a href="index.html" class="logo logo-admin"><img src="assets/images/logo_dark.png" height="30" alt="logo"></a>
        </h3>

        <div class="p-3">
            <h4 class="text-muted font-18 m-b-5 text-center">Nouvel utilisateur</h4>

            <form class="form-horizontal m-t-30" action="{{ route('register') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Nom complet</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirmer le mot de passe</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>

                <div class="form-group row m-t-20">
                    <div class="col-12 text-right">
                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">S'inscrire</button>
                    </div>
                </div>

                <div class="form-group m-t-10 mb-0 row">
                    <div class="col-12 m-t-20">
                        <p class="font-14 text-muted mb-0">En vous inscrivant, vous acceptez implicitement les <a href="#">Condition générales d'utilisation</a></p>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection