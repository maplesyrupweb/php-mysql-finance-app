<?php 
/**
 *  Load HTML, Header Nav Bar, CSS, and JS and output the title of the page
 *
 * @param [type] $title
 * @return void
 */

function template_header($title) {

echo <<<EOT

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>$title</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Feather JS for Icons -->
    <script src="js/feather.min.js"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>




</head>
EOT;
}

/**
 *  Load HTML, Header Nav Bar, CSS, and JS and output the title of the page for reports pages
 *
 * @param [type] $title
 * @return void
 */


function html_template($title) {

  echo <<<EOT
  
  <!DOCTYPE html>
  <html lang="en">
  
  <head>
  
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
  
      <title>$title</title>
  
      <!-- Bootstrap core CSS -->
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      
      <!-- Custom styles for this template -->
      <link href="../css/style.css" rel="stylesheet">
  
      <!-- Feather JS for Icons -->
      <script src="../js/feather.min.js"></script>
  
      <!-- jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Popper JS -->
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  
  
  
  </head>
  EOT;
  }

/**
 * Removes whitespace, backslashes, and concerts some predefined characters to HTML
 *
 * @param [type] $data
 * @return void
 */
function data_check($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }



/**
 * Display a footer on each page
 */

function display_footer() { 

  echo <<<EOT
  <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Daily Expense Application</a>
  </nav>

  EOT;

}

/**
 *  Display the header navigation bar
 */

function display_header() {
  
  echo <<<EOT
  <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
        <h4 class="text-white"></h4>
        <a class="nav-item nav-link" href="http://localhost:8888/Finance/">Home</a>
        <a class="nav-item nav-link" href="http://localhost:8888/Finance/add_expense.php">Add an expense</a>
        <a class="nav-item nav-link" href="http://localhost:8888/Finance/manage_expense.php">Edit an expense</a>
        <a class="nav-item nav-link" href="http://localhost:8888/Finance/search.php">Search expense</a>
        
          <li style="list-style-type: none;" class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Reports 
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="http://localhost:8888/Finance/reports/last-7-days.php">Last 7 Days</a>
            <a class="dropdown-item" href="http://localhost:8888/Finance/reports/last-30-days.php">Last 30 Days</a>
            <a class="dropdown-item" href="http://localhost:8888/Finance/reports/one-year.php">One Year</a>
            <a class="dropdown-item" href="http://localhost:8888/Finance/reports/all-time.php">All time</a>
            
            
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      

        <a class="nav-item nav-link" href="http://localhost:8888/Finance/profile.php">Profile</a>
        <a class="nav-item nav-link" href="http://localhost:8888/Finance/logout.php">Logout</a>
        <a class="nav-item nav-link" href="http://localhost:8888/Finance/login.php">Login</a>
      </div>
    </div>
      
    <nav class="navbar navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
  </div>


  </nav>

  EOT;
}

/**
 *  Displays a column of icons on the sidebar for home page/add/edit/profile/logout 
 */

function display_sidebar() {


  echo <<<EOT
  <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
           
            <div class="sidebar-heading">Management</div>
            <div class="list-group list-group-flush">
              <a href="index.php" class="list-group-item list-group-item-action sidebar-active">Dashboard</a>
              <a href="add_expense.php" class="list-group-item list-group-item-action ">Add Expenses</a>
              <a href="manage_expense.php" class="list-group-item list-group-item-action ">Edit Expenses</a>
              <li style="list-style-type: none;" class="nav-item dropdown">
              <a class="list-group-item nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Report</a>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="http://localhost:8888/Finance/reports/last-7-days.php">Last 7 Days</a>
                <a class="dropdown-item" href="http://localhost:8888/Finance/reports/last-30-days.php">Last 30 Days</a>
                <a class="dropdown-item" href="http://localhost:8888/Finance/reports/one-year.php">Last Year</a>
                <a class="dropdown-item" href="http://localhost:8888/Finance/reports/all-time.php">All time</a>
                
              </div>
            </li>
              
            </div>
            <div class="sidebar-heading">Settings </div>
            <div class="list-group list-group-flush">
              <a href="profile.php" class="list-group-item list-group-item-action ">Profile</a>
              <a href="logout.php" class="list-group-item list-group-item-action ">Logout</a>
            </div>
          </div>
  <!-- /#sidebar-wrapper -->

  EOT;

}

/**
 *  Displays a column of icons on the sidebar for home page/add/edit/profile/logout for reports pages
 */

function display_reports_sidebar() {
  echo <<<EOT
  <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
           
            <div class="sidebar-heading">Management</div>
            <div class="list-group list-group-flush">
              <a href="../index.php" class="list-group-item list-group-item-action sidebar-active"> Dashboard</a>
              <a href="../add_expense.php" class="list-group-item list-group-item-action ">Add Expenses</a>
              <a href="../manage_expense.php" class="list-group-item list-group-item-action ">Edit Expenses</a>
              <li style="list-style-type: none;" class="nav-item dropdown">
              <a class="list-group-item nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Report</a>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="http://localhost:8888/Finance/reports/last-7-days.php">Last 7 Days</a>
                <a class="dropdown-item" href="http://localhost:8888/Finance/reports/last-30-days.php">Last 30 Days</a>
                <a class="dropdown-item" href="http://localhost:8888/Finance/reports/one-year.php">One Year</a>
                <a class="dropdown-item" href="http://localhost:8888/Finance/reports/all-time.php">All time</a>
              </div>
            </li>
              
            </div>
            <div class="sidebar-heading">Settings </div>
            <div class="list-group list-group-flush">
              <a href="profile.php" class="list-group-item list-group-item-action ">Profile</a>
              <a href="logout.php" class="list-group-item list-group-item-action ">Logout</a>
            </div>
          </div>
  <!-- /#sidebar-wrapper -->

  EOT;


}

/**
 *  Display a navbar that let's user toggle to the sidebar
 */

function display_secondary_nav() {

  echo <<<EOT
    <nav class="navbar navbar-expand-lg navbar-light border-bottom">
      <button class="toggler" type="button" id="menu-toggle" aria-expanded="false">
        <span data-feather="menu"></span>
     </button>           
    </nav>

  EOT;
}

/**
 *  Display a row of dashboard icons for add/edit/profile/logout
 */

function display_dashboard_buttons() {

  echo <<<EOT

   <div class="row">
      <div class="col-md">
          <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col text-center">
                    <a href="add_expense.php"><img src="icon/money-3.png" width="57px" />
                      <p>Add Expenses</p>
                    </a>
                  </div>
                  
                  <div class="col text-center">
                    <a href="manage_expense.php"><img src="icon/money-2.png" width="57px" />
                      <p>Edit Expenses</p>
                    </a>
                  </div>
                  <div class="col text-center">
                    <a href="profile.php"><img src="icon/user.png" width="57px" />
                      <p>User Profile</p>
                    </a>
                  </div>
                  <div class="col text-center">
                    <a href="logout.php"><img src="icon/logout.png" width="57px" />
                      <p>Logout</p>
                    </a>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>


  EOT;
}

/**
 *  Display a row of dashboard icons for add/edit/profile/logout for the reports pages
 */


function display_reports_dashboard_buttons() {

  echo <<<EOT

   <div class="row">
      <div class="col-md">
          <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col text-center">
                    <a href="../add_expense.php"><img src="../icon/money-3.png" width="57px" />
                      <p>Add Expenses</p>
                    </a>
                  </div>
                  
                  <div class="col text-center">
                    <a href="../manage_expense.php"><img src="../icon/money-2.png" width="57px" />
                      <p>Edit Expenses</p>
                    </a>
                  </div>
                  <div class="col text-center">
                    <a href="profile.php"><img src="../icon/user.png" width="57px" />
                      <p>User Profile</p>
                    </a>
                  </div>
                  <div class="col text-center">
                    <a href="../logout.php"><img src="../icon/logout.png" width="57px" />
                      <p>Logout</p>
                    </a>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>


  EOT;
}

/**
 *  Load JavaScript for reports pages
 */

function load_reports_scripts() {

  echo <<<EOT

    <!-- Bootstrap core JavaScript -->
    <script src="../js/jquery.slim.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/Chart.min.js"></script>
    
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
    </script>
    <!-- All elements that have a data-feather attribute will be replaced with SVG markup corresponding to their data-feather attribute value. -->
    <script>
    feather.replace()
    </script>
  EOT;
  
}

?>

