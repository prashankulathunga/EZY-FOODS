<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location:/pages/admin/manage/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <title>Recipe List</title>
    <link rel="stylesheet" href="./styles/common.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <style>
        .container {
            margin-left: 50px;
            margin-right: 10px;
        }

        .table {
            width: 120%;
        }
    </style>
</head>

<body>

    <div class="container my-5">
        <h2>List of Recipes</h2>
        <a href="/pages/admin/manage/add.php" class="btn btn-primary my-3" role="button">Add Recipe</a>
        <a href="/pages/admin/dashboard.php" class="btn btn-primary my-3" role="button">Go To Dashboard</a>
        <a href="/" class="btn btn-primary my-3" role="button">Home</a>
        <br>
        <table class="table table-hover my-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Recipe</th>
                    <th>Ingredients</th>
                    <th>Method</th>
                    <th>Cooktime</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include("../../../config/config.php");

                // read all rows from database table
                $sql = "SELECT * FROM recipe";
                $result = $connection->query($sql);

                if (!$result) {
                    die("Invalid query: " . $connection->error);
                }

                //read data from each row
                while ($row = $result->fetch_assoc()) {
                    echo "
                <thead class='table-warning'>
                <tr>
                <td style='vertical-align:top;'>$row[id]</td>
                <td style='vertical-align:top;'>$row[recipe]</td>
                <td style='word-wrap: break-word;min-width: 160px;max-width: 160px; vertical-align:top;'>
                $row[ingredients]</td>
                <td style='word-wrap: break-word;min-width: 160px;max-width: 160px;vertical-align:top;'>
                $row[method]</td>
                <td style='vertical-align:top;'>$row[cooktime]</td>
                <td style='vertical-align:top;'>";
                if($row["category"] == '1'){
                    echo 'Italian';
                }if($row["category"] == '2'){
                    echo 'SriLankan';
                
                }if($row["category"] == '3'){
                    echo 'Chineese';
                
                }if($row["category"] == '4'){
                    echo 'Japanese';
                
                }if($row["category"] == '5'){
                    echo 'Thai';
                
                }if($row["category"] == '6'){
                    echo 'Desserts';
                }
                echo "
                </td>
                <td style='word-wrap: break-word;min-width: 160px;max-width: 160px;vertical-align:top;'>$row[imgname]</td>
                <td style='vertical-align:top;'>$row[added]</td>
                <td style='vertical-align:top;'>
                    <a href='/pages/admin/manage/edit.php?id=$row[id]' class='btn btn-primary btn-sm'>Edit</a>
                    <a href='/pages/admin/manage/delete.php?id=$row[id]' class='btn btn-danger btn-sm'>Delete</a>
                </td>
            </tr>
            </thead>
                ";
                }
                ?>


            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>