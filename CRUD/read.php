<?php
include 'db_conn.php';

$query = "SELECT * FROM FORM";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);



if ($total != 0) {
    ?>
    <h1>Display All Records</h1>
    <a href="create.php">Add New Data</a>

    <table border="2px">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Opertion</th>


        </tr>



        <?php
        while ($result = mysqli_fetch_assoc($data)) {
            echo " <tr>
        <td>" . $result['id'] . "</td>
        <td>" . $result['fname'] . "</td>
        <td>" . $result['lname'] . "</td>
        <td>" . $result['Gender'] . "</td>
        <td>" . $result['Address'] . "</td>
        <td><a href='update.php?id=$result[id]'>Update</a>
        <a href='delete.php?id=$result[id]'>Delete</a></td>
        </tr>
        ";
        }
}



?>

</table>
