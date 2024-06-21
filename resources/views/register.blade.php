<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Đăng ký</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/css/log_reg.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>

<body>

	<div class="wrapper" style="background-image: url('{{ asset('frontend/images/bg-registration-form-2.jpg') }}');">
		<div class="inner">
			<form action="{{ route('auth.register') }}" method="POST">
				@csrf
				<h3>Đăng ký</h3>
				<div class="form-wrapper">
					<label for="">User Name</label>
					<input name="username" type="text" class="form-control" required>
				</div>

				<div class="form-wrapper">
					<label for="">Email</label>
					<input name="email" type="text" class="form-control" required>
				</div>

				<div class="form-wrapper">
					<label for="">Password</label>
					<input name="password" type="password" class="form-control" required>
				</div>

				<div class="form-wrapper">
					<label for="">Confirm Password</label>
					<input name="password_confirmation" type="password" class="form-control" required>
				</div>

				<div class="form-wrapper gto-register">
					<p>Đã có tài khoản?</p>
					<a href="{{ url("login") }}">Đăng nhập</a>
				</div>
				
				<div class="checkbox">
					<label>
						<input type="checkbox"> I accept the Terms of Use & Privacy Policy.
						<span class="checkmark"></span>
					</label>
				</div>
				<button type="submit">Register Now</button>
			</form>
		</div>
	</div>

	<div class="alert alert-danger" id="alert"
		style="position: absolute; top: 30px; right: 20px; text-align:start; font-size: 13px">
		<ul style="list-style-type: none; padding: 0;">
			@if ($errors->any())
				@foreach ($errors->all() as $error)
					<li style="color: #fff; margin: 5px 0; background-color: #ae3c33;border-radius:20px; padding: 10px 10px">{{
						$error }} <i class="fa-solid fa-user-check"></i></li>
					<script>
						// Tự động ẩn thông báo sau 3 giây
							setTimeout(function () {
								var alertDiv = document.getElementById('alert');
								if (alertDiv) {
									alertDiv.style.display = 'none';
								}
							}, 3000); // 3s
					</script>
				@endforeach
			@endif
		</ul>
	</div>

</body>

</html>