<?php if (isset($data) && is_array($data)) : ?>
	<?php  echo $data['description'] ?>
<?php else: ?>
	not found records.
<?php endif;?>

<!-- Box form contact -->
<?php $this->load->view("layouts/frontend/base/form_contact_bottom_all_site.php"); ?>
<!--/ Box form contact -->
