
		<?php 
		$attributes = array('id' => 'paivahoito-lomake-form');
		echo form_open('email/send', $attributes);
		?>
		<h2>Päivähoitohakemus<h2>
		<?php echo form_label('Päiväkoti', 'paivakoti'); ?>
		<?php
			$options = array(
				'vekarakolo' => 'Vekarakolo',
				'vekarakumpu' => 'Vekarakumpu',
				'vekarakyla' => 'Vekarakylä',
				'vekararinne' => 'Vekararinne',
				'vekaravaara' => 'Vekaravaara',
				'vekaratoimisto' => 'Vekaratoimisto'
            );
			
			echo form_dropdown('paivakoti', $options);
		?>
		<h3>Lapsi</h3>
		<table>
			<tr>
			<td>
				<?php echo form_label('Etunimi', 'lapsi_etunimi'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'lapsi_etunimi',
					  'type' => 'text'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
			<tr>
			<td>
				<?php echo form_label('Sukunimi', 'lapsi_sukunimi'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'lapsi_sukunimi',
					  'type' => 'text'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
			<tr>
			<td>
				<?php echo form_label('Henkilötunnus', 'lapsi_henkilotunnus'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'lapsi_henkilotunnus',
					  'type' => 'text'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
			<tr>
			<td>
				<?php echo form_label('Lähiosoite', 'lapsi_lahiosoite'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'lapsi_lahiosoite',
					  'type' => 'text'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
			<tr>
			<td>
				<?php echo form_label('Postinumero', 'lapsi_postinumero'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'lapsi_postinumero',
					  'type' => 'text'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
			<tr>
			<td>
				<?php echo form_label('Postiosoite', 'lapsi_postiosoite'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'lapsi_postiosoite',
					  'type' => 'text'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
			<tr>
			<td>
				<?php echo form_label('Kotikunta', 'lapsi_kotikunta'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'lapsi_kotikunta',
					  'type' => 'text'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
		</table>
		<h3>Laskutettava huoltaja</h3>
		<table>
			<tr>
			<td>
				<?php echo form_label('Etunimi', 'laskutettava_huoltaja_etunimi'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'laskutettava_huoltaja_etunimi',
					  'type' => 'text'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
			<tr>
			<td>
				<?php echo form_label('Sukunimi', 'laskutettava_huoltaja_sukunimi'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'laskutettava_huoltaja_sukunimi',
					  'type' => 'text'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
			<tr>
			<td>
				<?php echo form_label('Henkilötunnus', 'laskutettava_huoltaja_henkilotunnus'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'laskutettava_huoltaja_henkilotunnus',
					  'type' => 'text'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
			<tr>
			<td>
				<?php echo form_label('Puhelin', 'laskutettava_huoltaja_puhelin'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'laskutettava_huoltaja_puhelin',
					  'type' => 'text'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
			<tr>
			<td>
				<?php echo form_label('Sähköpostiosoite', 'laskutettava_huoltaja_sahkopostiosoite'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'laskutettava_huoltaja_sahkopostiosoite',
					  'type' => 'email'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
			<tr>
			<td>
				<?php echo form_label('Ammatti', 'laskutettava_huoltaja_ammatti'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'laskutettava_huoltaja_ammatti',
					  'type' => 'text'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
			<tr>
			<td>
				<?php echo form_label('Työpaikka', 'laskutettava_huoltaja_tyopaikka'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'laskutettava_huoltaja_tyopaikka',
					  'type' => 'text'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
		</table>
		<h3>Toinen huoltaja</h3>
		<table>
			<tr>
			<td>
				<?php echo form_label('Etunimi', 'toinen_huoltaja_etunimi'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'toinen_huoltaja_etunimi',
					  'type' => 'text'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
			<tr>
			<td>
				<?php echo form_label('Sukunimi', 'toinen_huoltaja_sukunimi'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'toinen_huoltaja_sukunimi',
					  'type' => 'text'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
			<tr>
			<td>
				<?php echo form_label('Henkilötunnus', 'toinen_huoltaja_henkilotunnus'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'toinen_huoltaja_henkilotunnus',
					  'type' => 'text'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
			<tr>
			<td>
				<?php echo form_label('Puhelin', 'toinen_huoltaja_puhelin'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'toinen_huoltaja_puhelin',
					  'type' => 'text'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
			<tr>
			<td>
				<?php echo form_label('Sähköpostiosoite', 'toinen_huoltaja_sahkopostiosoite'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'toinen_huoltaja_sahkopostiosoite',
					  'type' => 'email'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
			<tr>
			<td>
				<?php echo form_label('Ammatti', 'toinen_huoltaja_ammatti'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'toinen_huoltaja_ammatti',
					  'type' => 'text'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
			<tr>
			<td>
				<?php echo form_label('Työpaikka', 'toinen_huoltaja_tyopaikka'); ?>
			</td>
			<td>
				<?php
				$data = array(
					  'name'  => 'toinen_huoltaja_tyopaikka',
					  'type' => 'text'
				);
				echo form_input($data);
				?>
			</td>
			</tr>
		</table>
		<h3>Hoitoaika</h3>
		<table>
			<tr>
			<td>
				<?php echo form_label('Toivottu hoidon alkamispäivä', 'toivottu_hoidon_alkamispaiva'); ?>
			</td>
			<td>
				<?php 
				$options = array();
				array_push($options, "pp");
				for($i = 1; $i <= 31; $i ++){
				array_push($options, $i);
				}
				echo form_dropdown('toivottu_hoidon_alkamispaiva_paiva', $options); 
				?>
				.
				<?php 
				$options = array();
				array_push($options, "kk");
				for($i = 1; $i <= 12; $i ++){
				array_push($options, $i);
				}
				echo form_dropdown('toivottu_hoidon_alkamispaiva_kuukausi', $options); 
				?>
				.
				<?php 
				$options = array();
				array_push($options, "yyyy");
				for($i = date('Y'); $i <= date('Y') + 100; $i ++){
				array_push($options, $i);
				}
				echo form_dropdown('toivottu_hoidon_alkamispaiva_vuosi', $options); 
				?>
			</td>
			</tr>
			<tr>
			<td>
				<?php echo form_label('Hoitoaika alkaa', 'hoitoaika_alkaa_tunnit'); ?>
			</td>
			<td>
				<?php 
				$options = array();
				array_push($options, "h");
				for($i = 1; $i <= 12; $i ++){
				array_push($options, $i);
				}
				echo form_dropdown('hoitoaika_alkaa_tunnit', $options); 
				?>
				:
				<?php 
				$options = array();
				array_push($options, "min");
				for($i = 0; $i <= 59; $i ++){
				array_push($options, $i);
				}
				echo form_dropdown('hoitoaika_alkaa_minuutit', $options); 
				?>
			</td>
			</tr>
			<tr>
			<td>
				<?php echo form_label('Hoitoaika päättyy', 'hoitoaika_paattyy_tunnit'); ?>
			</td>
			<td>
				<?php 
				$options = array();
				array_push($options, "h");
				for($i = 1; $i <= 12; $i ++){
				array_push($options, $i);
				}
				echo form_dropdown('hoitoaika_paattyy_tunnit', $options); 
				?>
				:
				<?php 
				$options = array();
				array_push($options, "min");
				for($i = 0; $i <= 59; $i ++){
				array_push($options, $i);
				}
				echo form_dropdown('hoitoaika_paattyy_minuutit', $options); 
				?>
			</td>
			</tr>
		</table>
		
		<?php echo form_submit('submit', 'Lähetä'); ?>
		<?php echo form_close(); ?>
