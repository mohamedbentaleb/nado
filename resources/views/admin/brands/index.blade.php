@extends('admin.layouts.app')

@section('title' , 'Brands | nado.ma')


@section('content')
<div id="main-content">
<div class="page-heading">
    <h3>Brands</h3>
</div>
<div class="page-content">
    <section class="row">
      <div class="row" id="table-striped">
          <div class="col-12">
              <div class="card">
                  <div class="card-header d-flex justify-content-between">
                      <h4 class="card-title">List Tags</h4>
                      <a href="{{ route('brands.create')}}" class="btn btn-primary float-right">New brand</a>
                  </div>
                  <div class="card-content">
                      <div class="card-body">
                      <div class="table-responsive mx-4 my-2">
                          <table class="table table-striped mb-0 display" id="example">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>logo</th>
                                      <th class="d-flex justify-content-end">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($brands as $b)
                                  <tr>
                                      <td>{{ $b->name }}</td>
                                      <td><span class="badge bg-light-info">{{ $b->logo }}</span></td>
                                      <td>
                                        <div class="d-flex gap-2 w-100 justify-content-end">
                                          <a href="{{ route("brands.edit" , $t)}}" class="btn btn-info">Update</a>
                                          @include('partials.deleteBtn', [  "url" =>  route('tags.destroy' , $t) ])
                                        </div>
                                      </td>
                                  </tr>
                                @endforeach
                              </tbody>

                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>logo</th>
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
