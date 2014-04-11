

	<table border="1">
	<?php echo form_open(); ?>
		<?php foreach($data as $data): ?>
			
			<?php
			if(get_class($data) != 'lomake_input' && get_class($data) != 'lomake_textarea' && get_class($data) != 'lomake_select' && get_class($data) != 'lomake_textarea')
				$colspan = true;
			else $colspan = false;
			?>
			
			<tr>
				<?php if($colspan == false): ?>
				<td>
					<?php echo form_label($data -> getLabel()); ?>
				</td>
				<?php endif; ?>
				
				<td <?php if($colspan) echo "colspan='2'"; ?>>
					
				</td>
			</tr>
			
		<?php endforeach; ?>
	<?php echo form_close(); ?>
	</table>