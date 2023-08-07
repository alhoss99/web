<?php include 'header.php';
      include 'db.php';
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2><i class="fa fa-tasks"></i> Categories</h2>


                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-8">
                        <!-- Form Elements -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-plus-circle"></i> Add New Category
                            </div>
                            <?php 
                           //var_dump($_GET);
                           if( isset($_GET['action'] , $_GET['id']) and intval ($_GET['id'] > 0 )){
                             
                             switch($_GET['action']) {
                                case 'delete':
                                    
                                        $sql ='delete from categories where cat_id =:x';
                                        $stm= $conn->prepare( $sql);
                                        $stm ->execute(array("x"=>$_GET['id']));
                                        if( $stm->rowCount()==1)
                                            echo "<div class='alert alert-danger'>one rwe deleted</div>";
                                            
                                  break;
                                case 'edit':
                                    $sql ='SELECT * FROM categories where cat_id =:x ';
                                    $stm= $conn->prepare( $sql);
                                    $stm->execute(array( "x"=>$_GET['id']));

                                    if( $stm->rowCount()>0){
                                        $row=$stm->fetch();
                                        
                                    }
                                  break;

                                  case 'activ':
                                    $sql ='SELECT * FROM categories where cat_id =:x ';
                                    $stm= $conn->prepare( $sql);
                                    $stm->execute(array( "x"=>$_GET['id']));

                                    if( $stm->rowCount()>0){
                                        $row=$stm->fetch();
                                        
                                    }
                                  break;

                                  case 'a':
                                    $sql ='SELECT * FROM categories where cat_id =:x ';
                                    $stm= $conn->prepare( $sql);
                                    $stm->execute(array( "x"=>$_GET['id']));

                                    if( $stm->rowCount()>0){
                                        $row=$stm->fetch();
                                        
                                    }
                                  break;

                                default:
                                  
                              }

                           }
                           ?>






                            <?php ///if(isset($_POST['addcat']))
                            
                                if($_SERVER['REQUEST_METHOD']=="POST"){
                            //$name =trim( $_POST['name']);
                            //$Description=trim( $_POST['Description']);
                            //$id =trim( $_POST['cat_id']);
                            //  $errors =array();

                           // if(is_numeric($name)){
                                //$errors['name'] = "NAME MOST BE STRING";
                               // $errors["name"]="<span style='color:red' ><b>Enter: Name of Category</b></span>";
                                

                               if(empty($_POST['name'])){

                                $errors["name"]="<div class='alert alert-danger'>Enter: Name of Category</div>";
                                
                               }
                            elseif(empty($_POST['id'])){

                                $errors["name"]="<span style='color:red' ><b>Enter: Name of Category</b></span>";
                                
                                
                                $sql ="INSERT INTO categories(name,Description) VALUES (:x1,:x2)";
                                $stm= $conn->prepare( $sql);
                                $stm ->execute(array("x1"=>$_POST['name'] ,"x2"=>$_POST['Description']));
                                if( $stm->rowCount()>0 )
                                    echo "<div class='alert alert-success'>Row Inserted</div>";
                                
                                else
                                    echo "<div class='alert alert-danger'>Row Not Inserted</div>";
                                
                            }
                            
                        else{

                            $sql ='update categories set name=:x1, Description=:x2 where cat_id=:x3';
                            $stm= $conn->prepare( $sql);
                            $stm ->execute( array("x1"=>$_POST['name'] ,"x2"=>$_POST['Description'],"x3"=>$_POST['id'] ));
                            if( $stm->rowCount() )
                                  echo "<div class='alert alert-success'>Row Modefied </div>";
                                  //echo "<script> 
                                  //alert('one row update')
                                  //window.open('categorise.php#view','_self')<script/>";

                            else
                            
                                     echo "<div class='alert alert-danger'>Row Not Modefied </div>";  
                        
                        
                        }
                            
                                }
                    
                            ?>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form role="form" method="post">
                                            <div class="form-group">
                                                <label >Name</label>
                                                <input type='hidden'  name="id" value="<?php if(isset($row)) echo $row['cat_id']; ?>">
                                                <input type="text" placeholder="Please Enter your Name " name="name"
                                                    class="form-control"  value="<?php if(isset($row)) echo $row['name'];?>">
                                                    <i style ="color :red;">
                                                   <?php if(isset( $errors['name'])) echo $errors['name'] ?>
                                                </i>
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>

                                                <textarea placeholder="Please Enter Description" class="form-control" name="Description"
                                                    cols="30" rows="3"  > <?php if(isset($row)) echo $row['name'];?></textarea>
                                            </div>

                                            <div style="float:right;">
                                                <button type="submit" class="btn btn-primary" name="addcat">Add Category</button>
                                                <button type="reset" class="btn btn-danger"  >Cancel</button>
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
                                <i class="fa fa-tasks"></i> Categories
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover "
                                        id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>ID</th>

                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                   <?php
                                        $sql ="SELECT * FROM categories ";
                                $stm= $conn->prepare( $sql);
                                $stm->execute();
                                if( $stm->rowCount())
                                {
                                    foreach($stm->fetchAll() as $row)
                                    {

                                        $id =$row ['cat_id'];
                                
                                
                                 ?>
                                            <tr class="odd gradeX">
                                            <td><?php echo $id ?></td>
                                                <td><?php echo $row ['name']; ?></td>
                                                <td><?php echo $row ['Description'] ?></td>
                                                
                                                
                                                <td>
                                                    <?php

                                                    echo "<a title='Edit'onclick=\"return confirm('Are Yoe Sure To Edit')\" href='?action=edit&id=$id' class='btn btn-success'><i class='fa fa-edit'></i></a> ";
                                                    echo "<a title='Delete' onclick=\"return confirm('Are Yoe Sure To Delete')\" href='?action=delete&id=$id' class='btn btn-danger'><i class='fa fa-times'></i></a> ";
                                                    //echo "<a title='Delete' onclick=\"return confirm('Are Yoe Sure To Delete')\" href='?action=delete&id=$id' class='btn btn-danger'><i class='fa fa-times'></i></a> ";
                                                    //echo "<a title='Delete' onclick=\"return confirm('Are Yoe Sure To Delete')\" href='?action=delete&id=$id' class='btn btn-danger'><i class='fa fa-times'></i></a> ";
                                                   
                                                   
                                                    /* $sql = "UPDATE categories SET  name='Doe' WHERE id=2";
                                                    $stm= $conn->prepare( $sql);
                                                    $stm ->execute(array($name , $Description ));
                                                   if( $stm->rowCount()) *///<a href="" class='btn btn-danger'>Delete</a>


                                                   ?>
                                                   
                                                    
                                                </td>
                                            </tr>

                                            <?php }}?>

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