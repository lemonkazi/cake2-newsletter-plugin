<h2><?php echo $subscriber['Subscriber']['email']?></h2>		
<p><?php print_r($subscriber['Subscriber']['campaigns']) ?></p>


	<p>created on: <?php echo $this->Time->format($subscriber['Subscriber']['created'],"%b %e %Y, %H:%M"); //echo $this->Time->niceShort($subscriber['Subscriber']['created']->sec) ?> </p>
<p>edited on: <?php echo $this->Time->format($subscriber['Subscriber']['modified'],"%b %e %Y, %H:%M"); //echo $this->Time->niceShort($subscriber['Subscriber']['created']->sec) ?> </p>