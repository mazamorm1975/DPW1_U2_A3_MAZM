<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "#Cu213lona1993";
 $dbname = "test";
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 if(!$conn){
    die("La conexion fue rechazada".mysqli_connect_error());
 }

 $nombre = $_POST["txtusuario"];
 $password = $_POST["txtpassword"];

 
 #$query_admin = mysqli_query($conn, "SELECT * FROM login_admin  WHERE user_admin = '".$nombre."' and password_admin ='".$password."' and rol = 'Administrador'");
 #$nr = mysqli_num_rows($query_admin);

 #$query_cliente = mysqli_query($conn, "SELECT * FROM login_cliente  WHERE user_cliente = '".$nombre."' and password_cliente ='".$password."' and rol ='Cliente'");
 #$nr2 = mysqli_num_rows($query_cliente);


 #if($nr == 1){

 #   header("Location: DPW1_U2_A4_MAZM/admin/seccion_administrativa.html");
 #   echo "Bienvenido: " .$nombre;

 #} else if($nr2 == 1){

 #  header('Location: DPW1_U2_A4_MAZM/admin/seccion_operativa.html');
 #  echo "Bienvenido: " .$nombre;

#} else if($nr == 0 || $nr2 == 0){
#   echo "No se encontro a este usuario en la base de datos";
#}

if($nombre == 'admin_ZMM' && $password == 'ES1821008613'){

      header("Location: MAZM_Seccion_CRUDS_Admin.html");
     # echo "Bienvenido: " .$nombre;
  
   } 
   
   if($nombre == 'cliente_ZMM' && $password == 'ES1821008613'){
  
     header("Location: MAZM_Menu_Principal.html");
     #echo "Bienvenido: " .$nombre;
  
  } else {
     echo "No se encontro a este usuario en la base de datos";
  }

?>