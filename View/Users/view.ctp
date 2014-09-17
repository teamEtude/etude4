<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('UserID'); ?></dt>
		<dd>
			<?php echo h($user['User']['userID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bio'); ?></dt>
		<dd>
			<?php echo h($user['User']['bio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interests'); ?></dt>
		<dd>
			<?php echo h($user['User']['interests']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FName'); ?></dt>
		<dd>
			<?php echo h($user['User']['fName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LName'); ?></dt>
		<dd>
			<?php echo h($user['User']['lName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Admin'); ?></dt>
		<dd>
			<?php echo h($user['User']['admin']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['userID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['userID']), null, __('Are you sure you want to delete # %s?', $user['User']['userID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Enrolments'), array('controller' => 'enrolments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Enrolments'), array('controller' => 'enrolments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Messages'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Group Members'), array('controller' => 'group_members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group Members'), array('controller' => 'group_members', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Enrolments'); ?></h3>
	<?php if (!empty($user['enrolments'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('UserID'); ?></th>
		<th><?php echo __('CourseID'); ?></th>
		<th><?php echo __('Semester'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['enrolments'] as $enrolments): ?>
		<tr>
			<td><?php echo $enrolments['userID']; ?></td>
			<td><?php echo $enrolments['courseID']; ?></td>
			<td><?php echo $enrolments['semester']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'enrolments', 'action' => 'view', $enrolments['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'enrolments', 'action' => 'edit', $enrolments['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'enrolments', 'action' => 'delete', $enrolments['id']), null, __('Are you sure you want to delete # %s?', $enrolments['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Enrolments'), array('controller' => 'enrolments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Messages'); ?></h3>
	<?php if (!empty($user['messages'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('MessageID'); ?></th>
		<th><?php echo __('From'); ?></th>
		<th><?php echo __('To'); ?></th>
		<th><?php echo __('Message'); ?></th>
		<th><?php echo __('GroupMessage'); ?></th>
		<th><?php echo __('Time'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['messages'] as $messages): ?>
		<tr>
			<td><?php echo $messages['messageID']; ?></td>
			<td><?php echo $messages['from']; ?></td>
			<td><?php echo $messages['to']; ?></td>
			<td><?php echo $messages['message']; ?></td>
			<td><?php echo $messages['groupMessage']; ?></td>
			<td><?php echo $messages['time']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'messages', 'action' => 'view', $messages['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'messages', 'action' => 'edit', $messages['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'messages', 'action' => 'delete', $messages['id']), null, __('Are you sure you want to delete # %s?', $messages['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Messages'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Group Members'); ?></h3>
	<?php if (!empty($user['group_members'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('GroupID'); ?></th>
		<th><?php echo __('UserID'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['group_members'] as $groupMembers): ?>
		<tr>
			<td><?php echo $groupMembers['groupID']; ?></td>
			<td><?php echo $groupMembers['userID']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'group_members', 'action' => 'view', $groupMembers['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'group_members', 'action' => 'edit', $groupMembers['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'group_members', 'action' => 'delete', $groupMembers['id']), null, __('Are you sure you want to delete # %s?', $groupMembers['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Group Members'), array('controller' => 'group_members', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
