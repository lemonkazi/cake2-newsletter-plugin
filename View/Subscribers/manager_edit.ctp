<div id="managers-edit-view">
	
	<?php
		echo $this->Form->create("Subscriber",array('url' => array('controller' => 'subscribers', 'action' =>'manager_edit', 'manager' => true)));
	?>
	
	<p>
		<label for="email">Name:</label>
		<?php echo $this->Form->input('email',array('label' => false)) ?>
	</p>
		<label for="email">subscriptions:</label>

		 	<?php 
		 		$a = json_decode($this->data['Subscriber']['campaigns']);
		 	
				 	foreach($campaigns as $campaign){
		 
		 
		 	$c = $campaign['Campaign']['name'];
		 	$d = array($c);
		 	



		 	

         
				 if(in_array($campaign['Campaign']['name'],$a))
				 {
					
					  $checked = "checked";
					

				 }
				 else {
					?>
				 
				<?php
				
			
					$selected = '';
					 $checked = '';
				}
	




		?>			
				
			
		
      <input name="data[Subscriber][campaigns][]" value="<?php echo $campaign['Campaign']['name'];?>" type="checkbox" <?php echo $checked; ?>>
       <label for="ModelName2"><?php echo $campaign['Campaign']['name'];?></label>
<?php 
      } 
			?>

	
	
	<p>
	
	<p>		
		<?php echo $this->Form->button('save',array('type' => "submit")) ?>
	</p>
	
	<?php
		echo $this->Form->end();
	?>
	
</div>