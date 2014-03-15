<!DOCTYPE html>
<html lang=”en”>
<head>
	<meta charset="UTF-8" />
	<link
	type="text/css"
	rel="stylesheet"
	href="css/bootstrap.min.css" />

	<link
	type="text/css"
	rel="stylesheet"
	href="css/layout.css" />
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<title>
		Tutorial
	</title>
</head>
<body>
	@include("header")
	<div class="container">        
		<div class="content">
			<div class="col-md-8 login-container">
				<h1>PageBuilder Login</h1>
				@yield("content")
			</div>
		</div>
	</div>
	@include("footer")
</body>
</html>