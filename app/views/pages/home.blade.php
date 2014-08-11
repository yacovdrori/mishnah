@extends('index')
@section('content')
                        <div class = "container">               
                        	<div class = "jumbotron">
                                <center><h1>הפתרון המושלם לניהול לימוד משניות לזכר יקירכם</h1>
                                <p>מערכת מלאה לעזרה בחלוקת המשניות ללומדים, למסירת תזכורות ולהנצחת הנפטרים</p>
                                
                                	{{HTML::link('/users/register','הרשם')}}<br />
                                	הוסף את שם הניפטר<br />
                                	הזמן חברים ובני משפחה

                                </center>
                        	</div>
                        </div>

@stop
