<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="/index.php/Home/Article/insert">
    title：<input type="text" name="title"/><br/>
    content:<textarea name="content" rows="5" cols="45"></textarea>
    <input type="submit" value="submit"/>
</form>
</body>
</html>