
    <?php
   $dbhost = "localhost";
     $dbuser = "root";
     $dbpass = "1234";
     $db = "sparks";
     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
	 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
     
    
	 }
       
    ?>