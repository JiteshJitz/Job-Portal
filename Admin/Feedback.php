<?php
session_start();
if(isset($_SESSION['$UserName'])){

} 
else{
		header('location:../index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="content-language" content="cs"/>
    <meta name="robots" content="all,follow"/>

   
    <title>JOB PORTAL BY JITESH</title>
    <meta name="description" content="..."/>
    <meta name="keywords" content="..."/>

    <link rel="index" href="./" title="Home"/>
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css"/>
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css"/>
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css"/>
    <style type="text/css">
        <!--
        .style1 {
            color: #000066;
            font-weight: bold;
        }

        .style3 {
            font-weight: bold
        }

        -->
    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
    <?php
    include "Header.php"
    ?>
    <?php
    include "menu.php"
    ?>
    <!-- Page (2 columns) -->
    <div id="page" class="box">
        <div id="page-in" class="box">

            <div id="strip" class="box noprint">

                <!-- RSS feeds -->
                <hr class="noscreen"/>

                <!-- Breadcrumbs -->
                <p id="breadcrumbs">&nbsp;</p>
                <hr class="noscreen"/>

            </div> <!-- /strip -->

            <!-- Content -->
            <div id="content">


                <!-- /article -->

                <hr class="noscreen"/>


                <!-- /article -->

                <hr class="noscreen"/>

                <!-- Article -->

                <!-- /article -->

                <hr class="noscreen"/>

                <!-- Article -->
                <div class="article">
                    <h2><span><a href="#">Welcome To Control Panel</a></span></h2>


                    <table width="100%" border="1" bordercolor="#1CB5F1">
                        <tr>
                            <th height="32" bgcolor="#1CB5F1" class="style3">
                                <div align="left" class="style9 style5"><strong>Id</strong></div>
                            </th>
                            <th bgcolor="#1CB5F1" class="style3">
                                <div align="left" class="style9 style5"><strong>Job Seeker Name</strong></div>
                            </th>
                            <th bgcolor="#1CB5F1" class="style3">
                                <div align="left" class="style9 style5"><strong>Feedback</strong></div>
                            </th>
                            <th bgcolor="#1CB5F1" class="style3">
                                <div align="left" class="style12">Date</div>
                            </th>
                        </tr>
                        <?php

                        $con = mysqli_connect("localhost", "root", "", "job");
                        // Specify the query to execute
                        $sql = "select FeedbackId,Feedback,FeedbakDate,JobSeekerName from Feedback,JobSeeker_Reg where Feedback.JobSeekId=JobSeeker_Reg.JobSeekId";
                        // Execute query
                        $result = mysqli_query($con,$sql);
                        // Loop through each records
                        while ($row = mysqli_fetch_array($result)) {
                            $Id = $row['FeedbackId'];
                            $Name = $row['JobSeekerName'];
                            $Feedback = $row['Feedback'];
                            $FeedbakDate = $row['FeedbakDate'];

                            ?>
                            <tr>
                                <td class="style3">
                                    <div align="left" class="style9 style5"><strong><?php echo $Id; ?></strong></div>
                                </td>
                                <td class="style3">
                                    <div align="left" class="style9 style5"><strong><?php echo $Name; ?></strong></div>
                                </td>
                                <td class="style3">
                                    <div align="left" class="style9 style5"><strong><?php echo $Feedback; ?></strong>
                                    </div>
                                </td>
                                <td class="style3">
                                    <div align="left" class="style9 style5"><strong><?php echo $FeedbakDate; ?></strong>
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                        // Retrieve Number of records returned
                        $records = mysqli_num_rows($result);
                        ?>
                        <tr>
                            <td colspan="4" class="style3">
                                <div align="left" class="style12"><?php echo "Total " . $records . " Records"; ?> </div>
                            </td>
                        </tr>
                        <?php
                        // Close the connection
                        mysqli_close($con);
                        ?>
                    </table>
                    <p>&nbsp;</p>

                    <p class="btn-more box noprint">&nbsp;</p>
                </div> <!-- /article -->

                <hr class="noscreen"/>

            </div> <!-- /content -->

            <?php
            include "right.php"
            ?>

        </div> <!-- /page-in -->
    </div> <!-- /page -->


    <?php
    include "footer.php"
    ?>
</div> <!-- /main -->

</body>
</html>
