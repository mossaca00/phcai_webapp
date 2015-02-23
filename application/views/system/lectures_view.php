<?php $this -> load -> view('system/layout/header'); ?>

<div id="content">
	<h2><?php echo $heading; ?> </h2>
	<h4><?php echo $sub; ?> </h4>
        
        <!-- Lectures -->
        <div>
            <?php foreach ($lectures as $term => $lecture): ?>
            <h3> <?php echo $term; ?> </h3>
            <div>
                <table>
                    <tr>
                        <th> Filename </th>
                        <th> Size </th>
                        <th> Date </th>
                        <th> Action </th>
                    </tr>
                    <?php foreach ($lecture as $file): ?>
                        <tr>
                            <td> <?php echo $file['name']; ?> </td>
                            <td> <?php echo $file['size']; ?> </td>
                            <td> <?php echo $file['date']; ?> </td>
                            <td>
                                <a href="<?php echo base_url('lectures').'/'.$term.'/'.$file['name']; ?>"> Download </a>
                                 |
                                 <?php echo form_open('admin/lectures/deleteLecture'); ?>
                                    <input type="hidden" name="lecturePath" value="<?php echo $file['path'].'/'.$file['name']; ?>" />
                                    <button type="submit"> Delete </button>  </td>
                                </form>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
                    
            <?php endforeach; ?>
            
        </div>
        
        <!-- Upload Form -->
        
        <div>
            <h2> Upload a new Lecture </h2>
            <?php echo $error; ?>
            <?php echo form_open_multipart('admin/lectures/do_upload'); ?>

                <input type="file" name="lecture" size="70" />
                <br/> <br/>

                <input type="radio" name="term" value="prelim" checked> Prelim <br/>
                <input type="radio" name="term" value="midterm"> Midterm <br/>
                <input type="radio" name="term" value="final"> Final <br/>

                <input type="submit" value="Upload" />

            </form> <!-- END upload form -->
        </div>
</div> <!-- END CONTENT -->

<?php $this -> load -> view('system/layout/footer'); ?>
