<?php
include 'db.php'; 


$query = "SELECT * FROM tbl_employee"; 
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <h1>Employee List</h1>
    
    <table>
        <thead>
            <tr>
                <th>SR NO</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Designation</th>
                <th>Department</th>
                <th>Branch</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php $sr_no = 1; ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $sr_no++; ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['contact']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['gender']); ?></td>
                        <td><?php echo htmlspecialchars($row['designation']); ?></td>
                        <td><?php echo htmlspecialchars($row['department']); ?></td>
                        <td><?php echo htmlspecialchars($row['branch']); ?></td>
                        <td><a href="employee_details.php?id=<?php echo $row['id']; ?>">View</a></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="9">No employees found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <?php $conn->close();  ?>
</body>
</html>
