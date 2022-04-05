<!DOCTYPE HTML>
<?php include_once __DIR__."/functions.php";?>
<html>
<head>
<style>
#outer
{
height:200px;
width:200px;
background:orange;
}
</style>
</head>
<body>
<div id="outer">
<form action=" <?php echo url("registerHandler.php");?>" method="post">
Name<br/>
<input type="text" name="name"/><br/><br/>
Email<br/>
<input type="email" name="email"/><br/>
<input type="submit" name="register"/>

</form>
</div>
</body>
</html>