<?php 
echo $this->Html->css('/newsletter/css/newsletter'); 
echo $this->Html->script('/newsletter/js/newsletter'); 
echo $this->Html->script('/newsletter/js/libs/underscore-min');
echo $this->Html->script('/newsletter/js/libs/raphael-min');  
echo $this->Html->script('/newsletter/js/libs/g.raphael-min'); 
echo $this->Html->script('/newsletter/js/libs/g.pie-min'); 
echo $this->Html->script('/newsletter/js/libs/g.bar-min'); 
?>

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
                <div id="newsletter-plugin-index"> 
                    <h1>Dashboard</h1>

                    <h2>Stats</h2>
                        <div id="stats-tables">
                            <table>
                                <thead>
                                    <tr>
                                        <th colspan="2">Number</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Newsletters:</td><td><?php echo count($newsletters) ?></td>                        
                                    </tr>
                                    <tr>
                                        <td>published Newsletters:</td><td><?php echo count($publishedNewsletters) ?></td>                        
                                    </tr>
                                    <tr>
                                        <td>registrations:</td><td><?php echo count($subscribers) ?></td>                        
                                    </tr>
                                    <tr>
                                        <td>campaigns:</td><td><?php echo count($campaigns) ?></td>                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="email-content">

                            <div class="email-header">

                                <div class="btn-toolbar" style="margin: 0;">
                                    <div class="btn-group">
                                        
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

                                <div class="title">Newsletters Details</div>

                                <div class="content noPad clearfix">
                                    <table cellpadding="0" cellspacing="0" border="0" class="emailTable display table" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="checkAll">
                                                    <input type="checkbox" id="selectall" value="all" class="nostyle tip" title="Select All" />  
                                                </th>
                                                <th><span class="icon16 icomoon-icon-star-3"></span></th>
                                                <th>Title</th>
                                                <th>Created</th>
                                                <th>Published</th>
                                                 
                                                <th>Published on</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach($newsletters as $newsletter): ?>
                                            <tr>
                                                <td class="check"><input type="checkbox" id="checkbox" class="nostyle" value="1" /></td>
                                                <td class="star"><span class="icon16 icomoon-icon-star"></span></td>
                                                <td class="from">
                                                    <a href="#" class="unread link">
                                                    <span class="label marginL10"><?php echo $newsletter['Newsletter']['title'] ?></span><span class="label label-success marginL10">3</span>
                                                    </a>
                                                </td>
                                                <td class="subject">
                                                    <a href="#" class="unread link">  <?php //echo $this->Time->nice($newsletter['Newsletter']['created']->sec); 
                                                  echo $this->Time->format($newsletter['Newsletter']['created'],"%b %e %Y, %H:%M");
                                                ?> </a>
                                                </td>
                                               
                                                <td class="subject">
                                                    <a href="#" class="unread link">  <?php echo (String)$newsletter['Newsletter']['published'] ?> </a>
                                                </td>
                                                 
                                                
                                                
                                                
                                                <td class="attachment">
                                                   
                                                   <?php if(!$newsletter['Newsletter']['published']) echo "N/A"; 
                                                else 
                                                    echo $this->Time->format($newsletter['Newsletter']['publishedDate'],"%b %e %Y, %H:%M");
                                                 //   echo $this->Time->nice($newsletter['Newsletter']['publishedDate']->sec); ?>
                                                </td>
                                                
                                            </tr>
                                            <?php
                                        endforeach;
                                        ?>
                                          
                                        </tbody>
                                    </table>
                                </div>

                            </div><!-- End .box -->

                        </div>








                   
                    <secion id="graphs">
                        <h2>Graphs</h2>
                        <div id="newslettersByViews" style="width: 640px; height: 480px;"></div>
                    </secion>
                </div>
            </div><!-- End .span10-->
    </div><!-- End .row-fluid -->

<script>
    //get the json models
    var _newsletters = <?php echo json_encode($newsletters) ?>,
        _subscribers = <?php echo json_encode($subscribers) ?>;

    //some preparations
    //for newsletters 
    var newsletters = [];

    _.each(_newsletters, function(newsletter){
        newsletters.push(newsletter.Newsletter);
    });

    //for subscribers 
    var subscribers = [];

    _.each(_subscribers, function(subscriber){
        subscribers.push(subscriber.Subscriber);
    });

    //draw the pie charts


    //by views
    
    var rNewsByViews = Raphael("newslettersByViews"),
        pieNewsByViews = rNewsByViews.piechart(320, 240, 100, _.map(newsletters, function(newsletter){ return newsletter.viewCounter;}),
            {legend: _.map(newsletters, function(newsletter){ return newsletter.title+"("+newsletter.viewCounter+")"; }), legendpos: "west"});

    rNewsByViews.text(320, 100, "Newsletters by views").attr({ font: "20px sans-serif" });
    pieNewsByViews.hover(function () {
        this.sector.stop();
        this.sector.scale(1.1, 1.1, this.cx, this.cy);

        if (this.label) {
            this.label[0].stop();
            this.label[0].attr({ r: 7.5 });
            this.label[1].attr({ "font-weight": 800 });
        }
    }, function () {
        this.sector.animate({ transform: 's1 1 ' + this.cx + ' ' + this.cy }, 500, "bounce");

        if (this.label) {
            this.label[0].animate({ r: 5 }, 500, "bounce");
            this.label[1].attr({ "font-weight": 400 });
        }
    });



</script>