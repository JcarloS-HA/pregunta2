<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Ingresar</title>
</head>

<body style="background-color: #F2F5F9">
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 ">
        <br><br>
            <div class="card " style="background-color:#C6E2F4 ">
                <br>
                <div class="row">
                <div class="col-md-1"></div>  
                <div class="col-md-10">
					<form method="GET" action="indexcontrol.php">
                            <center><img src="images/logo.png" width="450" height="250" alt="profile"></center>
                            <br>
                            <input type="text" class="form-control " name="usu" id="usu" placeholder="Nombre Usuario" required>
                            <br>
                            <input type="text" class="form-control" name="con" id="con" placeholder="Contraseña" required>
                            <br>
                            <button type="submit"  name="Aceptar" class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-user"></span> INGRESAR</button>
                        </form>        
                </div>
                <div class="col-md-1"></div>
                </div>
                <br>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
</body>
</html>

	

