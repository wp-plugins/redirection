<div class="wrap">
	<h2><?php _e ('Modules', 'redirection'); ?></h2>

	<?php if (count ($modules) > 0) : ?>
		<table class="modules">
			<tr>
				<th></th>
				<th class="left"><?php _e ('Details', 'redirection'); ?></th>
				<th><?php _e ('Groups', 'redirection'); ?></th>
				<th><?php _e ('Items', 'redirection'); ?></th>
				<th><?php _e ('Hits', 'redirection'); ?></th>
				<th><?php _e ('Operations', 'redirection'); ?></th>
			</tr>
			
			<?php foreach ($modules AS $pos => $module): ?>
				<tr id="item_<?php echo $module->id ?>">
					<?php $this->render_admin ('module_item', array ('module' => $module)); ?>
				</tr>
			<?php endforeach ?>
		</table>
	<?php else : ?>
		<p><?php _e ('You have no modules defined yet', 'redirection'); ?>.</p>
	<?php endif; ?>
</div>

<div class="wrap">
	<h2><?php _e ('Add Module', 'redirection'); ?></h2>
	<p><?php _e ('A module is a controlling element that determines how redirections are handled.  Elements in a WordPress module are handled by WordPress, elements in an Apache module are handled by <code>.htaccess</code>, and elements in a 404 module affect how 404 errors are logged.', 'redirection'); ?></p>

	<form action="<?php echo $this->url ($_SERVER['REQUEST_URI']) ?>" method="post" accept-charset="utf-8">
		<table class="edit">
			<tr>
				<th width="100"><?php _e ('Name', 'redirection'); ?>:</th>
				<td><input size="40" type="text" name="name" value=""/></td>
			</tr>
			<tr>
				<th width="100"><?php _e ('Type', 'redirection'); ?>:</th>
				<td>
					<select name="type">
						<?php echo $this->select ($module_types); ?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="create" value="<?php _e ('Create', 'redirection'); ?>"/></td>
			</tr>
		</table>
	</form>
</div>