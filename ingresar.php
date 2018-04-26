<?php

# try{
#     $mysqli=new mysqli("localhost","root","","jess"); 
     #$mysqli=new mysqli("localhost","root","","beleki"); 
#     echo 'Conexion realizada';
#    }            
#catch (PDOException $ex) {
#       echo $ex->getMessage();
#       exit;
#    }
 
$nombre= $_POST["txtusuario"];
$pass= $_POST["txtpassword"];

$users = [
    "user1" => "pass1",
    "user2" => "2pass2",
];

  if(!empty($nombre)){
        if( array_key_exists($nombre, $users)  ){
                $tmp_name = array_search($pass, $users);
                if($tmp_name==$nombre){
                    header("Location: ingresar.html");
                }else{
                    header("Location: login.html");
                    exit();
                }
        }else{
                header("Location: login.html");
                exit();
        }
  }else{
        header("Location: login.html");
        exit();
  }


# $sql=("SELECT Username,Password FROM 'usuarios' "
#         . "WHERE 'Username'='".mysqli_real_escape_string($mysqli,$nombre)."' and "
#         . "'Password'='".mysqli_real_escape_string($mysqli,$pass)."'"); 

#  $sqlResult=$mysqli->query($sql);
#  $row = $sqlResult->num_rows;

#  if(!empty($row)){
#        if( $row['Password']==$pass ){
#            header("Location: Donitas.html");
#        }else{
#            header("Location: login.html");
#            exit();
#        }
#  }else{
#        header("Location: SalaDePrensa.html");
#        exit();
#  }
?>
