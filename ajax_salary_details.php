<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM tbl_salary WHERE employee_id = $id");

echo '<h2>Salary Details</h2>';
echo '<table>
        <thead>
            <tr>
                <th>SR NO</th>
                <th>Salary</th>
                <th>From Date</th>
                <th>To Date</th>
                <th>Designation</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>';
        
$sr_no = 1;
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$sr_no}</td>
        <td>{$row['salary']}</td>
        <td>{$row['from_date']}</td>
        <td>{$row['to_date']}</td>
        <td>{$row['designation']}</td>
        <td><button>Edit</button> <button>Delete</button></td>
    </tr>";
    $sr_no++;
}
echo '</tbody></table>';
?>
