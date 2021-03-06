        <div class='container-fluid'>
                <div class='row'>
                   <div class="col-xs-12">
                        <div >
                        <div class='row' >
                            
                            <div class="panel panel-primary">
                              <div class="panel-heading">Edit User</div>
                              <div class="panel-body">
                                    <div class="box-body">
                                    
                                        <form action="<?= base_url()?>user/update" id="formstudent" method="POST" enctype="multipart/form-data">
                                            <div class="form-horizontal"  >

                                                 <div class="form-group">
                                                  <label for="inputPassword" class="col-sm-2 control-label">ID</label>
                                                  <div class="col-sm-10">
                                                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $index['id']; ?>"  required="required" />
                                                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $index['id']; ?>"  required="required" disabled />
                                                  </div>
                                                </div>


                                            <!-- Input name -->
                                            <div class="form-group <?php if(form_error('username')){echo'has-error';} ?>" >
                                                <label for="input-text" class="col-sm-2 control-label">User Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $index['username']; ?>"  required="required" />
                                                    <span class="error"><?php echo form_error('username'); ?></span>
                                                </div>
                                            </div>

                                            <div class="form-group <?php if(form_error('surname')){echo'has-error';} ?>" >
                                                <label for="input-text" class="col-sm-2 control-label">Surname</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="surname" name="surname" value="<?php echo $index['surname']; ?>"  required="required" />
                                                    <span class="error"><?php echo form_error('surname'); ?></span>
                                                </div>
                                            </div>


                                            <div class="form-group <?php if(form_error('password')){echo'has-error';} ?>" >
                                                <label for="input-text" class="col-sm-2 control-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="password" name="password" value="<?php echo $index['password']; ?>"  required="required" />
                                                    <span class="error"><?php echo form_error('password'); ?></span>
                                                </div>
                                            </div>

                                            <div class="form-group <?php if(form_error('country')){echo'has-error';} ?>" >
                                                <label for="input-text" class="col-sm-2 control-label">Country</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="country" name="country" value="<?php echo $index['country']; ?>"  required="required" />
                                                    <span class="error"><?php echo form_error('country'); ?></span>
                                                </div>
                                            </div>

                                            <div class="form-group <?php if(form_error('email')){echo'has-error';} ?>" >
                                                <label for="input-text" class="col-sm-2 control-label">E-mail</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $index['email']; ?>"  required="required" />
                                                    <span class="error"><?php echo form_error('email'); ?></span>
                                                </div>
                                            </div>


                                            
                                            
                                            <div class="form-group" >
                                                <label for="input-text" class="col-sm-2 control-label">User Role</label>
                                                <div class="col-sm-10">
                                                     <select class="form-control" id="role" name="role" value="<?php echo $index['role']; ?>">
                                                        <option value="Admin">Admin</option>
                                                        <option value="User">User</option>
                                                      </select>
                                                     <span class="error"><?php echo form_error('roles'); ?></span>
                                                </div>
                                            </div>
                                            
                                            <!-- submit button-->
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-5">
                                                        <input type="hidden" name="" value="" id="TOKEN"/>
                                                        <input type="submit" value="Update"  class="btn btn-success">
                                                        <button id="clear"  class="btn btn-success">Back</button>
                                                        
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