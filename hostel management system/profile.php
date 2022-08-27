<?php
session_start();
require('config.php');

if($_SESSION['user']=="")
{
	header('location:index.php');
}

?>
<html>
<head>
<title>Sample college Project</title>
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
 padding-right:89;
 display:block;
border:0px solid #CC55FF; 
border-style:inset;
margin-left:20px;
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
      <th height="39" colspan="2" style="background-color:#4E4E4E"><div style="text-align:left;color:#FFFFFF"><b><font size="+3"><a href="index.php" style="text-decoration:none ; color:#FFFFFF">NBPI</a></font></b><marquee direction="left" height="100%">
			</div></th>
    </tr>
   
<span class="wsl"></span>
	<a href="#" class="ws_frame"></a>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
    <!--slider end-->
    
      </th>
    </tr>
    <tr>
      <td height="38" colspan="2" style="background-color:#6E68FF">
      	<div><a href="index.php" style="text-decoration:none ; color:#010101" id="horizontalmenu li"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HOME</b></a>
        <a href="profile.php?option=about" style="text-decoration:none ; color:#010101"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ABOUT</b></a>
        <a href="profile.php?option=mfees" style="text-decoration:none ; color:#010101"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MESS FEES</b></a>
        <a href="profile.php?option=rfees" style="text-decoration:none ; color:#010101"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROOM FEES</b></a>
  <a href="logout.php" style="text-decoration:none;margin-left:150px;"><input type="submit" value="Logout" name="logout"></a></td>
    </tr>
    <tr>
      <td width="974" height="647" bgcolor="#D9D9D9" style="vertical-align:text-top">
      	<?php
	@$opt = $_GET['option'];
	if($opt=="")
	{
	?>
    <html>
	<h1><center>Welcome <?php echo $_SESSION['user']; ?></center></h1>
    </html>
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
		case 'mfees':
		include('mfees.php');
		break;
		case 'rfees':
		include('rfees.php');
		break;
		
	}}

	?>
	
      
      
    <tr>
      <td height="25" colspan="2" style="background-color:#B8AFFF"><center><b>&copy; 2014 by UserName | Managed by ABC</b></center></td>
    </tr>
  </tbody>
</table>
</html>