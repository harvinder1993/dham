@extends('layouts.app')
@section('content')
<div class="container-fluid py-4">
      <div class="row">
      <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                  <h6 class="text-white text-capitalize ps-3">Edit Organization</h6>
                  <a href="{{ route('admin.organization.index') }}" class="btn btn-sm mb-0 me-3 bg-gradient-dark">Back</a>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <div class="card-body">
                  <form method="POST" action="{{ route('admin.organization.update',$organization->id) }}">
                    @csrf
                    <div class="input-group input-group-outline mb-3 is-filled">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $organization->name }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Email</label>
                      <input type="text" name="email" id="email" class="form-control" value="{{ $organization->email }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>  
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Phone</label>
                      <input type="text" name="phone" id="phone" class="form-control" value="{{ $organization->phone }}">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Address</label>
                      <input type="text" name="address" id="address" class="form-control" value="{{ $organization->phone }}">
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Established</label>
                      <input type="text" name="estd" id="estd" class="form-control" value="{{ $organization->estd }}">
                        @error('estd')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Conatct Person</label>
                      <input type="text" name="contact_person" id="contact_person" class="form-control" value="{{ $organization->contact_person }}">
                        @error('contact_person')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline mb-3 is-filled">
                    <label class="form-label">Helping Center</label>
                        <select class="form-control" id="helping_center" name="helping_center">
                          @foreach($helping_centers as $helping_center)
                            <option value="{{ $helping_center->id }}" {{ ($organization->helping_center_id == $helping_center->id) ? 'selected' : '' }}>{{ $helping_center->name }}</option>
                          @endforeach 
                        </select>
                        @error('helping_center')
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