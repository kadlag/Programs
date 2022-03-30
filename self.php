<html>
<head>
<title> PHP self processing form</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>">

<div> Enter the number <span>
<input type="text" name="a" id="a" value="<?php if(isset($_GET['a'])) echo $_GET['a'] ?>"> </span>
</div>


<div> Enter the number <span>
<input type="text" name="b" id="b" value="<?php if(isset($_GET['b']))  echo $_GET['b'] ?>"> </span>
</div>


<div> Enter the number <span>
<input type="text" name="c" id="c" value="<?php if(isset($_GET['c']))  echo $_GET['c'] ?>"> </span>
</div>

<select name="class[]" multiple id="">
<option value="1" <?php if(isset($_GET['class'])) if($_GET['class'[0]]==1) echo "selected"; else echo "";?>>FYBCS </option> 
<option value="2" <?php if(isset($_GET['class'])) if($_GET['class'[1]]==2) echo "selected"; else echo "";?>>SYBCS </option> 
<option value="3" <?php if(isset($_GET['class'])) if($_GET['class'[2]]==3) echo "selected"; else echo "";?>>TYBCS </option> 
</select>

<div>
<input type="submit" name='s' value="Disp">
</div>

</form>
</body>
</html>

<?php 
if(isset($_GET['s']))
{
print_r($_GET['class']);
}

?>










