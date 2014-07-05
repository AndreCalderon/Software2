<?php 

if(isset($_POST['submit'])){ 
    $dbHost = "localhost:1433";        //Location Of Database usually its localhost 
    $dbUser = "root";            //Database User Name 
    $dbPass = "";            //Database Password 
    $dbDatabase = "mydb";    //Database Name 
     
    $db = mysql_connect($dbHost,$dbUser,$dbPass)or die("Error connecting to database."); 
    //Connect to the databasse 
    mysql_select_db($dbDatabase, $db)or die("Couldn't select the database."); 
    //Selects the database 
					    
			    //Lets search the databse for the user name and password 
			    //Choose some sort of password encryption, I choose sha256 
			    //Password function (Not In all versions of MySQL). 
			    $usr = $_POST[usuarioLog]; 
			    $pas = $_POST[passwordLog]; 
			    $sql = mysql_query("SELECT * FROM medico  WHERE usuarioMed='$usr' AND passwordMed='$pas' LIMIT 1"); 


			    if(mysql_num_rows($sql) == 1){ 
			        $row = mysql_fetch_array($sql); 
			        session_start(); 
			        $_SESSION['username'] = $row['usuarioMed']; 
			        $_SESSION['nombre'] = $row['nombre']; 
			        $_SESSION['apellido'] = $row['apellido']; 
			        $_SESSION['logged'] = TRUE; 
			        header("Location: intMedic.php");
			        exit(); 
			    }else{ 
			        header("Location: login.php"); 
			        exit(); 
			    } 
	}else{    //If the form button wasn't submitted go to the index page, or login page 
    header("Location: index.html");     
    exit; 
} 
			 
?>