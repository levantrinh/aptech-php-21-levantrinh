<?php
echo "<h1>xin chao</h1>";
?>
<h1>xin chao viet nam</h1>

<?php
echo "<a href=\"./\">BACK</a>";
echo "<h1>1.SYNTAX</h1>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
</head>
<body>
   <h1 class="text-primary">My Name: Le van trinh</h1>
   <h1 class="text-info">My Projetc: Web ban hang</h1>
</body>
</html>

<?php
echo 'My name: Lê Văn Trình <br><hr>';
echo 'My project: Web bán hàng mỹ phẩm <br><hr>';
echo 'My website: myphamshinebeauty.vn <hr>';
$myName = "Le Van Trinh";
$myProject = "Web Ban Hang";
echo "$myName + $myProject <hr>";
print_r ($myName . ' - ' . $myProject);

echo "<h1>5.CONSTANT</h1>";
define("TEN", "LE VAN TRINH", false);
define("TEN", "LE VAN TRINH DEP TRAI", true);
echo TEN;
echo "<hr>";
echo tEn;
?>