
<?php include 'header.php';?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2><i class="fa fa-users"></i> Users</h2>


            </div>
        </div>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  
 

 

?>


          <?php
          $password =$row['password'];

           if($_SERVER['REQUEST_METHOD']=="adduser"){

                                             if(empty($_POST['name'])){

                                $errors["name"]="<span style='color:red' ><b>Enter: Name of Category</b></span>";
                                
                                
                                $sql ="INSERT INTO users(name,email,password) VALUES (:x1,:x2,:x3)";
                                $stm= $conn->prepare( $sql);
                                $stm ->execute(array("x1"=>$_POST['name'] ,"x2"=>$_POST['email'],"x3"=>$_POST['password']));
                                if( $stm->rowCount()>0 )
                                    echo "<div class='alert alert-success'>Row Inserted</div>";
                                
                                else
                                    echo "<div class='alert alert-danger'>Row Not Inserted</div>";
                                
                            }}


                                            ?>


        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-8">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-plus-circle"></i> Add New User
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form">
                                    <div class="form-group">
                                        <label>Name
                                        </label>
                                        <input type="text" placeholder="Please Enter your Name " class="form-control" name="name" 
                                        value="<?php if(isset($row)) echo $row['name'];?>"/>
                                        <?php 
                                        
                                         if(empty($_POST['name']))

                                        echo "Enter: Name of Category";
                                    else 
                                        echo "good";

                                          ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="PLease Enter Eamil" name="emali" 
                                        value="<?php if(isset($row)) echo $row['emali'];?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Please Enter password" name="password" value="<?php if(isset($row)) echo $row['password'];?>"/>
                                       
                                        <?php  if( $password <=5 )
                                        echo "password most be longer than 5";
                                         ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control"
                                            placeholder="Please Enter confirm password">
                                    </div>
                                    <div class="form-group">
                                        <label>User Type</label>
                                        <select class="form-control">
                                            <option>Administrator</option>
                                            <option>User</option>
                                        </select>
                                    </div>
                                    <div style="float:right;">
                                        <button type="submit" class="btn btn-primary" name="adduser" >Add User</button>
                                        <button type="reset" class="btn btn-danger">Cancel</button>
                                    </div>

                            </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>

        </div>
        <hr />

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-users"></i> Users
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Role</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>Trident</td>
                                        <td>Internet Explorer 4.0</td>
                                        <td>Win 95+</td>
                                        <td class="center">4</td>

                                        <td>
                                            <a href="" class='btn btn-success'>Edit</a>
                                            <a href="" class='btn btn-danger'>Delete</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->

            </div>
            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
</div>

<?php include 'footer.php';?>