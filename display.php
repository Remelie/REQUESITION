<html>
    <head>
        <title>Displaying All Request</title>
        <style>
            body
            {
                background-image : url('uc.jpg');;
                background-repeat: no-repeat;
                padding: 0 10px;
            }
            table
            {  
                background-color: white;

            }
            .update, .delete
            {
                background-color: green;
                color: white;
                border: 0;
                outline: none;
                border-radius: 5px;
                height: 23px;
                width: 80px;
                font-weight: bold;
                cursor: pointer;
            }
            .delete
            {
                background-color: red;
            }
</style>
    </head>
    </html>



<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM FORM";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

echo $result [$fname]." ".$result [$email]." ".$result [$department]." ".$result [$campus]." ".$result [$datehire]." ".$result [$position]." ".$result [$separation]." ".$result [$purpose]." ".$result [$gender];

// echo $total;

if($total != 0)
{
    ?>

     <h2 align="center"><mark>Displaying All Request</mark></h2>
     <center><table border="1" cellspacing="8" width="100%">
        <tr>
        <th width="2%">ID</th>
        <th width="15%">Full Name</th>
        <th width="15%">Email Address</th>
        <th width="5%">Department</th>
        <th width="5%">Campus</th>
        <th width="10%">Date Hire</th>
        <th width="10%">Position</th>
        <th width="8%">Separation</th>
        <th width="10%">Purpose</th>
        <th width="5%">Gender</th>
        <th width="25%">Operations</th>
        </tr>

     <?php
    while($result = mysqli_fetch_assoc($data))
    {
       echo "<tr>
            <td>".$result ['id']."</td>
            <td>".$result ['fname']."</td>
            <td>".$result ['email']."</td>
            <td>".$result ['department']."</td>
            <td>".$result ['campus']."</td>
            <td>".$result ['datehire']."</td>
            <td>".$result ['position']."</td>
            <td>".$result ['separation']."</td>
            <td>".$result ['purpose']."</td>
            <td>".$result ['gender']."</td>

            <td><a href='update_design.php?id=$result[id]'><input type='submit' value='Update' class='update'></a>

            <a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick ='return checkdelete()'></a></td>
            </tr>
            ";
        
    }
}
else
{
    echo "No records found";
}


?>
</table>
</center>

<script>
    function checkdelete()
    {
        return confirm('Are you sure you want to delete this record ?');
    }
</script>
