<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>
</head>
<body>
    <table border ="1">
    <tr>
        <th>Input True</td>
        <th>Input 2</td>
        <th>AND</td>
        <th>OR</td>
    </tr>    
    <tr>
        <td><?php $logika1 = (true && false); var_dump($logika1)  ?></td>
        <td><?php $logika1 = (true && false); var_dump($logika1)  ?></td>
        <td><?php echo "0"  ?></td>
        <td><?php echo "0"  ?></td>
    </tr>    
    <tr>
        <td><?php $logika2 = (false && true); var_dump($logika2)  ?></td>
        <td><?php $logika2 = (true || false); var_dump($logika2)  ?></td>
        <td><?php echo "0"  ?></td>
        <td><?php echo "0"  ?></td>
    </tr>    
    <tr>
        <td><?php $logika3 = (false && false); var_dump($logika3)  ?></td>
        <td><?php $logika3 = (true && false); var_dump($logika3)  ?></td>
        <td><?php echo "0"  ?></td>
        <td><?php echo "0"  ?></td>
    </tr>    
    <tr>
        <td><?php $logika4 = (false && true); var_dump($logika4)  ?></td>
        <td><?php $logika4 = (true && false); var_dump($logika4)  ?></td>
        <td><?php echo "0"  ?></td>
        <td><?php echo "0"  ?></td>
    </tr>    
   
    </table>

    <br><br><br>
    <?php
        $var1="ayo";
        $var2="belajar";
        $var3="bersama";
        $var4="khosy";
    ?>
    <table border ="1">
        <tr>
            <td>input1</td>
            <td>input2</td>
            <td>hasil</td>
        </tr>
        <tr>
            <td>ayo</td>
            <td>belajar</td>
            <td><?php echo $var1.$var2?></td>
        </tr>
        <tr>
            <td>bersama</td>
            <td>khosy</td>
            <td><?php echo $var3.$var4?></td>
        </tr>
    </table>
</body>
</html>