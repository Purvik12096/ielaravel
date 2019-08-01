<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View All Post</title>
</head>
<body>


	@foreach ($posts as $post)
    <p> ->{{ $post }} <br> </p>
	@endforeach
	
</body>
</html>