<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Amazon Enquete Exploringinfr</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="favicon.ico">
<!-- Stylesheets -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/style.css">

<script>
        function ChangeImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#global').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        function ChangeImagepop(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#globalimgpopular').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</head>
<body>
<div class="top-header">
	<span><a href="#"><img src="../images/amazon_logo.png" class="img-responsive"></a></span>
	<span class="flag-img"><img src="../images/flag.png" class="img-responsive"></span>
    <!-- <p> -->
	<!-- <a href="">Today's Deals |</a> -->
	<!-- <a href="">Gift Cards |</a> -->
	<!-- <a href="">Sell |</a> -->
	<!-- <a href="">Help</a> -->
	<!-- </p> -->
</div>	