@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>You are logged in!</p>
                    <p>{{ $user->name }} Role: {{ $role[0] }}</p>
                </div>
            </div>

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3>Generate Reports</h3>
                </div>
                <div class="panel-body">
                    <a class="btn btn-primary" href="{{ route('report.generatehelloworld') }}">Hello World</a>
                    <a class="btn btn-primary" href="{{ route('report.generateuserstable') }}">Users Table</a>
                    <a class="btn btn-primary" href="{{ route('report.generateuserschart') }}">Users Chart</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
