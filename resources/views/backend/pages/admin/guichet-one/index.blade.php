@extends('backend.partials.main')
@php
$active='guichet1';
@endphp
@section('content')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
@endsection
    <div class="content-wrapper">
          <div class="row">

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Striped Table</h4>
                  <p class="card-description">
                    Add class <code>.table-striped</code>
                  </p>
                  <div class="table-responsive">
                      <table id="tableprojetguichetun" class="display expandable-table" style="width:100%">
                          <thead>
                          <tr>
                              <th>Date#</th>
                              <th>Nom</th>
                              <th>Matricule AEJ</th>
                              <th>Titre projet</th>
                              <th>Matricule Projet</th>
                              <th>Montant Finan.</th>
                              <th></th>
                          </tr>
                          </thead>
                          <tbody>
                          </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection
@section('js')
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script>
        var data = [];
        function setProjetCheck(elt,id){
            if(elt.checked){
                data.push(id);
            } else{
                removeItem(data, id);
            }
        }

        $(function () {
           /* var table = $('#tableprojetguichetun').DataTable( {
                "ajax": '{{ route('backend.admin.guichet-one.getindex') }}',
                "columns": [
                    {data: 'date', visible: true},
                    {data: 'nom', visible: true},
                    {data: 'matricule_aej', visible: true},
                    {data: 'decrireprojet', visible: true},
                    {data: 'matriculeprojet', orderable: false, searchable: false, visible: true},
                    {data: 'montantfinancement', visible: true},
                    {
                        "className":      'details-control',
                        "orderable":      false,
                        "data":           null,
                        "defaultContent": ''
                    }
                ],
                "order": [[1, 'asc']],
                "paging":   false,
                "ordering": true,
                "info":     false,
                "filter": false,
                columnDefs: [{
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0
                }],
                select: {
                    style: 'os',
                    selector: 'td:first-child'
                }
            } );*/

            $('#tableprojetguichetun tbody').on('click', 'td.details-control', function () {
                var tr = $(this).closest('tr');
                var row = table.row( tr );

                if ( row.child.isShown() ) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                }
                else {
                    // Open this row
                    row.child( format(row.data()) ).show();
                    tr.addClass('shown');
                }
            } );

            var tableprojetguichetun = $('#tableprojetguichetun').DataTable({
                "language": {
                    "lengthMenu": "_MENU_",
                    "zeroRecords": "Rien n'a été trouvé - désolé",
                    "info": "_PAGE_ de _PAGES_",
                    "infoEmpty": "Aucun dossier disponible",
                    "processing":     "Traitement...",
                    "search":         "Recherche:",
                    "infoFiltered": "(filtré de _MAX_ total des enregistrements)",
                    "paginate": {
                        "first":      "Premier",
                        "last":       "Dernier",
                        "next":       "Suivant",
                        "previous":   "Précédent"
                    },
                },
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('backend.admin.guichet-one.getindex') }}'
                },
                dom: 'Bfrtip',
                //dom:'<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-right"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                colVis: {
                    exclude: [ 0 ]
                },
                initComplete: function () {
                    $('.buttons-pdf').removeClass('dt-button buttons-pdf buttons-html5').addClass('btn btn-info btn-icon-text').html(
                    'Imprimer <i class="ti-printer btn-icon-append"></i>'
                    );
                    //btn btn-info btn-icon-text"
                    //dt-button buttons-pdf buttons-html5
                },
                columns: [
                    {data: 'date', visible: true},
                    {data: 'nom', visible: true},
                    {data: 'matricule_aej', visible: true},
                    {data: 'decrireprojet', visible: true},
                    {data: 'matriculeprojet', orderable: false, searchable: false, visible: true},
                    {data: 'montantfinancement', visible: true},
                ],
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
        });
    </script>
@endsection

