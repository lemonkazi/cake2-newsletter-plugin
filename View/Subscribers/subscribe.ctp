<h1> Newsletter Sign up </h1>


<?php
	
    echo $this->Form->error('email');
		
    if(isset($validationError)) {
        ?>
      <p class="errors">Errors:</p>  
      <?php
	echo $validationError;
}
?>

<?php
    echo $this->Form->create("Subscriber",array('url' => array('controller' => 'subscribers', 'action' =>'subscribe', 'manager' => false)));
?>

<p>
    <label for="name">Email:</label>
    <?php echo $this->Form->input('email',array('label' => false)) ?>
</p>

<p>		
    <?php echo $this->Form->button('Subscribe',array('type' => "submit")) ?>
</p>
	
<?php
    echo $this->Form->end();
?>