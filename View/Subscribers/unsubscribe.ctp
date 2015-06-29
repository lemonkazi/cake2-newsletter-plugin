<div id="content" class="clearfix">
    <div class="contentwrapper"><!--Content wrapper-->
        <div class="heading">

            <h3>Newsletter unsubscribe</h3>                    

            <div class="resBtnSearch">
                <a href="#"><span class="icon16 icomoon-icon-search-3"></span></a>
            </div>

            <div class="search">

                <form id="searchform" action="search.html">
                    <input type="text" id="tipue_search_input" class="top-search text" placeholder="Search here ...">
                    <input type="submit" id="tipue_search_button" class="search-btn nostyle" value="">
                </form>
                
            </div><!-- End search -->

            <ul class="breadcrumb">
                <li>You are here:</li>
                <li>
                    <a href="#" class="tip" oldtitle="back to dashboard" title="" data-hasqtip="true">
                        <span class="icon16 icomoon-icon-screen-2"></span>
                    </a> 
                    <span class="divider">
                        <span class="icon16 icomoon-icon-arrow-right-2"></span>
                    </span>
                </li>
                <li class="active">Fill up </li>
            </ul>

        </div><!-- End .heading-->



		<!-- <h1> Newsletter unsubscribe </h1> -->


		<?php
		    echo $this->Form->create(false,array('url' => array('controller' => 'subscribers', 'action' =>'unsubscribe', 'manager' => false)));
		?>

		<p>
		    <label for="name">Email:</label>
		    <?php echo $this->Form->input('email',array('label' => false)) ?>
		</p>

		<p>		
		    <?php echo $this->Form->button('abmelden',array('type' => "submit")) ?>
		</p>
			
		<?php
		    echo $this->Form->end();
		?>