<section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
						
						<?php 
						
						$con = mysqli_connect("localhost","root","","onlinecourse");
						$select  = "SELECT * FROM courseenrolls WHERE status=0";
						$rs = mysqli_query($con,$select);
						if($rs){
							$rows = mysqli_num_rows($rs);
						}
						
						
						?>

                            <li><a target="_blank" href="pending_course.php">course confirmation[<?php echo $rows;?>]</a></li>
                            <li><a href="session.php">Session</a></li>
                            <li><a href="semester.php">Semester </a></li>
                            <li><a   href="department.php">Department</a></li>
                             <li><a href="course.php">Course</a></li>
                              <li><a href="student-registration.php">Registration</a></li>
                               
                               <li><a href="enroll-history.php">Students History</a></li>
                            <li class="dropdown">
						       <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
						              <ul class="dropdown-menu">
							         <li><a href="index.php" target="_blank">Admin</a></li>
							
							      <li><a href="../index.php" target="_blank">Student</a></li>
						           </ul>
					         </li>
                            <li><a href="logout.php">Logout</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>