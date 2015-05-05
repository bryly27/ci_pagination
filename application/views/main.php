<html>
<head>
	<title>Pagination</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
<script type="text/javascript" src='/assets/js/main.js'></script>
</head>
<body>	
	<div class='container'>
		<div class='row'>
			<div class='col-md-3'>
				<form>
					<label>Name: </label> <input id='name_search' type='text' name='search_field'>
				</form>
			</div>
		</div>

		<!-- partial gets loaded -->
		<div id='results'></div>
	</div>
</body>
</html>