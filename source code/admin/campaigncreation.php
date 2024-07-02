<?php
session_start();
include('includes/config.php');

if(strlen($_SESSION['alogin'])==0) {
    header('location:index.php');
} else {
    if(isset($_POST['CampaignName'])) {
        $campaignName = $_POST['CampaignName'];
        $campaignStartDate = $_POST['CampaignStartDate'];
        $campaignStartTime = $_POST['CampaignStartTime'];
        $campaignEndDate = $_POST['CampaignEndDate'];
        $campaignEndTime = $_POST['CampaignEndTime'];
        $campaignLocation = $_POST['CampaignLocation'];
        $campaignDescription = $_POST['CampaignDescription'];

        $sql = "INSERT INTO campaigns (CampaignName, CampaignStartDate, CampaignStartTime, CampaignEndDate, CampaignEndTime, CampaignLocation, CampaignDescription) 
                VALUES (:campaignName, :campaignStartDate, :campaignStartTime, :campaignEndDate, :campaignEndTime, :campaignLocation, :campaignDescription)";
        
        $query = $dbh->prepare($sql);
        $query->bindParam(':campaignName', $campaignName, PDO::PARAM_STR);
        $query->bindParam(':campaignStartDate', $campaignStartDate, PDO::PARAM_STR);
        $query->bindParam(':campaignStartTime', $campaignStartTime, PDO::PARAM_STR);
        $query->bindParam(':campaignEndDate', $campaignEndDate, PDO::PARAM_STR);
        $query->bindParam(':campaignEndTime', $campaignEndTime, PDO::PARAM_STR);
        $query->bindParam(':campaignLocation', $campaignLocation, PDO::PARAM_STR);
        $query->bindParam(':campaignDescription', $campaignDescription, PDO::PARAM_STR);
        
        $query->execute();
        
        $lastInsertId = $dbh->lastInsertId();
        if($lastInsertId) {
            $successMessage = "Campaign created successfully!";
        } else {
            echo "<script>alert('Something went wrong. Please try again');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">
    
    <title>BDMS | Manage Campaign</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap Datatables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <!-- Bootstrap select -->
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <!-- Bootstrap file input -->
    <link rel="stylesheet" href="css/fileinput.min.css">
    <!-- Awesome Bootstrap checkbox -->
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <!-- Admin Stye -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php include('includes/header.php');?>

    <div class="ts-main-content">
<?php include('includes/leftbar.php');?>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Campaign</h2>
                        
                        <!-- campaign creation -->
    <div class="container my-4">
        <h1 class="text-center">Create New Campaign</h1>
        <?php if (isset($successMessage)): ?>
        <div class="container" style="padding-top: 20px;">
            <div class="alert alert-success" role="alert">
                <?php echo $successMessage; ?>
            </div>
        </div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="CampaignName">Campaign Name</label>
                <input type="text" class="form-control" id="CampaignName" name="CampaignName" aria-describedby="emailHelp" placeholder="Enter campaign name here">
            </div>
            <div class="form-group">
                <label for="CampaignStartDate">Campaign Start Date</label>
                <input type="date" class="form-control" id="CampaignStartDate" name="CampaignStartDate" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="CampaignStartTime">Campaign Start Time</label>
                <input type="time" class="form-control" id="CampaignStartTime" name="CampaignStartTime">
            </div>
            <div class="form-group">
                <label for="CampaignEndDate">Campaign End Date</label>
                <input type="date" class="form-control" id="CampaignEndDate" name="CampaignEndDate" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="CampaignEndTime">Campaign End Time</label>
                <input type="time" class="form-control" id="CampaignEndTime" name="CampaignEndTime">
            </div>
            <div class="form-group">
                <label for="CampaignLocation">Campaign Location</label>
                <input type="text" class="form-control" id="CampaignLocation" name="CampaignLocation" aria-describedby="emailHelp" placeholder="Enter campaign location here">
            </div>
            <div class="form-group">
                <label for="CampaignDescription">Campaign Description</label><br/>
                <textarea rows="4" cols="50" name="CampaignDescription" id="CampaignDescription" aria-describedby="emailHelp" placeholder="Enter campaign description here..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <input type="reset" value="Reset" class="btn btn-primary">
        </form>
    </div>
    <!-- //campaign creation -->
                        
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
    
    <script>
        
    window.onload = function(){
    
        // Line chart from swirlData for dashReport
        var ctx = document.getElementById("dashReport").getContext("2d");
        window.myLine = new Chart(ctx).Line(swirlData, {
            responsive: true,
            scaleShowVerticalLines: false,
            scaleBeginAtZero : true,
            multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
        }); 
        
        // Pie Chart from doughutData
        var doctx = document.getElementById("chart-area3").getContext("2d");
        window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

        // Dougnut Chart from doughnutData
        var doctx = document.getElementById("chart-area4").getContext("2d");
        window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

    }
    </script>
</body>
</html>
