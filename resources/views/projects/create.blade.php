<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<h1>Create a new Project</h1>
	

	<form method="POST" action="/projects">
		
		{{ csrf_field() }}
		<div>
			<input type="text" name="title" placeholder="Project title">
		</div>

		<div>
			<textarea name="description" placeholder="Project description"></textarea>
		</div>

		<div>
			<button type="submit">Create project</button>
		</div>

	</form>
</body>
</html>