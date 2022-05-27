
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Link para que las cartas funcionen!-->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/styles.css">
        <!--Link para que las cartas funcionen!-->
        <script src="../js/cartas.js"></script>
        <title>Camisetas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/styles.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="/"><img src="../../img/logo.png" alt="" class="img4"></a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../../tienda/view/camisetas.php">Todos los productos</a>
                </li>
            </ul>
            ( <?php 
$conexion = mysqli_connect("localhost", "root", "", "bd_camisetaspol");
$sql="SELECT SUM(carrito) FROM tbl_camisetas;";
$result=mysqli_query($conexion,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";                     
?> )
&nbsp;&nbsp;
            <form class="d-flex">
           
                <a class="navbar-brand" href="#"><img src="../../img/carrito.png" alt="" class="img2"></a>




                <a class="navbar-brand" href="../../login/index.html"><img src="../../img/login2.png" alt="" class="img3"></a>
               
            </form>
        </div>
    </div>
</nav>

        <div class="contenido">


<br><br>
<p align="center"><h3><b>IMPORTE TOTAL:</b>


<?php 
$conexion = mysqli_connect("localhost", "root", "", "bd_camisetaspol");
$sql="SELECT IFNULL(ROUND(SUM(precio_camiseta),2),0) FROM tbl_camisetas WHERE carrito='1';";
$result=mysqli_query($conexion,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";                     
?>
€
</h3>

</p>


        <?php
error_reporting(0);
          //hacemos las conexión a la base de datos
          $conexion = mysqli_connect("localhost", "root", "", "bd_camisetaspol");
          //generamos la query que nos sacará TODA la información de la tabla camisetas         
          $query = "SELECT * FROM tbl_camisetas WHERE carrito='1'";
          //ejecutamos la query                  
          $resultado = $conexion->query($query);
          //mientras saca filas de la base de datos lo vamos metiendo en un array (lista) para despues mostrarlo todo       
          while($filacamiseta = $resultado->fetch_array()){
          //de cada fila que saca de la base de datos las va metiendo en la lista (ARRAY = LISTA)     
            $listaCamisetas[] = $filacamiseta;
          }
          //recorremos el array para sacar toda la información y mostrarla en las cartas.
          //por cada fila que hay en la lista de camisetas crea una carta con los datos que estan en los campos de la bd
          foreach($listaCamisetas as $camiseta){  
        ?>


            <div class="cards">
                <div class="card">
                    <div class="card__image-holder">
                        <!--Ponemos un echo para que se vea la informacion, lo que hace es
                        coge $camiseta donde está guardado y le decimos que muestre la INFO
                        que tiene guardad en el campo foto_camiseta en la bbdd!-->
                      <img class="card__image" src="<?php echo "{$camiseta['foto_camiseta']}";?>"/>
                    </div>
                    <div class="card-title">
                      
                        <span class="left"></span>
                        <span class="right"></span>
                      </a>
                      <h2>
                          <!--Ponemos un echo para que se vea la informacion, lo que hace es
                          coge $camiseta donde está guardado y le decimos que muestre la INFO
                          que tiene guardad en el campo marca_camiseta!-->
                        <?php echo "{$camiseta['modelo_camiseta']}";?>
                        <!--Ponemos un echo para que se vea la informacion, lo que hace es
                          coge $camiseta donde está guardado y le decimos que muestre la INFO
                          que tiene guardad en el campo talla_camiseta!-->
                        <small>Precio: <?php echo "{$camiseta['precio_camiseta']}";?></small>
                      </h2>
                    </div>
                    <div class="card-flap flap1">
                      <div class="card-description">
                        Descripcion: <?php echo "{$camiseta['descripcion_camiseta']}";?>
                        <br>
                          <!--Ponemos un echo para que se vea la informacion, lo que hace es
                          coge $camiseta donde está guardado y le decimos que muestre la INFO
                          que tiene guardad en el campo color_camiseta!-->
                        Color: <?php echo "{$camiseta['color_camiseta']}";?>
                        <br>
                        <!--Ponemos un echo para que se vea la informacion, lo que hace es
                          coge $camiseta donde está guardado y le decimos que muestre la INFO
                          que tiene guardad en el campo precio_camiseta!-->
                        Tallas: <?php echo "{$camiseta['talla_camiseta']}";?>
                        
                      </div>
                    </div>
                </div>



                <form method="post" action="../process/delete_carrito.php">   
      

      <input type="text" name="id_camiseta" value="<?php echo "{$camiseta['id']}";?>" hidden>
      
      
      
      
      
      
           <button type="submit" name="submit">ELIMINAR CAMISETA</button>     
          </form>







            </div>
        <?php
          }
        ?>
        </div>
    </body>
    </html>
  