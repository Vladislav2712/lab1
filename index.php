<?php
require_once __DIR__ . "/db.php"
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="processor" placeholder="Find Processor">
    <input type="submit" value="Input"><br>
</form>
<br>
<form action="" method="post">
    <select name="software">
        <option value="Microsoft Office 2019">Microsoft Office 2019</option>
        <option value="Adobe Photoshop">Adobe Photoshop</option>
        <option value="PHP Storm">PHP Storm</option>
    </select>
    <input type="submit" value="Input"><br>
</form>
<br>
<form action="" method="post">
    <input type="submit" value="Check guarantee" name="guarantee"><br>
</form>
<br>
<?php
if (isset($_POST["processor"])) {
    findProcessor($_POST["processor"]);
} elseif (isset($_POST["software"])) {
    findSoftware($_POST["software"]);
}elseif (isset($_POST["guarantee"])) {
    findGuarantee();
}
?>
</body>
</html>

