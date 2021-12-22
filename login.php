<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .login-wrapper {
            width: 40vw;
            margin: 2rem auto;
            background: #f4f4f4;
            border-radius: 5px;
            border: 1.5px solid #c4c4c4;
            padding: 1rem 1.5rem;
            box-sizing: border-box;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        input {
            width: 100%;
            margin: .45rem 0;
            border-radius: 5px;
            padding: .55rem;
            border-width: 1.5px;
        }

        button {
            margin-top: 1rem;
            width: 50%;
        }

    </style>
    <title>Login - Perpustakaan Umum</title>
</head>
<body>
    <form action="./helper/login.php" method="post" class="login-wrapper">
        <p>LOGIN</p>
        <input type="text" name="username" placeholder="Masukkan username anda" required>
        <input type="password" name="password" placeholder="Masukkan password anda" required>
        <button type="submit" name="login">Login</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>