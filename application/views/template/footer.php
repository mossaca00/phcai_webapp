<!-- footer
	================================================= -->
	<div class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			<p class="navbar-text"> Copyright &copy; ACKM 2015 
				<a href="#modalTerms" data-toggle="modal"> Terms and Conditions </a>
			</p>
		</div> <!-- /container -->
	</div> <!-- /navbar -->

	<!-- modal
	================================================= -->
	<div class="modal fade" id="modalTerms" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<h2>Terms and Conditions</h2>
				</div> <!-- /modal-header -->

				<div class="modal-body">
					<p> The text will go here. The text will go here. The text will go here. </p>
				</div> <!-- /modal-body -->

				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal"> Close </button>
				</div> <!-- /modal-footer -->

			</div> <!-- /modal-content -->
		</div> <!-- /modal-dialog -->
	</div> <!-- /modal-dialog -->

	
	<script src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
	<script src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>
	<script src="<?php echo base_url().'assets/js/myjquery.js'; ?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.carousel').carousel({interval: 3000});
		});
	</script>

</body>
</html>