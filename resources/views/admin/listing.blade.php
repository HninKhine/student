@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    <a href="{{url('admin/student/create')}}"><button type="button" class="btn btn-success">Add Student Account</button></a>
                    <a href="{{url('admin/studentlist')}}"><button type="button" class="btn btn-warning">Student List</button></a>
                    <table class="table">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($record as $row)
                              <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>
                                    <a href="{{url('admin/student/edit/'.$row->id)}}"><button type="button" class="btn btn-sm btn-info">Edit</button></a>
                                    <a href="{{url('admin/student/delete/'.$row->id)}}"><button type="button" class="btn btn-sm btn-danger">Delete</button></a>
                                </td>
                              </tr>
                            @endforeach
                            </tbody>
                          </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
