<?php require 'header.php'; 
$name=$_SESSION['userid'];
?>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../admin/index1.php">Home</a> 
            </div>
  <div style="color: blue;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> 
            Welcome <?php echo "$name" ;?> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="img/asd.jpg" class="user-image img-responsive"/>
					</li>
				
					<!--<li  > 
                        <a class="active-menu"  href="index1.php"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>-->
                    <li>
                        <a  href="doctor_table.php"><i class="fa fa-user-md 
                         fa-3x"></i>&nbsp;&nbsp;Doctor</a>
                         
                    </li>
                    <li>
                        <a  href="#"><i class="fa fa-sitemap fa-bug fa-3x"></i>&nbsp;Allergy<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="allergy_table.php">View Allergy</a>
                            </li>
                        </ul>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="allergy.php">Add Allergy</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a  href="#"><i class="fa fa-sitemap fa-eyedropper fa-3x"></i>Vaccination<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="vaccination_table.php">vaccination View</a>
                            </li>
                        </ul>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="vaccination.php">Add Vaccination</a>
                            </li>
                        </ul>
                    </li>
                    
                       
                   
                      <li>
                        <a  href="laboratory_table.php"><i class="fa fa-flask  fa-3x"></i>&nbsp;Laboratory</a
                        >
                        
                    </li>
                    <li>
                        <a  href="medical_table.php"><i class="fa fa-medkit fa-3x"></i>&nbsp;Medical store</a>
                        
                    </li>
						   <li  >
                        <a  href="patient_table.php"><i class="fa fa-user-o fa-user fa-3x"></i>&nbsp;&nbsp;&nbsp;Patient </a>
                        
                    </li>	
                      <li  >
                        <a  href="#"><i class="fa  fa-road  fa-3x"></i>&nbsp;City<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="city_table.php">City view</a>
                            </li>
                        </ul>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="city.php">Add City</a>
                            </li>
                        </ul>
                    </li>
                   
                    <li>
                        <a  href="#"><i class="fa  fa-question-circle fa-3x"></i>&nbsp;&nbsp;Security Question<span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="security_table.php">Sequrity question view</a>
                            </li>
                        </ul>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="securityquestion.php">Add Question</a>
                            </li>
                        </ul>
                    </li>

                    <li  >
                        <a  href="feedback_table.php"><i class="fa fa-envelope fa-3x"></i>&nbsp;Feedback </a>
                        
                    </li>    	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->


