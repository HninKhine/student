<form action="{{route('create')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Student Name">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Student Email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Login Password">
    </div>
    <button type="submit" class="btn btn-default">Create</button>
    <a href="{{route('admin_dashboard')}}"><button type="button" class="btn btn-default">Cancel</button></a>
</form>