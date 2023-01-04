<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>Contact</title>
		<link rel="stylesheet" href="{{ mix('css/app.css') }}">
	</head>
	<body>

		<div style="margin: 0 auto; padding: 20px; background: #fff;">
			<h3 style="text-align: center">{{ $data['last_name'] }} {{ $data['first_name'] }} désire vous
				contactez voici son message :</h3>
			<div style="font-size: larger; margin-bottom: 8%">{{ $data['message'] }}</div>
			<div style="margin-bottom: 1%">Voici son numéro de téléphone pour le contacter: {{ $data['phone'] }}</div>

			@if($data['email'] != null)
				<div>Voici son adresse email pour le contacter: {{ $data['email'] }}</div>
			@endif
		</div>

	</body>
</html>