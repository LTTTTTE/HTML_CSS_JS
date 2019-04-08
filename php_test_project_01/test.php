<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Title</title>
</head>

<script type="text/javascript">

    function get_before_dir(dir){
        var index = dir.lastIndexOf('/');
        echo alert("hi"+dir.slice(0,index));
        return dir.slice(0,index);
    }
  <?php 
    ?>
</script>
 
<body>
<h1>++++++++++++</h1>
<h2>1+1</h2>
<?php
echo -1.1 + 1;
?>
<h2>2-1</h2>
<?php
echo 2 - 1;
?>

<h1>String Operator</h1>
<?php
echo '\'hello World\'';
?>
<h2>문자열 결합</h2>
<?php
echo "hello" . "World ";
echo strlen("HelloWorld");
?>
<br>
<?php
$a = 10;
echo $a;
?>
<hr>
<p>
여기는 <?php
    if (isset($_GET['id'])) {
        echo $_GET['id'];
    } else {
        echo ' 공백 ';
    }
    ?> 입니다.
</p>

<ol>
<li><a href="test.php?id=1">1</a></li>
<li><a href="test.php?id=2">2</a></li>
<li><a href="test.php?id=3">3</a></li>
</ol>
<h1>
    <?php
    echo $_GET['id'];
    ?>
</h1>
<?php
$str = "Lorem ipsum dolor sit, 
amet consectetur adipisicing elit. Atque alias pos
simus enim ipsa laborum numquam minima eum! Archite
cto vero corporis, ab minus quod, impedit soluta, n
am ad corrupti odio assumenda.";
echo $str;
echo strlen($str);
echo "<br>#############<br>";
echo nl2br($str);

?>
<div class="get_border">
<ol>


<?php

if (isset($_GET['id'])) {
    $dir = $_GET['id'];
} else {
    $dir = "";
}
?>
<li><a href="test.php?id=">Go HOME</a></li>
<li><a onclick=get_before_dir(<?= $dir ?>) href="test.php?id=<?= $dir ?>">Go_Back</a></li>
<?php
$list = scandir('C://' . $dir);
$i = 0;
while ($i < count($list)) {
    if ($list[$i] != '.' && $list[$i] != '..') {
        ?>
                <li><a href="test.php?id=<?= $dir . '/' . $list[$i] ?>"><?= $list[$i] ?></a></li>
                <?php

            }

            $i = $i + 1;
        }
        ?>
</ol>
</div>

<form action="form.php" method="post">
    <input type="text" name="title"><hr>
    <textarea name="description" id="" cols="30" rows="10"></textarea><hr>
    <input type="submit">
</form>
</body>
</html>

