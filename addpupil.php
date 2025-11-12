<?php
print_r($_POST);
include_once("connection.php");//eqv. of import
$stmt=$conn->prepare("INSERT INTO tblusers 
(UserID, Username, Surname, Forename, Password, Year, Balance, Role)
VALUES
(NULL,:Username,:Surname,:Forename,:Password,:Year,:Balance,:Role)
");
$stmt->bindingParam(":Surname", $_POST["surname"]);
$stmt->bindingParam(":Forename", $_POST["forename"]);
$stmt->bindingParam(":Password", $_POST["password"]);
$stmt->bindingParam(":Year", $_POST["year"]);
$stmt->bindingParam(":Balance", $_POST["balance"]);
$stmt->bindingParam(":Role", $_POST["role"]);
$stmt->bindingParam(":Username", $_POS["bob"]);
$stmt->execute();
?>