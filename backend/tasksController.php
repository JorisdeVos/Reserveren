<?php 
session_start();
// if(!($_SESSION['admin'] == true) || !isset($_SESSION['user_id']))
// {
//     $msg="u mag deze pagina niet bekijken"; 
//     header("Location: login.php?msg=$msg");
//     exit;
// }

require_once 'conn.php';
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$address = $_POST['address'];
$id = $_POST['id'];
$action = $_POST['action'];

if ($action == "update")
{
    $query = "UPDATE houses SET name = :name, description = :description, price = :price, aderess = :address WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":name" => $name,
        ":description" => $description,
        ":price" => $price,
        ":address" => $address,
        ":id" => $id
    ]);
}

if ($action == "delete")
{
    $query = "DELETE FROM houses WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([":id" => $id]);
}
    header("location: ../admin/admin.php");
