<html>
<meta charset="utf-8">
<head>
</head>
<script>
function myFunction() {
    location.replace("http://localhost/primeroPhpStorm/index.php");
};
</script>
<?php
//El titulo nos llegará de forma "automática"  
if ((($_REQUEST['Autor'] != "")) && (($_REQUEST['Titulo'] != "")) && (($_REQUEST['Texto'] != ""))) {
    $autor = $_REQUEST['Autor'];
    $titulo = $_REQUEST['Titulo'];
    $texto = $_REQUEST['Texto'];
echo "$autor--$titulo--$texto";
//conectar a MySQL
$server = "localhost";
$user = "root";
$pass="9psCXanh";
$dbname = "blog";

$conn = mysqli_connect($server, $user, $pass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {

//insertar datos
 $datos="INSERT INTO comentarios (autor, titulo,texto ) VALUES('".$autor."', '".$titulo."', '".$texto."')";
//$datos="insert into comentarios (autor,titulo,texto) values ('Andres','prueba','esto es un coment de la prueba')";
            $consulta=$conn->query($datos);
            if(!$consulta){
                echo "Error al insertar los datos del comentario\n";
                }else{
                   
            echo '<script type="text/javascript">'
            , 'myFunction();'
            , '</script>'
            ;
        }


	mysql_close($db);
	}
}
?>
</body>
</html>
