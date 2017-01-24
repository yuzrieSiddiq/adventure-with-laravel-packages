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
                            <button class="col-md-3 pull-right btn btn-small btn-info" id="process-xlsx" disabled
                                data-toggle="modal" data-target="#processXLSX">PROCESS</button>
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
                            <button class="col-md-3 pull-right btn btn-small btn-info" id="process-xls" disabled
                                data-toggle="modal" data-target="#processXLS">PROCESS</button>
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
                            <button class="col-md-3 pull-right btn btn-small btn-info" id="process-csv" disabled
                                data-toggle="modal" data-target="#processCSV">PROCESS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Data Processing -->
    <div class="modal fade" id="processXLSX" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Process Timetable XLSX</h3>
                </div>

                <form class="form" method="POST">
                    <div class="modal-body">
                        <table class="table table-striped attendance_table">
                            <thead>
                                <th>Student ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Nationality</th>
                            </thead>
                            <!-- template row to be populated based on the input from the file -->
                            <tr class="tr_template hidden">
                                <td class="studentid">Student ID</td>
                                <td class="firstname">First Name</td>
                                <td class="lastname">Last Name</td>
                                <td class="nationality">Nationality</td>
                            </tr>
                        </table>
                    </div> <!-- end modal-body -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success pull-right" id="uploadXLSX"
                            data-method="POST" data-url="{{ route('timetable.xlsx') }}">
                            Upload
                        </button>
                    </div>
                </form>

            </div> <!-- end. modal-content-->
        </div> <!-- end .modal-dialog -->
    </div> <!-- end .modal fade -->
    {{-- end #processXLSX --}}

    <!-- Modal: Data Processing -->
    <div class="modal fade" id="processXLS" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Process Timetable XLS</h3>
                </div>

                <form class="form" method="POST">
                    <div class="modal-body">
                        <table class="table table-striped attendance_table">
                            <thead>
                                <th>Student ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Nationality</th>
                            </thead>
                            <!-- template row to be populated based on the input from the file -->
                            <tr class="tr_template hidden">
                                <td class="studentid">Student ID</td>
                                <td class="firstname">First Name</td>
                                <td class="lastname">Last Name</td>
                                <td class="nationality">Nationality</td>
                            </tr>
                        </table>
                    </div> <!-- end modal-body -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success pull-right" id="uploadXLS"
                            data-method="POST" data-url="{{ route('timetable.xls') }}">
                            Upload
                        </button>
                    </div>
                </form>

            </div> <!-- end. modal-content-->
        </div> <!-- end .modal-dialog -->
    </div> <!-- end .modal fade -->
    {{-- end #processXLSX --}}

    <!-- Modal: Data Processing -->
    <div class="modal fade" id="processCSV" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Process Timetable CSV</h3>
                </div>

                <form class="form" method="POST">
                    <div class="modal-body">
                        <table class="table table-striped attendance_table">
                            <thead>
                                <th>Student ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Nationality</th>
                            </thead>
                            <!-- template row to be populated based on the input from the file -->
                            <tr class="tr_template hidden">
                                <td class="studentid">Student ID</td>
                                <td class="firstname">First Name</td>
                                <td class="lastname">Last Name</td>
                                <td class="nationality">Nationality</td>
                            </tr>
                        </table>
                    </div> <!-- end modal-body -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success pull-right" id="uploadCSV"
                            data-method="POST" data-url="{{ route('timetable.csv') }}">
                            Upload
                        </button>
                    </div>
                </form>

            </div> <!-- end. modal-content-->
        </div> <!-- end .modal-dialog -->
    </div> <!-- end .modal fade -->
    {{-- end #processXLSX --}}
</div> {{-- .container --}}
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
