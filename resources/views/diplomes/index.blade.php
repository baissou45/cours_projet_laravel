@extends("layouts.app")

@section("title", "Liste des diplômes")


@section("css")
    <!-- DataTables -->
    <link href="{{ asset('back/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back/assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('back/assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Sweet Alert -->
    <link href="{{ asset('back/assets/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endsection


@section("content")
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                {{-- <h5>Liste des artisants</h5> --}}
                <div class="d-flex justify-content-end mt-3 mr-3 mb-5">
                    <a href="{{ route('diplomes.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus-circle mr-2"></i>
                        Nouveau diplôme
                    </a>
                </div>

                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Nom</th>
                            <th>Niveau</th>
                            <th>Université</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($diplomes as $diplome)
                            <tr>
                                <td>{{ $diplome->codeDiplome }}</td>
                                <td>{{ $diplome->nomDiplome }}</td>
                                <td>{{ $diplome->niveauDiplome }}</td>
                                <td>{{ $diplome->universite->nomU }}</td>
                                <td class="d-flex justify-content-around">
                                    <a href="{{ route('diplomes.edit', $diplome) }}"> <i class="fa fa-pencil text-secondary" aria-hidden="true"></i> </a>
                                    <a onclick="show_alerte(`{{ route('diplomes.destroy', $diplome) }}`)" class="waves-effect waves-light sa-warning"> <i class="fa fa-trash text-danger" aria-hidden="true"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection



@section("script")
    <!-- Required datatable js -->
    <script src="{{ asset('back/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('back/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Buttons examples -->
    <script src="{{ asset('back/assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('back/assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('back/assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('back/assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('back/assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('back/assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('back/assets/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('back/assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('back/assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('back/assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('back/assets/pages/datatables.init.js') }}"></script>

    <script src="{{ asset('back/assets/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
    {{-- <script src="assets/pages/sweet-alert.init.js"></script> --}}

    <script>
        $("#filter").click(function(){
            $('#filter_foem').submit();
        })
    </script>
@endsection