<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="Keywords" content="edusec,edusec4,rudra softech,open source development in ahmedabad, college management software,college management system,education management software,school management system,school management software">
		<meta name="Description" content="Software development company for open source technology in Ahmedabad. Provide Enterprise solution and quality services.">
		<meta property="og:locale" content="en_US">
		<meta property="og:title" content="Rudra Softech - Provide Enterprise Solution | Development on open source technology | College Management Software | School Management Software">
		<meta property="og:description" content="Core functions like admissions, library management, transport management, students attendance in short entire range of university functions can be well performed by EduSec">
		<meta property="og:image" content="http://www.rudrasoftech.com/rudra.png">

	<link rel="shortcut icon" href="http://localhost:8081/CMS/images/rudrasoftech_favicon.png" type="image/x-icon">
        <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="M3pDWEhkNG9jLywVIDsDB3AVeyoMM1YcAD4kGjw9RwxhADVrPSZFDQ==">
        <title>Traspotation TimeTable</title>
        <link href="css/bootstrap.css" rel="stylesheet">
<link href="css/AdminLTE.css" rel="stylesheet">
<link href="font-awesome-4.4.0/css/font-awesome.css" rel="stylesheet">
<link href="css/ionicons.css" rel="stylesheet">
<link href="css/bootstrap-multiselect.css" rel="stylesheet">
<link href="css/EdusecCustome.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/yii.js"></script>
<script src="js/bootstrap.js"></script>
<script src="htm/app.htm"></script>
<script src="htm/jquery.htm"></script>
<script src="htm/bootstrap-multiselect.htm"></script>
<script src="htm/custom-delete-confirm.htm"></script>
<script src="htm/bootbox.htm"></script>
<script src="htm/bootstrap.htm"></script>
<script src="htm/bootstrapx-clickover.htm"></script>    </head>
    <body class="skin-black">
    	
<header class="header">

<a class="logo" href="Admin Dashboard.htm"><img src="image/iiit_img.png" alt="" height="22px" width="120px;"></a>
<nav class="navbar navbar-static-top" role="navigation">

<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</a>
<div class="navbar-right">

<ul class="nav navbar-nav">
<li class="module-menu">
	<form action="/CMS/index.php?r=site%2Flanguage" method="post" style="margin-top: 10px;">
<input name="_method" type="hidden">
<input name="_csrf" value="M3pDWEhkNG9jLywVIDsDB3AVeyoMM1YcAD4kGjw9RwxhADVrPSZFDQ==" type="hidden">	<div class="col-sm-6 no-padding">
	</div>

	</form></li>
<li class="dropdown module-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" title="Main Menu">
		<i class="fa fa-th"></i>
    </a>
	
<ul class="dropdown-menu">
    <li>
        <ul class="menu">
			            <li>
				<a href="Master Configuration.htm"><i class="fa fa-cogs text-aqua fa-2x"></i><h4> Configuration</h4></a>            </li>
						            <li>
				<a href="Dashboard Modules.htm"><i class="fa fa-dashboard text-green fa-2x"></i> <h4>Dashboard</h4></a>            </li>
						            <li>
				<a href="Manage Course Moodules.htm"><i class="fa fa-graduation-cap text-yellow fa-2x"></i> <h4>Course</h4></a>            </li>
						            <li>
				<a href="Student Module.htm"><i class="fa fa-users text-orange fa-2x"></i> <h4>Student</h4></a>            </li>
						            <li>
				<a href="Employee Module.htm"><i class="fa fa-user text-purple fa-2x"></i> <h4>Employee</h4></a>            </li>
						            <li>
				<a href="Fees Module.htm"><i class="fa fa-money text-green fa-2x"></i> <h4>Fees</h4></a>            </li>
						            <li>
				<a href="Report Center.htm"><i class="fa fa-line-chart text-blue fa-2x"></i> <h4>Report Center</h4></a>            </li>
						            <li>
				<a href="Assignments.htm"><i class="fa fa-user-secret text-orange fa-2x"></i> <h4>User Rights</h4></a>            </li>
  <li>
				<a href="Mess Module.htm"><i class="fa fa-money text-green fa-2x"></i> <h4>Mess</h4></a>            </li>
						              <li>
				<a href="Hostel Module.htm"><i class="fa fa-money text-green fa-2x"></i> <h4>hostel</h4></a>            </li>
						             
  <li>
				<a href="Transotation Module.htm"><i class="fa fa-money text-green fa-2x"></i> <h4>Transpotation</h4></a>            </li>
						            <li></ul>
    </li>
</ul>
</li>
<!-- Notifications: style can be found in dropdown.less -->
<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell-o"></i>
        <span class="label label-warning">0</span>
    </a>
    <ul class="dropdown-menu">

        <li class="header">You have No notifications</li>
	    </ul>
</li>

    <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="glyphicon glyphicon-user"></i>
            <span>admin <i class="caret"></i></span>
        </a>
        <ul class="dropdown-menu" style="margin-right:10px">
            <!-- User image -->
            <li class="user-header bg-light-blue">
                <img src="image/no-photo.png" class="img-circle" alt="User Image">

                <p style="font-size: 18px;">
                    admin                </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body" style="display:none">
                <div class="col-xs-6 no-padding">
		    <a class="btn btn-default btn-flat" href="Rebate Status.htm" style="font-size:13px">View Profile</a>                </div>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                <div class="pull-left">
		    <a class="btn btn-default btn-flat" href="Change User Passwordd.htm" style="font-size:12px">Change Password</a>                </div>
                <div class="pull-right">
                    <a class="btn btn-default btn-flat" href="Edusec_login.html" data-method="post" style="font-size:12px">Sign out</a>                </div>
            </li>
        </ul>
    </li><!-- User Account: style can be found in dropdown.less -->

</ul>
</div>
</nav>
</header>

      <div class="wrapper row-offcanvas row-offcanvas-left">

           <aside class="left-side sidebar-offcanvas">

    <section class="sidebar">

                    <div class="user-panel">
                <div class="pull-left image">
                    <img src="image/no-photo.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p> Welcome, admin</p>
                </div>
            </div>
        
        <!-- sidebar-menu. -- Start -->

        <ul class="sidebar-menu">
            <li>
                <a href="Admin Dashboard.htm" class="navbar-link">
                    <i class="fa fa-angle-down"></i> <span class="text-info">Menu</span>
                </a>
            </li>
	<li class="treeview active">
	<a href="Mess Module.htm"><i class="fa fa-dashboard"></i> <span>All TimeTable</span> <i class="fa fa-angle-left pull-right"></i></a>        <ul class="treeview-menu">
	         
	        </ul>
</li>
        </ul>

	<!-- sidebar-menu. -- End -->

    </section>

</aside>
	
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="Admin Dashboard.htm"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="Dashboard">All TimeTable</a></li>
<li class="active">Transpotation TimeTable</li>
</ul>

   <section class="content">
 <!--       <div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-th-list"></i> Request of status</h3></div>
  <div class="col-xs-4"></div>
 <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4 left-padding">
        <a class="btn btn-block btn-success" href="http://localhost:8081/CMS/index.php?r=dashboard%2Fmsg-of-day%2Fcreate">ADD</a>	</div>
	<div class="col-xs-4 left-padding">
	<a class="btn btn-block btn-warning" href="http://localhost:8081/CMS/index.php?r=export-data%2Fexport-to-pdf&amp;model=app%5Cmodules%5Cdashboard%5Cmodels%5CMsgOfDaySearch" target="_blank">PDF</a>	</div>
	<div class="col-xs-4 left-padding">
	<a class="btn btn-block btn-primary" href="http://localhost:8081/CMS/index.php?r=export-data%2Fexport-excel&amp;model=app%5Cmodules%5Cdashboard%5Cmodels%5CMsgOfDaySearch" target="_blank">EXCEL</a>	</div>
  </div>
</div>
-->



<div class="col-xs-12" style="padding-top: 10px;">
   <div class="box">
      <div class="box-body table-responsive">
	<div class="msg-of-day-index">
	<div id="w0">	    <style>
.glyphicon-remove-circle {
  color : #C9302C;
}
.glyphicon-ok-circle {
  color : #449D44;
}
</style>
<div id="w1" class="grid-view">
<!--<table class="table   table-bordered"><thead>
-->
<form method="post" action="TranspotaionTimeTableSql2.php">
<div class="text-center" class="img-left">
    <img src="image/iiit_img.png" alien="right" hight="80" width="80">
   <font size="6"><b >Indian Institute of Information Technology, Vadodara </font>
    <br>Bldg No. 9, IC Department, Government Engineering College, Sector 28, 
    <br>Gandhinagar, Gujarat, India - Contact No. +91-79-23215051</b>

     <br>
    <br>
    <br>

    <b>Bus Transportation Schedule</b> </div>

<table class="table   table-bordered">
<tr> 
<?php
//code for time table goes here.

require_once('PHPExcel/Classes/PHPExcel/IOFactory.php');

$inputFileName = 'TranspotaionTimeTable.xlsx';

//  Read your Excel workbook
try {
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
} catch(Exception $e) {
    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}

//  Get worksheet dimensions
$sheet = $objPHPExcel->getSheet(0); 



?>


    <th>Timing</th>    <th>Bus</th>
    <th>From</th>
    <th>To</th>
</tr>
<tr>
    
    <th> <input type="text" name="Sl1" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A5')->getValue(); ?>></th>
    <th> <input type="text" name="Sl1B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B5')->getValue(); ?>></th>
    <th> <input type="text" name="Sl1F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C5')->getValue(); ?>></th>  
    <th> <input type="text" name="Sl1D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D5')->getValue(); ?>></th>
 </tr>
 
<tr>
    
    <th> <input type="text" name="Sl2" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A6')->getValue(); ?>></th>
    <th> <input type="text" name="Sl2B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B6')->getValue(); ?>></th>
    <th> <input type="text" name="Sl2F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C6')->getValue(); ?>></th>  
    <th> <input type="text" name="Sl2D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D6')->getValue(); ?>></th>
 </tr>

<tr>
    
    <th> <input type="text" name="Sl3" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A7')->getValue(); ?>></th>
    <th> <input type="text" name="Sl3B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B7')->getValue(); ?>></th>
    <th> <input type="text" name="Sl3F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C7')->getValue(); ?>></th>  
    <th> <input type="text" name="Sl3D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D7')->getValue(); ?>></th>
 </tr>
    
<tr>
    
    <th> <input type="text" name="Sl4" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A8')->getValue(); ?>></th>
    <th> <input type="text" name="Sl4B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B8')->getValue(); ?>></th>
    <th> <input type="text" name="Sl4F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C8')->getValue(); ?>></th>  
    <th> <input type="text" name="Sl4D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D8')->getValue(); ?>></th>
 </tr>

 <tr>
    
    <th> <input type="text" name="Sl5" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A9')->getValue(); ?>></th>
    <th> <input type="text" name="Sl5B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B9')->getValue(); ?>></th>
    <th> <input type="text" name="Sl5F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C9')->getValue(); ?>></th>  
    <th> <input type="text" name="Sl5D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D9')->getValue(); ?>></th>
 </tr>

<tr>
    
    <th> <input type="text" name="Sl6" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A10')->getValue(); ?>></th>
    <th> <input type="text" name="Sl6B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B10')->getValue(); ?>></th>
    <th> <input type="text" name="Sl6F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C10')->getValue(); ?>></th>  
    <th> <input type="text" name="Sl6D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D10')->getValue(); ?>></th>
 </tr>

 <tr>
    
    <th> <input type="text" name="Sl7" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A11')->getValue(); ?>></th>
    <th> <input type="text" name="Sl7B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B11')->getValue(); ?>></th>
    <th> <input type="text" name="Sl7F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C11')->getValue(); ?>></th>  
    <th> <input type="text" name="Sl7D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D11')->getValue(); ?>></th>
 </tr>

 <tr>
    
    <th> <input type="text" name="Sl8" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A12')->getValue(); ?>></th>
    <th> <input type="text" name="Sl8B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B12')->getValue(); ?>></th>
    <th> <input type="text" name="Sl8F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C12')->getValue(); ?>></th>  
    <th> <input type="text" name="Sl8D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D12')->getValue(); ?>></th>
 </tr>
    
    <tr>
    
    <th> <input type="text" name="Sl9" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A13')->getValue(); ?>></th>
    <th> <input type="text" name="Sl9B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B13')->getValue(); ?>></th>
    <th> <input type="text" name="Sl9F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C13')->getValue(); ?>></th>  
    <th> <input type="text" name="Sl9D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D13')->getValue(); ?>></th>
 </tr>
 
   <tr>
    
    <th> <input type="text" name="S20" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A14')->getValue(); ?>></th>
    <th> <input type="text" name="S20B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B14')->getValue(); ?>></th>
    <th> <input type="text" name="S20F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C14')->getValue(); ?>></th>  
    <th> <input type="text" name="S20D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D14')->getValue(); ?>></th>
 </tr>

 <tr>
    
    <th> <input type="text" name="S21" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A15')->getValue(); ?>></th>
    <th> <input type="text" name="S21B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B15')->getValue(); ?>></th>
    <th> <input type="text" name="S21F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C15')->getValue(); ?>></th>  
    <th> <input type="text" name="S21D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D15')->getValue(); ?>></th>
 </tr>
   
   <tr>
    
    <th> <input type="text" name="S22" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A16')->getValue(); ?>></th>
    <th> <input type="text" name="S22B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B16')->getValue(); ?>></th>
    <th> <input type="text" name="S22F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C16')->getValue(); ?>></th>  
    <th> <input type="text" name="S22D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D16')->getValue(); ?>></th>
 </tr>
  
    <tr>
    
    <th> <input type="text" name="S23" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A17')->getValue(); ?>></th>
    <th> <input type="text" name="S23B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B17')->getValue(); ?>></th>
    <th> <input type="text" name="S23F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C17')->getValue(); ?>></th>  
    <th> <input type="text" name="S23D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D17')->getValue(); ?>></th>
 </tr>
 
    <tr>
    
    <th> <input type="text" name="S24" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A18')->getValue(); ?>></th>
    <th> <input type="text" name="S24B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B18')->getValue(); ?>></th>
    <th> <input type="text" name="S24F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C18')->getValue(); ?>></th>  
    <th> <input type="text" name="S24D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D18')->getValue(); ?>></th>
 </tr>
 
   <tr>
    
    <th> <input type="text" name="S25" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A19')->getValue(); ?>></th>
    <th> <input type="text" name="S25B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B19')->getValue(); ?>></th>
    <th> <input type="text" name="S25F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C19')->getValue(); ?>></th>  
    <th> <input type="text" name="S25D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D19')->getValue(); ?>></th>
 </tr>
 
  <tr>
    
    <th> <input type="text" name="S26" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('A20')->getValue(); ?>></th>
    <th> <input type="text" name="S26B" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('B20')->getValue(); ?>></th>
    <th> <input type="text" name="S26F" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('C20')->getValue(); ?>></th>  
    <th> <input type="text" name="S26D" value= <?php  echo $objPHPExcel->getActiveSheet()->getCell('D20')->getValue(); ?>></th>
 </tr>
    

</table>
<input type="submit" class="btn btn-block btn-success" name="edit"  value="Edit" >
</form>
</div></div>	</div>
      </div>
   </div>
</div>
    </section>

    <footer class="edusec-main-footer">
      <div class="container col-lg-12 col-md-12 col-xs-12 no-padding">
        <div class="pull-right hidden-xs">
          <!--b>Version</b> 3.0 -->
        </div>
        <strong>Copyright © 2015 <a >Team 3</a>.</strong> All rights reserved.
      </div>
    </footer>

</aside>


	
      </div>
    <script src="js/yii_002.js"></script>
<script src="js/jquery_002.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
$("a.toggle-column").on("click", function(e) {
    e.preventDefault();
    $.post($(this).attr("href"), function(data) {
        var pjaxId = $(e.target).closest(".grid-view").parent().attr("id");
        $.pjax.reload({container:"#" + pjaxId});
    });
    return false;
});
jQuery('#w1').yiiGridView({"filterUrl":"/CMS/index.php?r=dashboard%2Fmsg-of-day%2Findex","filterSelector":"#w1-filters input, #w1-filters select"});
jQuery(document).pjax("#w0 a", "#w0", {"push":false,"replace":false,"timeout":1000,"scrollTo":false});
jQuery(document).on('submit', "#w0 form[data-pjax]", function (event) {jQuery.pjax.submit(event, '#w0', {"push":false,"replace":false,"timeout":1000,"scrollTo":false});});
});</script>    
    
    </body></html>
