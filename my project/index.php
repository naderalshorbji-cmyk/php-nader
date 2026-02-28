<!DOCTYPE html>
<html>
<head>
    <title>Project PHP</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
            width: 60%;
        }
        th, td {
           /* border: 1px solid #333;*/
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #373636;
        }
        td {
            background-color: #cfcaca;
        }
        h2,th,td {
            text-align: center;
            color: #afafaf;
        }
    </style>
</head>
<body>
    <center>
        <h1>Welcome to My web site</h1>
    </center>

    <form action="" method="post">
        <fieldset>
            <legend>Table information</legend>
            <table>
                <tr>
                    <th>Rows :</th>
                    <td><input type="number" name="Rows" required></td>
                </tr>
                <tr>
                    <th>Cols :</th>
                    <td><input type="number" name="Cols" required></td>
                </tr>
                <tr>
                    <th rowspan="2">
                        <button type="submit">Create Table</button>
                    </th>
                </tr>
            </table>
        </fieldset>
    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rows = (int)$_POST['Rows'];
    $cols = (int)$_POST['Cols'];

    echo "<h2>Created the Table</h2>";
    echo "<table>";

    for ($i = 1; $i <= $rows; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $cols; $j++) {
            
            if($i == 1)                                
                {
                    echo "<th><input  required></th>";
                }
                else
                    {
                     echo "<td><input> </td>";
                    }

            
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>
</body>
</html>