<?php
session_start();
include('includes/config.php');

if(strlen($_SESSION['login']) == 0) {  
    header('location:index.php');
} else {
    $id_card = $_SESSION['id_card'];

    // SQL query to fetch donor's records
    $sql = "SELECT id_card, donation_centre, donation_date, hemoglobin_level, blood_number FROM donors WHERE id_card = :id_card";
    $query = $dbh->prepare($sql);
    $query->bindParam(':id_card', $id_card, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donation History</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #d9534f; /* Bootstrap's red */
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        .table th,
        .table td {
            padding: .75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
            background-color: #d9534f; /* Red background for table headers */
            color: #ffffff;
        }

        .table tbody+tbody {
            border-top: 2px solid #dee2e6;
        }

        .no-records {
            color: #d9534f;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Donation History</h2>

        <?php if($results) { ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Card</th>
                            <th>Donation Centre</th>
                            <th>Donation Date</th>
                            <th>Hemoglobin Level</th>
                            <th>Blood Number Series</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($results as $result) { ?>
                            <tr>
                                <td><?php echo htmlentities($result->id_card); ?></td>
                                <td><?php echo htmlentities($result->donation_centre); ?></td>
                                <td><?php echo htmlentities($result->donation_date); ?></td>
                                <td><?php echo htmlentities($result->hemoglobin_level); ?></td>
                                <td><?php echo htmlentities($result->blood_number); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <?php } else { ?>
            <p class="no-records">No donation records found.</p>
        <?php } ?>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</body>
</html>
