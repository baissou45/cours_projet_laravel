@extends("layouts.app")

@section("title", "Nouvel artisan")

@section("content")

<form action="{{ route('diplomes.store') }}" method="post">
    @csrf

    <div class="card shadow">
        <div class="card-header">
            Création d'un nouveau diplôme
        </div>
        <div class="card-body">

            @include("diplomes.partials.form")

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
