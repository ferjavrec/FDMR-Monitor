<?php
$progname = basename($_SERVER['SCRIPT_FILENAME'],".php");
include_once 'include/config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>FDMR Monitor - Linked Systems</title>
    <script src="scripts/hbmon.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.php">
    <meta name="description" content="FDMR Monitor OA4DOA 2021">
  </head>
  <body>
    <img class="img-top" src="img/logo.png?random=323527528432525.24234" alt="">
    <h2><?php echo REPORT_NAME;?></h2>
    <div><?php include_once 'buttons.html'; ?></div>
    <noscript>You must enable JavaScript</noscript>
    <!-- Linked systems table -->
    <p id="lnksys"></p>
    <footer>
      <p>
        Copyright (c) 2016-2021<br>
        The Regents of the <a target="_blank" href=http://k0usy.mystrikingly.com >K0USY Group</a>. All rights reserved.<br>
        <a title="FDMR Monitor OA4DOA v2021-11" target="_blank" href=https://github.com/yuvelq/FDMR-Monitor.git>Version OA4DOA 2021</a>
        <!-- Credits: SP2ONG 2019-2021 (v20212012)-->
        <!-- THIS COPYRIGHT NOTICE MUST BE DISPLAYED AS A CONDITION OF THE LICENCE GRANT FOR THIS SOFTWARE. ALL DERIVATEIVES WORKS MUST CARRY THIS NOTICE -->
      </p>
    </footer>
  </body>
</html>
