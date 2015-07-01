<div id="content" class="clearfix">
    <div class="contentwrapper"><!--Content wrapper-->
    	
        <div class="heading">

            <h3>update subscription </h3>                    

            <div class="resBtnSearch">
                <a href="#"><span class="icon16 icomoon-icon-search-3"></span></a>
            </div>

            <div class="search">

                <form id="searchform" action="search.html">
                    <input type="text" id="tipue_search_input" class="top-search text" placeholder="Search here ...">
                    <input type="submit" id="tipue_search_button" class="search-btn nostyle" value="">
                </form>
                
            </div><!-- End search -->


            

        </div><!-- End .heading-->


		<!-- <h1> Subscribers</h1> -->
		  <!-- Build page from here: -->
        <div class="row-fluid">



                
          

            <div class="span2">
                <div class="email-nav well">
                    <div class="composeBtn">
                        <button href="#" class="btn btn-danger btn-block">Compose</button>
                    </div>
                    <ul class="nav nav-list">
                        <li class="nav-header">Inbox</li>
                         <!-- <li class="active"><a href="#">Today</a></li>
                        <li><a href="#">Important</a></li>
                        <li><a href="#">Last week</a></li>
                        <li><a href="#">All emails</a></li>
                        <li class="nav-header">Outbox</li>
                        <li><a href="#">Sent mail</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Drafts</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Archive</a></li> -->
                        <li><?php echo $this->Html->link('Dashboard ',array('manager' => true, 'controller' => 'newsletters', 'action' => 'manager_dashboard', 'plugin' => 'newsletter'))?></li>
						<li><?php echo $this->Html->link('Campaigns Overview',array('manager' => true, 'controller' => 'campaigns', 'action' => 'manager_index', 'plugin' => 'newsletter'))?></li>
						<li><?php echo $this->Html->link('Newsletters Overview',array('manager' => true, 'controller' => 'newsletters', 'action' => 'manager_index', 'plugin' => 'newsletter'))?></li>
						<li><?php echo $this->Html->link('Subscribers Overview',array('manager' => true, 'controller' => 'subscribers', 'action' => 'manager_index', 'plugin' => 'newsletter'))?></li>
                    </ul>
                    
					
					
                </div><!-- End .email-nav-->
            </div><!-- End .span2-->



           	<div class="span10">



				<div id="managers-edit-view">

					
					<?php
					
						echo $this->Form->create("Newsletter",array('url' => array('controller' => 'newsletters', 'action' =>'manager_edit', 'manager' => true),'type' => 'file'));
					?>
					
					<p>
						<label for="name">Name:</label>
						<?php echo $this->Form->input('title',array('label' => false)) ?>
					</p>
					
					
					<p>
						<p>
						<label for="content">inhalt:</label>
						<p>
							<textarea id ="NewsletterContent" name="data[Newsletter][content]" cols="50" rows="20"><?php echo $this->data['Newsletter']['content'] ?></textarea>
						</p>
					</p>
					</p>

					<p>
						<?php 
						//echo $this->Form->input('Campaign');
						?>
					<!-- <select type="select" multiple="multiple" name="data[Newsletter][campaigns][]"> -->
					<?php 
						 		$a = json_decode($this->data['Newsletter']['campaigns']);
						 	
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
													
												
											
									      <input name="data[Newsletter][campaigns][]" value="<?php echo $campaign['Campaign']['name'];?>" type="checkbox" <?php echo $checked; ?>>
									       <label for="ModelName2"><?php echo $campaign['Campaign']['name'];?></label>
										<?php 
									} ?>
							<?php  
							// foreach($campaigns as $campaign){
							// 	if(in_array($campaign['Campaign']['_id'],$this->data['Newsletter']['campaigns']))
							// 		$selected = ' selected="selected"';
							// 	else
							// 		$selected = '';
							// 	echo '<option value="'.$campaign['Campaign']['_id'].'"'.$selected.'>'.$campaign['Campaign']['name'].'</option>';
							// } 
							?>
						<!-- </select>  -->
					</p>
					</p>
					<input type="file" name="data[Images][]" multiple="multiple">
					<p>
					<p>		
						<?php echo $this->Form->button('save',array('type' => "submit")) ?>
					</p>
					
					<?php
						echo $this->Form->end();
					?>
					
				</div>
			</div><!-- End .span10-->
		</div><!-- End .row-fluid -->