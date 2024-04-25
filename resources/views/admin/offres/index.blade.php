@extends('admin.layouts.app')

@section('title' , 'Offre | nado.ma')


@section('content')
<div id="main-content">
<div class="page-heading">
    <h3>Offre</h3>
</div>
<div class="page-content">
    <section class="row">
      <div class="row" id="table-striped">
          <div class="col-12">
              <div class="card">
                  <div class="card-header d-flex justify-content-between">
                      <h4 class="card-title">List offre</h4>
                  </div>
                  <div class="card-content">
                      <div class="card-body">
                      <div class="table-responsive mx-4 my-2">
                          <table class="table table-striped mb-0 display" id="example">
                              <thead>
                                  <tr>
                                      <th>Phone</th>
                                      <th>Offre</th>
                                      <th>Voiture</th>
                                      <th>Prix</th>
                                      <th class="d-flex justify-content-end">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($offres as $offre)
                                  <tr>
                                      <td>{{ $offre->phone }}</td>
                                      <td>{{ $offre->offre }}</td>
                                      <td>{{ $offre->car }}</td>
                                      <td>{{ $offre->prix }}</td>
                                      <td>
                                        <div class="d-flex gap-2 w-100 justify-content-end">
                                          @include('admin.partials.deleteBtn', ["url" =>  route('offres.destroy' , $offre) ])
                                        </div>
                                      </td>
                                  </tr>
                                @endforeach
                              </tbody>

                            <tfoot>
                                <tr>
                                    <th>Phone</th>
                                    <th>Offre</th>
                                    <th>Voiture</th>
                                    <th>Prix</th>
                                </tr>
                            </tfoot>
                          </table>
                      </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</section>
</div>
</div>


@endsection

