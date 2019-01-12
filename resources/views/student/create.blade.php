<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<form method="post" action="{{ route('students.store') }}">
			@csrf
			<div class="form-group">
				<label for="name">Name :</label>
				<input name="name" type="text" class="form-control" id="student_name" placeholder="You Name">
			</div>
			<div class="form-group">
				<label for="address">Example textarea</label>
				<textarea name="address" class="form-control" id="student_address" rows="3" placeholder="You address"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</body>
	</html>