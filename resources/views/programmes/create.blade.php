@extends("layouts.app")

@section("title", "Nouvel programme")

@section("content")

<form action="{{ route('programmes.store') }}" method="post">
    @csrf

    <div class="card shadow">
        <div class="card-header">
            Création d'un nouveau programme
        </div>
        <div class="card-body">

            @include("programmes.partials.form")

        </div>
        <div class="card-footer d-flex justify-content-end">
            <button class="btn btn-danger" type="reset"> Annuler </button>
            <button class="btn btn-primary mx-3" type="submit"> Enregistrer </button>
        </div>
    </div>

</form>

@endsection


@section("script")

@endsection
