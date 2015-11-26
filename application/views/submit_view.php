<?= $this->load->view('layout/header'); ?>
	<body>
		<div class="container header">
			<div class="col-md-6 col-md-offset-3">
				<a class="logo" href="<?= base_url(). ""; ?>"><h2 class="text-center">Free Food Photography</h2></a>
				<h6 class="text-center">MADE BY <a href="www.freshlysqzd.com">FRESHLY SQUEEZED DESIGNS</a></h6>

				<p>We'll review your photo for publishing and if <a class="link" href="">your submission is accepted</a>, your work will be distributed for free under the <a class="link" href="">Free Food Photography license</a>.
				<br><small>Please only upload photos <a class="link" href="">that you own the rights to.</a></small></p>

				<?= $error;?>
				<?= form_open_multipart('submit/do_upload');?>
					<center><input type="file" name="userPhoto" size="20" /></center>
					<center><input type="submit" value="Add a Photo" class="btn btn-primary" role="button"></center>

				</form>
			</div>
		</div>
<?= $this->load->view('layout/footer'); ?>