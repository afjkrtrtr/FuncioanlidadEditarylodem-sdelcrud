<?php 
require_once "../lib/config(conexion.php"; 

$nombre = $apellido = $correo = $telefono =$saldo = "";  
$nombre_err = $apellido_err = $correo_err = $telefono_err = $saldo_err = "";


if (isset($_POST['id']) && !empty($_POST['id'])) {
    
    $id=$_POST['id'];

    // Validaciones 
    
    $input_cedula=trim($_POST['cedula']);
    if (empty($input_cedula)) {
        $cedula_err="Por favor ingrese un cedula";
    }else{
        $cedula=$input_cedula;

    $imput_nombre=trim($_POST['nombre']); 
    if (empty($input_nombre)) {
        $nombre_err="Por favor ingrese un nombre";
    }elseif (!filter_var($input_nombre,FILTER_VALIDATE_REGEXP,
        array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
        $input_nombre="Por favor ingrese un nombre valido";
    }else{
        $nombre=$input_nombre;
    }          
    
    $input_apellido=trim($_POST['apellido']);
    if (empty($input_apellido)) {
        $apellido_err="Por favor ingrese un apellido";
    }elseif (!filter_var($input_apellido,FILTER_VALIDATE_REGEXP,
    array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
    $input_apellido="Por favor ingrese un apellido valido";
    }else{
        $apellido=$input_apellido;   
    }  

    $input_correo=trim($_POST['email']);
    if (empty($input_correo)) {
        $correo_err="Por favor ingrese un correo";
    }else{
        $correo=$input_correo;
    }

    $input_fijo=trim($_POST['fijo']);
    if (empty($input_fijo)) {
        $fijo_err="Por favor ingrese un fijo";
    }else{
        $fijo=$input_fijo;
    }    
    
    $input_movil=trim($_POST['movil']);
    if (empty($input_movil)) {
        $movil_err="Por favor ingrese un movil";
    }else{
        $movil=$input_movil;
    }

    $input_correo=trim($_POST['email']);    
    if (empty($input_correo)) {
        $scorreo_err="Por favor ingrese un correo";
    }else{
        $correo=$input_correo;
    }  

    
    }    

//revisar los errores 
    if (empty($cedula_err) && empty($apellido_err) && empty($FechaNacimento_err) && empty($FechaIngreso_err) && empty($Direcion_err) && empty($Fijo_err) && empty($Movil) && empty($Email) ) } {
        
        $sql="UPDATE cliente SET cedula=?,nombre=',apellido=?,FechaNacimento=?,FechaIngreso=?,Direcion=?,Fijo=?,Movil=?,Email=? VALUES (? , ? . ? , ? . ? , ? , ? , ? , ?)"; 
        
        IF ($stmt=mysqli_prepare($link,$sql)) {
            mysqli_stmt_bind_param($stmt, "ssssi",$param_cedula,$param_nombre,$param_apellido,$param_FechadeNacimento,$param_FechadeIngreso,$param_Direcion,$param_Fijo,$param_Movil,$param_Email
        
            $param_cedula=$cedula;
            $param_nombre=$nombre;
            $param_apellido=$apellido;
            $param_FechaNacimiento=$FechaNacimiento
            $param_FechaIngreso=$FechaIngreso 
            $param_Direccion=$Direccion
            $param_Fijo=$Fijo 
            $param_Movil=$Movil          _
            $param_Email=$Email           

            if (mysqli_stmt_execute($stmt)) {
                header("location: ../index.php");
                exit();
            }else{
                echo "Ha ocurrido un error";
            }
            
            mysql_stmt_close($stmt);
        }
    }
    }
?>
        
