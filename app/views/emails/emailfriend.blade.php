<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		{{dd($name)}}
		<h2>שלום {{$name}}</h2>

		<div>
			{{ $invitename}} הזמין אותך ללמוד משניות לעילוי נשמת {{$relationship}} שנפטר.
			להרשמה ובחירת מסכת, אנא לחץ על הקישור הבא.
			{{ HTML::link("admin/newuser/" . $nid, "לימוד לעילוי נשמת " . $nfirstname . " " . $nlastname . " בן " .
    	 $nfathersname . " ו" .$nmothersname) }}.
			
			
			תודה רבה
		</div>
	</body>
</html>
