<<<<<<< HEAD
<?php  

echo time();

?>
=======
<?php
   session_start();
   if(isset($_POST['1']) && isset($_POST['2'])&& isset($_POST['3'])&& isset($_POST['4'])&& isset($_POST['5'])&& isset($_POST['6'])&& isset($_POST['7'])&& isset($_POST['8'])&& isset($_POST['9'])&& isset($_POST['10'])&& isset($_POST['11'])&& isset($_POST['12'])&& isset($_POST['13'])&& isset($_POST['14'])&& isset($_POST['15']))
   {
    
   mysql_connect('mysql1.freehosting.com', 'bvpieeec_lol', 'hdb32wb98') or die("<br/>error");
   mysql_select_db('bvpieeec_delhibvce') or die("<br>DB_error");
	
    $ses =  $_SESSION['uname'];
       if(!isset ($ses))
       {
        
        header('Location: ../1.php');
        echo "LOGIN FIRST";
       }
	   $d=$_SESSION['done_2'];
	   if($d!=0)
       {
        
        header('Location: exit.php');
       }
  
   {
       $lel = $pwRow['level'] +1;
       echo $lel;
   
   $sql_query= "SELECT * FROM `vsq_15` WHERE uname ="."'". $ses."';";
   $res = mysql_query($sql_query) or die ($sql_query.mysql_error());
   $pwRow1 = mysql_fetch_array($res,mysql_assoc);
   
   $lev = 0;     
 
	$a1=$_POST['1'];
	$a2=$_POST['2'];
	$a3=$_POST['3'];
	$a4=$_POST['4'];
	$a5=$_POST['5'];
	$a6=$_POST['6'];
	$a7=$_POST['7'];
	$a8=$_POST['8'];
	$a9=$_POST['9'];
	$a10=$_POST['10'];
	$a11=$_POST['11'];
	$a12=$_POST['12'];
	$a13=$_POST['13'];
	$a14=$_POST['14'];
	$a15=$_POST['15'];
        
        echo $a1,$a2;
        
		switch($a1)
		{
			case 'C': 
				$lev =$lev+1; echo "C";break;
				
	               				
		}
		   
		switch($a2)
		{
			case 'B': 
				$lev =$lev+1; echo "C"; break;
				
	
		}
		   
		switch($a3)
		{
			case 'B': 
				$lev =$lev+1;  echo "C";break;
				
		
							
		}
		   
		switch($a4)
		{
			case 'A': 
				$lev =$lev+1; echo "C";break;
				
			
							
		}
		   
		switch($a5)
		{
			case 'C': 
				$lev =$lev+1; break;
				
		
							
		}
		   
		switch($a6)
		{
			case 'C': 
				$lev =$lev+1; break;
				
			
							
		}   
		switch($a7)
		{
			case 'D': 
				$lev =$lev+1; break;
				
		
							
		}
		   
		switch($a8)
		{
			case 'A': 
				$lev =$lev+1; break;
				
			
							
		}
		   
		switch($a9)
		{
			case 'D': 
				$lev =$lev+1; break;
				
		
							
		}
		   
		switch($a10)
		{
			case 'C': 
				$lev =$lev+1; break;
				
				
							
		}
		   
		switch($a11)
		{
			case 'C': 
				$lev =$lev+1; break;
				
		
							
		}
		   
		switch($a12)
		{
			case 'A': 
				$lev =$lev+1; break;
				
				
							
		}
		   
		switch($a13)
		{
			case 'C': 
				$lev =$lev+1; break;
				
		
							
		}
		   
		switch($a14)
		{
			case 'C': 
				$lev =$lev+1; break;
				
		
							
		}
		   
		switch($a15)
		{
			case 'C': 
				$lev =$lev+1; break;
				
		
							
		}
	   
  
	   if($lev >=0){
		   if(time() - $session['time']) {
			   $lev = $lev - 20;
		   }
	   $lol= "UPDATE `vsq_15` SET `total` = "."'". $lev."'" ." , `done_2` = 1 WHERE  `uname` ="."'". $ses."'";
		$res = mysql_query($lol) or die (mysql_error());
   
   header( 'Location: exit.php' );}
   else
   header( 'Location: index.php' );
   }
 ?>
>>>>>>> e4211911877a04df63a3272cbc6dd14ea1a94b65
