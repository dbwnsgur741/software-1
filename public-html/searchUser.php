<?php

include_once "php/dbInfo.php";

$q = $_GET['q'];

echo $q;
if(isset($q)){
    $sql = "SELECT * FROM userManage WHERE name like '%$q%'";
}else{
    $sql = "SELECT * FROM userManage";
}

$result = mysqli_query($conn,$sql);
$total_rows = mysqli_num_rows($result);
$i = 0;

while($row = mysqli_fetch_assoc($result)){
    $i++;
    $idx = $row['idx'];
    $name = $row['name'];
    $birth = $row['birth'];
    $phoneNum = $row['phoneNum'];

    echo "
<tr class='row'>
    <input type='hidden' value='$idx'>
    <td class='col'>$i</td>
    <td class='col'>$name</td>
    <td class='col'>$birth</td>
    <td class='col'>$phoneNum</td>
    <td class='col'>
        <a href='#' class='settings' title='Settings'><i class='material-icons'>&#xE8B8;</i></a>
        <a href='#' class='delete' title='Delete'><i class='material-icons'>&#xE5C9;</i></a>
    </td>
</tr>
    ";
}
?>