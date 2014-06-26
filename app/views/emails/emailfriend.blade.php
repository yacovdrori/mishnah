<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>

		<h2>שלום {{$name}}</h2>

		<div>
			{{ $user->firstname . ' ' . $user->lastname}} הזמין אותך ללמוד משניות לעילוי נשמת הנפטר.
			להרשמה ובחירת מסכת, אנא לחץ על הקישור הבא.
			{{ HTML::link("admin/newuser/" . $nid, "לימוד לעילוי נשמת " . $niftar->firstname . " " . $niftar->lastname . " בן " .
    	 $niftar->fathersname . " ו" .$niftar->mothersname) }}.
			
			
			תודה רבה
		</div>
	</body>
</html>
