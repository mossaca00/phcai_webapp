<?php $this->load->view('system/layout/header'); ?>
<div id="content" class="container">
    <div class="alert-danger container-fluid" id="error">
        <p class="container-fluid"> Error: <?php echo $errmsg; ?>! Click <a href="<?php echo $back; ?>"> here </a> 
        to go back. </p>
    </div>
</div>
<?php $this->load->view('system/layout/footer'); ?>