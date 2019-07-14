<?php
  header("Content-Type: application/json");

  $result = [ "result" => null, "info" => "Invalid parameters" ];

  $request = file_get_contents("php://input");

  if (isset($request) && !empty($request)) {
    $requestObj = json_decode($request);
    if ($requestObj && $requestObj->method === "add") {
      $a = $requestObj->a;
      $b = $requestObj->b;
      if (is_numeric($a) && is_numeric($b)) {
        $a = floatval($a);
        $b = floatval($b);
        $result = [ "result" => ($a + $b), "info" => "Ok" ];
      }
    }
  }

  sleep(2); // Long running service...

  echo json_encode($result);
?>
