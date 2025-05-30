@extends('layouts.base')
@section('content')
    <main>
        <div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Evaluation</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item active" aria-current="page">évaluation</li>
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
                      <a href="{{route ('evaluations.create')}}"><button class="btn btn-primary">Créer une évaluation</button></a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 10px">#</th>
                            <th>Titre</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th style="width: 175px">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse ($evaluations as $evaluation)
                       
                          <tr class="align-middle">

                            <td>{{ $evaluation->id }}</td>
                            <td>
                              {{ $evaluation->titre}}
                            </td>
                            <td>{{ $evaluation->date}}</td>
                             <td>{{ $evaluation->type}}</td>
                            <td>
                              <a href="{{route ('evaluations.edit',['id' => $evaluation->id] )}}"><button class="btn btn-warning btn-sm ">Modifier</button></a>
                              <a href="{{route ('evaluations.destroy',['id' => $evaluation->id]) }}"><button class="btn btn-danger btn-sm ">Supprimer</button></a>
                            </td>
                          </tr>
                               
                        @empty
                        <tr> 
                          <td colspan="3">Aucune évaluation trouvée.</td>
                        </tr>
                        @endforelse
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                     {{ $evaluations->links('pagination::bootstrap-5')}}
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