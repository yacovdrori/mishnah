<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>ברוכים הבאים למערכת משניות</h2>

		<div>
			להשלמת ההרשמה אנא אשר את כתובת הדוא"ל על ידי לחיצה על הקישור הבא"
			{{ URL::to("users/confirm{$user->confirmation_code}") }}.
			
			תודה רבה
		</div>
	</body>
</html>
