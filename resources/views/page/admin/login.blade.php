<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	@if(session()->has('pesan'))
	<b>{{ session()->get('pesan') }}</b><br>
	@endif
<form method="post" action="{{ route('checkLogin') }}">
	@csrf
	<label for="username">username:</label>
	<input type="text" name="username" id="username">
	<br>
	<label for="pass">password</label>
	<input type="password" name="password" id="pass">
	<br>
	<button type="submit">Kirim</button>
</form>
</body>
</html>