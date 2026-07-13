<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin Printex</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f2f2f2;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .login-box{
            width:350px;
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,.2);
        }

        h2{
            text-align:center;
            color:#c40000;
            margin-bottom:25px;
        }

        input{
            width:100%;
            padding:12px;
            margin-bottom:15px;
            border:1px solid #ccc;
            border-radius:5px;
            outline:none;
        }

        input:focus{
            border-color:red;
        }

        button{
            width:100%;
            padding:12px;
            background:#c40000;
            color:white;
            border:none;
            border-radius:5px;
            cursor:pointer;
            font-size:16px;
        }

        button:hover{
            background:#990000;
        }

        .error{
            background:#ffdede;
            color:red;
            padding:10px;
            border-radius:5px;
            margin-bottom:15px;
            text-align:center;
        }
    </style>
</head>
<body>

<div class="login-box">

    <h2>LOGIN ADMIN</h2>

    @if(session('error'))
        <div class="error">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ url('/login') }}" method="POST">
        @csrf

        <input
            type="text"
            name="username"
            placeholder="Masukkan Username"
            value="{{ old('username') }}"
            required
        >

        <input
            type="password"
            name="password"
            placeholder="Masukkan Password"
            required
        >

        <button type="submit">
            LOGIN
        </button>
    </form>

</div>

</body>
</html>