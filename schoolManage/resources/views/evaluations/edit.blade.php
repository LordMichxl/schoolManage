@extends('layouts.base')
@section('content')
    <main>
        <div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Modifier une évaluation</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="{{ route('evaluations.index') }}">évaluation</a></li>
            <li class="breadcrumb-item active" aria-current="page">Modifier</li>
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
                        <div class="card-header"><div class="card-title">Modifier une évaluation</div></div>
                        <!--end::Header-->
                        <!--begin::Form-->
                    <form action="{{ route('evaluations.update',$evaluation->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row mb-3">
                              <label for="titre" class="col-sm-3 col-form-label">Titre</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="titre" id="titre" value="{{ old('titre', $evaluation->titre) }}">
                                @error('titre')
                                  <small style="color:red">{{ $message}}</small>
                                @enderror
                              </div>
                            </div>
                            <div class="row mb-3">
                                <label for="titre" class="col-sm-3 col-form-label">Date</label>
                                <div class="col-sm-9">
                                  <input type="date" class="form-control" name="date" id="date" value="{{ old('date', $evaluation->date) }}">
                                  @error('date')
                                    <small style="color:red">{{ $message}}</small>
                                  @enderror
                                </div>
                              </div>
                            <div class="row mb-3">
                                <label for="type" class="col-sm-3 col-form-label">Type</label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="type" id="type" value="{{ old('type', $evaluation->type) }}">
                                    <option value="">--Sélectionnez--</option>
                                    <option value="Examen">Examen</option>
                                    <option value="Devoir">Devoir</option>
                                  </select>
                                  @error('type')
                                    <small style="color:red">{{ $message}}</small>
                                  @enderror
                                </div>
                                </div>
                              </div>
                            
                         <!--end::Body-->
                      <!--begin::Footer-->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-secondary">Enregistrer</button>
                        <a href="{{route("evaluations.index")}}"class="btn float-end">Retour</a>
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