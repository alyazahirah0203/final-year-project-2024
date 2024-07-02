<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
{	
    header('location:index.php');
}
else
{
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $id_card = $_POST["id_card"];
        $donation_centre = $_POST["donation_centre"];
        $donation_date = $_POST["donation_date"];
        $hemoglobin_level = $_POST["hemoglobin_level"];
        $blood_number = $_POST["blood_number"]; // Add this line

        $sql = "UPDATE donors SET name=:name, id_card=:id_card, donation_centre=:donation_centre, donation_date=:donation_date, hemoglobin_level=:hemoglobin_level, blood_number=:blood_number WHERE id=:id"; // Add blood_number
        $query = $dbh->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':id_card', $id_card, PDO::PARAM_STR);
        $query->bindParam(':donation_centre', $donation_centre, PDO::PARAM_STR);
        $query->bindParam(':donation_date', $donation_date, PDO::PARAM_STR);
        $query->bindParam(':hemoglobin_level', $hemoglobin_level, PDO::PARAM_STR);
        $query->bindParam(':blood_number', $blood_number, PDO::PARAM_STR); // Add this line
        $query->execute();
        header('location:managedonorrecord.php');
    }
    
    $id = intval($_GET['id']);
    $sql = "SELECT * from donors where id=:id";
    $query = $dbh->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_OBJ);
}
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">
    <title>Update Donor Record</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/fileinput.min.css">
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .errorWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #dd3d36;
            box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        }
        .succWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #5cb85c;
            box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        }
    </style>
</head>
<body>
    <?php include('includes/header.php');?>

    <div class="ts-main-content">
        <?php include('includes/leftbar.php');?>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">Update Donor Record</h2>

                        <div class="panel panel-default">
                            <div class="panel-heading">Donor Info</div>
                            <div class="panel-body">
                                <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                                else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                                
                                <!-- Update Donor Form -->
                                <form method="post" action="update_donor.php">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" value="<?php echo htmlentities($result->name); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_card">Identification Card</label>
                                        <input type="text" class="form-control" name="id_card" id="id_card" value="<?php echo htmlentities($result->id_card); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="donation_centre">Donation Centre</label>
                                        <input type="text" class="form-control" name="donation_centre" id="donation_centre" value="<?php echo htmlentities($result->donation_centre); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="donation_date">Donation Date</label>
                                        <input type="date" class="form-control" name="donation_date" id="donation_date" value="<?php echo htmlentities($result->donation_date); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="hemoglobin_level">Hemoglobin Level</label>
                                        <input type="number" step="0.1" class="form-control" name="hemoglobin_level" id="hemoglobin_level" value="<?php echo htmlentities($result->hemoglobin_level); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="blood_number">Blood Number Series</label> <!-- Add this field -->
                                        <input type="text" class="form-control" name="blood_number" id="blood_number" value="<?php echo htmlentities($result->blood_number); ?>" required>
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo htmlentities($result->id); ?>">
                                    <button type="submit" name="update" class="btn btn-primary">Update Donor</button>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Loading Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/chartData.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
