<?php $this->load->view('system/layout/header'); ?>

<div id="content" class="container">
    <h2><?php echo $heading; ?></h2>
    <h4><?php echo $sub;  ?></h4>
    
    <?php echo validation_errors(); ?>
    <?php echo form_open(base_url('admin/account/update')); ?>
        
        <div class="form-group">
            <input type="password" class="form-control" name="inputPassword" placeholder="Old Password" required/>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="inputNewPassword" placeholder="New Password" required  />
        </div>
    
        <button type="reset" class="btn btn-default"> Reset </button>
        <button type="submit" class="btn btn-primary"> Update </button>
    </form>
    
</div>

<?php $this->load->view('system/layout/footer'); ?>