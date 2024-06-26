// ข้อ 1

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Documents</title>
</head>
<body>
<form method="get">
ทีมที่1 :<input type="text" name="e1"></br>
ทีมที่2 :<input type="text" name="e2"></br>
<input type="submit" value="ตกลง">
</form>
<?php
$e1 = $_GET['e1'];
$e2 = $_GET['e2'];
if ($e1 > $e2) {
echo "ทีมที่1ชนะ";
}
if ($e2 > $e1) {
echo "ทีมที่2ชนะ";
}
if ($e1 == $e2) {
echo "เสมอ";
}
?>
</body>
</html>

// ข้อ2

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Documents</title>
</head>
<body>
<form method="GET">
เดือน :<input type="text" name="mt"></br>
<input type="submit" value="ตกลง">
</form>
<?php
$mt = $_GET['mt'];
switch ($mt) {
case ("มกราคม"):case ("มีนาคม"):case ("พฤษภาคม"):case ("กรกฎาคม"):case ("สิงหาคม"):case ("ตุลาคม"):case ("ธันวาคม"):
echo "เดือน $mt มี 31 วัน";
break;
case ("เมษายน"):case ("มิถุนายน"):case ("กันยายน"):case ("พฤศจิกายน"):
echo "เดือน $mt มี 30 วัน";
break;
default:
echo "ไม่พบเดือน";
}
?>
</body>
</html>