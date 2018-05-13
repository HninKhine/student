@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>
        $(function() {
        
            // run on change for the selectbox
            $( "#roll_call" ).change(function() {  
                updateDurationDivs();
            });
            
            // handle the updating of the duration divs
            function updateDurationDivs() {
                // hide all form-duration-divs
                $('.form-duration-div').hide();
                  
                var divKey = $( "#roll_call option:selected" ).val();                
                $('#divFrm'+divKey).show();
            }        
        
            // run at load, for the currently selected div to show up
            updateDurationDivs();
        
        });
        </script>
@section('content')
	{{ Form::model($att, [
		'action' => ["AttendenceController@update", $att->id], 
		'method' => "PUT"
	]) }}

	<input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
    <div class="container">
    	<div class="col-md-6 col-md-offset-3">
	    	<div class="form-group">
				<label>Name</label><br>
				{{ Form::text('name', Auth::user()->name,['disabled'], ['class' => "form-control"]) }}
			</div>
			<div class="form-group">
				<label>Attendence</label><br>
					<select class="form-control" id="roll_call" name="roll_call">
					    <option value="Presence" @if($att->roll_call == 'Presence') selected = {{ "selected" }} @endif>Presence</option>
					    <option value="Absence" @if($att->roll_call == 'Absence') selected = {{ "selected" }} @endif>Absence</option>        
					</select>
			</div>
			<div id="divFrmAbsence" class="form-group form-duration-div" style="display:none">
				<label>Reason</label>
				 <textarea class="form-control" placeholder="Reason" name="ab_reason" >{{ $att->ab_reason }} </textarea>
			</div>
			<button class="btn btn-primary">Submit</button>
			<a href="{{route('user_dashboard')}}" class="btn btn-info">Back</a>
	</div>
</div>
	{{ Form::close() }}
@endsection