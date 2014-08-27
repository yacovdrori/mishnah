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
                	{{HTML::image('assets/candle.jpg', 'יזכור', array('class'=>'img-responsive img-rounded'))}}
                </div>
                <div class="col-md-4">
                	
            	{{--HTML::link('/users/register','הרשם')--}}
                <div id="carousel-1" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        @foreach(Niftar::take(10)->get() as $niftar)
                        <div class="item active">
                          <img src="/uploads/{{$niftar->image}}" alt="...">
                          <div class="carousel-caption">
                            {{$niftar->firstname}} {{$niftar->lastname}}
                          </div>
                        </div>
                        @endforeach
                        למד לעילוי נשמת
                      </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                      </a>
                    </div>
                	
                </div>		
			</div>
		</div> <!--/ .container -->
	</div><!--/ #headerwrap -->

@stop
