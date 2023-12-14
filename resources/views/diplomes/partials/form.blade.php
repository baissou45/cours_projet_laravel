<div class="row">
    {{-- <x-input libelle="Code" type="number" size="col-12 col-md-6" name="codeDiplome" value="{{ $diplome?->codeDiplome }}" /> --}}
    <x-input libelle="Nom" type="text" size="col-12 col-md-6" name="nomDiplome" value="{{ $diplome?->nomDiplome }}" />
    <x-input libelle="Niveau" type="test" size="col-12 col-md-6" name="niveauDiplome" value="{{ $diplome?->niveauDiplome }}" />


    <div class="form-group col-12 col-md-12">
        <label for="universite">Universite</label>
        <select id="universite" class="form-control select2" name="codeU">
            @foreach ($universites as $universite)
                <option {{ old('universite', $diplome?->universite->codeU) == $universite->codeU ?  "selected" : "" }} value="{{ $universite->codeU }}"> {{ $universite->nomU }} </option>
            @endforeach
        </select>
    </div>
</div>
