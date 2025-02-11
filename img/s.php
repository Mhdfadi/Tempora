<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET["MyName"] ?? "N/A";
    $reg_id = $_GET["RegID"] ?? "N/A";
    $phone = $_GET["PhoneNo"] ?? "N/A";
    $email = $_GET["Email"] ?? "N/A";
    $category = $_GET["Category"] ?? "N/A";
    $item = $_GET["Item"] ?? "N/A";

    $data = "Name: $name, Reg ID: $reg_id, Phone No: $phone, Email: $email, Category: $category, Item: $item\n";

    file_put_contents("form_data.txt", $data, FILE_APPEND);

    echo "Data Saved Successfully!";
}
?>

<input type="text" name="RegID" id="det" placeholder="1241000">
<input type="text" name="PhoneNo" id="det" placeholder="9876543210">
<input type="email" name="Email" id="det" placeholder="thanghamhill@gmail.com">
<select name="Category" id="category" onchange="updateOptions()">
<select name="Item" id="items">