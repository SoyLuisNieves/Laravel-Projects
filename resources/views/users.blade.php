<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List of users - CubeSkills</title>
</head>
<body>
	<h1>{{ $title }}</h1>
	@if (!empty($users))
		<ul>
			@foreach ($users as $user)
				<li>{{ $user }}</li>
			@endforeach
		</ul>
	@else
		<p>List of users empty</p>
	@endif
</body>
</html>