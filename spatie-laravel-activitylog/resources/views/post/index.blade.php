@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-success" href="{{ route('post.create') }}">NEW POST</a>
    <a class="btn btn-info" href="{{ URL::to('/log') }}">LOG</a>
    <hr>
    <div class="row">
        @if(count($posts) > 0)
            @foreach ($posts as $post)
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p>{{ $post->title }}
                            <a class="pull-right" href="{{ route('post.edit', $post->id) }}">EDIT</a>
                            <span class="pull-right clickable delete" data-url="{{ route('post.destroy', $post->id) }}"> X </span>
                        </p>
                    </div>

                    <div class="panel-body">
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3>No Posts Yet</h3>
                </div>
            </div>
        @endif
    </div> {{-- end row --}}
</div> {{-- end container --}}
@endsection

@section('extra_js')
<script>
(function() {
    // Get CSRF token
    let getToken = function() {
        return $('meta[name=csrf-token]').attr('content')
    }

    $('.delete').click(function() {
        let url = $(this).data('url')
        let data = { '_token': getToken() }
        $.ajax({
            'url': url,
            'method': 'DELETE',
            'data': data,
        }).done(function() {
            window.location.reload()
        })
    })
}) ()
</script>
@endsection
