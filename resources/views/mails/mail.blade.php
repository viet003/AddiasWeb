<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
    <style>
        /* CSS styles go here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            box-sizing: border-box;
        }

        h1 {
            color: #333333;
        }

        p {
            color: #666666;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }

        .bottom-bar {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #dddddd;
            text-align: center;
        }

        .pass {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Lấy lại mật khẩu</h1>
        <p>Mật khẩu của bạn đã được thay đổi. Dưới đây là mật khẩu mới của bạn:</p>
        <p class="pass"><strong>{{ $pass }}</strong></p>
        <a href="#" class="button">Đăng nhập</a>
        <div class="bottom-bar">
            <p>Nếu có bất kỳ câu hỏi hoặc thắc mắc, vui lòng liên hệ với chúng tôi:</p>
            <p>Email: devtester0321@gmail.com</p>
            <p>Điện thoại: 0987654321</p>
        </div>
    </div>
</body>

</html>