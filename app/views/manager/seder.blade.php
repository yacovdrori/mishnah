@extends('index')
@section('content')
    <!-- initialize checkboxTree plugin -->
                    <script type="text/javascript">
                    //<!--
                      $(document).ready(function() {
                        $('.selector').checkboxTree({
                          /* specify here your options */
                        });
                      });
                    //-->
                    </script>
<div class=" container">
<div class="jumbotron">
	{{ Form::open(array('url' => 'manager/seder','class'=>'form-signup')) }}

		<!-- if there are login errors, show them here -->
 	    <h2 class="form-signup-heading">ניהול סדרים</h2>
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <ul>
        @foreach($seders->all() as $seder)
            <li>
                {{$seder->name}}({{$seder->size}})
            </li>
        @endforeach
    </ul>
    
 
    {{ Form::text('name', null, array('class'=>'input-block-level', 'placeholder'=>'שם הסדר')) }}<br />
    {{ Form::text('size', null, array('class'=>'input-block-level', 'placeholder'=>'מספר מסכתות')) }}<br />

    {{ Form::submit('הוסף', array('class'=>'btn btn-large btn-primary '))}}
			
	{{ Form::close() }}

    {{ Form::open(array('url' => 'manager/masechet','class'=>'form-signup')) }}
            <h2 class="form-signup-heading">הוסף מסכת</h2>
    {{ Form::text('name', null, array('class'=>'input-block-level', 'placeholder'=>'שם המסכת')) }}<br />
    {{ Form::text('size', null, array('class'=>'input-block-level', 'placeholder'=>'מספר פרקים')) }}<br />
    {{ Form::select('seder',$seder_op, array('class'=>'input-block-level', 'placeholder'=>'סדר')) }}<br />
    {{ Form::submit('הוסף', array('class'=>'btn btn-large btn-primary '))}}

    {{ Form::close() }}

    @foreach($masechets as $masechet)
        <li>
            {{$masechet->seder->name}} {{HTML::link('manager/editmasechet/' . $masechet->id, $masechet->name)}}({{$masechet->size}})
            {{HTML::link("manager/delmasechet/" . $masechet->id ,'(מחק)')}}
        </li>
    @endforeach

</div>
</div>
@stop