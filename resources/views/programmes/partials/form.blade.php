@if ($errors->any())
    {{-- @dd($errors) --}}
@endif

<div class="row">
    <x-input libelle="Nom" type="text" size="col-12 col-md-6" name="nomProgramme" value="{{ $programme?->nomProgramme }}" />
    <x-input libelle="Duree" type="number" size="col-12 col-md-6" name="dureeEchange" value="{{ $programme?->dureeEchange }}" />

    <div class="form-group col-12 col-md-6">
        <label for="codeDiplome">Diplôme 1</label>
        <select id="codeDiplome" class="form-control select2" name="codeDiplome">
            @foreach ($diplomes as $diplome)
                <option {{ old('codeDiplome', $programme?->diplome_1->codeDiplome) == $diplome->codeDiplome ?  "selected" : "" }} value="{{ $diplome->codeDiplome }}"> {{ $diplome->nomDiplome }} </option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-12 col-md-6">
        <label for="codeDiplome_1">Diplôme 2</label>
        <select id="codeDiplome_1" class="form-control select2" name="codeDiplome_1">
            @foreach ($diplomes as $diplome)
                <option {{ old('diplome', $programme?->diplome_2->codeDiplome) == $diplome->codeDiplome_1 ?  "selected" : "" }} value="{{ $diplome->codeDiplome }}"> {{ $diplome->nomDiplome }} </option>
            @endforeach
        </select>
    </div>


</div>
