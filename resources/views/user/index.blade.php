@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>
                <div class="panel-body">
                    <button type="button" data-toggle="modal" data-target="#attendance" class="btn btn-success">Attendance</button>
                    <button type="button" data-toggle="modal" data-target="#absence" class="btn btn-danger">Absence</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-success fade" id="attendance" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Attendance Request</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <center>
                <h4>{{Auth::user()->name}} Attendance at <?php
                    echo date("h:i:sa");
                    ?></h4>
            </center>
        </div>
        <form action="{{route('attendance')}}" method="post">
                {{ csrf_field() }}
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>

<div class="modal modal-danger fade" id="absence" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Absence Request</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('absence')}}" method="post">
                {{ csrf_field() }}
        <div class="modal-body">
                <center>
                    <h4>{{Auth::user()->name}} Absence Today : Because_</h4>
                    <div class="form-group">
                        <textarea name="reason" class="form-control" id="reason" rows="5"></textarea>
                    </div>
                </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Send</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection
