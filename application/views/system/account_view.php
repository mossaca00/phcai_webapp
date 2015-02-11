<?php $this->load->view('system/layout/header'); ?>

<div id="content">
    <h2><?php echo $heading; ?></h2>
    <h4><?php echo $sub;  ?></h4>
    
    <?php echo validation_errors(); ?>
    <?php echo form_open(base_url('admin/account/update')); ?>
        
        <div>
            <input type="password" name="inputPassword" placeholder="Old Password" required/>
        </div>
        <div>
            <input type="password" name="inputNewPassword" placeholder="New Password" required  />
        </div>
        
        <input type="submit" value="Update">
    </form>
    
</div>

<?php $this->load->view('system/layout/footer'); ?>