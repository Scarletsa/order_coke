<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	$( function() {
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
	} );
	</script>
</head>
<body>
<form action='upload_process.php' method='POST' enctype='multipart/form-data'>
Consolidate Inventory Usage Start date for this upload:<input type='text' name='startDate' id='datepicker'><br>
<input type='file' name='userFile'><br>
<input type='submit' name='upload_btn' value='upload'>
</form>
</body>
</html>
