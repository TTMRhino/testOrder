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
                      <h3 class="card-title">Product: New</h3>
                    </div>
                  
                  
                    <form action="{{ route( 'Products.store')  }}" method="POST" >
                        @csrf              
                      
        
                      <div class="card-body">
                        <!-- name -->
                        <div class="form-group">
                          <label for="name">Name</label>                          
                          <input value="{{ old('name') }}" class="@error('name') is-invalid @enderror form-control" type="text"   name="name" id="name" placeholder="Enter name" required>
                          
                          @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>

                        <!-- article -->
                        <div class="form-group">
                            <label for="article">Article</label>
                            <input value="{{ old('article') }}" class="@error('article') is-invalid @enderror form-control" type="text"   name="article" id="article" placeholder="Enter Article" required>

                            @error('article')
                              <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
        
                        
                        <!-- status -->
                         <div class="form-group">
                            <label for="status">Status</label>

                            <select class="form-control" name="status"> 
                                                                                          
                                    <option selected value="available">Available </option>
                                    <option value="unavailable"> Unavailable </option>
                                
                            </select>
                        </div>

                        <!-- Data -->
                           
                        <div class="form-group">
                          @foreach($a_data as $key => $data)
                          <div class="form-group">

                            <label for="{{$key}}">{{ $key }}</label>
                            <input value="{{ ($key == "Size") ? old('Size') : old('Color') }}" type="text"  class="form-control" name="{{ $key }}" id="{{ $key }}" placeholder="Enter {{ $key }}" required>
                            
                          </div>
                          @endforeach
                        </div>

                       
                 
                      <div class="btn-group btn-group" role="group" >
                        <button type="submit" class="btn btn-success">create</button>
                        <a  class="btn  btn-secondary" href="{{ route('home') }}" >Return</a>
                      </div>
                      
                    </form>
                  </div>
            </div>
           
        
   

</div>

@endsection