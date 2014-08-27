@extends('index')
@section('content')
 <script>
  $(function() {
    $( "#death_date" ).datepicker();
    $( "#birthdate" ).datepicker();
  });
  </script>


<script type="text/javascript">
  jQuery(document).ready(function($){
      $('#death_date').input(function(e) {  
      // e=event
        e.preventDefault();
        alert('change');
        var BASE = "{{URL::to('/');}}";
        // attempt to GET the new content
        $.get(BASE+'s/d2j/' + this.value, function(data) {
            alert('1');
            $('#hebdd').html(data);
        })
        });
 
    // $('#ddate').on('submit', function(){ 
                 
    //    // ajax post method to pass form data to the 

    //     $.post(
    //         $(this).prop('action'),        {
    //             "_token": $( this ).find( 'input[name=_token]' ).val(),
    //             "date": $( '#death_date' ).val()
    //         },
    //         function(data){
    //             //response after the process. 
    //         },
    //         'json'
    //     ); 
       
    //     return false;
    // }); 
});
  </script>
                        <div class = "container">               
                        	<div class = "jumbotron">
                                	<h2>שלום {{Auth::user()->firstname}} על מנת להתחיל אנא מלא פרטי  להרשמה עליך ועל הנפטר</h2>
                                	{{ Form::open(array('url' => 'admin/newuser','class'=>'form-signup','files' => true)) }}

		<!-- if there are login errors, show them here -->
 	    <h2 class="form-group">פרטי הנפטר	</h2>
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-xs-8 col-md-offset-6">
    {{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'שם הנפטר')) }}<br />
    {{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'שם משפחה של הנפטר')) }}<br />
    {{ Form::text('death_date', null, array('class'=>'form-control', 'placeholder'=>'תאריך פטירה', 'id'=>'death_date')) }}
    <div id='hebdd'></div><br />
    {{ Form::textarea('description', null, array('class'=>'form-control', 'placeholder'=>'תיאור')) }}<br />
	{{ Form::text('birthdate', null, array('class'=>'form-control', 'placeholder'=>'תאריך לידה', 'id'=>'birthdate')) }}<br />
    {{ Form::text('fathersname', null, array('class'=>'form-control', 'placeholder'=>'שם האב')) }}<br />
    {{ Form::text('mothersname', null, array('class'=>'form-control', 'placeholder'=>'שם האם')) }}<br />
    {{ Form::text('city', null, array('class'=>'form-control', 'placeholder'=>'עיר מגוריו')) }}<br />
    {{ Form::text('state', null, array('class'=>'form-control', 'placeholder'=>'ארץ')) }}<br />
    {{ Form::file('file', null, array('class'=>'form-control', 'placeholder'=>'תמונה')) }}הוסף תמונה<br />
    <p />
    </div>
    </div>
</div>
    {{ Form::submit('המשך->', array('class'=>'btn btn-large btn-primary '))}}
			
	{{ Form::close() }}
    {{ Form::open(array('url' => 's/date2jewish','id'=>'ddate'))}}
    {{ Form::hidden('date')}}
    {{ Form::close()}}
                        	</div>
                        </div>
                    </div>

@stop
