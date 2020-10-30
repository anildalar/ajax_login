<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bootstrap 4 Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		
	</head>
	<body>
		
		<div class="container">
			<div class="row">
				<div class="col-6 offset-md-3">
					<form action="" class="a_form">
						<div class="form-group">
							<label for="email">Email address:</label>
							<input type="email" name="email" class="form-control form-control-sm" placeholder="Enter email" id="email">
						</div>
						<div class="form-group">
							<label for="pwd">Password:</label>
							<input type="password" name="password" class="form-control form-control-sm" placeholder="Enter password" id="pwd">
						</div>
						<div class="form-group form-check">
							<label class="form-check-label">
							  <input class="form-check-input" type="checkbox"> Remember me
							</label>
						</div>
						<button type="submit" class="btn btn-sm btn-success">Submit</button>
					</form>
				</div>
			</div>				
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script>
			//1. Check if the Page is loaded successfully
			jQuery(function($){
				//alert('ok1');
				//$(selector).action();
				$('.a_form').submit(function(e){
					e.preventDefault();
					//alert('IN form alert');
					var email = $('#email').val();
					let pwd = $('#pwd').val();
					//alert(email);
					//alert(pwd);
					//$.ajax({name:value, name:value, ... })
					$.ajax({
						url:'http://localhost/anil/ajaxlogin/ajax.php',
						data:{
							eml:email,
							pw:pwd
						},
						success:function(result,status,xhr){
							console.log('ok');
						}
					});
					
					
				});
			});
			
			/*
			$(document).ready(function(){
				alert('ok2');
			});
			
			(function(){
				alert('ok3');
			})(jQuery);
			*/
			
		</script>
		
	</body>
</html>