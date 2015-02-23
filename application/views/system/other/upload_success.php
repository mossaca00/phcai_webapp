<?php $this->load->view('system/layout/header'); ?>

<div id="content">
    <h2> Lecture successfully uploaded for <?php echo $term; ?>! </h2>
    
    <ul>
        <?php foreach ($uploadInfo as $item => $value): ?>
        <li><strong><?php echo $item.': '; ?> </strong> <?php echo $value; ?></li>
        <?php endforeach; ?>
    </ul>
    
    <a href="<?php echo base_url('admin/lectures'); ?>"> Back to Lectures </a>
</div>

<?php $this->load->view('system/layout/footer'); ?>