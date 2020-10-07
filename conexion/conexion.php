<?php
  $link = mysqli_connect("localhost", "root", "");

  mysqli_select_db($link, "joyeria_bety");
  $link->set_charset("UTF8");
?>