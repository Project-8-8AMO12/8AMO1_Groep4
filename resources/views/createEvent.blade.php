@extends('nav.nav')

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

@section('content')
    <div class="container">
        <br/>
        <form method="post" action="{{url('admin/event/add')}}">
            @csrf
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Title">Title:</label>
                    <input type="text" class="form-control" name="title">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <strong> Begin Datum : </strong>
                    <input class="date form-control"  type="text" id="startdate" name="startdate">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <strong> Eind Datum : </strong>
                    <input class="date form-control"  type="text" id="enddate" name="enddate">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-success">BezigHeid toevoegen</button>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        $('#startdate').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
        });
        $('#enddate').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
        });
    </script>
@endsection
