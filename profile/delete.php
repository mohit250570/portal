
<?php 
 
        require_once("../connection.php ");
 
        if(isset($_GET['Del']))
        {
            $id = $_GET['Del'];
            $query = " delete from files where id = '".$id."'";
            $result = mysqli_query($con,$query);
 
            if($result)
            {
                header("location:profile.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:../error.php");
        }
 
?>