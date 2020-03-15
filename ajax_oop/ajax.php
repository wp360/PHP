<?php
  // echo "ajax content";
  if(isset($_POST['ajax_name'])) {
    // echo $_POST['ajax_name'];
    $store = array("bob", "jack", "Lily");
    foreach ($store as $names) {
      echo $names, "<br>";
    }
  }
?>