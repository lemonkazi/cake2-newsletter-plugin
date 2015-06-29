<?php echo $this->element('css') ?> 
<div class="newsletter-plugin" id="campaigns-manager-index">
<h1>Campaign Overview</h1>
<?php echo $this->Html->link('Create Campaign',array('action' => 'manager_add', 'manager' => true,'controller' => 'campaigns', 'plugin' => 'newsletter')) ?> 
<?php foreach($campaigns as $campaign): ?>
<section class="campaign">
	<h2><?php echo $campaign['Campaign']['name']?></h2>
	<p>description</p>
	<p><?php echo $campaign['Campaign']['description']?></p>
	<p>Aktive</p>
	<p><?php echo $campaign['Campaign']['active']?></p>
	<div class="controls">
		<?php echo $this->Html->link('edit',array('action' => 'manager_edit', 'manager' => true, $campaign['Campaign']['_id'])) ?>
		<?php echo $this->Html->link('delete',array('action' => 'manager_delete', 'manager' => true, $campaign['Campaign']['_id'])) ?>
	</div>
</section>
<?php endforeach; ?>
</div>
