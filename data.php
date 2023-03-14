<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
    <table border = 1>
        <tr>
            <td>ID</td>
            <td>ISP</td>
            <td>IP</td>
            <td>NEGARA</td>
            <td>KOTA</td>
        </tr>
        <?php
        require 'config.php';
        $rows = mysqli_query($conn, "SELECT * FROM tb_data");
        ?>
        <?php foreach($rows as $row) : ?>
            <tr>
                <td>VISITOR <?php echo $row["id"]; ?></td>
                <td><?php echo $row["ip"]; ?></td>
                <td><?php echo $row["isp"]; ?></td>
                <td><?php echo $row["negara"]; ?></td>
                <td><?php echo $row["kota"]; ?></td>
            </tr>
            <?php endforeach; ?>
            <br>
            <a href="index.php">Index</a>
    </table>
</body>
</html>