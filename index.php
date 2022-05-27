<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShirtPlanet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="./img/image (1)-modified.png" type="image/x-icon">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="./index.php"><img src="./img/logo.png" alt="" class="img4"></a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./tienda/view/camisetas.php">Todos los productos</a>
                    </li>
                </ul>
                (
                <?php 
                $conexion = mysqli_connect("localhost", "root", "", "bd_camisetaspol");
                $sql="SELECT SUM(carrito) FROM tbl_camisetas;";
                $result=mysqli_query($conexion,$sql);
                $row=mysqli_fetch_array($result);
                echo "$row[0]";                     
                ?> ) &nbsp;&nbsp;
                <form class="d-flex">
                    <a class="navbar-brand" href="./tienda/view/carrito.php"><img src="./img/carrito.png" alt="" class="img2"></a>
                    <a class="navbar-brand" href="login/index.html"><img src="./img/login2.png" alt="" class="img3"></a>
                   
                </form>
            </div>
        </div>
    </nav>
    <div class="contenedor">
        <div class="slider-contenedor">
            <section class="contenido-slider">
                <img src="./img/FONDO HOMBRES.png" alt="">
            </section>
            <section class="contenido-slider">
                <img class="img10" src="./img/FONDO MUJERES.png" alt="">
            </section>
            <section class="contenido-slider">
                <img class="img11" src="./img/fondooooooooooooooo.png" alt="">
            </section>
            <section class="contenido-slider">
                <img src="./img/4o fondoooooooooooooooooooo.png" alt="">
            </section>
        </div>
    </div>
    <script src="./js/main.js"></script>
    <div class="row fondo-txt">
        <div id="header" class="column-2">
            <h2 class="cont-font wh-txt" style="padding-left: 20px; padding-top: 25px;"><b><u>Quienes somos?</u></b></h2>
            <p class="cont-font wh-txt" style="padding-left: 20px; padding-top: 10px;">ShirtPlanet es una empresa especializada en la creación de camisetas personalizadas con diseños originales, para hombre y mujer.</p>
            <p class="cont-font wh-txt" style="padding-left: 20px; padding-top: 10px;">Llevamos más de 3 años creando nuevos diseños y trabajando para mejorar la experiencia del cliente. Por eso hemos decidido crear esta página web para que los interesados en nuestros productos, puedan comprar de forma online.</p>
        </div>
        <div class="column-2">
            <img src="" alt="">
        </div>
    </div>
    <div id="header" class="column-2 fondo-txt">
        <iframe class="bordes" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2998.333284869718!2d1.9749424154869812!3d41.27985037927415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a482b9933743e9%3A0x4d72b99ce06e2a20!2sCarrer%20de%20l&#39;Onze%20de%20Setembre%2C%2015%2C%2008860%20Castelldefels%2C%20Barcelona!5e0!3m2!1ses!2ses!4v1652809545411!5m2!1ses!2ses"
            width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div id="header" class="column-2 fondo-txt">
        <h2 class="cont-font wh-txt" style="text-align: right; padding-right: 20px; padding-top: 30px;"><b><u>Donde estamos?</u></b></h2>
        <p class="cont-font wh-txt" style="text-align: right; padding-right: 20px; padding-top: 20px;">La tienda está ubicada en "Carrer de l'Onze de Setembre, 15, <b>08860</b> (<u>Castelldefels</u>)".</p>
        <h2 class="cont-font wh-txt" style="text-align: right; padding-right: 20px; padding-top: 30px;"><b><u>Horarios</u></b></h2>
        <p class="cont-font wh-txt" style="text-align: right; padding-right: 20px; padding-top: 20px;"><u>Lunes a sábado:</u> 9:30 - 21:30</p>
        <p class="cont-font wh-txt" style="text-align: right; padding-right: 95px; padding-top: 20px;"><u>Domingo:</u> Cerrado</p>
    </div>
    <div class="row separación" id="footer">
        <div class="column-2 parrafo3">
            <p>© ShirtPlanet, LLC. 2022</p>
        </div>
        <div class="column-2 parrafo3 social-menu">
            <a class="social-menu2" href="https://wa.me/685416098"><img class="img1" src="./img/WSP.png" alt=""></a>
            <br><br>
            <a class="social-menu2" href="https://wa.me/685416098"><img class="img1" src="./img/gmail.png" alt=""></a>
        </div>
    </div>
</body>

</html>