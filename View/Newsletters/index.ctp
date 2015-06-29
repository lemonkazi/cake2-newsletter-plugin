<div id="newsletter-index">
	
	<p><?php echo $this->Html->link('subscribe',array('manager' => false, 'controller' => 'subscribers', 'action' => 'subscribe'))?></a></p>
	<p><?php echo $this->Html->link('unsubscribe',array('manager' => false, 'controller' => 'subscribers', 'action' => 'unsubscribe'))?></a></p>
	<h1>Newsletters overview</h1>
	
	<?php
		foreach($newsletters as $new):
		
	?>
	<div class="news-item">
		<h2>Name: <?php echo $this->Html->link($new['Newsletter']['title'],array('manager' => false, 'controller' => 'newsletters', 'action' => 'view',$new['Newsletter']['_id']))?></h2>		
		
		<p><?php echo $new['Newsletter']['content'] ?></p>
		
		<p>created on: <?php echo $this->Time->format($new['Newsletter']['created'],"%b %e %Y, %H:%M"); //echo $this->Time->niceShort($subscriber['Subscriber']['created']->sec) ?> </p>
<p>edited on: <?php echo $this->Time->format($new['Newsletter']['modified'],"%b %e %Y, %H:%M"); //echo $this->Time->niceShort($subscriber['Subscriber']['created']->sec) ?> </p>
		
	</div>
	<?php
		endforeach;
	?>

	
</div>