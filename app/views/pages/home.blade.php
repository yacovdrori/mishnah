@extends('index')
@section('content')
	<section id="home" name="home"></section>
	<div id="headerwrap">
	    <div class="container">
	    	<div class="row centered">
	    		<div class="col-lg-12">
                    <center><h1>הפתרון המושלם לניהול לימוד משניות לזכר יקירכם</h1>
                    <p>מערכת מלאה לעזרה בחלוקת המשניות ללומדים, למסירת תזכורות ולהנצחת הנפטרים</p>
                </div>
                <div class="col-lg-8">
                	{{HTML::image('images/candle.jpg', 'יזכור', array('class'=>'img-responsive'))}}
                </div>
                <div class="col-lg-4">
                                	{{HTML::link('/users/register','הרשם')}}<br />
                                	הוסף את שם הניפטר<br />
                                	הזמן חברים ובני משפחה
                	
                </div>		

                                </center>
                        </div>

@stop
