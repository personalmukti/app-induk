@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Products</h2>
                </div>
                <div class="float-end">
                    @can('product-create')
                        <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                    @endcan
                </div>
            </div>
        </div>
        <br>


        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif


        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Name</th>
                <th>Details</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td align="center"><img src="/images/{{ $product->image }}" width="100px"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->detail }}</td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>
                            @can('product-edit')
                                <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                            @endcan


                            @csrf
                            @method('DELETE')
                            @can('product-delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            @endcan
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>


        {!! $products->links() !!}


        <br>
        <p class="text-center text-primary"><small>Developed under terms & servive of <a
                    href="{{ config('app.url') }}">{{ config('app.url') }}</a> </small></p>
    </div>
@endsection
