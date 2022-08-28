<?php 

session_start();

if($_POST){

  if($_POST['usuLogin'] == 'Santo' && $_POST['usuPassword'] == '12345678'){
    $_SESSION['usuLogin'] == $_POST['usuLogin'];
    // echo "Login correcto";
    header('Location: sections/index.php');
  }else{
    $mensaje = "Usuario o Password errados";
  }

}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100 p-5">
          <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
              <h1 class="text-black font-weight-bold">Medical App</h1>
              <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
              <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">

                  <form action="" method="POST" id="">
                    <br>
                    <h2>Inicia de Sesion</h2>
                    <br>
                    <?php if(isset($mensaje)){?>
                      <div class="alert alert-danger" role="alert">
                        <strong><?php echo $mensaje; ?></strong>
                      </div>
                    <?php } ?>
                    <!-- User input-->
                    <div class="form-floating mb-3">
                      <div class="mb-3">
                        <label for="" >Usuario</label>
                        <input class="form-control" name="usuLogin" id="usuLogin" type="text" placeholder="santo" />
                      </div>
                    </div>
                
                    <!-- Password input-->
                    <div class="form-floating mb-3">
                      <div class="mb-3">
                        <label for="usuPassword" class="form-label">Contrasena</label>
                        <input type="password" class="form-control" name="usuPassword" id="usuPassword" placeholder="Ingresa tu contrasena">
                      </div>
                    </div>
                
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Entrar</button></div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </header>    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>

<!-- < include("./templates/header.php"); ?> -->

  

  <?php include("./templates/footer.php"); ?>
