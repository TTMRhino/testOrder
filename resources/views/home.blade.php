@extends('layouts.app')

@section('title', 'Главная')

@section('content')
<div class="row">
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden></button>
            <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
        </div>
    @endif
</div>

<div class="row">


<div class="col-6">



    <table class="table">
        <thead class="thead-table">
            <tr>
                <th scope="col">Артикул</th>
                <th scope="col">Название</th>
                <th scope="col">Статус</th>
                <th scope="col">Атрибут</th>
                <th scope="col">Действие</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Products as $product)
            <tr>
               
                <td>{{ $product->article }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->status }}</td>
                <td>{{ $product->data }}</td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" >
                        
                        <a  class="btn btn-info" href = "{{ route('Products.edit', $product->id) }}"">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>

                        <form action="{{ route('Products.destroy', $product->id) }}" method="POST" onclick="return confirm('Confirm deletion!')">
                            @csrf 
                            @method('delete')

                            <button type="submit" button" class="btn btn-danger">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </form>
                       
                    </div>
                </td>
            </tr> 
            @endforeach
        </tbody>
    </table>
</div>
<div class="col-md-4">

</div>
<div class="col-2 ">
    <button type="button" class="btn btn-primary">Добавить</button>
</div>




 </div>

 <div class="row">
    <div class="col-12">
        {{ $Products->onEachSide(2)->links() }}
    </div>
</div>
@endsection