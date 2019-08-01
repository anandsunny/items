


<!DOCTYPE html>
<html>
<head>
    <title>demo</title>

<div id="localtion"></div>
<!-- stylesheet -->
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /> -->
<!-- <link rel="stylesheet" type="text/css" href="css/style.css" /> -->
<style type="text/css">
	.data{
		height: 300px;
		border: 1px solid;
	}
</style>
</head>
<body>
<div id="result">
<p>data</p>
</div>



<!-- javaScript -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function (argument) {
	var flag = 0;

	$.ajax({
		type: "GET",
		url: 'myphp.php',
		data:{
			'offset': 0,
			'limit': 3
		},
		success: function (data) {
			$('#result').append(data);
			flag += 3
		}
	});

	$(window).scroll(function (argument) {
		if ($(window).scrollTop() >= $(document).height() - $(window).height()) {
			$.ajax({
				type: "GET",
				url: 'myphp.php',
				data:{
					'offset': flag,
					'limit': 3
				},
				success: function (data) {
					$('#result').append(data);
					flag += 3
				}
			});
		}
	})
})
// $('body').scroll(function (event) {
//     var scroll = $(window).scrollTop();
//     alert("jkldsjflsdk")
// });
</script>
</body>
</html>