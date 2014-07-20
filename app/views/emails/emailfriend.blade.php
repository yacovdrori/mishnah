<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>

		<h2>שלום {{$name}}</h2>

		<div>
			{{ $invitename }} הזמין אותך ללמוד משניות לעילוי נשמת הנפטר.
			להרשמה ובחירת מסכת, אנא לחץ על הקישור הבא.
			{{HTML::link("admin/newlerner/" . $id,'הצטרפות ללימוד')}}
			
			תודה רבה
		</div>
	</body>
</html>
