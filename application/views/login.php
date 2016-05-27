<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Detail</title>
	<link rel="stylesheet" href="<?php base_url(); ?>asset/css/style.css">
    <link rel="stylesheet" href="<?php base_url(); ?>asset/css/bootstrap.min.css">
    <style>
            body{
                background-image: url("asset/img/bg.jpg");
            }
            .register{
                margin-top:10%;
                padding: 0px;
                
            }
            .registerCover{
                border:1px solid black;
                outline:10px solid #;
                background:white;
                border-radius: 10px 10px 0px 0px;
                -moz-border-radius: 10px 10px 0px 0px;
                -webkit-border-radius: 10px 10px 0px 0px;
                
                
            }
            .registerBody{
                background:#999966;
                padding:15px;
            }
            .form-footer{
                padding:10px;
                background:#2E2E1F;
                
            }
            .form-footer a{
                color:#00B26B;
            }
            #idTheLogo {
                margin: 0 auto;
            }
        </style>
	
</head>
<body>
    <div class='container register'>
                <div class='row'>
                    <!-- start main content -->
                    <div class='col-xs-12 col-sm-5 col-md-5 col-lg-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4'>
                                    
                          <div class="row registerCover">
                            <div class="title" >
                                <a href="#"><img id='idTheLogo' src='asset/img/logohrd.png' class=' img img-responsive ' style=''></a>
                                
                            </div>
                            <div class="registerBody" >
                                  <form action="${pageContext.request.contextPath}/login" method="POST">
                                
                                    <div class="form-group">
                                      <input type="text" name="usernameKSHRD" class="form-control" placeholder="Username" required>
                                    
                                    </div>
                                    <div class="form-group">
                                        <input type="password"  name="passwordKSHRD" class="form-control" placeholder="Password" required>
                                        <input type="hidden" name="${_csrf.parameterName}" value="${_csrf.token}"/>
                                    </div>
                                
                                  <input type="submit" class="btn btn-block btn-primary " value="LogIn"/>
                               </form>
                                        
                            </div>
                             <div class="form-footer clsTextAlignCenter">
                                      <div class="row">
                                          <div class="col-xs-7">
                                              <b class='glyphicon glyphicon-warning-sign' style="color:white ;font-size: 1.2em;"></b>
                                              <a href="#" >Forgot password?</a>
                                          </div>
                                          <div class="col-xs-5">
                                                <b class='glyphicon glyphicon-ok-circle' style="color:white ;font-size: 1.2em;"></b>
                                                <a href="#" >Sign Up</a>
                                          </div>
                                      </div>
                                  </div>
                          </div>
                                                      
                    </div><!--/ end main content -->
                    
    
                </div>
            </div>
    <script src="<?php base_url(); ?>asset/js/jquery.js"></script>
    <script src="<?php base_url(); ?>asset/js/bootstrap.min.js"></script>
</body>
</html>