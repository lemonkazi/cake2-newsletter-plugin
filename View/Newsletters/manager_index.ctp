<div id="content" class="clearfix">
    <div class="contentwrapper"><!--Content wrapper-->
    	
        <div class="heading">

            <h3>Newsletters Admin dashboard</h3>                    

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


				
				<div class="email-content">

                    <div class="email-header">

                        <div class="btn-toolbar" style="margin: 0;">
                        	<div class="btn-group">
                        		<button class="btn tip" title="Refresh inbox">
                        			<?php echo $this->Html->link('Add newsletter',array('manager' => true, 'controller' => 'newsletters', 'action' => 'manager_add'))?>
                        		</button>
                            </div>
                            <!-- <div class="btn-group">
                                <button class="btn tip" title="Refresh inbox"><span class="icon16 icomoon-icon-refresh"></span></button>
                            </div> -->
                            <div class="btn-group">
                                <button class="btn tip" title="Archive"><span class="icon16 icomoon-icon-box"></span></button>
                                <button class="btn tip" title="Mark as spam"><span class="icon16 icomoon-icon-blocked"></span></button>
                                <button class="btn tip" title="Delete"><span class="icon16 icomoon-icon-remove-5"></span></button>
                            </div>
                            <div class="btn-group">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">
                                    More
									<span class="caret"></span>
								</button>
                                <ul class="dropdown-menu">
                                	
                                    <li><a href="#">Mark as unread</a></li>
                                    <li><a href="#">Add star</a></li>
                                    <li><a href="#">Filter message</a></li>
                                    <li><a href="#">Mute</a></li>
                                </ul>
                            </div>
                        </div>

                    </div><!-- End Email-header -->


                    <div class="box plain">

                        <div class="title"></div>

                        <div class="content noPad clearfix">
                            <table cellpadding="0" cellspacing="0" border="0" class="emailTable display table" width="100%">
                                <thead>
                                    <tr>
                                        <th class="checkAll">
                                            <input type="checkbox" id="selectall" value="all" class="nostyle tip" title="Select All" />  
                                        </th>
                                        <th><span class="icon16 icomoon-icon-star-3"></span></th>
                                        <th>Name</th>
                                        <th>View Counter</th>
                                        <th>publishCount</th>
                                         <th>published</th>
                                        <th>Action</th>
                                        <th>Created Date</th>
                                        <th>Modified Date</th>
                                    </tr>
                                </thead>
                                <tbody>

								<?php
								foreach($newsletters as $new):
									//debug($subscriber);
									?>
                                    <tr>
                                        <td class="check"><input type="checkbox" id="checkbox" class="nostyle" value="1" /></td>
                                        <td class="star"><span class="icon16 icomoon-icon-star"></span></td>
                                        <td class="from">
                                            <a href="#" class="unread link">
                                            <span class="label marginL10"><?php echo $this->Html->link($new['Newsletter']['title'],array('manager' => true, 'controller' => 'newsletters', 'action' => 'manager_view',$new['Newsletter']['_id']))?></span><span class="label label-success marginL10">3</span>
                                            </a>
                                        </td>
                                        <td class="subject">
                                            <a href="#" class="unread link">  <?php echo $new['Newsletter']['viewCounter']?> </a>
                                        </td>
                                        <td class="subject">
                                            <a href="#" class="unread link">  <?php echo $new['Newsletter']['publishCounter']?> </a>
                                        </td>
                                        <td class="subject">
                                            <a href="#" class="unread link">  <?php echo $new['Newsletter']['published']?>  </a>
                                        </td>
                                         
                                        
                                        
                                        
                                        <td class="attachment">
                                            <!-- <a href="#" rel="popover" data-content="main.jpg - 423 kb </br> css.zip - 890 kb  " data-original-title="2 files" data-placement="bottom">
                                                <span class="icon16 icomoon-icon-flag-4"></span>
                                            </a> -->
                                           <?php echo $this->Html->link('edit',array('manager' => true, 'controller' => 'newsletters', 'action' => 'manager_edit',$new['Newsletter']['_id']))?>
				        <?php echo $this->Html->link('delete',array('manager' => true, 'controller' => 'newsletters', 'action' => 'manager_delete',$new['Newsletter']['_id']))?>
						<?php echo $this->Html->link('publish',array('manager' => true, 'controller' => 'newsletters', 'action' => 'manager_publish',$new['Newsletter']['_id']))?>
                                        </td>
                                        <td class="date"><?php echo $this->Time->format($new['Newsletter']['created'],"%b %e %Y, %H:%M"); //echo $this->Time->niceShort($subscriber['Subscriber']['created']->sec) ?></td>
                                        <td class="date"><?php echo $this->Time->format($new['Newsletter']['modified'],"%b %e %Y, %H:%M"); //echo $this->Time->niceShort($subscriber['Subscriber']['created']->sec) ?></td>
                                    </tr>
                                    <?php
								endforeach;
								?>
                                  
                                </tbody>
                            </table>
                        </div>

                    </div><!-- End .box -->

                </div>

				
					
					
			</div>


			

			
		</div><!-- End .row-fluid -->  