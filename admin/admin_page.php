<?php
    include_once('../config/config.php');
    session_start();

    $admin_id = $_SESSION['admin_id'];

    if(!isset($admin_id)){
        header('location:../login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>

        <!--font awesome cdnjs link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <!--custom admin css file link with force reload to avoid caching-->
        <link rel="stylesheet" href="../css/admin_style.css?v=<?php echo time(); ?>">
    </head>
    
    <body>

    <?php include './admin_header.php'; ?>

        <!-- admin dashboard secion -->
        <section class="dashboard">
            <h1 class="title">Dashboard</h1>

            <div class="box-container">

               <!-- <div class="box">
                   // 
                    <p>Total Pendings</p>
                </div> -->

                <div class="box">
                    <?php
                        $sql_select_orders = mysqli_query($conn, "SELECT * FROM orders") or die('Query Failed');

                        $number_of_orders = mysqli_num_rows($sql_select_orders);
                    ?>
                    <h2>
                        <?php 
                            echo $number_of_orders;
                        ?>
                    </h2>
                    <p>Orders Placed</p>
                </div>

                <div class="box">
                    <?php
                        $sql_select_products = mysqli_query($conn, "SELECT * FROM products") or die('Query Failed');

                        $number_of_products = mysqli_num_rows($sql_select_products);
                    ?>
                    <h2>
                        <?php 
                            echo $number_of_products;
                        ?>
                    </h2>
                    <p>Products Added</p>
                </div>

                <div class="box">
                    <?php
                        $sql_select_users = mysqli_query($conn, "SELECT * FROM users WHERE user_type = 'customer'") or die('Query Failed');

                        $number_of_users = mysqli_num_rows($sql_select_users);
                    ?>
                    <h2>
                        <?php 
                            echo $number_of_users;
                        ?>
                    </h2>
                    <p>Customers</p>
                </div>

                <div class="box">
                    <?php
                        $sql_select_admins = mysqli_query($conn, "SELECT * FROM users WHERE user_type = 'admin'") or die('Query Failed');

                        $number_of_admins = mysqli_num_rows($sql_select_admins);
                    ?>
                    <h2>
                        <?php 
                            echo $number_of_admins;
                        ?>
                    </h2>
                    <p>Administrators</p>
                </div>

                <div class="box">
                    <?php
                        $sql_select_account = mysqli_query($conn, "SELECT * FROM users") or die('Query Failed');

                        $number_of_account = mysqli_num_rows($sql_select_account);
                    ?>
                    <h2>
                        <?php 
                            echo $number_of_account;
                        ?>
                    </h2>
                    <p>Total Users</p>
                </div>

              
            </div>
        </section>

    <!-- custom js file link -->
    <script src="../js/admin_script.js"></script>

    </body>
</html>