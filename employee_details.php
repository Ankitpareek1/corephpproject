<?php
include 'db.php';

$id = $_GET['id'];
$employee = $conn->query("SELECT * FROM tbl_employee WHERE id = $id")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Details</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Employee Details</h1>
    <div>
        <p>Name: <?php echo $employee['name']; ?></p>
        <p>Contact: <?php echo $employee['contact']; ?></p>
        <p>Email: <?php echo $employee['email']; ?></p>
        <p>Gender: <?php echo $employee['gender']; ?></p>
        <p>Designation: <?php echo $employee['designation']; ?></p>
        <p>Department: <?php echo $employee['department']; ?></p>
        <p>Branch: <?php echo $employee['branch']; ?></p>
    </div>

    <button id="family-details">Manage Family Details</button>
    <button id="salary-details">Manage Salary Details</button>

    <div id="details-container"></div>

    <script>
    $(document).ready(function() {
        $('#family-details').click(function() {
            $('#details-container').load('ajax_family_details.php?id=<?php echo $id; ?>');
        });

        $('#salary-details').click(function() {
            $('#details-container').load('ajax_salary_details.php?id=<?php echo $id; ?>');
        });
    });
    </script>
</body>
</html>
