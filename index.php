<?php include "layouts/header.php"; ?>

<div class="container">

<center><h2 style="color:white; margin-top:20%">Welcome to simple chat system.</h2></center>
</div>

<input type=button value=
'Get Server Time' onclick="timer_function();">
  
<?Php
echo date("d/m/y : H:i:s", time());
?>

</body>
</html>