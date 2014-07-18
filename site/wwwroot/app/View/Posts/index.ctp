<!-- File: /app/View/Posts.index.ctp -->

<h1>Blog Posts</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Created</th>
	</tr>
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($post['Post']['title'],
				array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
		</td>
		<td><?php echo $post['Post']['created']; ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($post); ?>
</table>