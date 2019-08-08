<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View All Post</title>
</head>
<body>

	<h2>
		<ul>
				@foreach($posts as $post)
					<li> {{$post->title}} : {{$post->body}}</li> 
				@endforeach
		</ul>
	</h2>

			



	
</body>
</html>