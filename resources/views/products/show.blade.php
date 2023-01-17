@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show Product</h2>
                </div>
                <div class="float-end">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $product->name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Details:</strong>
                            {{ $product->detail }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Image:</strong>
                            <img src="/images/{{ $product->image }}" width="500px">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <p class="text-center text-primary"><small>Developed under terms & servive of <a
                    href="{{ config('app.url') }}">{{ config('app.url') }}</a> </small></p>
    </div>
@endsection
