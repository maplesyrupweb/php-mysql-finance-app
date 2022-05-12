<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("session.php");
$exp_fetched = mysqli_query($con, "SELECT * FROM expenses WHERE user_id = '$userid'");
?>

<?php include "template.php" ?>
<?php template_header("List all expenses");?>

<body>
    <?php display_header();?>
    <div class="d-flex" id="wrapper">

        <?php display_sidebar();?>
        <!-- Page Content -->
        <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light  border-bottom">


            <button class="toggler" type="button" id="menu-toggle" aria-expanded="false">
                <span data-feather="menu"></span>
            </button>

            
            </nav>

            <div class="container-fluid">
                <h3 class="mt-4 text-center">Edit Expenses</h3>
                <hr>
                <div class="row justify-content-center">

                    <div class="col-md-6">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Expense Category</th>
                                    <th>Expense name</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>

                            
                            <?php

                            
                            ?>

                            <?php $count=1; while ($row = mysqli_fetch_array($exp_fetched)) { ?>
                                <tr>
                                    <td><?php echo $count;?></td>
                                    <td>$<?php echo $row['expensedate']; ?></td>
                                    <td><?php echo '$'.$row['expense']; ?></td>
                                    <td><?php echo $row['expensecategory']; ?></td>
                                    <td><?php echo $row['expensename']; ?></td>
                                    <td class="text-center">
                                        <a href="add_expense.php?edit=<?php echo $row['expense_id']; ?>" class="btn btn-primary btn-sm" style="border-radius:0%;">Edit</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="add_expense.php?delete=<?php echo $row['expense_id']; ?>" class="btn btn-danger btn-sm" style="border-radius:0%;">Delete</a>
                                    </td>
                                </tr>
                            <?php $count++; } ?>
                        </table>
                    </div>
            
                </div>
            </div>


   

            

    </div>
    <!-- /#page-content-wrapper -->

    

    </div>
    <!-- /#wrapper -->


    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    <script>
        feather.replace()
    </script>

<?php display_footer();?>


</body>

</html>