<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8">
    <title>Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Linghua Jin">
  
    <link href="../css/bootstrap.css" rel="stylesheet">   
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
    
    <script src="../js/jquery-1.8.2.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/less-1.3.0.min.js"></script>
    
    <link href="../css/stylesEC.less" rel="stylesheet">
    
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 10px;
      }
      hr { 
        height: 3px; color: #888 !important; background-color: #888 !important;
      }     
      .widget > div {       
        padding: 3px 5px 3px 5px;             
        background-color: #f9f9f9;  
        border-bottom: 1px solid #ddd;      
      }
      .widget > div.title {       
        font-weight: bold;       
        margin-top: 5px;
        background-color: #33a9c8;
        color: white;
        border-radius: 5px 5px 0px 0px; 
      }      
      .widget > div:nth-child(2n+0) {       
        background-color: #f0f0f0; 
      }
      .widget > div:last-child {              
        border-radius: 0px 0px 5px 5px;
        margin-bottom: 5px;   
      }
      .widget.w1 div.title {
        background-color: #0088cc;
      }
      .widget.w2 div.title {
        background-color: orange;
      }
      .widget.w3 div.title {
        background-color: green;
      }
      .widget.w4 div.title {
        background-color: #33a9c8;
      }
    </style>    
 
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  
    <link rel="shortcut icon" href="../ico/favicon.ico">
  </head>

  <body>
  
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">         
          <a class="brand" href="../index.html">TB01</a>
          <div class="nav-collapse collapse">            
            <form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>        
    
    <div class="container">
    
      <div style="margin-bottom: 10px">
        <img width="900" height="100" src="../img/ecocloud_header.png" />      
      </div>
    
      <div class="row-fluid">
        <div class="span12">     
	        <div class="navbar">
			      <div class="navbar-inner">
			        <a class="brand" href="#"></a>
			        <ul class="nav">
			          <li class="active"><a href="#">Home</a></li>
			          <li class="divider-vertical"></li>
			          <li><a href="#">Roadmap</a></li>
			          <li class="divider-vertical"></li>
			          <li><a href="#">Marketplace</a></li>
			          <li class="divider-vertical"></li>
			          <li class="dropdown">
		               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Collaboration <b class="caret"></b></a>
		               <ul class="dropdown-menu">
		                 <li><a href="#">Action</a></li>
		                 <li><a href="#">Another action</a></li>
		                 <li class="divider"></li>
		                 <li class="nav-header">Nav header</li>
		                 <li><a href="#">Separated link</a></li>
		                 <li><a href="#">One more separated link</a></li>
		               </ul>
			          </li>
			          <li class="divider-vertical"></li>
			          <li class="dropdown">
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Solution <b class="caret"></b></a>
			            <ul class="dropdown-menu">
			              <li><a href="#">contribute</a></li>
			              <li><a href="#">find</a></li>
			            </ul>
			          </li>
			          <li class="divider-vertical"></li>
			          <form class="navbar-search pull-left">
			            <input type="text" class="search-query" placeholder="Search">
			          </form> 
			        </ul>
			      </div>
			    </div>
			  </div>
			</div>	    
   
      <div class="row-fluid">	       
	      <div class="span3">
			    <div class="widget w1">
			      <div class="title">Resources</div>	          
			      <div class="post">Energy</div>
		        <div class="post">Information</div>
		        <div class="post">Materials</div> 
		        <div class="post">Water</div>  	                    
			    </div>
			        
			    <div class="widget w2">
			      <div class="title">Industry</div>	         
			      <div class="event">Education</div>	     
			      <div class="event">Finance/Insurance/Investment</div>   
		        <div class="event">Food/Agriculture</div>    	            
			    </div>
			       
			    <div class="widget w3">
		        <div class="title">Planetary System</div>            
		        <div class="activity">Air Quality Regulation</div>
		        <div class="activity">Soil Vitality, Erosion & Chemical Pollution Control</div>
		        <div class="activity">Energy Capture, Transport, Storage</div>
		        <div class="activity">Radiation Protection</div>                      
		      </div>		           	       	    
		    </div><!--/span3-->
	      
	      <div class="span9">		   
		     	<div>
		        <h4>Featured Product / Editor's Pick</h4>
		        <div id="myCarousel" class="carousel slide" >
					     <!-- Carousel items -->
					     <div class="carousel-inner">
					       <div class="active item">
					         <img width="400" height="100" src="../img/carousel-image-04.jpg" class="img-rounded">
					       </div>
					       <div class="item">
					         <img width="400" height="100" src="../img/carousel-image-05.jpg" class="img-rounded">
					       </div>
					       <div class="item">
					         <img width="400" height="100" src="../img/carousel-image-06.jpg" class="img-rounded">
					       </div>
					     </div>
					     <!-- Carousel nav -->
					     <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					     <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
					  </div>				      
		      </div>
		     
		      <Legend>Your most recently viewed products | View more...</Legend>          
        
          <?php $data = array();
            $data['1'] = array("id"=>1,"title" => "Concentrator PV Panel", 'updated_on' => "2012/09/18", "description" => "High-eff industrial solar panel");
            $data['2'] = array("id"=>2,"title" => "M2 Renewables", 'updated_on' => "2012/10/10", "description" => "Municipal waste recycling systems");
            $data['3'] = array("id"=>3,"title" => "Rainwater Tanks", 'updated_on' => "2012/10/15", "description" => "Collector system for households");            
          ?>
          
          <?php if ($data) { ?>	                       
            <?php $count=0;?>
            <div class="row-fluid" style="margin-bottom: 10px">
    
              <?php foreach ($data as $product) { ?>
        
                <?php /* Create a new row if needed, on count = 3, 6, 9, ... */ ?>
                <?php if ($count > 0 && $count%3==0) { echo "</div>"; } ?>
                <?php if ($count > 0 && $count%3==0) { echo "<div class='row-fluid' style='margin-bottom: 10px'>"; } ?>
      
                <div class="span4">
                    <a href="<?php echo'view/'.$product['id']?>">  
                      <img width="100" height="100" src="../img/challengeEC.png" align="middle" >
                  </a>
                  <div style="font-size: 16px; font-weight: bold;">
                      <a href="<?php echo'view/'.$product['id']?>">
                         <?php echo $product['title']; ?>
                      </a>
                  </div>
  
                  <?php echo $product['updated_on'] > 0 ? $product['updated_on'] : ""; ?>
                    
                  <div><?php echo $product['description'] ?> </div>
                </div><!-- span4 -->
                <?php $count++; ?>                    
              <?php } ?>  
            </div>   
          <?php } ?>
           
          <?php $products = array();
            $products['1'] = array("id"=>1,"title" => "Tesla Model S", 'updated_on' => "2012/09/21", "description" => "All-Electric sedan");
            $products['2'] = array("id"=>2,"title" => "Harrel Remodeling", 'updated_on' => "2012/07/19", "description" => "Rebuilding with green in mind");
            $products['3'] = array("id"=>3,"title" => "R-80 Microinverter", 'updated_on' => "2012/10/15", "description" => "Microinverter for solar panel");
            $products['4'] = array("id"=>4,"title" => "Vantage Data Centers", 'updated_on' => "2012/06/21", "description" => "Green Data Centers");
            $products['5'] = array("id"=>5,"title" => "Silver Spring Networks", 'updated_on' => "2012/09/22", "description" => "Smart metering for the Smart Grid");
          ?>        
           
          <Legend>Products you might be interested in:</Legend>
        
          <?php if ($products) { ?>	 
            <?php $count=0;?>
            <div class="row-fluid" style="margin-bottom: 10px">
    
              <?php foreach ($products as $product) { ?>
        
                <?php /* Create a new row if needed, on count = 3, 6, 9, ... */ ?>
                <?php if ($count > 0 && $count%3==0) { echo "</div>"; } ?>
                <?php if ($count > 0 && $count%3==0) { echo "<div class='row-fluid' style='margin-bottom: 10px'>"; } ?>
      
                <div class="span4">
                  <a href="<?php echo'view/'.$product['id']?>">  <img width="100" height="100" src="../img/challengeEC.png" align="middle" ></a>
                  <div style="font-size: 16px; font-weight: bold;">
                    <a href="<?php echo'view/'.$product['id']?>">
                     <?php echo $product['title']; ?>
                     </a>
                  </div>
  
                  <?php echo $product['updated_on'] > 0 ? $product['updated_on'] : ""; ?>
                    
                  <div><?php echo $product['description'] ?> </div>
                </div><!-- span4 -->
                <?php $count++; ?>                    
              <?php } ?>  
            </div>           
          <?php } ?>
                     
        </div><!--/span-->
	    </div><!-- /row -->
	     
      <hr>

      <footer>      
       <div class="row">
        <div class="span6">
          <p>&copy; 2012 Sustainable Silicon Valley</p>
        </div>
        <div class="span6" style="text-align: right">
          <p>All Rights Reserved</p>
        </div>
       </div>    
      </footer>

    </div><!--/.container-->
    
  </body>
</html>
