<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
        border: 1px solid;
        }

        th {
            font-size: 30px;
            background-color: #ff0000;
            padding-top: 25px;
            padding-bottom: 25px;
        }
    </style>    
</head>
<body>
    <?php
        $arr = ['Judul' => "Daftar Smartphone Samsung", 'Data 1' => "Samsung Galaxy S22", 'Data 2' => "Samsung Galaxy S22+", 
        'Data 3' => "Samsung Galaxy A03", 'Data 4' => "Samsung Galaxy Xcover 5"];
    ?>

    <table>
        <tr>
            <th> <?php echo $arr['Judul'] ?> </th>
        </tr>
        <tr>
            <td>
                <?php echo $arr['Data 1'] ?>
            </td>
        </tr>
        <tr>
            <td>
                 <?php echo $arr['Data 2'] ?>
            </td>
        </tr>
        <tr>
            <td>
                 <?php echo $arr['Data 3'] ?>
            </td>
        </tr>
        <tr>
            <td>
                 <?php echo $arr['Data 4'] ?>
            </td>
        </tr>
    </table
</body>
</html>
