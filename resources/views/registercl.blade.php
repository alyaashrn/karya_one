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

    background-color: #D3535C;
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
    flex: 1; 
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
    height: auto;
    object-position: 2px 95px;
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
  .password-group {
  display: flex;
  justify-content: space-between;
}

.password-group div {
  width: calc(50% - 5px); /* Mengatur lebar setengah dari parent dengan sedikit jarak */
  margin-right: 5px; /* Memberikan jarak antara kedua input */
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
            <form action="{{ route('register.post') }}" method="post"> 
              @csrf
                <h1>Sign Up</h1>
                <hr>
                <p>KaryaOne</p>
                <label for="">Nama Lengkap/Username</label>
                <input name="nama" type="text"
                placeholder="Jhon Thor">
                <label for="">Email</label>
                <input name="email" type="text" 
                placeholder="jhonthor4@gmail.com">
                <div class="password-group">
                  <div>
                    <label for="" style="font-size: 14px;">Password</label>
                    <input name="password" type="password" placeholder="password">
                  </div>
                </div>
                <label for="">No Telepon</label>
                <input name="noHP" type="text" 
                placeholder="0895602365">
                  <label for="" >Industri</label>
                  <select name="industri" id="tanggal-lahir" style="height: 35px; width: 250px;" >
                    <option value="">Industri</option>
                    <option value="">Pilih Industri</option>
                    <option value="IT">Teknologi Informasi</option>
                    <option value="Keuangan">Keuangan</option>
                    <option value="Pendidikan">Pendidikan</option>
                    <option value="Kesehatan">Kesehatan</option>
                    <option value="Otomotif">Otomotif</option>
                    <option value="Pariwisata">Pariwisata</option>
                  </select>
                  <input name="aksesrol" value="1" type="hidden">
                <button type="submit">Sign Up</button>
            </form>
        </div>
       <div class="left">
      <img src="img/register.jpg" alt="">
    </div>
   </div> 
  </body>
</html>