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

                    <button class="btn btn-primary send" data-url="{{ route('email.send') }}" data-method="POST">SEND MAIL</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra_js')
<script>
(function() {

    let getToken = function() {
        return $('meta[name="csrf-token"]').attr('content')
    }

    $('.send').click(function() {
        let url = $(this).data('url')
        let method = $(this).data('method')
        let data = {
            '_token' : getToken(),
            'title'  : 'test title',
            'content': 'test content'
        }

        $.ajax({
            'url': url,
            'method': method,
            'data': data
        });
    })
}) ()
</script>
@endsection
