<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
        border: 1px solid;
        }
    </style>    
</head>
<body>
    <?php
        $arr = ["Daftar Smartphone Samsung", "Samsung Galaxy S22", "Samsung Galaxy S22+", 
        "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"];
    ?>

    <table>
        <tr>
            <th> <?php echo $arr[0] ?> </th>
        </tr>
        <tr>
            <td>
                <?php echo $arr[1] ?>
            </td>
        </tr>
        <tr>
            <td>
                 <?php echo $arr[2] ?>
            </td>
        </tr>
        <tr>
            <td>
                 <?php echo $arr[3] ?>
            </td>
        </tr>
        <tr>
            <td>
                 <?php echo $arr[4] ?>
            </td>
        </tr>
    </table
</body>
</html>
