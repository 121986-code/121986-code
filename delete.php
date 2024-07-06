<?php
include "../Database/Server.php";
if (isset($_GET["Id"])) {
    $Id = $_GET["Id"];

    $sql = "DELETE FROM Clients WHERE Id =$Id";
    $link->query($sql);
}
header("Location: ../Client/index.php");
exit;

?>