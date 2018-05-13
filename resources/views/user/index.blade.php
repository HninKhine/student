@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>

                <div class="panel-body">
                    <a href="{{ action('AttendenceController@create') }}"></a><button type="button" class="btn btn-success">Fill Attendence</button></a>
                    <table class="table">
                            <thead>
                              <tr>
                                 <th>Date</th>
                                 <th>Rollcall</th>
                                 <th>Reason</th>
                                 <th></th>
                              </tr>
                            </thead>
                            <tbody>
                           @foreach($atts as $att)
                            <tr>
                                <td>{{ $att->created_at }}</td>
                                <td>{{ $att->roll_call }}</td>
                                <td>{{ $att->ab_reason }}</td>
                                <td><a href="{{ action('AttendenceController@edit',$att->id )}}" class="btn btn-primary">Edit</a></td>
                                <td>
                                {{ Form::open(array('url' => 'user/attendences/' . $att->id, 'class' => 'pull-right')) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                                {{ Form::close() }}
                                </td> 
                            <tr>
                        @endforeach
                            </tbody>
                          </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


 