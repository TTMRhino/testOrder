@extends('layouts.app')

@section('title', 'Главная')

@section('content')

<div class="row">


<div class="col-6">



    <table class="table">
        <thead class="thead-table">
            <tr>
                <th scope="col">Артикул</th>
                <th scope="col">Название</th>
                <th scope="col">Статус</th>
                <th scope="col">Атребут</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Products as $product)
            <tr>
               
                <td>{{ $product->article }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->status }}</td>
                <td>{{ $product->data }}</td>
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