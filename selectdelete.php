<html>

<head>
    <title> Select to See Detail 651</title>
</head>

<body>
    <?php
    require "connect.php";
    $sql = "SELECT * FROM Food";


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
                <div align="center">ราคา </div>
            </th>
            <th width="100">
                <div align="center">ประเภทอาหาร </div>
        </tr>

        <?php
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>

            <tr>
                <td>
                    <a href="deletefood.php?FoodID=<?php echo $result['FoodID']; ?>">
                    <?php echo $result["FoodID"]; ?>
                    </a>

                </td>

                <td>
                    <?php echo $result["FoodName"]; ?>
                </td>

                <td><?php echo $result["Foodprice"]; ?></div>
                </td>
                <td><?php echo $result["MenuID"]; ?></td>
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