<ul id="main_nav">	
<?php foreach ($navigation_menu as $nav): ?>
	
	<?php if ($nav->type == 'page'): ?>
	<li><a class="nav" href="<?= base_url().'pages/'.$nav->title_url ?>"><?= $nav->title ?></a></li>
	<?php else: ?>
	<li><a class="nav" href="<?= base_url().$nav->title_url ?>"><?= $nav->title ?></a></li>
	<?php endif; ?>	

<?php endforeach; ?>
</ul>