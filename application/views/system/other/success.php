<?php $this->load->view('system/layout/header'); ?>
<div id="content" class="container">
    <div class="alert-success container-fluid" id="success">
        <p class="container-fluid"> Successfully <?php echo $action; ?>! Click <a href="<?php echo $back; ?>"> here </a> 
        to go back. </p>
    </div>
</div>
<?php $this->load->view('system/layout/footer'); ?>

