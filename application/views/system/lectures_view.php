<?php $this->load->view('system/layout/header'); ?>

<<<<<<< HEAD
<div id="content">
    <h2> <?php echo $heading; ?> </h2>
    <h4> <?php echo $sub; ?> </h4>
</div>

<?php $this->load->view('system/layout/footer'); ?>
=======
<div id="content" class="container">
    
    <div class="well">
        
            <h1><?php echo $heading; ?> </h1>
            <small><?php echo $sub; ?> </small>

    </div>
    
        <div class="row">
            <!-- Upload form -->
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2> Upload a new lecture </h2>
                        <!-- pdf|ppt|doc|html|txt -->
                        <small> You can upload any of these file formats: (pdf, ppt, doc, html, txt) </small>
                    </div>
                    
                    <div class="panel-body">
                        <?php echo $error; ?>
                        <?php echo form_open_multipart('admin/lectures/do_upload'); ?>
                            
                        <div class="form-group">
                                <input type="file" name="lecture" size="70" />
                        </div>
                        
                        <div class="form-group">
                            <input type="radio" name="term" value="prelim" checked> Prelim <br/>
                            <input type="radio" name="term" value="midterm"> Midterm <br/>
                            <input type="radio" name="term" value="final"> Final <br/>
                        </div>

                            <input class="btn btn-primary" type="submit" value="Upload" />

                        </form> <!-- END upload form -->
                    </div>
                </div>
            </div> <!-- END Upload -->
            
            <div class="col-lg-7 col-lg-offset-1">
                <!-- Lectures -->
                <div class="well">
                    <?php foreach ($lectures as $term => $lecture): ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3> <?php echo $term; ?> </h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-stripped">
                                    <tr>
                                        <th> Filename </th>
                                        <th> Size </th>
                                        <th> Date </th>
                                        <th>  </th>
                                        <th> </th>
                                    </tr>
                                    <?php foreach ($lecture as $file): ?>
                                        <tr>
                                            <td> <?php echo $file['name']; ?> </td>
                                            <td> <?php echo $file['size']; ?> </td>
                                            <td> <?php echo $file['date']; ?> </td>
                                            <td>
                                                <a class="btn btn-primary" href="<?php echo base_url('lectures').'/'.$term.'/'.$file['name']; ?>"> Download </a>
                                            </td>
                                            <td>

                                                 <?php echo form_open('admin/lectures/deleteLecture'); ?>
                                                    <input type="hidden" name="lecturePath" value="<?php echo $file['path'].'/'.$file['name']; ?>" />
                                                    <button class="btn btn-danger" type="submit"> Delete </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                            
                    </div>
                </div>
            </div>
</div>
        
</div> <!-- END CONTENT -->

<?php $this -> load -> view('system/layout/footer'); ?>
>>>>>>> 49c9adb29edb376cd93d3cd915ddf74a2e941e1c
