@extends('index')
@section('content')
                        <div class = "container">               
                        	<div class = "jumbotron">
                                <center><h1>הפתרון המושלם לניהול לימוד משניות לזכר יקירכם</h1>
                                <p>מערכת מלאה לעזרה בחלוקת המשניות ללומדים, למסירת תזכורות ולהנצחת הנפטרים</p>
                                <ol>
                                	<li>{{HTML::link('/users/register','הרשם')}}</li>
                                	<li>הוסף את שם הניפטר</li>
                                	<li>הזמן חברים ובני משפחה</li>

                                </center>
                        	</div>
                        </div>

@stop
