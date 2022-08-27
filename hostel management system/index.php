<?php
session_start();
require('config.php');
$q2 = "SELECT colgname FROM admin WHERE id=1";
$q21 = mysqli_query($con,$q2);
$colgdisp = mysqli_fetch_array($q21);
$q3 = "SELECT colgintro FROM admin WHERE id=1";
$q31 = mysqli_query($con,$q3);
$introdisp = mysqli_fetch_array($q31);

 
$q4 = "SELECT footerinfo FROM admin WHERE id=1";
$q41 = mysqli_query($con,$q4);
$footerdisp = mysqli_fetch_array($q41);


?>
<html>
<head>
<title>hostel</title>
<link rel="stylesheet" type="text/css" href="engine/css/slideshow.css" media="screen" />
	<style type="text/css">.slideshow a#vlb{display:none}</style>
	<script type="text/javascript" src="engine/js/mootools.js"></script>
	<script type="text/javascript" src="engine/js/visualslideshow.js"></script>
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
    
    <style type="text/css" media="screen">
#horizontalmenu ul 
{
padding:1; margin:1; list-style:none;
}
#horizontalmenu li
{
float:left;
 position:relative;
padding-right:50;
 display:block;
border:0px solid #CC55FF; 
border-style:inset;
}
#horizontalmenu li ul
 {
display:none;
position:absolute;
}
#horizontalmenu li:hover ul{
    display:block;
    background:#C4C4C4;
height:auto; width:8em; 
}
#horizontalmenu li ul li
{
    clear:both;
border-style:none;}
</style>	
</head>
<table width="1050px" align="center"  border="1">
  <tbody>
    <tr>
      <th height="39" colspan="2" style="background-color:#4E4E4E"><div style="text-align:left;color:#FFFFFF"><b><font size="+3"><a href="index.php" style="text-decoration:none ; color:#FFFFFF"><?php echo $colgdisp['colgname'];?></a></font></b><marquee direction="left" height="100%">
			<?php echo $disp['marquee1']; ?></marquee></div></th>
    </tr>

    <tr>
      <td height="38" colspan="2" style="background-color:#6E68FF">
      	<div id="horizontalmenu">
        <ul>
		<li><a href="index.php" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;" ><b>HOME</b></a></li>
        <li><a href="index.php?option=about" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;"><b>ABOUT</b></a></li>
		<li><a href="index.php?option=contact" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;"><b>CONTACT</b></a></li>	
        <li><a href="index.php?option=gallery" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;"><b>GALLERY</b></a></li>
        <li><a href="index.php?option=course" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;"><b>COURSES</b></a></li>
		<li><a href="index.php?option=regs" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;"><b>REGISTRATION</b></a></li>
		<li><a href="index.php?option=login" onMouseOver="this.style.color='#FFFFFF'" onMouseOut="this.style.color='#353535'" style="color:#353535 ; text-decoration:none;"><b>LOGIN</b></a>
        	
              </li>
		 </ul>
                 
            </li>
            
        </ul>
</div>
        
      </td>
    </tr>
    <tr>
      <td width="974" height="647" bgcolor="#D9D9D9" style="vertical-align:text-top">
      	<?php
	@$opt = $_GET['option'];
	if($opt=="")
	{
	?>
	<center>
	  <h2><b><font size="+3"><?php echo $colgdisp['colgname'];?>
	    </font></b></h2>
	</center>
    <center><img src="images/colg.jpg" width="696" height="488"></center>
    <p><center>
      <p>&nbsp;</p>
      <p><strong><font size="+2"><?php echo $colgdisp['colgname'];?></font></strong> <b>-</b> <font size="+1"><?php echo $introdisp['colgintro']; ?></font></p>
    </center></p>
	<?php
    error_reporting(1);
	}
	else{
	switch($opt)
	{
		case 'regs':
		include('registration.php')	;
		break;
		case 'login':
		include('login.php');
		break;
        case 'about':
		include('about.php');
		break;
		case 'contact':
		include('contact.php');
		break;
		case 'gallery':
		include('gallery.php');
		break;
		case 'course':
		include ('course.php');
		break;
		case 'cdrive':
		include('cdrive.php');
		break;
		case 'news':
		include('news.php');
		break;
		case 'sports':
		include('sports.php');
		break;
		case 'admission':
		include ('admission.php');
		break;
		case 'sdp':
		include('sdp.php');
		break;
		case 'wevents':
		include('wevents.php');
		break;
		case 'notice':
		include('notice.php');
		break;
		
	}}

	?>
	 <tr>
      <td height="25" colspan="2" style="background-color:#B8AFFF"><center><b>&copy; <?php echo $footerdisp['footerinfo']; ?></b></center>
      
    </tr>
  </tbody>
</table>
</html>