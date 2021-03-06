<?php
$title = "Member";
$content = '
        <h2>New Courses Are Coming!!!</h2>
        <img src="Images/logo_small.png" class="imgLeft" />
        <br>
        <h2>The Data Scientist’s Toolbox</h2>
        <p><h4>
            In this course you will get an introduction to the main tools and ideas in the data scientists
            toolbox. The course gives an overview of the data, questions, and tools that data analysts and 
            data scientists work with. There are two components to this course. The first is a conceptual 
            introduction to the ideas behind turning data into actionable knowledge. The second is a practical 
            introduction to the tools that will be used in the program like version control, markdown, git, 
            Github, R, and Rstudio.
        </h4></p>

        <img src="Images/logo_small (1).png" class="imgRight" />
        <h2>Mobile Cloud Computing with Android</h2>
        <p><h4>
            In this course----the third in a trans-institution sequence of MOOCs on Mobile Cloud Computing 
            with Android--we will learn how to connect Android mobile devices to cloud computing and data 
            storage resources, essentially turning a device into an extension of powerful cloud-based services 
            on popular cloud computing platforms, such as Google App Engine and Amazon EC2.
         </h4></p>
         <br><br><br><br>

         <img src="Images/logo_small (2).png" class="imgLeft" />
         <h2>Reasoning, Data Analysis and Writing</h2>
         <p><h4>
            Reasoning is important.  This course will teach you how to do it well.  You will learn some simple 
            but vital rules to follow in thinking about any topic at all and some common and tempting mistakes 
            to avoid in reasoning.  We will discuss how to identify, analyze, and evaluate arguments by other 
            people (including politicians, used car salesmen, and teachers) and how to construct arguments of 
            your own in order to help you decide what to believe or what to do. These skills will be useful in 
            dealing with whatever matters most to you.
         </h4></p>';
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
    <?php
        session_start();
        if($_SESSION['username']){
            echo $_SESSION['username'].", you are a member.";
            echo "Welcome, ". $_SESSION['username']."!", '<br>';
            echo "<a href='logout.php'>Logout</a>";
        }
        else{
             echo "You are logged out. <a href='index.php'>Click</a> here to return.";
        }
          
    ?>
            
             <div id="navig-bar" style="background-color:#a9a6a6">
             <ul class="nav nav-tabs nav-justified">
                  <li class="active"><a href="member_index.php">Home &nbsp <span class="glyphicon glyphicon-home"></span></a></li>
                  <li><a href="member_course.php">Course &nbsp <span class="glyphicon glyphicon-list-alt"></span></a></li>
                  <li><a data-toggle="dropdown" href="#">Recommendation &nbsp </span class="glyphicon glyphicon-volume-up"> <span class="caret"></span></a>
                  <ul class="dropdown-menu" >
                        <li><a href="member_difficulty.php">Difficulty &nbsp</a></li>
                        <li><a href="member_recommend.php">Advanced &nbsp</a></li></ul></li>
                  <li><a href="member_study.php">Study Room &nbsp <span class="glyphicon glyphicon-list-alt"></span></a></li>
                  <li><a href="#">About &nbsp <span class="glyphicon glyphicon-user"></span></a></li>
                  <li><a href="member_contact.php">Contact &nbsp <span class="glyphicon glyphicon-phone"></span></a></li>
                  <li><a href="#">Search &nbsp <span class="glyphicon glyphicon-globe"></span></a></li>
                  <li><a href="member_management.php">Management &nbsp <span class="glyphicon glyphicon-wrench"></span></a></li>
              </ul>
              </div>


            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            <div id="sidebar">
                
            </div>
            
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
