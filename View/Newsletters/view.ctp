<h2><?php echo $newsletter['Newsletter']['title']?></h2>		

<p><?php //echo $this->Markitup->parse($newsletter['Newsletter']['content'],'markdown') ?></p>
<p><?php echo $newsletter['Newsletter']['content']?></p>

		<p>created on: <?php echo $this->Time->format($newsletter['Newsletter']['created'],"%b %e %Y, %H:%M"); //echo $this->Time->niceShort($subscriber['Subscriber']['created']->sec) ?> </p>
<p>edited on: <?php echo $this->Time->format($newsletter['Newsletter']['modified'],"%b %e %Y, %H:%M"); //echo $this->Time->niceShort($subscriber['Subscriber']['created']->sec) ?> </p>