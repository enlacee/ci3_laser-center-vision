<?php if (isset($data) && is_array($data)) : ?>
	<?php  echo $data['description'] ?>
<?php else: ?>
	<?php lang('msg_record_not_found') ?>
<?php endif;?>

<!-- Box form contact -->
<?php $this->load->view("layouts/frontend/base/form_contact_bottom_all_site.php"); ?>
<!--/ Box form contact -->
