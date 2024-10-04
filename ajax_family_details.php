<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM tbl_family WHERE employee_id = $id");

echo '<h2>Family Details</h2>';
echo '<table>
        <thead>
            <tr>
                <th>SR NO</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Occupation</th>
                <th>Relation</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>';
        
$sr_no = 1;
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$sr_no}</td>
        <td>{$row['name']}</td>
        <td>{$row['contact']}</td>
        <td>{$row['occupation']}</td>
        <td>{$row['relation']}</td>
        <td><button>Edit</button> <button>Delete</button></td>
    </tr>";
    $sr_no++;
}
echo '</tbody></table>';
?>
