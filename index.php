<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">

    <title>Модуль 11. Старт в php. Практика</title>
</head>
<body>
  <h1>Модуль 11. Старт в PHP. Практика</h1>
    <h2>Задание 1. Таблица истинности PHP</h2>
<table>
<thead>
  <tr>
    <th><strong>A</strong></th>
    <th><strong>B</strong></th>
    <th><strong>!A</strong></th>
    <th><strong>A || B</strong></th>
    <th><strong>A &amp;&amp; B</strong></th>
    <th><strong>A xor B</strong></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td><?php $a = false; echo (int)$a; ?></td>
    <td><?php $b = false; echo (int)$b; ?></td>
    <td> <?php echo (int)(!$a); ?></td>
    <td><?php echo (int)($a || $b); ?></td>
    <td><?php echo (int)($a && $b); ?></td>
    <td><?php echo (int)($a xor $b); ?></td>
  </tr>
  <tr>
    <td><?php $a = false; echo (int)$a; ?></td>
    <td><?php $b = true; echo (int)$b; ?></td>
    <td> <?php echo (int)(!$a); ?></td>
    <td><?php echo (int)($a || $b); ?></td>
    <td><?php echo (int)($a && $b); ?></td>
    <td><?php echo (int)($a xor $b); ?></td>
  </tr>
  <tr>
    <td><?php $a = true; echo (int)$a; ?></td>
    <td><?php $b = false; echo (int)$b; ?></td>
    <td> <?php echo (int)(!$a); ?></td>
    <td><?php echo (int)($a || $b); ?></td>
    <td><?php echo (int)($a && $b); ?></td>
    <td><?php echo (int)($a xor $b); ?></td>
  </tr>
  <tr>
    <td><?php $a = true; echo (int)$a; ?></td>
    <td><?php $b = true; echo (int)$b; ?></td>
    <td> <?php echo (int)(!$a); ?></td>
    <td><?php echo (int)($a || $b); ?></td>
    <td><?php echo (int)($a && $b); ?></td>
    <td><?php echo (int)($a xor $b); ?></td>
  </tr>
</tbody>
</table>
<h2>Гибкое сравнение</h2>
<table border="1">

<tr>
<td>&nbsp;</td>
<th><?php $x1 = true; echo 'true'; ?></th>
<th><?php $x2 = false; echo 'false'; ?></th>
<th><?php $x3 = 1; echo $x3; ?></th>
<th><?php $x4 = 0; echo $x4; ?></th>
<th><?php $x5 = -1; echo $x5; ?></th>
<th><?php $x6 = "1"; echo ' "1" '; ?></th>
<th><?php $x7 = null; echo 'null'; ?></th>
<th><?php $x8 = "php"; echo '"php"'; ?></th>
</tr>

<tr>

<th><?php $y1 = true; echo 'true'; ?></th>
<td><?php echo ($x1==$y1)?"true":"false"; ?>
<td><?php echo ($x2==$y1)?"true":"false"; ?>
<td><?php echo ($x3==$y1)?"true":"false"; ?>
<td><?php echo ($x4==$y1)?"true":"false"; ?>
<td><?php echo ($x5==$y1)?"true":"false"; ?>
<td><?php echo ($x6==$y1)?"true":"false"; ?>
<td><?php echo ($x7==$y1)?"true":"false"; ?>
<td><?php echo ($x8==$y1)?"true":"false"; ?>


</tr>
<tr>

<th><?php $y2 = false; echo 'false'; ?></th>
<td><?php echo ($x1==$y2)?"true":"false"; ?>
<td><?php echo ($x2==$y2)?"true":"false"; ?>
<td><?php echo ($x3==$y2)?"true":"false"; ?>
<td><?php echo ($x4==$y2)?"true":"false"; ?>
<td><?php echo ($x5==$y2)?"true":"false"; ?>
<td><?php echo ($x6==$y2)?"true":"false"; ?>
<td><?php echo ($x7==$y2)?"true":"false"; ?>
<td><?php echo ($x8==$y2)?"true":"false"; ?>

<tr>

<th><?php $y3 = 1; echo $y3; ?></th>
<td><?php echo ($x1==$y3)?"true":"false"; ?>
<td><?php echo ($x2==$y3)?"true":"false"; ?>
<td><?php echo ($x3==$y3)?"true":"false"; ?>
<td><?php echo ($x4==$y3)?"true":"false"; ?>
<td><?php echo ($x5==$y3)?"true":"false"; ?>
<td><?php echo ($x6==$y3)?"true":"false"; ?>
<td><?php echo ($x7==$y3)?"true":"false"; ?>
<td><?php echo ($x8==$y3)?"true":"false"; ?>

<tr>

<th><?php $y4 = 0; echo $y4; ?></th>
<td><?php echo ($x1==$y4)?"true":"false"; ?>
<td><?php echo ($x2==$y4)?"true":"false"; ?>
<td><?php echo ($x3==$y4)?"true":"false"; ?>
<td><?php echo ($x4==$y4)?"true":"false"; ?>
<td><?php echo ($x5==$y4)?"true":"false"; ?>
<td><?php echo ($x6==$y4)?"true":"false"; ?>
<td><?php echo ($x7==$y4)?"true":"false"; ?>
<td><?php echo ($x8==$y4)?"true":"false"; ?>
</tr>

<tr>
<th><?php $y5 = -1; echo $y5; ?></th>
<td><?php echo ($x1==$y5)?"true":"false"; ?>
<td><?php echo ($x2==$y5)?"true":"false"; ?>
<td><?php echo ($x3==$y5)?"true":"false"; ?>
<td><?php echo ($x4==$y5)?"true":"false"; ?>
<td><?php echo ($x5==$y5)?"true":"false"; ?>
<td><?php echo ($x6==$y5)?"true":"false"; ?>
<td><?php echo ($x7==$y5)?"true":"false"; ?>
<td><?php echo ($x8==$y5)?"true":"false"; ?>

</tr>
<tr>
<th><?php $y6 = "1"; echo ' "1" '; ?></th>
<td><?php echo ($x1==$y6)?"true":"false"; ?>
<td><?php echo ($x2==$y6)?"true":"false"; ?>
<td><?php echo ($x3==$y6)?"true":"false"; ?>
<td><?php echo ($x4==$y6)?"true":"false"; ?>
<td><?php echo ($x5==$y6)?"true":"false"; ?>
<td><?php echo ($x6==$y6)?"true":"false"; ?>
<td><?php echo ($x7==$y6)?"true":"false"; ?>
<td><?php echo ($x8==$y6)?"true":"false"; ?>

</tr>
<tr>
<th><?php $y7 = null; echo 'null'; ?></th>
<td><?php echo ($x1==$y7)?"true":"false"; ?>
<td><?php echo ($x2==$y7)?"true":"false"; ?>
<td><?php echo ($x3==$y7)?"true":"false"; ?>
<td><?php echo ($x4==$y7)?"true":"false"; ?>
<td><?php echo ($x5==$y7)?"true":"false"; ?>
<td><?php echo ($x6==$y7)?"true":"false"; ?>
<td><?php echo ($x7==$y7)?"true":"false"; ?>
<td><?php echo ($x8==$y7)?"true":"false"; ?>

</tr>
<tr>
<th><?php $y8 = 'php'; echo '"php"'; ?></th>
<td><?php echo ($x1==$y8)?"true":"false"; ?>
<td><?php echo ($x2==$y8)?"true":"false"; ?>
<td><?php echo ($x3==$y8)?"true":"false"; ?>
<td><?php echo ($x4==$y8)?"true":"false"; ?>
<td><?php echo ($x5==$y8)?"true":"false"; ?>
<td><?php echo ($x6==$y8)?"true":"false"; ?>
<td><?php echo ($x7==$y8)?"true":"false"; ?>
<td><?php echo ($x8==$y8)?"true":"false"; ?>

</tr>
</table>


<h2>Жесткое сравнение</h2>
<table border="1">

<tr>
<td>&nbsp;</td>
<th><?php $x1 = true; echo 'true'; ?></th>
<th><?php $x2 = false; echo 'false'; ?></th>
<th><?php $x3 = 1; echo $x3; ?></th>
<th><?php $x4 = 0; echo $x4; ?></th>
<th><?php $x5 = -1; echo $x5; ?></th>
<th><?php $x6 = "1"; echo ' "1" '; ?></th>
<th><?php $x7 = null; echo 'null'; ?></th>
<th><?php $x8 = "php"; echo '"php"'; ?></th>
</tr>

<tr>

<th><?php $y1 = true; echo 'true'; ?></th>
<td><?php echo ($x1===$y1)?"true":"false"; ?>
<td><?php echo ($x2===$y1)?"true":"false"; ?>
<td><?php echo ($x3===$y1)?"true":"false"; ?>
<td><?php echo ($x4===$y1)?"true":"false"; ?>
<td><?php echo ($x5===$y1)?"true":"false"; ?>
<td><?php echo ($x6===$y1)?"true":"false"; ?>
<td><?php echo ($x7===$y1)?"true":"false"; ?>
<td><?php echo ($x8===$y1)?"true":"false"; ?>


</tr>
<tr>

<th><?php $y2 = false; echo 'false'; ?></th>
<td><?php echo ($x1===$y2)?"true":"false"; ?>
<td><?php echo ($x2===$y2)?"true":"false"; ?>
<td><?php echo ($x3===$y2)?"true":"false"; ?>
<td><?php echo ($x4===$y2)?"true":"false"; ?>
<td><?php echo ($x5===$y2)?"true":"false"; ?>
<td><?php echo ($x6===$y2)?"true":"false"; ?>
<td><?php echo ($x7===$y2)?"true":"false"; ?>
<td><?php echo ($x8===$y2)?"true":"false"; ?>

<tr>

<th><?php $y3 = 1; echo $y3; ?></th>
<td><?php echo ($x1===$y3)?"true":"false"; ?>
<td><?php echo ($x2===$y3)?"true":"false"; ?>
<td><?php echo ($x3===$y3)?"true":"false"; ?>
<td><?php echo ($x4===$y3)?"true":"false"; ?>
<td><?php echo ($x5===$y3)?"true":"false"; ?>
<td><?php echo ($x6===$y3)?"true":"false"; ?>
<td><?php echo ($x7===$y3)?"true":"false"; ?>
<td><?php echo ($x8===$y3)?"true":"false"; ?>

<tr>

<th><?php $y4 = 0; echo $y4; ?></th>
<td><?php echo ($x1===$y4)?"true":"false"; ?>
<td><?php echo ($x2===$y4)?"true":"false"; ?>
<td><?php echo ($x3===$y4)?"true":"false"; ?>
<td><?php echo ($x4===$y4)?"true":"false"; ?>
<td><?php echo ($x5===$y4)?"true":"false"; ?>
<td><?php echo ($x6===$y4)?"true":"false"; ?>
<td><?php echo ($x7===$y4)?"true":"false"; ?>
<td><?php echo ($x8===$y4)?"true":"false"; ?>
</tr>

<tr>
<th><?php $y5 = -1; echo $y5; ?></th>
<td><?php echo ($x1===$y5)?"true":"false"; ?>
<td><?php echo ($x2===$y5)?"true":"false"; ?>
<td><?php echo ($x3===$y5)?"true":"false"; ?>
<td><?php echo ($x4===$y5)?"true":"false"; ?>
<td><?php echo ($x5===$y5)?"true":"false"; ?>
<td><?php echo ($x6===$y5)?"true":"false"; ?>
<td><?php echo ($x7===$y5)?"true":"false"; ?>
<td><?php echo ($x8===$y5)?"true":"false"; ?>

</tr>
<tr>
<th><?php $y6 = "1"; echo ' "1" '; ?></th>
<td><?php echo ($x1===$y6)?"true":"false"; ?>
<td><?php echo ($x2===$y6)?"true":"false"; ?>
<td><?php echo ($x3===$y6)?"true":"false"; ?>
<td><?php echo ($x4===$y6)?"true":"false"; ?>
<td><?php echo ($x5===$y6)?"true":"false"; ?>
<td><?php echo ($x6===$y6)?"true":"false"; ?>
<td><?php echo ($x7===$y6)?"true":"false"; ?>
<td><?php echo ($x8===$y6)?"true":"false"; ?>

</tr>
<tr>
<th><?php $y7 = null; echo 'null'; ?></th>
<td><?php echo ($x1===$y7)?"true":"false"; ?>
<td><?php echo ($x2===$y7)?"true":"false"; ?>
<td><?php echo ($x3===$y7)?"true":"false"; ?>
<td><?php echo ($x4===$y7)?"true":"false"; ?>
<td><?php echo ($x5===$y7)?"true":"false"; ?>
<td><?php echo ($x6===$y7)?"true":"false"; ?>
<td><?php echo ($x7===$y7)?"true":"false"; ?>
<td><?php echo ($x8===$y7)?"true":"false"; ?>

</tr>
<tr>
<th><?php $y8 = 'php'; echo '"php"'; ?></th>
<td><?php echo ($x1===$y8)?"true":"false"; ?>
<td><?php echo ($x2===$y8)?"true":"false"; ?>
<td><?php echo ($x3===$y8)?"true":"false"; ?>
<td><?php echo ($x4===$y8)?"true":"false"; ?>
<td><?php echo ($x5===$y8)?"true":"false"; ?>
<td><?php echo ($x6===$y8)?"true":"false"; ?>
<td><?php echo ($x7===$y8)?"true":"false"; ?>
<td><?php echo ($x8===$y8)?"true":"false"; ?>

</tr>
</table>
<h2>Выводы</h2>
<p><strong>Оператор ==: </strong>этот оператор используется для проверки, равны ли заданные значения или нет. Если да, он возвращает true ,
   в противном случае он возвращает false .</p>
   <p><strong>Оператор ===: </strong> этот оператор используется для проверки заданных значений и его типа данных равны или нет. Если да, то возвращает true , в противном случае возвращает false .

</p>
</body>
</html>

</body>
</html>
  

