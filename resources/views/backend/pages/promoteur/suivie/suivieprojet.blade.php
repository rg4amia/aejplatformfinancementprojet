@extends('backend.partials.main')
@section('content')
    <div class="content-wrapper">
          <div class="row">

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Mes demandes de financement</h4>
                  <p class="card-description">
                   <code>Liste des demandes de financement de projet</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Numéro projet
                          </th>
                          <th>
                            Intitulé
                          </th>
                          <th>
                            Date
                          </th>
                          <th>
                            Statut
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($projets as $projet)
                        <tr>
                          <td class="py-1">
                            {{ $projet->matriculeprojet }}
                          </td>
                          <td>
                            {{ $projet->intituleprojet }}
                          </td>
                          <td>
                            {{ $projet->created_at }}
                          </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                          <td>
                           <a  href="#" class="btn btn-rounded btn-info">
                               detail
                           </a>
                          </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="20">
                                    Vous n'avez pas encore soumis de projets !<br/>
                                    Nous vous invitons vivement à trouver des projets et nous vous aiderons à les réaliser.
                                </td>
                            </tr>
                        @endforelse

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection
