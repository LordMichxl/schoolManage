@extends('layouts.base')
@section('content')
    <main>
        <div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">etudiants</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item active" aria-current="page">etudiants</li>
          </ol>
        </div>
      </div>
      <!--end::Row-->
    </div>
    <!--end::Container-->
  </div>
     <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
              <!--begin::Row-->
              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <div class="card-header">
                      <a href="{{route ('etudiants.create')}}"><button class="btn btn-primary">Ajouter un etudiant</button></a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 10px">#</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>date de naissance</th>
                            <th style="width: 175px">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse ($etudiants as $etudiant)
                       
                          <tr class="align-middle">

                            <td>{{ $etudiant->id }}</td>
                            <td>
                              {{ $etudiant->prenom}}
                            </td>
                            <td>
                              {{ $etudiant->nom}}
                            </td>
                            <td>{{ $etudiant->date_naissance }}</td>
                            <td>
                              <a href="{{route ('etudiants.edit',['id' => $etudiant->id] )}}"><button class="btn btn-warning btn-sm ">Modifier</button></a>
                              <a href="{{route ('etudiants.destroy',['id' => $etudiant->id]) }}"><button class="btn btn-danger btn-sm ">Supprimer</button></a>
                            </td>
                          </tr>
                               
                        @empty
                        <tr> 
                          <td colspan="3">Aucun étudiant trouvé.</td>
                        </tr>
                        @endforelse
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                     {{ $etudiants->links('pagination::bootstrap-5')}}
                    </div>
                  </div>
                  <!-- /.card -->
                </div>
              </div>
              <!--end::Row-->
            </div>
          </div>
          <!--end::App Content-->
    </main>
@endsection