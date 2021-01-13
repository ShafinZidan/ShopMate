<?php
require 'config.php';


if(isset($_GET['itemid']))
{

      $item_id = $_GET['itemid'];
      $sql = "DELETE FROM inventory WHERE itemID='$item_id'";
      $delete = mysqli_query($conn,$sql);

      if($delete){
        echo "<script>
              alert('Data Deleted!');
              window.location.href= 'Admin_InventoryManager.php';
              </script>
        ";
        exit;
      }
}

else if(isset($_GET['tranid']))
{
  
}

else if(isset($_GET['debtid']))
{

}
?>
