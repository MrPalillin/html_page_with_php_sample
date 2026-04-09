<html>
<body>
<div>
The name inserted is <?php echo $_POST["username"]; ?>
</div>
<div>
The check is in value <?php
if(isset($_POST["check"])){
 echo $_POST["check"];
}else{
 echo "off";
}
?>
</div>
</body>
</html>
