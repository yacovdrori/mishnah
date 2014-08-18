@extends('index')
@section('content')
	<section id="home" name="home"></section>
	<div id="headerwrap">
	    <div class="container">
	    	<div class="row centered">
	    		<div class="col-md-12">
                    <center><h1>כל משנה - נשמה</h1>
                    <p>לימוד משניות להנצחת יקיריכם </p>
                </div>
            </div>
            <div class="row centered">
                <div class="col-md-8">
                	{{HTML::image('assets/candle.jpg', 'יזכור', array('class'=>'img-responsive'))}}
                </div>
                <div class="col-md-4">
                	
                                	{{HTML::link('/users/register','הרשם')}}
                	
                </div>		
			</div>
		</div> <!--/ .container -->
	</div><!--/ #headerwrap -->

@stop
