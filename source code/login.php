<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login Form </title>
  </head>
  <body>


  <div class="wrapper">
        <div class="logo">
           <center> <img style="width:85px;height:85px;" src="logo.png" alt=""></center>
        </div>
        <div class="text-center mt-4 name">
            Login Form
        </div>
        <form class="p-3 mt-3" action="code.php" method="post">
        <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="name" id="userName" placeholder="UserName">
            </div>
           
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
                <i class="fa-solid fa-eye me-3" id="passicon" onclick="showpass()"></i>
            </div>
            <button type="submit" name="login" class="btn mt-3">Login</button>
        </form>
      
    </div>
  <script>
    var pass = document.getElementById('pwd');
    var icons = document.getElementById('passicon');

    function showpass(){
      if(pass.type == "password"){
        pass.type = "text";

        icons.classList.remove('fa-eye');
        icons.classList.add('fa-eye-slash');
      }
      else{
        pass.type = "password"
        icons.classList.remove('fa-eye-slash');
        icons.classList.add('fa-eye');

      }
    }
  </script>
  
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>