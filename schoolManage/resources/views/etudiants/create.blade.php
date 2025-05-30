@extends('layouts.base')
@section('content')
    <main>
        <div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Ajouter un étudiant</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="{{ route('etudiants.index') }}">etudiants</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ajouter</li>
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
                    <div class="col-md-8 offset-md-2">
                        <div class="card card-secondary card-outline mb-4">
                        <!--begin::Header-->
                        <div class="card-header"><div class="card-title">Ajouter un étudiant</div></div>
                        <!--end::Header-->
                        <!--begin::Form-->
                    <form action="{{ route('etudiants.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row mb-3">
                              <label for="prenom" class="col-sm-3 col-form-label">Prénom</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="prenom" id="prenom">
                                @error('prenom')
                                  <small style="color:red">{{ $message}}</small>
                                @enderror
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label for="nom" class="col-sm-3 col-form-label">Nom</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="nom" id="nom">
                                @error('nom')
                                  <small style="color:red">{{ $message}}</small>
                                @enderror
                              </div>
                            </div>
                            <div class="row mb-3">
                                <label for="date_naissance" class="col-sm-3 col-form-label">Date de naissance</label>
                                <div class="col-sm-9">
                                  <input type="date" class="form-control" name="date_naissance" id="date_naissance">
                                  @error('date_naissance')
                                    <small style="color:red">{{ $message}}</small>
                                  @enderror
                                </div>
                              </div>
                         <!--end::Body-->
                      <!--begin::Footer-->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-secondary">Enregistrer</button>
                        <a href="{{route("etudiants.index")}}"class="btn float-end">Retour</a>
                    </div>
                      <!--end::Footer-->
                    </form>
                    <!--end::Form-->
                  </div>
                </div>  
              </div>
              <!--end::Row-->
            </div>
          </div>
          <!--end::App Content-->
    </main>
@endsection