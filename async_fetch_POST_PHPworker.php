<?php
  header("Content-Type: application/json");

  $result = [ "result" => null, "info" => "Invalid parameters" ];

  $request = file_get_contents("php://input");

  if (isset($request) && !empty($request)) {
    $requestObj = json_decode($request);
    if ($requestObj && $requestObj->method === "request") {
      $a = $requestObj->a;	  
      $b = $requestObj->b;
	  
      if (getUser()) {
        $result = [ "result" => "200", "info" => "Ok" ];
      }
	  else{
		  $result = [ "result" => "400", "info" => "Failed" ];
	  }
    }
  }
  
  function getUser(){
	  return true;
  }

  echo json_encode($result);
?>