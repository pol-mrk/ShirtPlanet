<?php  
//CONECTAMOS LA DB
$conexion = mysqli_connect("localhost", "root", "", "bd_camisetaspol");
//FIN DE CONECTAMOS LA DB
//RECOJO LA VARIABLE QUE HE PASADO
$id_camiseta= $_POST["id_camiseta"];
//FIN DE RECOJO LA VARIABLE QUE HE PASADO
$quer1 = mysqli_query($conexion, "UPDATE tbl_camisetas SET carrito='0' WHERE id='$id_camiseta'");
?>
<!--AQUI HAGO EL REDIRECT A LA PAGINA-->
<script>
alert("ELIMINADA DEL CARRITO CORRECTAMENTE");
window.onload = function() {
    window.location.href = "/tienda/view/carrito.php";
}
</script>
<!--FIN DE AQUI HAGO EL REDIRECT A LA PAGINA-->
