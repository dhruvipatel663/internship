<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Deserts,Environment</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></link>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="contact.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="page">
        <?php
          include 'header.php';
        ?><!-- header -->    
        <div id="main">
            <div id="sidebar">
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
                                                <td>Message:</td>
                                                <td><textarea id="text" name="name" rows="5" cols="22"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="submit" value="Send"/></td>
                                            </tr>
                                        </table>
                                    </form>
            </div><!-- sidebar -->               
            <div id="content">
                <div class="address content">
            <table>
                <tr>
                   <td><p class="p1"><i class="fa fa-phone icon"></i></p></td>
                   <td><font size="4" style="font-weight: bold;">Phone</font>
                        <p>+91 0345216789</p>
                        <p>+91 1234567890</p>
                   </td>
                </tr>
                <tr>
                    <td>
                        <p class="p1"><i class="fa fa-envelope"></i></p>
                    </td>
                    <td>
                        <font size="4" style="font-weight: bold;">Email</font>
                        <p class="td2p">desertgeo@gmail.com</p>
                        <p class="td2p">geography@gmail.com</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p1"><i class="fa fa-map-marker"></i></p>
                    </td>
                    <td>
                        <font size="4" style="font-weight: bold;">Address</font>
                        <pre>82, Sardar Patel tour
PO Box No. 8,
Beyond Vithal Udhyog Nagar.
Dist. Anand.
St. Gujarat.
India
                        </pre>
                    </td>
                </tr>
            </table>
        </div>
   <!-- post -->
            </div><!-- content -->
            <div class="clearing">&nbsp;</div> 
        </div><!-- main -->
    </div><!-- page -->
    <?php
        include 'footer.php';
    ?>
</body>
</html>



