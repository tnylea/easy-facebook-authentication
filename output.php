<html>
	<head>
		<title>Easy Facebook Authentication Output</title>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		 <script type="text/javascript">
		 	
		 	var str = window.location.hash.substring(1);
		 	var access_token = str.substr(str.indexOf('=')+1, str.length, str);
		 	var json_url = 'https://graph.facebook.com/me?access_token=' + access_token;
		 	
		 	$(document).ready(function(){
		 	
			 	$.getJSON(json_url, function(data) {
			 		$('.data').html(JSON.stringify(data));
			 	});
			 });
		 	
		 </script>
	</head>
	<body>
	
		<div class="data"></div>
		
	</body>
</html>
