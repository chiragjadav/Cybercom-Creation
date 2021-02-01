<?php
//Creating cookie
setcookie('username','chirag',time()+10000);
//Destroy cookie
setcookie('username','chirag',time()-10000);
?>