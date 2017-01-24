@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            UPDATE POST: {{ $post->title }}
        </div>
        <div class="panel-body">
            <div class="form-horizontal">
                <div class="form-group">
                    {{-- Title --}}
                    <label class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="title" value="{{ $post->title }}">
                    </div>
                </div>
                <div class="form-group">
                    {{-- Title --}}
                    <label class="col-sm-2 control-label">Content</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="content" value="{{ $post->content }}">
                    </div>
                </div>
                <div class="form-group">
                    {{-- Submit Button --}}
                    <div class="col-sm-offset-2">
                        <button class="btn btn-success submit" data-homeredirect="{{ route('post.index') }}"
                            data-url="{{ route('post.update', $post->id) }}">UPDATE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra_js')
<script>
(function() {
    // Get CSRF token
    let getToken = function() {
        return $('meta[name=csrf-token]').attr('content')
    }

    $('.submit').click(function() {
        let home = $(this).data('homeredirect')
        let url = $(this).data('url')
        let data = {
            '_token': getToken(),
            'title': $('#title').val(),
            'content': $('#content').val(),
        }
        $.ajax({
            'url': url,
            'method': 'PUT',
            'data': data
        }).done(function(data) {
            window.location.replace(home)
        })
    })
}) ()
</script>
@endsection
