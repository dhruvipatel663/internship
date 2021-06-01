<html>
    <head>
        <title>Registration form</title>
        <style>
            *{
                margin : 0;
                padding : 0;
            }
            .maindiv{
                width : 100%;
                height: 100vh;
                box-sizing: border-box;
                background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("banner.jpg");
                background-position: center;
                background-size: cover;
                position: relative;
            }
            .form{
                width : 800px;
                height: 480px;
                padding : 15px;
                margin : 0 auto;
                border : 1px solid black;
                border-radius : 25px 0 25px 0;
                box-sizing: border-box;
                justify-content: center;
                align-items: center;
                position : absolute;
                left : 50px;
                right : 50px;
                margin-top: 100px;
            }
            .form h1{
                text-align: center;
            }
            .form table{
                border-spacing: 15px;
            }
            .form .input-field{
                width : 250px;
                font-size : 15px;
                padding : 12px;
                outline : none;
                border : none;
                border-bottom: 1px solid black;
                background: transparent;
                color : white;
            }
            .form input[type=submit]{
                text-align: center;
                border : none;
                border : 1px solid black;
                border-radius : 10px 0 10px 0;
            }
            .form input[type=submit]:hover{
                background-color: rgba(1,1,1,0.5);
            }
            .form input[type=radio]{
                margin : 5px;
            }
            textarea{
                background: transparent;
                color : white;
                width : 250px;
                outline : none;
                border : 1px solid black;
            }
        </style>
    </head>
    <body>
        <div class="maindiv">
            <div class="form">
            <h1>Register yourself here</h1>
            <form action="printData.php" method="get">
                <table>
                    <tr>
                        <td>First Name :</td>
                        <td><input class="input-field" type="text" name="text1" required=""/></td>
                        <td>Last Name :</td>
                        <td><input class="input-field" type="text" name="text2" required=""/></td>
                    </tr>
                    <tr>
                        <td>Date of Birth :</td>
                        <td><input class="input-field" type="date" name="text3" required=""/></td>
                        <td>Age :</td>
                        <td><input class="input-field" type="number" name="text4" required=""/></td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td><input class="input-field" type="email" name="text5" required=""/></td>
                        <td>Phone No.  :</td>
                        <td><input class="input-field" type="phone" name="text6" required=""/></td>
                    </tr>
                    <tr>
                        <td>Gender :</td>
                        <td><input type="radio" name="r1" value="Male" required=""/>Male<br/>
                            <input type="radio" name="r1" value="Female" required=""/>Female<br/>
                            <input type="radio" name="r1" value="Other" required=""/>Other
                        </td>
                        <td>Blood group :</td>
                        <td><input type="text" name="bg" class="input-field" required=""/><!-- <input type="checkbox" name="check[]" value="Gujarati" />Gujarati<br/>
                            <input type="checkbox" name="check[]" value="Hindi" />Hindi<br/>
                            <input type="checkbox" name="check[]" value="English" />English -->
                        </td>
                    </tr>
                    <tr>
                        <td>Pin Code:</td>
                        <td><input type="number" class="input-field" name="text7" required=""/></td>
                        <td>Address :</td>
                        <td><textarea rows="4" cols="50" name="text8"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center"><input class="input-field" type="submit" value="Register"/></td>
                    </tr>
                </table>
            </form>
            </div>
        </div>
    </body>
</html>
