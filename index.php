<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title></title>
</head>

<body>
	<script type="text/javascript" src="http://j.maxmind.com/app/geoip.js"></script>
	<script type="text/javascript">

		var country = geoip_country_code();

		if (country  == "DK") {
			window.location = "/dk/"
		}

		else {
			window.location = "/en/"
		}

	</script>
</body>
</html>