



@extends('layouts.master')
@section('css')

@section('title')
    empty
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">Clients</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">Clients</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
@if (session('status'))
    <p id="alert-wishlist" class="alert alert-success"> {{ session('status') }}</p>
@endif
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mb-3">
                <a class="btn btn-success" href="{{ route('client.create') }}">Create New client</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Num.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Company</th>
                <th></th>
            </tr>
        </thead>
        <?php $counter = 1; ?>
        @foreach ($clients as $client)
            <tr>
                <td>{{$counter}}</td>
                <td>{{ $client->name }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->company }}</td>
                <td>
                    <a href="{{ url('client/edit', ['id' => $client->id]) }}" >
                        <i class="ti-pencil"></i>
                    </a>
                    <a href="{{ url('client/delete', ['id' => $client->id]) }}" >
                        <i class="ti-trash"></i>
                    </a>


                </td>
            </tr>
            <?php $counter++; ?>
        @endforeach

    </table>


@endsection
@section('js')

@endsection
