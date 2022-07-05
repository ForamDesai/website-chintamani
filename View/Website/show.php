<?php
   include ("../../Helper/connect.php"); 
   $pid=$_GET['pid'];
   $result=mysqli_query($con,"SELECT * FROM  blog_master WHERE PK_BlogID=$pid");
   while($row=mysqli_fetch_array($result)){
                          
      echo $row['BlogTitle'];
       echo'</hr>';

   }
 

?>
