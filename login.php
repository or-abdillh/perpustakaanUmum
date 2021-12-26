<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
           width: 100vw;
           height: 100vh;
           background: rgb(34,138,195);
           background: linear-gradient(0deg, rgba(34,138,195,1) 0%, rgba(45,225,253,1) 100%);
        }
        .login-wrapper {
            width: 40vw;
            margin: 35% auto;
            background: #f2f3f3;
            border-radius: 12px;
            border: 1.5px solid #c4c4c4;
            padding: 1.25rem 1.75rem;
            box-sizing: border-box;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            }
        input {
            width: 100%;
            margin: .45rem 0;
            border-radius: 5px;
            padding: .75rem;
            border-width: 1px;
        }

        button {
            margin-top: 1.5rem;
            width: 100%;
            background: #2dd64c;
            border: none;
            padding: .55rem;
            color: white;
            border-radius: 8px;
        }

    </style>
    
    <title>Login - Perpustakaan Umum</title>
</head>
<body>
   <main>
       <form action="./helper/login.php" method="post" class="login-wrapper">
           <p>LOGIN - PERPUSTAKAAN</p>
           <input type="text" name="username" placeholder="Masukkan username anda" required>
           <input type="password" name="password" placeholder="Masukkan password anda" required>
           <button type="submit" name="login">Login</button>
       </form>
   </main>
</body>
</html>