<?php
$email = -1;
if(isset($_GET['id'])){
    $email = base64_decode($_GET['id']);
}

?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/login_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 11:01:45 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Welcome To HEMS | Set Password</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/css/animate.min.css" rel="stylesheet" />
	<link href="assets/css/style.min.css" rel="stylesheet" />
	<link href="assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<div class="login-cover">
	    <div class="login-cover-image"><img src="assets/img/login-bg/bg-4.jpg" data-id="login-cover-image" alt="" /></div>
	    <div class="login-cover-bg"></div>
	</div>
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated fadeIn">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                    <img src="images/hems-login-logo.png">
                </div>
<!--                <div class="icon">-->
<!--                    <i class="fa fa-sign-in"></i>-->
<!--                </div>-->
            </div>
            <!-- end brand -->
            <div class="login-content">
                <div id="ack" class="alert-danger" style="font-size: small;"></div>
                <form action="" method="POST" class="margin-bottom-0" id="loginForm">
                    <div class="form-group m-b-20">
                        <input type="text" id="username" name="username" class="form-control input-lg" placeholder="Email Address" readonly value="<?php echo $email?>" /><div id="unerror"></div>
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" id="password" name="password" class="form-control input-lg" placeholder="Password" /><div id="perror"></div>
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" id="confpassword" name="confpassword" class="form-control input-lg" placeholder="Confirm Password" /><div id="cperror"></div>
                    </div>
                    <div class="checkbox m-b-20">
                        <div align="center"><img src="images/495.gif" alt="loading" id="lgwait" style="display: none;"></div><br>
                    </div>
                    <div class="login-buttons">
                        <button type="submit" id="loginMeIn" class="btn btn-success btn-block btn-lg">Set Password</button>
                    </div>
                    <div class="m-t-20">
                        Click <a href="index.php">here</a> to sign in.
                    </div>
                    <input type="hidden" name="do" id="do" value="set_password"  />
                </form>
            </div>
        </div>
        <!-- end login -->
        
<!--        <ul class="login-bg-list">-->
<!--            <li class="active"><a href="#" data-click="change-bg"><img src="assets/img/login-bg/bg-4.jpg" alt="" /></a></li>-->
<!--            <li><a href="#" data-click="change-bg"><img src="assets/img/login-bg/bg-2.jpg" alt="" /></a></li>-->
<!--            <li><a href="#" data-click="change-bg"><img src="assets/img/login-bg/bg-3.jpg" alt="" /></a></li>-->
<!--            <li><a href="#" data-click="change-bg"><img src="assets/img/login-bg/bg-4.jpg" alt="" /></a></li>-->
<!--            <li><a href="#" data-click="change-bg"><img src="assets/img/login-bg/bg-5.jpg" alt="" /></a></li>-->
<!--            <li><a href="#" data-click="change-bg"><img src="assets/img/login-bg/bg-6.jpg" alt="" /></a></li>-->
<!--        </ul>-->
        
        <!-- begin theme-panel -->
<!--        <div class="theme-panel">-->
<!--            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>-->
<!--            <div class="theme-panel-content">-->
<!--                <h5 class="m-t-0">Color Theme</h5>-->
<!--                <ul class="theme-list clearfix">-->
<!--                    <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>-->
<!--                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>-->
<!--                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>-->
<!--                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>-->
<!--                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>-->
<!--                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>-->
<!--                </ul>-->
<!--                <div class="divider"></div>-->
<!--                <div class="row m-t-10">-->
<!--                    <div class="col-md-5 control-label double-line">Header Styling</div>-->
<!--                    <div class="col-md-7">-->
<!--                        <select name="header-styling" class="form-control input-sm">-->
<!--                            <option value="1">default</option>-->
<!--                            <option value="2">inverse</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row m-t-10">-->
<!--                    <div class="col-md-5 control-label">Header</div>-->
<!--                    <div class="col-md-7">-->
<!--                        <select name="header-fixed" class="form-control input-sm">-->
<!--                            <option value="1">fixed</option>-->
<!--                            <option value="2">default</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row m-t-10">-->
<!--                    <div class="col-md-5 control-label double-line">Sidebar Styling</div>-->
<!--                    <div class="col-md-7">-->
<!--                        <select name="sidebar-styling" class="form-control input-sm">-->
<!--                            <option value="1">default</option>-->
<!--                            <option value="2">grid</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row m-t-10">-->
<!--                    <div class="col-md-5 control-label">Sidebar</div>-->
<!--                    <div class="col-md-7">-->
<!--                        <select name="sidebar-fixed" class="form-control input-sm">-->
<!--                            <option value="1">fixed</option>-->
<!--                            <option value="2">default</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row m-t-10">-->
<!--                    <div class="col-md-5 control-label double-line">Sidebar Gradient</div>-->
<!--                    <div class="col-md-7">-->
<!--                        <select name="content-gradient" class="form-control input-sm">-->
<!--                            <option value="1">disabled</option>-->
<!--                            <option value="2">enabled</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row m-t-10">-->
<!--                    <div class="col-md-5 control-label double-line">Content Styling</div>-->
<!--                    <div class="col-md-7">-->
<!--                        <select name="content-styling" class="form-control input-sm">-->
<!--                            <option value="1">default</option>-->
<!--                            <option value="2">black</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row m-t-10">-->
<!--                    <div class="col-md-12">-->
<!--                        <a href="#" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage"><i class="fa fa-refresh m-r-3"></i> Reset Local Storage</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <!-- end theme-panel -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/js/login-v2.demo.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
    <script src="js/setPassword.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			LoginV2.init();
		});
	</script>
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-53034621-1', 'auto');
      ga('send', 'pageview');
    </script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/login_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 11:03:48 GMT -->
</html>