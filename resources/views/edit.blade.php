@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')

<div class="row">

               
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden></button>
                        <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                    </div>
                @endif
            </div>
          
            <div class="card-body">
        
        
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Product: {{ $product->name  }}</h3>
                    </div>
                  
                  
                    <form action="{{ route( 'Products.update', $product->id)  }}" method="POST" >
                        @csrf              
                        @method('PUT')
        
                      <div class="card-body">
                        <!-- name -->
                        <div class="form-group">
                          <label for="name">Name</label>                          
                          <input class="@error('name') is-invalid @enderror form-control" type="text" value="{{ $product->name }}"  name="name" id="name" placeholder="Enter name" required>
                          
                          @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>

                        <!-- article -->
                        <div class="form-group">
                            <label for="article">Article</label>
                            
                            @role('admin')
                              <input class="@error('name') is-invalid @enderror form-control" type="text" value="{{ $product->article }}"  name="article" id="article" placeholder="Enter Article" required>
                            @else
                              <input disabled class="@error('name') is-invalid @enderror form-control" type="text"  value="{{ $product->article }}" >
                              <input  class="@error('name') is-invalid @enderror form-control" type="hidden" value="{{ $product->article }}"  name="article" id="article" placeholder="Enter Article" >
                            
                            @endrole

                            @error('article')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
        
                        
                        <!-- status -->
                         <div class="form-group">
                            <label for="status">Status</label>

                            <select class="form-control" name="status"> 
                                @if($product->status == 'available')                                                             
                                    <option selected value="available">Available </option>
                                    <option value="unavailable"> Unavailable </option>
                                @else
                                    <option selected value="unavailable"> Unavailable </option>
                                    <option value="available">Available </option>
                                @endif
                            </select>
                        </div>

                        <!-- Data -->
                           
                        <div class="form-group">
                          @foreach($a_data as $key => $data)
                          <div class="form-group">

                            <label for="{{$key}}">{{ $key }}</label>
                            <input type="text" value="{{ $data }}" class="form-control" name="{{ $key }}" id="{{ $key }}" placeholder="Enter {{ $key }}" required>
                            
                          </div>
                          @endforeach
                        </div>

                        <input type="hidden" value="{{ $product->id }}" name="id" id="id"/>
                 
                      <div class="btn-group btn-group" role="group" >
                        <button type="submit" class="btn btn-success">Save</button>
                        <a  class="btn  btn-secondary" href="{{ route('home') }}" >Return</a>
                      </div>
                      
                    </form>
                  </div>
            </div>
           
        
   

</div>

@endsection