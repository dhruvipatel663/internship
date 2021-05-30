<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Techies - IT company</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="contact.css"></link>
</head>
<body>
    <?php
      include 'menu.php';
      include 'header.php';
    ?>
<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
            <div><img src="images/lab4.jpg" width="900" height="450" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Enter&nbsp;&nbsp;your &nbsp;&nbsp;details. </a></h2>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
                                    <form action="" method="post" class="form-info">
                                        <table>
                                            <tr>
                                                <td>Name :</td>
                                                <td><input type="text" name="text1"/></td>
                                            </tr>
                                            <tr>
                                                <td>Email :</td>
                                                <td><input type="email" name="text2"/></td>
                                            </tr>
                                            <tr>
                                                <td>Phone :</td>
                                                <td><input type="phone" name="text3"/></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="submit" value="Submit"/></td>
                                            </tr>
                                        </table>
                                    </form>
				</div>
			</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
                                    <div>
                                        <a href="#" class="fb"><i class="fa fa-facebook"></i></a>
                                    </div>
					<div style="clear: both;">&nbsp;</div>
				</li>
                                <li>
                                    <div>
                                        <a href="#" class="tw"><i class="fa fa-twitter"></i></a>
                                    </div>
					<div style="clear: both;">&nbsp;</div>
				</li>
                                <li>
                                    <div>
                                        <a href="#" class="li"><i class="fa fa-linkedin"></i></a>
                                    </div>
					<div style="clear: both;">&nbsp;</div>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<?php
   include 'footer.php';
?>
<!-- end #footer -->
</body>
</html>
