@extends('layouts.app')
@section('content')
<div class="container-fluid py-4">
      <div class="row">
      <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                  <h6 class="text-white text-capitalize ps-3">Helping Center List</h6>
                  <a href="{{ route('admin.helping-centers.create') }}" class="btn btn-sm mb-0 me-3 bg-gradient-dark">Add Helping Center</a>
              </div>
            </div>  
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($helping_centers as $helping_center)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-2">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$helping_center->name}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-2">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$helping_center->address}}</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <div class="d-flex px-2 py-2">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$helping_center->phone}}</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex px-2 py-2">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$helping_center->description}}</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                      <form action="{{ route('admin.helping-centers.destroy',$helping_center->id) }}" method="POST">
                        <a class="text-secondary font-weight-bold text-xs" href="{{ route('admin.helping-centers.edit',$helping_center->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-secondary font-weight-bold text-xs"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('layouts.backend.footer')
    </div>
@endsection