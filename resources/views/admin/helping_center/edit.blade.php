@extends('layouts.app')
@section('content')
<div class="container-fluid py-4">
      <div class="row">
      <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                  <h6 class="text-white text-capitalize ps-3">Edit Helping Center</h6>
                  <a href="{{ route('admin.helping-centers.index') }}" class="btn btn-sm mb-0 me-3 bg-gradient-dark">Back</a>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <div class="card-body">
                  <form method="POST" action="{{ route('admin.helping-centers.update',$helping_center->id) }}">
                    @csrf
                    <div class="input-group input-group-outline mb-3 is-filled">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $helping_center->name }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Address</label>
                      <input type="text" name="address" id="address" class="form-control" value="{{ $helping_center->address }}">
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>  
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Phone</label>
                      <input type="text" name="phone" id="phone" class="form-control" value="{{ $helping_center->phone }}">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Description</label>
                      <input type="text" name="description" id="description" class="form-control" value="{{ $helping_center->description }}">
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-left">
                      <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg mt-4 mb-0">Update</button>
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('layouts.backend.footer')
    </div>
@endsection