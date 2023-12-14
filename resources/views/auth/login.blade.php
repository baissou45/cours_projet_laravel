@extends("layouts.guest")

@section("content")

<div class="card">
    <div class="card-body">

        <h3 class="text-center m-0">
            <a href="index.html" class="logo logo-admin"><img
                    src="{{ asset('template/back/assets/images/logo_dark.png') }}" height="30" alt="logo"></a>
        </h3>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <h4 class="text-center"> Une erreure est survenue </h4>
            </div>
        @endif

        <div class="p-3">
            <h4 class="text-muted font-18 m-b-5 text-center">Bon retour !</h4>
            <p class="text-muted text-center">Veuillez vous connectez</p>

            <form class="form-horizontal m-t-30" action="{{ route('login') }}" method="POST">
                @csrf

                <x-input libelle="Adresse mail" type="text" size="col-12" name="email" />
                <x-input libelle="Mot de passe" type="password" size="col-12" name="password" />

                <div class="form-group row m-t-20">
                    <div class="col-sm-12 text-right">
                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Connexion</button>
                    </div>
                </div>

                <div class="form-group m-t-10 mb-0 row">
                    <div class="col-12 m-t-20">
                        <a href="pages-recoverpw.html" class="text-muted">
                            <i class="mdi mdi-lock"></i> Mot de passe oublier ?</a>
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>

@endsection
