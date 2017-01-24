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

            {{-- XLSX --}}
            <div class="panel panel-info">
                <div class="panel-heading">XLSX</div>
                <div class="panel-body">
                    <div class="upload" action="{{ route('timetable.xlsx') }}" data-method="POST" data-enctype="multipart/form-data">
                        {{-- File Upload --}}
                        <div class="form-group">
                            <input class="col-md-9" id="xlsx" type="file">
                        </div>

                        {{-- Process Button --}}
                        <div class="form-group">
                            <button class="col-md-3 pull-right btn btn-small btn-info" id="process-xlsx" disabled>PROCESS</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- XLS --}}
            <div class="panel panel-info">
                <div class="panel-heading">XLS</div>
                <div class="panel-body">
                    <div class="upload" action="{{ route('timetable.xls') }}" data-method="POST" data-enctype="multipart/form-data">
                        {{-- File Upload --}}
                        <div class="form-group">
                            <input class="col-md-9" id="xls" type="file">
                        </div>

                        {{-- Process Button --}}
                        <div class="form-group">
                            <button class="col-md-3 pull-right btn btn-small btn-info" id="process-xls" disabled>PROCESS</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- CSV --}}
            <div class="panel panel-info">
                <div class="panel-heading">CSV</div>
                <div class="panel-body">
                    <div class="upload" action="{{ route('timetable.csv') }}" data-method="POST" data-enctype="multipart/form-data">
                        {{-- File Upload --}}
                        <div class="form-group">
                            <input class="col-md-9" id="csv" type="file">
                        </div>

                        {{-- Process Button --}}
                        <div class="form-group">
                            <button class="col-md-3 pull-right btn btn-small btn-info" id="process-csv" disabled>PROCESS</button>
                        </div>
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
    let input_xlsx = $('#xlsx').val()
    let input_xls  = $('#xls').val()
    let input_csv  = $('#csv').val()

    $('#xlsx').change(function() {
        $('#process-xlsx').attr('disabled', false)

        $('#process-xlsx').click(function () {
            console.log($('#xlsx').val())
        })
    })

    $('#xls').change(function() {
        $('#process-xls').attr('disabled', false)

        $('#process-xls').click(function () {
            console.log($('#xls').val())
        })
    })

    $('#csv').change(function() {
        $('#process-csv').attr('disabled', false)

        $('#process-csv').click(function () {
            console.log($('#csv').val())
        })
    })
}) ()
</script>
@endsection
