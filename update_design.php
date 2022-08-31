<?php include("connection.php");

$id = $_GET['id'];

$query = "SELECT * FROM FORM where id= '$id'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Update Requisition Form for Certificate of Employment</title>
    </head>

    <body>
        <div class="container">
            <form action="#" method="POST">
            <div class="title">
                Update Information
            </div>

            <div class="form">
                <div class="input_field">
                    <label>Full name</label>
                    <input type="text" value="<?php echo $result['fname'];?>"class="input" name="fname" required>
                </div>

                <div class="input_field">
                    <label>Email Address</label>
                    <input type="text" value="<?php echo $result['email'];?>"class="input" name="email" required>
                </div>

                <div class="input_field">
                    <label>Department</label>
                    <input type="text" value="<?php echo $result['department'];?>"class="input" name="department" required>
                </div>

                <div class="input_field">
                    <label>Campus</label>
                    <input type="text" value="<?php echo $result['campus'];?>"class="input" name="campus" required>
                </div>

                <div class="input_field">
                    <label>Date Hire</label>
                    <input type="text" value="<?php echo $result['datehire'];?>"class="input" name="datehire" required>
                </div>

                <div class="input_field">
                    <label>Position</label>
                    <input type="text" value="<?php echo $result['position'];?>"class="input" name="position" required>
                </div>

                <div class="input_field">
                    <label>Separation Date</label>
                    <input type="text" value="<?php echo $result['separation'];?>"class="input" name="separation" required>
                </div>

                <div class="input_field">
                    <label>Puspose :</label>
                    <textarea class="textarea" name="purpose" required><?php echo $result['purpose']; ?></textarea>
                </div>

                <div class="input_field">
                    <label>Gender :</label>
                    <div class="custom_select">

                   <select name="gender" required>
                        <option value="">Select</option>

                        <option value="male"
                            <?php
                                if($result['gender'] == 'male')
                                {
                                    echo "selected";
                                }
                            ?>
                        >
                        Male</option>

                        <option value="female"
                            <?php
                                if($result['gender'] == 'female')
                                {
                                    echo "selected";
                                }
                            ?>
                        >
                        Female</option>
                   </select>
                </div>  
                </div>

                <div class="button">
                    <input type="submit" value="Update Details" class="btn" name="update">
                </div>
            </div>
        </form>
        </div>
    </body>

</hmtl>

<?php

    if($_POST['update'])
   {
    $fname      = $_POST['fname'];
    $email      = $_POST['email'];
    $department = $_POST['department'];
    $campus     = $_POST['campus'];
    $datehire   = $_POST['datehire'];
    $position   = $_POST['position'];
    $separation = $_POST['separation'];
    $purpose    = $_POST['purpose'];
    $gender     = $_POST['gender'];

    $query = "UPDATE form set fname='$fname',email='$email',department='$department',campus='$campus',datehire='$datehire',position='$position',separation='$separation',purpose='$purpose',gender='$gender' WHERE id='$id'";

    $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "<script>alert('Record Updated')</script>";
            ?>

            <meta http-equiv = "refresh" content = "0; url = http://localhost/Requisition/display.php"/>

            <?php
        } 
        else 
        {
            echo "Failed to Update";
        }
    }
?>