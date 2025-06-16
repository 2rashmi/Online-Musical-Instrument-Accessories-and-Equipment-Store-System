<?php
  $mysqli = require __DIR__ . "/database.php";

  $sql = "INSERT INTO newitem(bcode,bcategory,bname,bbrand,bcountry,bprice,bcondition,bdep,bimage) VALUES(?,?,?,?,?,?,?,?,?)";

  $stmt = $mysqli->stmt_init();
  $stmt->prepare($sql);
  if (!$stmt->prepare($sql)) {
      die("SQL error" . $mysqli->error);
  }

  $stmt->bind_param("sssssssss",
      $_POST["bcode"],
      $_POST["bcat"],
      $_POST["bname"],
      $_POST["bbrand"],
      $_POST["bcountry"],
      $_POST["bprice"],
      $_POST["bcondition"],
      $_POST["bdep"],
      $_POST["bimage"]
      
  );

  if($stmt->execute()){
      echo "Add Items Successfull";
      exit;
  } else
  {
      echo "Error: " . $stmt->error;
  }
?>
