@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                        <form action="{{route('update', $record->id)}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{$record->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" value="{{$record->email}}">
                                </div>
                                <button type="submit" class="btn btn-default">Update</button>
                                <a href="{{route('admin_dashboard')}}"><button type="button" class="btn btn-default">Cancel</button></a>
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
