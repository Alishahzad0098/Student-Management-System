<?php
include "db.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Students Data</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Body */
        body {
            background: linear-gradient(135deg, #1e1e1e, #2c2c2c);
            color: #f1f1f1;
            min-height: 100vh;
            padding: 40px;
        }

        /* Container */
        .container {
            width: 80%;
            margin: auto;
            background: linear-gradient(135deg, #2c2c2c, #3a3a3a, #4a3a4f);
            min-height: 100vh;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }

        /* Headings */
        h2 {
            margin-bottom: 15px;
            color: #f1f1f1;
        }

        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            background: #2c2c2c;
        }

        table th {
            background: #6f00ff;
            color: white;
            padding: 12px;
        }

        table td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #555;
            color: #f1f1f1;
        }

        table tr:hover {
            background: #3a3a3a;
        }

        /* Action links */
        a {
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 4px;
            margin: 2px;
            display: inline-block;
            color: #f1f1f1;
        }

        a[href*="update"] {
            background: #28a745;
            color: white;
        }

        a[href*="delete"] {
            background: #dc3545;
            color: white;
        }

        a:hover {
            opacity: 0.8;
        }
    </style>

</head>

<body>
    <?php
    if (isset($_GET['msg'])) {
        if ($_GET['msg'] == 'deleted') {
            echo "<script>alert('Student deleted successfully!');</script>";
        } elseif ($_GET['msg'] == 'error') {
            echo "<script>alert('Error deleting student.');</script>";
        }
    }
    ?>
    <div class="container">
        <div class="header" style="display: flex; justify-content: space-between; align-items: center;">
            <h2>Student Records</h2>
            <a href="form.php" style="background: #007bff; color: white;"> + Add New Student</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Roll No</th>
                <th>Section</th>
                <th>Age</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>

            <?php
            $query = "SELECT * FROM students";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                ?>

                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['roll_no']; ?></td>
                    <td><?php echo $row['section']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>"
                            onclick="return confirm('Are you sure you want to delete this student?');">Delete</a>
                    </td>
                </tr>

            <?php } ?>

        </table>
    </div>
</body>

</html>