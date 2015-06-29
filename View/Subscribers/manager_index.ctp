<h1> Subscribers</h1>

<?php
	foreach($subscribers as $subscriber):
//debug($subscriber);
?>

<div>
<p> email: <?php echo $subscriber['Subscriber']['email'] ?></p>
<p> subscriptions: <?php Print_r($subscriber['Subscriber']['campaigns']) ?></p>
<p><?php echo $this->Html->link('view',array('manager' => true, 'controller' => 'subscribers', 'action' => 'manager_view',$subscriber['Subscriber']['_id']))?></p>
<p><?php echo $this->Html->link('edit',array('manager' => true, 'controller' => 'subscribers', 'action' => 'manager_edit',$subscriber['Subscriber']['_id']))?></p>

	<p>created on: <?php echo $this->Time->format($subscriber['Subscriber']['created'],"%b %e %Y, %H:%M"); //echo $this->Time->niceShort($subscriber['Subscriber']['created']->sec) ?> </p>
<p>edited on: <?php echo $this->Time->format($subscriber['Subscriber']['modified'],"%b %e %Y, %H:%M"); //echo $this->Time->niceShort($subscriber['Subscriber']['created']->sec) ?> </p>
</div>

<?php
	endforeach;
?>
