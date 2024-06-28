<?php
// fetch_product.php

include "../../../../connection.php";

if (isset($_POST['tcode'])) {
  $transactionCode = $_POST['tcode'];

  // Fetch product records based on the transaction code
  $query = "SELECT * FROM pos_orders WHERE orders_tcode = '$transactionCode'";
  $result = mysqli_query($connections, $query);

  // Prepare an array to store the product details
  $productDetails = array();
  while ($row = mysqli_fetch_assoc($result)) {

    	
    $prod_tcode = $row['orders_prod_id'];
    $orders_prodQty = $row['orders_prodQty'];
    $orders_date = $row ["orders_date"]; 

    $query_product = "SELECT * FROM product WHERE prod_id = '$prod_tcode'";
    $query_result = mysqli_query($connections, $query_product);
    $row_prod = mysqli_fetch_assoc($query_result);
    $prod_id = $row_prod['prod_id'];
    $prod_code = $row_prod['prod_code'];
    $prod_name = $row_prod['prod_name'];
    $prod_category_id = $row_prod['prod_category_id'];

//query category
    $query_category = "SELECT * FROM category WHERE category_id = '$prod_category_id'";
    $query_category_result = mysqli_query($connections, $query_category);
    $row_cat = mysqli_fetch_assoc($query_category_result);
    $category_name = $row_cat['category_name'];

    // Add the product details to the array
    $refund_deadline = date("Y-m-d H:i:s", strtotime($orders_date . " + 7 days")); // Calculate the refund deadline
    $current_time = date("Y-m-d H:i:s"); // Get the current date and time
    if ($current_time <= $refund_deadline) {
      $status="valid";
    }else{
      $status="expired"; 
    }

    // deduct returned
$view_query_product = mysqli_query($connections, "SELECT
ret_transaction_code, ret_product_code, SUM(ret_qty) AS ret_qty
FROM returns_pos
WHERE ret_transaction_code='$transactionCode'
AND ret_product_code='$prod_code'");
$check_return_row = mysqli_num_rows($view_query_product);

if ($check_return_row > 0) {
$row_prod_orders = mysqli_fetch_assoc($view_query_product);
$ret_qty = $row_prod_orders["ret_qty"];

// Assuming you have a variable $orders_prodQty with the original product quantity.
$orders_prodQty = $orders_prodQty - $ret_qty;
}

// Assuming you have variables $prod_code, $prod_name, $status, and $orders_date containing product details.
$productDetails[] = array(
'code' => $prod_code,
'name' => $prod_name,
'qty' => $orders_prodQty,
'status' => $status,
'orderdate' => $orders_date,
'category' => $category_name


);
   
    
    
  }

  // Send the JSON response back to the AJAX request
  echo json_encode($productDetails);
}
