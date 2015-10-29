<?php if (isset($data) && is_array($data)) : ?>
	<?php  echo $data['description'] ?>
<?php else: ?>
	<?php lang('msg_record_not_found') ?>
<?php endif;?>
