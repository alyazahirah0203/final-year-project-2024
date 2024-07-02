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
    if(isset($_POST['update']))
    {
        $eid=intval($_GET['eid']);
        $name=$_POST['fullname'];
        $mobileno=$_POST['mobileno'];
        $email=$_POST['email'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $bloodgroup=$_POST['bloodgroup'];
        $address=$_POST['address'];
        $message=$_POST['message'];
        
        $sql="UPDATE tblblooddonars SET FullName=:name, MobileNumber=:mobileno, EmailId=:email, Age=:age, Gender=:gender, BloodGroup=:bloodgroup, Address=:address, Message=:message WHERE id=:eid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':name',$name,PDO::PARAM_STR);
        $query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
        $query->bindParam(':email',$email,PDO::PARAM_STR);
        $query->bindParam(':age',$age,PDO::PARAM_STR);
        $query->bindParam(':gender',$gender,PDO::PARAM_STR);
        $query->bindParam(':bloodgroup',$bloodgroup,PDO::PARAM_STR);
        $query->bindParam(':address',$address,PDO::PARAM_STR);
        $query->bindParam(':message',$message,PDO::PARAM_STR);
        $query->bindParam(':eid',$eid,PDO::PARAM_STR);
        $query->execute();
        
        $msg="Donor details updated successfully";
    }

    $eid=intval($_GET['eid']);
    $sql = "SELECT * from tblblooddonars WHERE id=:eid";
    $query = $dbh -> prepare($sql);
    $query-> bindParam(':eid', $eid, PDO::PARAM_STR);
    $query->execute();
    $result=$query->fetch(PDO::FETCH_OBJ);

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
    <title>Edit Donor Info</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/fileinput.min.css">
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
                        <h2 class="page-title">Edit Donor Info</h2>
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit Donor Info</div>
                            <div class="panel-body">
                                <?php if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                                <form method="post" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Full Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="fullname" class="form-control" value="<?php echo htmlentities($result->FullName);?>" required>
                                        </div>
                                        <label class="col-sm-2 control-label">Mobile Number</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="mobileno" class="form-control" value="<?php echo htmlentities($result->MobileNumber);?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-4">
                                            <input type="email" name="email" class="form-control" value="<?php echo htmlentities($result->EmailId);?>" required>
                                        </div>
                                        <label class="col-sm-2 control-label">Age</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="age" class="form-control" value="<?php echo htmlentities($result->Age);?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Gender</label>
                                        <div class="col-sm-4">
                                            <select name="gender" class="form-control" required>
                                                <option value="<?php echo htmlentities($result->Gender);?>"><?php echo htmlentities($result->Gender);?></option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <label class="col-sm-2 control-label">Blood Group</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="bloodgroup" class="form-control" value="<?php echo htmlentities($result->BloodGroup);?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="address" class="form-control" value="<?php echo htmlentities($result->Address);?>" required>
                                        </div>
                                        <label class="col-sm-2 control-label">Message</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="message" class="form-control" value="<?php echo htmlentities($result->Message);?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <button class="btn btn-primary" name="update" type="submit">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<?php } ?>
