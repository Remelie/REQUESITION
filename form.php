<?php include("connection.php");?>



<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title> Requisition Form for Certificate of Employment</title>
    </head>

    <body>
        <div class="container">
            <form action="#" method="POST">
            <div class="title">
                Requisition Form
            </div>

            <div class="form">
                <div class="input_field">
                    <label>Full name</label>
                    <input type="text" class="input" name="fname" required>
                </div>

                <div class="input_field">
                    <label>Email Address</label>
                    <input type="text" class="input" name="email" required>
                </div>

                <div class="input_field">
                    <label>Department</label>
                    <input type="text" class="input" name="department" required>
                </div>

                <div class="input_field">
                    <label>Campus</label>
                    <input type="text" class="input" name="campus" required>
                </div>

                <div class="input_field">
                    <label>Date Hire</label>
                    <input type="date"  class="input" name="datehire" required>
                </div>

                <div class="input_field">
                    <label>Position</label>
                    <input type="text" class="input" name="position" required>
                </div>

                <div class="input_field">
                    <label>Separation Date</label>
                    <input type="date" class="input" name="separation" required>
                </div>

                <div class="input_field">
                    <label>Puspose :</label>
                    <textarea class="textarea" name="purpose" required></textarea>
                </div>

                <div class="input_field">
                    <label>Gender :</label>
                    <div class="custom_select">
                   <select name="gender" required>
                        <option value="">Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                   </select>
                </div>  
                </div>

                <div class="button">
                    <input type="submit" value="Request" class="btn" name="request">
                </div>
            </div>
        </form>
        </div>
    </body>

</hmtl>

<?php

    if($_POST['request'])
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

    $query = "INSERT INTO FORM (fname,email,department,campus,datehire,position,separation,purpose,gender) VALUES('$fname','$email','$department','$campus','$datehire','$position','$separation','$purpose','$gender')";
    $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "Data Inserted into Database";
        } 
        else 
        {
            echo "Failed";
        }
    }
?>