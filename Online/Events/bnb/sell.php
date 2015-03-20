<?php

/**
 * @author 
 * @copyright 2015
 */
session_start();
$u_dlf = $_SESSION['u_dlf'];
echo $u_dlf;
$u_itc =$_SESSION['u_itc'] ;
$u_airtel =$_SESSION['u_airtel'] ;
echo $u_airtel;
$u_dabur =$_SESSION['u_dabur'] ;
$u_maruti =$_SESSION['u_maruti'] ;
$u_ongc =$_SESSION['u_ongc'] ;
$u_pnb =$_SESSION['u_pnb'] ;
$credits =$_SESSION['credits'] ;
echo $credits;
$p_dlf = $_SESSION['$p_dlf'];
$p_itc =$_SESSION['$p_itc'] ;
echo $p_itc;
$p_airtel =$_SESSION['$p_airtel'] ;
$p_dabur =$_SESSION['$p_dabur'] ;
$p_maruti =$_SESSION['$p_maruti'] ;
$p_ongc =$_SESSION['$p_ongc'] ;
$p_pnb =$_SESSION['$p_pnb'] ;
$com = $_POST['stocks'];
echo $com;
$uname = $_SESSION['uname'];

$amm = $_POST['answer'];
echo $amm;
switch($com)
		{
			case 'DLF': 
             $u_dlf -= $amm;
             $credits = $credits + ($p_dlf*$amm);
			break;
            case 'ITC': 
             $u_itc -= $amm;
             $credits = $credits + ($p_itc*$amm);
			break;
            case 'Airtel': 
             $u_airtel -= $amm;
             $credits = $credits + ($p_airtel*$amm);
			break;
            case 'Dabur': 
             $u_dabur -= $amm;
             $credits = $credits + ($p_dabur*$amm);
			break;
            case 'Maruti': 
             $u_maruti -= $amm;
             $credits = $credits + ($p_maruti*$amm);
			break;
            case 'ONGC': 
             $u_ongc -= $amm;
             $credits = $credits + ($p_ongc*$amm);
			break;
            case 'PNB': 
             $u_pnb -= $amm;
             $credits = $credits + ($p_pnb*$amm);
			break;	               				
		}
        
        mysql_connect('localhost', 'root', '') or die("<br/>error");
		mysql_select_db('bvpieee') or die("<br>DB_error");
		$q="UPDATE `bnb` SET `Dlf`=".$u_dlf.",`ITC`=".$u_itc.",`Airtel`=".$u_airtel.",`Dabur`=".$u_dabur.",`Maruti`=".$u_maruti.",`Ongc`=".$u_ongc.",`Pnb`=".$u_pnb.",`credits`=".$credits." WHERE email = '".$uname."';";
		
		$q_run=mysql_query($q) or die("<br/>error_run");
	//	$q_row=mysql_fetch_assoc($q_run);
        
	
?>