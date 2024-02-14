<html>

<head>
    <title> Select to See Detail 651</title>
</head>

<body>
    <?php
    require "connect.php";
    $sql = "SELECT * FROM food";


    $stmt = $conn->prepare($sql);
    $stmt->execute();
    ?>

    <table width="800" border="1">
        <tr>
            <th width="90">
                <div align="center">รหัสอาหาร </div>
            </th>
            <th width="140">
                <div align="center">ชื่ออาหาร </div>
            </th>
            <th width="120">
                <div align="center">ราตา </div>
            </th>
            <th width="100">
                <div align="center">ประเภทอาหาร </div>
            </th>
            <th width="50">
                <div align="center">ภาพ </div>
            </th>
        </tr>

        <?php
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>

            <tr>
                <td>

                    <?php echo $result["FoodID"]; ?>

                </td>

                <td>
                    <?php echo $result["FoodName"]; ?>
                </td>

                <td><?php echo $result["Foodprice"]; ?></div>
                </td>
                <td><?php echo $result["Foodimage"]; ?></td>
                <td><?php echo $result["MenuID"]; ?></div>
            </tr>

        <?php
        }
        ?>

    </table>

    <?php
    $conn = null;
    ?>

</body>

</html>