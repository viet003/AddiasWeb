<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Đăng nhập</title>
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
            <form action="{{ route('auth.login') }}" method="POST">
                @csrf
                <!-- Add this to include a CSRF token for security -->
                <h3>Đăng nhập</h3>
                <div class="form-wrapper">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
                <div class="form-wrapper">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="form-wrapper gto-register">
                    <p>Chưa có tài khoản?</p>
                    <a href="{{ url('register') }}">Đăng ký</a>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" id="rememberCheckbox"> Remember me.
                        <span class="checkmark"></span>
                    </label>
                </div>

                <button type="submit">Login Now</button>
            </form>
        </div>
    </div>

    @if (session('success'))
    <div class="alert alert-success" style="color: black;">
        {{ session('success') }}
    </div>
    @endif


    <div class="alert alert-danger" id="alert"
        style="position: absolute; top: 30px; right: 20px; text-align:start; font-size: 13px">
        <ul style="list-style-type: none; padding: 0;">
            @if (session('success'))
                <li style="color: #fff; margin: 5px 0; background-color: #ae3c33;border-radius:20px; padding: 10px 10px">
                    {{ session('success') }}
                </li>
                <script>
                    setTimeout(function () {
                        var alertDiv = document.getElementById('alert');
                        if (alertDiv) {
                            alertDiv.style.display = 'none';
                        }
                    }, 3000); // 3s
                </script>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <li style="color: #fff; margin: 5px 0; background-color: #ae3c33;border-radius:20px; padding: 10px 10px">
                        {{ $error }} <i class="fa-solid fa-user-check"></i>
                    </li>
                    <script>
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

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const checkbox = document.getElementById('rememberCheckbox');

            checkbox.addEventListener('change', () => {
                if (checkbox.checked) {
                    checkbox.value = 'true';
                } else {
                    checkbox.value = 'false';
                }
            });
        });
    </script>
</body>

</html>