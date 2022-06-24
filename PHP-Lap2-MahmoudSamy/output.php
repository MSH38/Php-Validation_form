<?php
if (isset($_POST)){
    $Firstname = $_POST ["fname"];  
    $Lastname = $_POST ["lastname"];  
    $Email = $_POST ["email"];   

    echo "Personal Information" ;

    if (empty($Firstname)) {  
        $errMsg = "Error! First name Is Required";  
          echo "<font color='red'>"  .$errMsg. "</font>";
          
    }
    elseif(!preg_match ("/^[a-zA-z]*$/", $Firstname))
    {   
        $Msg = "First Name should be Only Letters.";  
          echo "<font color='red'>" .$Msg ."</font>";  
        
    }    
     
    echo "<br/><br/>"; 

    if (empty($Lastname)) {  
        $errMsg = "Error! Lastname Is Required.";  
        echo "<font color='red'>"  .$errMsg. "</font>";  
    }
    else if(!preg_match ("/^[a-zA-z]*$/", $Lastname))
    {   
        $Msg = "Last Name should be Only Letters.";  
        echo "<font color='red'>" .$Msg ."</font>";  
    } 

       echo "<br/>";

   if (empty($_POST ["gender"])) 
   {  
    $errMsg = "Error! Gender Is Required";  
     echo "<font color='red'>"  .$errMsg. "</font>";  
   }
    echo "<br/> ";


    if (empty($Email)) {  
        $errMsg = "Error! Email Is Required";  
         echo "<font color='red'>"  .$errMsg. "</font>";  
    }
    elseif(!preg_match ("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $Email) )
    {  
        $Msg = "Email is not valid.";  
        echo "<font color='red'>" .$Msg ."</font>";  
   
        echo "<br/><br/>"; 
    }

    else {
        $filename	= "customer.txt";
        $MyFile 	= fopen($filename, "a");
        $newline = $Firstname.','.$Lastname.','.$_POST['gender'].','.$Email."\r\n";		
        fwrite($MyFile, $newline);
        fclose($MyFile);  
    }
          
        $validfile = file("customer.txt");
        // var_dump($validfile);

        echo"<table border='2'>";
        echo"<tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Gender</th>
        <th>Email</th>
        
        </tr>";

        foreach($validfile as $row)
        {
         $data = explode("," , $row);
         foreach($data as $val)
         {
            echo "<td>".$val."</td>";
         }
            echo"</tr>";
        }
            echo "</table>";


            echo "<br/> <br/>";

    echo "Name : " . $_POST["username"] ;
    echo "<br/> <br/>";


    echo "Address : " .$_POST["address"] ;
    echo "<br/> <br/>";


    echo "Department : " . $_POST["depart"]  ;
    echo "<br/> <br/>";

    
    $skills = $_POST["skill"] ;

    foreach ($skills as $skill){ 
       echo "<li>" . $skill."</li>"."<br />";
        
    }
    }