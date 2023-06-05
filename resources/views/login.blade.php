<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;

    background-color: #d9534f;
  }
  

  .container{
    width: 100%;
    display: flex;
    max-width: 850px;
    background: #Ffff;
    border-radius: 15px;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 1);

  }
  .login{
    width: 400px;
  }

  form{
    width: 250px;
    margin: 60px auto;
  }

  h1{
    margin: 20px;
    text-align: center;
    font-weight: bolder;
  }

  hr{
    background: #CD3535;
    border-top: 2px solid ;
  }

  p{
    text-align: center;
    margin: 10px;
  }

  .left img{
    width: 450px;
    height: 100%;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    
  }

  form label{
    display: block;
    font-size: 16px;
    font-weight: 600;
    padding: 5px;
  }

  input{
    width: 100%;
    margin: 2px;
    border: none;
    outline: none;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid gray;

  }

  button{
    border: none;
    outline: none;
    padding: 8px;
    width: 252px;
    color: #Ffff;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    border-radius: 5px;
    background: #CD3535;
  }

  button:hover{
    background: #CD3535;
  }

  @media (max-width: 880px){
    .container{
        width: 100%;
        max-width: 750px;
        margin-left: 20px;
        margin-right: 20px;
    }
    form{
        width: 300px;
        margin: 2px auto;

    }
    .login{
        width: 400px;
        padding: 20px;
    }
    button{
        width: 100%;
    }
    .right img{
        width: 100%;
        height: 100%
    }
 }
    </style>
    <title>Login</title>
  </head>
  <body>
    <div class="container">
        <div class="login">
            <form action="{{ route('login.post') }}" method="post">
              @csrf
                <h1>Sign In</h1>
                <hr>
                <p>KaryaOne</p>
                <label for="">Email/Username</label>
                <input name="email" type="email"
                placeholder="example@gmail.com">
                <label for="">Password</label>
                <input name="password" type="password" 
                placeholder="Password">
                <button type="submit">Sign In</button>
                <p>
                    <a href="#">Forgot Password</a>
                </p>
            </form>
        </div>
    <div class="left">
        <img src="img/login.jpg" alt="">
    </div>

    </div>
    
  </body>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    @if($message = Session::get('success'))
Swal.fire(
  '{{ $message }}',
  'success'
)
@endif
@if($message = Session::get('errors')){
Swal.fire({
  icon: 'error',
  text: '{{ $message }}',
});
}
@endif
  </script>
</html>