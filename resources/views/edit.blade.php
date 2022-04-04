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
                          <input type="text" value="{{ $product->name }}" class="form-control" name="name" id="name" placeholder="Enter name" required>
                        </div>

                        <!-- article -->
                        <div class="form-group">
                            <label for="article">Article</label>
                            <input type="text" value="{{ $product->article }}" class="form-control" name="article" id="article" placeholder="Enter Article" required>
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
                            <input type="text" value="{{ $a_data[$key] }}" class="form-control" name="{{ $key }}" id="{{ $key }}" placeholder="Enter {{ $key }}" required>
                            
                          </div>
                          @endforeach
                        </div>
                 
                      <div class="btn-group btn-group" role="group" >
                        <button type="submit" class="btn btn-success">Save</button>
                        <a  class="btn  btn-secondary" href="{{ URL::previous() }}" >Return</a>
                      </div>
                      
                    </form>
                  </div>
            </div>
           
        
   

</div>

@endsection