
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
                        
                        <li><?php echo $this->Html->link('Dashboard ',array('manager' => true, 'controller' => 'newsletters', 'action' => 'manager_dashboard', 'plugin' => 'newsletter'))?></li>
						<li><?php echo $this->Html->link('Campaigns Overview',array('manager' => true, 'controller' => 'campaigns', 'action' => 'manager_index', 'plugin' => 'newsletter'))?></li>
						<li><?php echo $this->Html->link('Newsletters Overview',array('manager' => true, 'controller' => 'newsletters', 'action' => 'manager_index', 'plugin' => 'newsletter'))?></li>
						<li><?php echo $this->Html->link('Subscribers Overview',array('manager' => true, 'controller' => 'subscribers', 'action' => 'manager_index', 'plugin' => 'newsletter'))?></li>
                    </ul>
                    
					
					
                </div><!-- End .email-nav-->
            </div><!-- End .span2-->

        	<div class="span10">



				<div class="newsletter-plugin" id="campaigns-manager-edit">
					<?php echo $this->Html->link('overview',array('action' => 'manager_index', 'manager' => true,'controller' => 'campaigns', 'plugin' => 'newsletter')) ?>
					<h1>Kampagne bearbeiten</h1>
						<?php
							echo $this->Form->create("Campaign",array('url' => array(
																							'controller' => 'campaigns',
																							'action' =>'manager_edit',
																							'manager' => true																		
																						)
																					)
															 );
							
							echo $this->Form->hidden('_id',array('default' => $this->data['Campaign']['_id'] )); 
						?>
							
						<p>
							<label for="name">Name:</label>
							<?php echo $this->Form->input('name',array('label' => false)) ?>
						</p>
						
						
						<p>
							<label for="content">Beschreibung:</label>
							<?php echo $this->Form->input('description'); ?> 
						</p>

						
						<p>
						<label for="tags">Aktive:</label>
							<?php echo $this->Form->input('active',array('label' => false,'type' => 'checkbox')) ?>
						</p>
						<p>		
							<?php echo $this->Form->button('save',array('type' => "submit")) ?>
						</p>
						
						<?php
							echo $this->Form->end();
						?>
				</div>
			</div><!-- End .span10-->
	</div><!-- End .row-fluid -->
