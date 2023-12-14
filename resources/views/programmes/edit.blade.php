@extends("layouts.app")

@section("title", "Modifier un programme")

@section("content")

<form action="{{ route('programmes.update', $programme->codeDiplome) }}" method="post">
    @method("PATCH")
    @csrf

    <div class="card shadow">
        <div class="card-header">
            Création d'un nouveau pprogramme
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
