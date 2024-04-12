@extends('admin.layouts.app')

@section('title' , 'Annonces | nado.ma')


@section('content')
<div id="main-content">
    <div class="page-heading">
        <h3>Annonces</h3>
    </div>
    <div class="page-content">
    <section class="section">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4 class="card-title">List Annonces</h4>
            <a href="{{ route('annonces.create')}}" class="btn btn-primary float-right">New Annonce</a>
        </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped mb-0 display" id="example">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>titre</th>
                          <th>mark</th>
                          <th>modele</th>
                          <th>Active</th>
                          <th class="d-flex justify-content-end">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($ads as $ad)
                    <tr>
                      <th scope="row">{{ $ad->id; }}</th>
                      <td>{{ $ad->titre; }}</td>
                      <td>{{ $ad->mark; }}</td>
                      <td>{{ $ad->modele; }}</td>
                      <td class="text-center"> @if ($ad->active == 1) <i class="bi bi-check text-success"></i> @else <i class="bi bi-dash-circle text-danger"></i> @endif </td>
                      <td>
                        <div class="d-flex gap-2 w-100 justify-content-end">
                          <a href="{{ route("annonces.edit" , $ad)}}" class="btn btn-info">Update</a>
                          @include('admin.partials.deleteBtn', [  "url" =>  route('annonces.destroy' , $ad) ])
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                      <tr>
                        <th>Id</th>
                        <th>titre</th>
                        <th>mark</th>
                        <th>modele</th>
                        <th>Active</th>
                      </tr>
                  </tfoot>
              </table>
          </div>
      </div>
  </section>
</div>
</div>
@endsection
