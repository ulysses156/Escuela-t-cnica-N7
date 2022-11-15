<?php
include("php/con_db.php");

if(isset($_POST['register'])){
    if (strlen($_POST['First_Name']) >= 1 &&
    strlen($_POST['Last_Name']) >= 1 &&
    strlen($_POST['email']) >= 1 &&
    strlen($_POST['Subject']) >= 1 &&
    strlen($_POST['message']) >= 1 ){
      
        $Name = trim($_POST['First_Name']);
        $Last_name = trim($_POST['Last_Name']);
        $email = trim($_POST['email']);
        $Subject = trim($_POST['Subject']);
        $message = trim($_POST['message']);
        $consul = "INSERT INTO datos( Nombre, Apellido, Email, Asunto, Texto)  VALUES ('$Name','$Last_name',' $email',' $Subject',' $message')";
         $resultado = mysqli_query($conex,$consul);
          if($resultado){
            ?>
            <h3 class="ok">Mensaje enviado correctamente</h3>
            <?php
          }else{
            ?>
            <h3 class="bad">Mensaje no enviado correctamente</h3>
            <?php
          }
     }else{
        ?>
        <h3 class="bad">Porfavor complete los campos</h3>
        <?php
     }
}
?>