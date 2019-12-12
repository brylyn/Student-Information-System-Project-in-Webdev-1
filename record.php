<?php
  require_once 'validator.php';
  require_once 'account.php'; 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Informartion System</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="3rd/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="3rd/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="3rd/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="3rd/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  
  <link href="css/ui.css" rel="stylesheet" />
  <link href="css/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" />  
  <link href="css/datepicker.css" rel="stylesheet" /> 
     <link href="css/datatable/datatable.css" rel="stylesheet" />
     
    <script src="js/jquery-1.10.2.js"></script> 
    <script type='text/javascript' src='js/jquery/jquery-ui-1.10.1.custom.min.js'></script>
   <script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
 
     <script src="js/dataTable/jquery.dataTables.min.js"></script>
    
     
  
</head>
<?php
include("header.php");
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">RECORDS 
            
            </h1>

                    </div>
                </div>
        
        
  
    
    

<div class="row" style="margin-bottom:20px;">
<div class="col-md-12">


<div class="panel panel-default">
                        <div class="panel-heading">
                            <center>LIST OF REGISTERED STUDENT</center>  
                        </div>
                        <div class="panel-body">
                            <div class="table-sorting table-responsive" id="subjectresult">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                        <tr>
              <th>Student ID</th>
              <th>FirstName</th>
              <th>MiddleName</th>
              <th>LastName</th>
              <th>Course</th>
              <th>Section</th>
               <th>Age</th>
               <th>Gender</th>
               <th>Birthdate</th>
                <th>Address</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $q_student = $conn->query("SELECT * FROM `student`") or die(mysqli_error());
              while($f_student = $q_student->fetch_array()){
            ?>
            <tr>
              <td><?php echo $f_student['student_no']?></td>
              <td><?php echo $f_student['firstname']?></td>
              <td><?php echo $f_student['middlename']?></td>
              <td><?php echo $f_student['lastname']?></td>
              <td><?php echo $f_student['course']?></td>
              <td><?php echo $f_student['section']?></td>
              <td><?php echo $f_student['age']?></td>
              <td><?php echo $f_student['gender']?></td>
              <td><?php echo $f_student['birthdate']?></td>
              <td><?php echo $f_student['address']?></td>
              
              
              
            </tr>
            <?php
              }
            ?>
                                </table>
                            </div>
                        </div>
                    </div>
                     
  
  <!-------->
          
            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
                              
            </div>
        </div>
    </div>
</div>



                                    <tbody>
                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
    Student Information System : <a href="http://code-projects.org/" target="_blank">Southern Leyte State University</a>
    </div>
   
  
    <!-- BOOTSTRAP SCRIPTS -->
    

    
</body>
<script src="3rd/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="3rd/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="3rd/js/custom1.js"></script>
</html>
