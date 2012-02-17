<?php
	
	$app_id = '210425805668708';
	$url = 'http://www.tonylea.com';
	
?>

<html>
	<head>
		<title>Easy Facebook Authentication</title>
	</head>
	<body>
		
		<a href="https://www.facebook.com/dialog/oauth?client_id=<?= $app_id; ?>&redirect_uri=<?= $url; ?>/output.php&response_type=token&scope=email,user_likes">authenticate with facebook</a>
		
	</body>
</html>
