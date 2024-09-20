<?php
require('./requires/connection.php');

$sql = "SELECT ID, product from products";

$result = $mysqli->query($sql);

if ($result->num_rows>0){
    while ($row = $result->fetch_assoc()){
    echo '<option value="'.$row['ID'].'">'.$row['product'].'</option>';
    }
} else{
    echo 'nada encontrado';
}
?>