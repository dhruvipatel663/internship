<html>
    <head>
        <title>Marks and Results</title>
        <style>
            table,tr,td{
                border : none;
                border-bottom: 1px solid black;
                width : 30%;
                text-align: center;
                padding : 8px;
            }
            input{
                border : none;
                width : 100%;
                outline : none;
                font-size : 18px;
            }
            input[type=submit]{
                padding : 8px;
            }
        </style>
    </head>
    <body>
        <h2>Enter Marks:</h2>
        <form method="post" action="result.php">
        <table>
            <tr>
                <th>English :</th>
                <td><input type="number" min="1" max="100" name="s1"/></td>
            </tr>
            <tr>
                <th>Mathematics :</th>
                <td><input type="number" min="1" max="100" name="s2"/></td>
            </tr>
            <tr>
                <th>Chemistry :</th>
                <td><input type="number" min="1" max="100" name="s3"/></td>
            </tr>
            <tr>
                <th>Physics :</th>
                <td><input type="number" min="1" max="100" name="s4"/></td>
            </tr>
            <tr>
                <th>Computer :</th>
                <td><input type="number" min="1" max="100" name="s5"/></td>
            </tr>
            <tr>
                <td colspan="2" style="border : none;"><input type="submit" value="Result"/></td>
            </tr>
        </table>
        </form>
    </body>
</html>

