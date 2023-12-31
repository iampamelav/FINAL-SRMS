<?php
    
    error_reporting(E_ERROR);
    session_start();
    include ('../php/connect.php');

    // if not admin-user, stay sa home-page
    if (!isset($_SESSION['fac-user'])) {
        header('Location: home-page.php'); 
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Student, Record Management, System">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manage Grades</title>

	<link rel="stylesheet" type="text/css" href="../css/fac-manage-grades.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="../images/hfm_logo.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">
        
        <!--------------FOR UPPER RIGHT NAV BAR----------->
        <nav class="navbar">
            <div class="navbar__left">
                <a>Admin</a>
                <a class="active_link">Faculty</a>
            </div>
        </nav> <!--------------END OF UPPER RIGHT NAV BAR----------->

        <main>

            <div class="main__container">
                
                <!-- MAIN TITLE STARTS HERE -->
                <div class="main__title">
                    <img src="../images/hello.svg" alt="An icon of a man in a study table." />
                    <div class="main__greeting">
                        <h1>Hello Montessorian!</h1>
                        <p>Manage student grades here.</p>
                    </div>
                </div> <!-- MAIN TITLE ENDS HERE -->

                <p>Manage Grades</p>
                <hr>

                <!-- MAIN CARDS STARTS HERE -->
                <div class="main__cards">
                    
                    <div class="row">
                        <div class="card">
                            <a href="fac-manage-grades-7.php">
                                <div class="card_inner">
                                    <p class="text-primary-p">Grade 7</p>
                                </div>
                            </a>
                        </div>

                        <div class="card">
                            <a href="fac-manage-grades-9.php">
                                <div class="card_inner">
                                    <p class="text-primary-p">Grade 9</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="card">
                            <a href="fac-manage-grades-8.php">
                                <div class="card_inner">
                                    <p class="text-primary-p">Grade 8</p>
                                </div>
                            </a>
                        </div>

                        <div class="card">
                            <a href="fac-manage-grades-10.php">
                                <div class="card_inner">
                                    <p class="text-primary-p">Grade 10</p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div> <!-- MAIN CARDS ENDS HERE -->

            </div>
        </main>

        <!-- SIDEBAR STARTS HERE -->
        <div id="sidebar">

            <div class="sidebar__title">
                <div class="sidebar__img">
                    <img src="../images/hfm_logo.png" alt="logo" />
                    <h1>Student Record Management System</h1>
                </div>
            </div>

            <div class="sidebar__menu">
                  
                <h2>Process</h2>
                  
                <div class="sidebar__link active_menu_link">
                    <a href="fac-manage-grades.php">
                        <i class="fa-solid fa-file"></i>
                        &nbsp; Manage Grades
                    </a>
                </div>
                  
                <div class="sidebar__user">
                    <a>
                        <i class="fa-regular fa-user"></i>
                        &nbsp; <?php echo $_SESSION['fac-user']?>
                    </a>
                </div> 

                <div class="sidebar__logout">
                    <a href="../php/logout.php" onclick="return confirm('Are you sure you want to Log Out?')">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        &nbsp; Log out
                    </a>
                </div>

            </div>

        </div>

    </div>

</body>
</html>