<!DOCTYPE html>
<html>

<head>
 <title>srvch</title>
</head>

<body>
 <font face="Arial">
  <?php
  require_once './data.php';
  require_once './Status.php';
  $status = new Status();
  foreach ($servers as $server) {
   echo "<div>";
   $status->setPort($server['port']);
   if ($status->check()) {
    $server['status'] = 1;
    echo $server['name'] . ' -> ' . $server['port'];
   }
   echo "</div>";
  }
  ?>
 </font>
</body>

</html>
