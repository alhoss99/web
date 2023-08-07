﻿<?php include 'header.php';
      include 'db.php';
?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2><i class="fa fa-dashboard "></i> Dashboard</h2>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-red set-icon">
                                <i class="fa fa-users"></i>
                            </span>
                            <div class="text-box">
                                <p class="main-text">
                                <?php     
                            
                                $stm= $conn->prepare('SELECT * FROM users');
                                $stm ->execute();
                                echo $stm->rowCount();

                                ?>
                                
                                Users</p>
                                <br>
                                <br>
                            </div>
                            <a href="users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-green set-icon">
                                <i class="fa fa-tasks"></i>
                            </span>
                            <div class="text-box">
                                <p class="main-text">
                                    
                                <?php    
                                $stm= $conn->prepare("SELECT * FROM categories");
                                $stm ->execute();
                                echo $stm->rowCount();
                                ?>

                                Categories</p>
                                <br>
                                <br>

                            </div>
                            <a href="categories.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-blue set-icon">
                                <i class="fa fa-table"></i>
                            </span>
                            <div class="text-box">
                                <p class="main-text">
                                    
                                    
                                <?php    
                                $stm= $conn->prepare("SELECT * FROM product ");
                                $stm ->execute();
                                echo $stm->rowCount();
                                ?>
                                
                                All Product</p>
                                <br>
                                <br>
                            </div>
                            <a href="requests.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <?php include 'footer.php';?>