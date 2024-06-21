<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALADIN Stores</title>
	<link rel="stylesheet" href="{{ asset('frontend/css/admin.css') }}">
    <link rel="icon" href="Infoproduct/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('frontend/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>
<!DOCTYPE html>

<body>
	{{-- header --}}
	@include('component.header')

	<div class="wrapper" style="background-image: url('{{ asset('frontend/images/bg-registration-form-2.jpg') }}');">
		<div class="inner">
			<form class="form-admin">
				<h3 style="font-size: 30px;">Quản lý</h3>
                <div class="form-wrapper">   
					<a style="font-size: 20px;" href="{{ url('users') }}">Quản lý người dùng</a>
                </div>
                <div class="form-wrapper">                    
					<a style="font-size: 20px;" href="{{ url('products') }}">Quản lý sản phẩm</a>
                </div>
			</form>
		</div>
	</div>

</body>

</html>