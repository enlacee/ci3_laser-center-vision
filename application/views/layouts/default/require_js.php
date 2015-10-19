<script src="<?php echo base_url('assets/lib/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/lib/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/script.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/css/menu-clean/js/maps.js') ?>"></script>
<?php echo $this->layout->js; ?>

<?php if (!empty($stringJs)) : ?>
<script type="text/javascript">
	console.log('123');
	<?php echo $stringJs ?>
</script>
<?php endif; ?>
<script type="text/javascript">
	console.log('123');
</script>
