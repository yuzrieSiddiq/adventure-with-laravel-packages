@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a class="btn btn-success" href="{{ route('post.index') }}">VIEW POSTS</a>
            <a class="btn btn-info" href="{{ URL::to('/log') }}">LOG</a>
            <hr>
            <div class="panel panel-default">
                <div class="panel-heading">Log</div>

                <div class="panel-body">
                    <div class="well">
                        @foreach ($activities as $activity)
                            @if ($activity->description === 'updated')
                                <p>[{{ $activity->description }}] <br>
                                    User: {{ $activity->causer->name }} {{ $activity->description }} title from {{ $activity->changes['old']['title'] }} to {{ $activity->changes['attributes']['title'] }} <br>
                                    updated content from {{ $activity->changes['old']['content'] }} to {{ $activity->changes['attributes']['content'] }} <br>
                                </p>
                            @else
                                <p>[{{ $activity->description }}] <br>
                                    User {{ $activity->causer->name }} {{ $activity->description }} Post: {{ $activity->changes['attributes']['title'] }} <br>
                                    Content: {{ $activity->changes['attributes']['content'] }} <br>
                                </p>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
