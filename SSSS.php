<html>
	<head>
			<title>LIVE SEARCH</title>
			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('#search').keyup(function(){
			var variable = $(this).val();
			if(variable != '') {
				$.ajax({
					url:"Search.php",
					method:"post",
					data:{search:variable},
					dataType:"text",
					success:function(data){
						$('#here').css('border', '1px solid grey');
						$('#here').html(data);
					}
				});
			}
			else {
				$('#here').html("12");
				$('#here').css("border", "5px");
			}

	
	</script>
	</head>
	<body>
		<input id='search' name='search' type="text">
		<div id='here'></div>
	
	</body>
</html>