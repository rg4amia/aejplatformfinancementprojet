@extends('backend.partials.main')
@section('content')
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
                dom:'<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-right"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                colVis: {
                    exclude: [ 0 ]
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
                    {
                        extend: 'colvis',
                       // text: feather.icons['check-square'].toSvg({ class: 'font-small-4 mr-50' }) + 'Valider & Transmission Partenaire Financier',
                        className: 'btn btn-relief-info mr-2',
                        action: function ( e, dt, node, config ) {
                            if(data.length == 0) {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Veuillez cocher un projet',
                                    showConfirmButton: false,
                                    timer: 1500,
                                    customClass: {
                                        confirmButton: 'btn btn-primary'
                                    },
                                    buttonsStyling: false
                                });
                            } else {
                                $("#btnTransmissionPF").click();
                            }
                        }
                    },
                    {
                        extend: 'colvis',
                        //text: feather.icons['eye'].toSvg({ class: 'font-small-4 mr-50' }) + 'Colonne',
                        className: 'btn btn-relief-success dropdown-toggle mr-2',
                    },
                    {
                        extend: 'collection',
                        className: 'btn btn-relief-primary dropdown-toggle mr-2',
                        //text: feather.icons['share'].toSvg({ class: 'font-small-4 mr-50' }) + 'Extraction',
                        buttons: [
                            {
                                extend: 'print',
                                //text: feather.icons['printer'].toSvg({ class: 'font-small-4 mr-50' }) + 'Print',
                                className: 'dropdown-item',
                                exportOptions: { columns: [3, 4, 5, 6, 7] }
                            },
                            {
                                extend: 'csv',
                                //text: feather.icons['file-text'].toSvg({ class: 'font-small-4 mr-50' }) + 'Csv',
                                className: 'dropdown-item',
                                exportOptions: { columns: [3, 4, 5, 6, 7] }
                            },
                            {
                                extend: 'excel',
                                //text: feather.icons['file'].toSvg({ class: 'font-small-4 mr-50' }) + 'Excel',
                                className: 'dropdown-item',
                                exportOptions: { columns: [3, 4, 5, 6, 7] }
                            },
                            {
                                extend: 'pdf',
                                //text: feather.icons['clipboard'].toSvg({ class: 'font-small-4 mr-50' }) + 'Pdf',
                                className: 'dropdown-item',
                                exportOptions: { columns: [3, 4, 5, 6, 7] }
                            },
                            {
                                extend: 'copy',
                                //text: feather.icons['copy'].toSvg({ class: 'font-small-4 mr-50' }) + 'Copy',
                                className: 'dropdown-item',
                                exportOptions: { columns: [3, 4, 5, 6, 7] }
                            }
                        ],
                        init: function (api, node, config) {
                            $(node).removeClass('btn-secondary');
                            $(node).parent().removeClass('btn-group');
                            setTimeout(function () {
                                $(node).closest('.dt-buttons').removeClass('btn-group').addClass('d-inline-flex');
                            }, 50);

                        }
                    },
                ],
            });
        });

    </script>
@endsection

