<html>
<style> label {display:block;} .errors{color:red;} </style>
<body>

<?php echo form_open('pages') ;?>
<p>
<?php
echo form_label('UserName : ','username');
echo form_input('username','','id="user"');
?>
</p>
<?php
echo form_label('PassWord : ','password');
echo form_password('password','','id="pass"');
?>
</p>
<?php
echo form_submit('submit','Login');
?>
<?php echo form_close(); ?>
<div class="errors"><?php echo validation_errors() ;?> </div>
<!--
<form action="input1.php" method="post">
Name: <input type="text" name="username">
Age: <input type="text" name="password">
<input type="submit">
</form>
-->

</body>
</html>