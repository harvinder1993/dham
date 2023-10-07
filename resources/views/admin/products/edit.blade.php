@extends('layouts.app')
@section('content')
<div class="container-fluid py-4">
      <div class="row">
      <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                  <h6 class="text-white text-capitalize ps-3">Edit Product</h6>
                  <a href="{{ route('admin.products.index') }}" class="btn btn-sm mb-0 me-3 bg-gradient-dark">Back</a>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <div class="card-body">
                  <form method="POST" action="{{ route('admin.products.update',$product->id) }}">
                    @csrf
                    <div class="input-group input-group-outline mb-3 is-filled">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Description</label>
                      <input type="text" name="description" id="description" class="form-control" value="{{ $product->description }}">
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>  
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Price</label>
                      <input type="text" name="price" id="price" class="form-control" value="{{ $product->price }}">
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Product SKU</label>
                      <input type="text" name="sku" id="sku" class="form-control" value="{{ $product->sku }}">
                        @error('sku')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Quantity</label>
                      <input type="text" name="quantity_in_stock" id="quantity_in_stock" class="form-control" value="{{ $product->quantity_in_stock }}">
                        @error('quantity_in_stock')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline mb-3 is-filled">
                      <label class="form-label">Manufacturer</label>
                      <input type="text" name="manufacturer" id="manufacturer" class="form-control" value="{{ $product->manufacturer }}">
                        @error('manufacturer')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline mb-3 is-focused">
                      <label class="form-label">Manufacturer Date</label>
                      <input type="date" name="manufacture_date" id="manufacture_date" class="form-control" value="{{ $product->manufacture_date }}">
                        @error('manufacture_date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Published</label>
                      <input type="text" name="is_published" id="is_published" class="form-control" value="{{ $product->is_published }}">
                        @error('is_published')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group input-group-outline mb-3 is-focused">
                        <label class="form-label">Organization</label>
                        <select class="form-control select2"name="organization_id">
                            @foreach($organizations as $organization)
                                <option value="{{$organization->id}}" @if($organization->id == $product->organization_id) selected @endif>{{$organization->name}}</option>
                            @endforeach 
                        </select>
                        @error('contact_person')
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