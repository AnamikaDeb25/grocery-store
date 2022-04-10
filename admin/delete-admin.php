<?php 

session_start();

   define('SITEURL', 'http://localhost/grocery-store/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'grocery-store');
    
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //Database Connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //SElecting Database

    // 1. get the ID of Admin to be deleted
    $id = $_GET['id'];

    //2. Create SQL Query to Delete Admin
     $sql = "DELETE FROM tbl_admin WHERE id=$id";

    //Execute the Query
   $res = mysqli_query($conn, $sql);

    // // Check whether the query executed successfully or not
    if($res==true){
        // echo "Admin Deleted";
        //Create SEssion Variable to Display Message
        $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully.</div>";
        //Redirect to Manage Admin Page
       header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else{
        //echo "Failed to Delete Admin";

        $_SESSION['delete'] = "<div class='error'>Failed to Delete Admin. Try Again Later.</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }

    // //3. Redirect to Manage Admin page with message (success/error)

?>