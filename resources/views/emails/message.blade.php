<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Le formulaire d'envoi du message</title>
	</head>
	<body>

		@if (session()->has('text'))
			<p>{{ session('text') }}</p>
		@endif

		<form url="{{ route('send.message') }}" method="POST" >
			<label for="message" >Message</label>
			{{ @csrf_field() }}
			<p>
				<textarea name="message" id="message" rows="4" placeholder="Message à envoyer ici" ></textarea>
				{{ $errors->first('message', ":message")}}
			</p>
			<button type="submit" >Envoyer</button>
		</form>

	</body>
</html>