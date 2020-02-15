<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="app/View/scripts/main.js"></script>
    <title></title>
</head>
<body>
<h1><?php echo $header?></h1>
<!--<form method="post" action="index.php?action=add">-->
<form>
    <h3>Add</h3>
    todo: <input name="todo"><br><br>
    description: <input name="description"><br><br>
    category: <input name="category"><br><br>
    <button type="submit">Add</button>
</form>
<br>
<table border="1">
   <tr>
    <th>To do</th>
    <th>Описание</th>
    <th>Категория</th>
    <th>Действия</th>
   </tr>
   <?php foreach($params['todos'] as $todo) {?>
       <tr>
           <td><?php echo $todo->todo?></td>
           <td><?php echo $todo->description?></td>
           <td><?php echo $todo->category?></td>
           <td><a href="/index.php?action=delete&itemId=<?php echo $todo->id?>">Удалить</a></td>
       </tr>
   <?php }?>
</table>
</body>
</html>