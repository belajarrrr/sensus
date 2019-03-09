<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sensus Penduduk</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['user']['photo'] ?>" />
                    
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>

                    <p><a href="logout.php">Logout</a></p>
					<p><a href="sensus.php">Input Data</a></p>
					<p><a href="datasensus/view_data.php">View Data</a></p>

                </div>
            </div>

            
        </div>


        <div class="col-md-8">

            <form action="" method="post" />
                <div class="form-group">
<h1>Selamat Datang DI Panel Sensus Penduduk 2020</h1>
          </div>
            </form>

            <?php for($i=0; $i < 6; $i++){ ?>
            </div>
            <?php } ?>
            
        </div>
    
    </div>
</div>

</body>
</html>
