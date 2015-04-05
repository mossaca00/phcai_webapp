<?php $this->load->view('system/layout/header'); ?>

<div id="content" class="container">
    <div class="well">
        <h1> <?php echo $heading; ?> </h1>
        <p>  <?php echo $sub; ?> </p>
    </div>
    
    <div class="row">
        <div class="col-lg-6">
            <h2 class="page-header"> Add Student </h2>
            <?php echo form_open('admin/students/addStudent'); ?>
                <div class="form-group">
                    <input type="text" class="form-control" name="fname" placeholder="First Name" required/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="lname" placeholder="Last Name" required />
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="studNum" placeholder="Student Number" min="0" required />
                </div>
                <div class="form-group">
                    <input type="reset" class="btn btn-danger"/>
                    <button type="submit" class="btn btn-primary"> Register </button>
                </div>
            </form>
        </div>
        
        <div class="col-lg-6">
            <div class="well">
                <h2 class="page-header"> Students List </h2>
                <table class="table table-responsive">
                    <tr>
                        <th> First name </th>
                        <th> Last name  </th>
                        <th> Student number </th>
                        <th colspan="2"> </th>
                    </tr>
                    <?php if ($students !== FALSE) { ?>
                    <?php   foreach ($students->result() as $row): ?>
                    <tr>
                        <td> <?php echo $row->fname; ?> </td>
                        <td> <?php echo $row->lname; ?> </td>
                        <td> <?php echo $row->stud_num; ?> </td>
                        
                        <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal_<?php echo $row->id; ?>"> Edit </button> </td>
                        
                        <td>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal_<?php echo $row->id; ?>"> Delete </button>
                            
                            <!-- Modal for delete confirmation -->
                            <div class="modal fade" id="deleteModal_<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="anylabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">
                                                Confirm delete
                                            </h4>
                                        </div>

                                        <div class="modal-body">
                                            
                                            <p> Are you sure you want to delete this student? </p>
                                            <blockquote>
                                                <p> <?php echo $row->fname . ' ' . $row->lname ?> </p>
                                                <p> <?php echo $row->stud_num; ?> </p>
                                            </blockquote>
                                               
                                            
                                        </div>

                                        <div class="modal-footer">
                                            <?php echo form_open('admin/students/deleteStudent'); ?>
                                                <div class="form-group">
                                                    <input type="hidden" name="studId" value="<?php echo $row->id; ?>" />
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal"> Cancel </button>
                                                    <button type="submit" class="btn btn-danger"> Delete </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Modal for updating student -->
                    <div class="modal fade" id="editModal_<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="anylabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">
                                        Update Student
                                    </h4>
                                </div>

                                <div class="modal-body">
                                    <?php echo form_open('admin/students/updateStudent'); ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="fname" placeholder="First Name" value="<?php echo $row->fname; ?>" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="lname" placeholder="Last Name" value="<?php echo $row->lname; ?>" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="studNum" placeholder="Student Number" min="0" value="<?php echo $row->stud_num; ?>" required />
                                        </div>
                                    
                                </div>

                                <div class="modal-footer">
                                        <div class="form-group">
                                            <input type="hidden" name="studId" value="<?php echo $row->id; ?>" />
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close </button>
                                            <button type="submit" class="btn btn-primary"> Update </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php   endforeach;?>
                    <?php 
                       
                        } else {
                            
                            echo '<p class="center"> You currently have no students yet. </p>';
                        }
                    ?>
                    
                </table>

            </div>
        </div>
    </div>
    
</div>

<?php $this->load->view('system/layout/footer'); ?>