<!DOCTYPE html>
<html>

<head>
 <title>srvch</title>
</head>

<body>
 <font face="Arial">
  <h3><?php echo $_SERVER['SERVER_ADDR']; ?> <a href="../">Server Status</a></h3>
  <?php
  require_once './data.php';
  require_once './Status.php';
  $status = new Status();
  foreach ($servers as $server) {
   $status->setPort($server['port']);
   if ($status->check()) {
    $server['status'] = 1;
    echo "<div>";
    echo $server['name'] . ' / ' . $server['port'];
    echo "</div>";
   }
  }
  ?>
 </font>
</body>

</html>
