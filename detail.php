<?php include "connect.php" ?>
<html>

<head>
    <meta charset="utf-8">
</head>
<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]);
$stmt->execute();
$row = $stmt->fetch();
?>
<div style="padding: 15px; font-size: 20px">

    <div>
        <img src='<?=$row["username"]?>.jpg' width='200'><br><br>
        ชื่อสมาชิก: <?= $row["name"] ?><br>
        ที่อยู่: <?= $row["address"] ?><br>
        email: <?= $row["email"] ?><br>
    </div>
    </body>

</html>