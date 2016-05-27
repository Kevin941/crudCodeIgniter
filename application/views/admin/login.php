<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Detail</title>
    <link rel="stylesheet" href="<?= base_url(); ?>asset/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/jasny-bootstrap/css/jasny-bootstrap.min.css">
    <style type="text/css">
        .pd-b-5{
            padding-bottom: 5px;
        }
        .error{
            color: red;
        }
    </style>
    
</head>
<body>
        <div class='container-fluid'>
                <div class='row'>
                   <div class="col-xs-12">
                        <div >
                        <div class='row' >
                            
                            <div class="panel panel-primary">
                              <div class="panel-heading text-center"><h2>Log in</h2></div>
                              <div class="panel-body">
                                    <div class="box-body">
                                    
                                        <form action="<?= base_url()?>user/log_in" id="formstudent" method="POST" enctype="multipart/form-data">
                                            <div class="form-horizontal"  >

                                            <div class="form-group <?php if(form_error('email')){echo'has-error';} ?>" >
                                                <label for="input-text" class="col-sm-2 control-label">E-mail</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="email" name="email" value=""  required="required" />
                                                    <span class="error"><?php echo form_error('email'); ?></span>
                                                </div>
                                            </div>

                                            <div class="form-group <?php if(form_error('password')){echo'has-error';} ?>" >
                                                <label for="input-text" class="col-sm-2 control-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="password" name="password" value=""  required="required" />
                                                    <span class="error"><?php echo form_error('password'); ?></span>
                                                </div>
                                            </div>
                                            
                                            
                                            <!-- submit button-->
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-5">
                                                        <input type="hidden" name="" value="" id="TOKEN"/>
                                                        <input type="submit" value="Log in"  class="btn btn-success">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </form>
                                 
                            
                                    </div>  
                            </div>
                        </div>
                        </div> 
                      
                    </div>
                        
                </div>
                    
                    
            </div>
        </div>
        
    <!-- footer -->
    <div class="container-fluid foot">
        <div class="row">
            <div class="col-xs-12">
                    <h4>Prueba de Evaluación para Candidato PHP <br/>PagaFácil.net</h4>
                    
            </div>
        </div>
    </div>
    
    
    
    
    <!-- script references -->
    
    <script src="<?= base_url(); ?>asset/js/jquery.js"></script>
     <script src="<?= base_url(); ?>asset/js/bootstrap.min.js"></script>
      <script src="<?= base_url(); ?>asset/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
</body>
</html>