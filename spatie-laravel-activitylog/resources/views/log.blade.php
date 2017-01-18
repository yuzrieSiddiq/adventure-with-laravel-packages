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
                            <p>{{ $activity->causer->name }} <br>
                                Action: {{ $activity->description }}  <br>
                                Title: {{ $activity->subject->title }} <br>
                                Content: {{ $activity->subject->content }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
