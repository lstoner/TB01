<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8">
    <title>Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Linghua Jin">
  
    <link href="../css/bootstrap.min.css" rel="stylesheet">   
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <script src="../js/jquery-1.8.3.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
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
      .post {  
        padding-bottom: 4px; 
        border-bottom: 1px solid #888;    
        margin-bottom: 15px;
      }
      .post .title a {
        font-size: 17px;
        font-weight: bold;
        color: #333;        
        text-decoration: none;
      }
      .post .metadata {
        font-size: 14px;
        font-style: italic;
        font-family:  "Times New Roman", serif;
      }
      .post .excerpt {
        color: #333;
      }
      .post .categories {
        margin-top: 6px;
        font-size: 14px;
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
			          <li><a href="#">Home</a></li>
			          <li class="divider-vertical"></li>
			          <li><a href="#">Roadmap</a></li>
			          <li class="divider-vertical"></li>
			          <li class="active"><a href="#">Marketplace</a></li>
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
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Solutions <b class="caret"></b></a>
			            <ul class="dropdown-menu">
			              <li><a href="#">Contribute</a></li>
			              <li><a href="#">Find</a></li>
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
	      <div class="span10">   
	      	
	      	<table>    	
	      	<tr>	
	      	<td valign="top">  <img width="200" height="200" src="../img/product1.png" class="img-rounded"></td>
	      	<td valign="top">   
			    <h4>ADD-ON Solar Charging Panel Extensions for ReVIVE Series Solar ReStore XL External Backup Battery Pack</h4>
				<label> <Strong>Providing Company:</Strong></label> 
				<label> <a href="#" onclick="return false;">Accessory Power</a></label>
				
			<label for "excert">
    	ADD-ON Panels triple solar charging speed and allows the Solar ReStore XL to charge to 100% capacity by solar power alone!
    	Fully charges the internal battery of the ReVIVE Solar ReStore XL within 4.5 hours in direct sunlight
			</label>
				
			</td>
			</tr>	  
			</table> 
			
			<div class="span12">
			<Legend>Similar Product Recommendation</Legend>
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
			</div>
			
			
			<div class="span12">
			<Legend>Product Details</Legend>
			<ul>
				<li>Take Your Solar Charging to the Next Level!</li>
				<li>Want to increase the charging speed of your Solar Restore XL AND enable it to charge 100% using only sunlight? Then look no further! The Add-On Solar Panel is here to give your solar charging the ultimate boost!
					Twice as Fast When connected with your ReVIVE Series Solar Restore XL, this Add-On Panel will increase the charge rate to DOUBLE the normal charge time. Now you can spend less time charging up your external battery pack and have more time to enjoy your favorite devices!
				<li>Twice the Solar Charge</li>
				<li>When you connect this Add-On Panel to your Solar Restore XL, you fully unlock all of its solar charging capabilities! Using only the power from the sun, you can charge the Solar Restore to its maximum capacity in only 4.5 hours. That means you can charge it in less time than the average work day!</li>
				<li>Infinite Possibilities</li>
				<li>Unlock the capabilities of your Solar Restore XL via the Add-On Panel to charge your devices in less time, all while on the go. Enjoy the freedom of worrying less when you're away from an electrical outlet! Use the Add-On Panel to quickly charge up your Solar Restore XL and charge devices like your smartphones, ereaders, tablets while you're camping, traveling, and more!</li>
				<li>Compatible with Solar ReStore XL (4,000mAh), Solar ReStore XL+(6,000mAh), ReStore 9200 ReVIVE products

					**Note: It cannot charge devices by itself. </li>





			</ul>
			
			</div>
			
			<div class="span12">
			<Legend>Company Description</Legend>
			www.accessorypower.com
			
			</div>
			
			
			 	              	       
        </div><!--/span-->
        
        <div class="span2">       
			    <div class="widget w1">
			      <div class="title">Resources</div>	          
			      <div class="category">Energy (3)</div>
		        <div class="category">Information (5)</div>
		        <div class="category">Materials (3)</div> 
		        <div class="category">Water (12)</div>  	                    
			    </div>
			        
			    <div class="widget w2">
			      <div class="title">Industry</div>	         
			      <div class="category">Education (7)</div>	     
			      <div class="category">Finance/Insurance/Investment (11)</div>   
		        <div class="category">Food/Agriculture (3)</div>    	            
			    </div>
			       
			    <div class="widget w3">
		        <div class="title">Planetary System</div>            
		        <div class="category">Air Quality Regulation (2)</div>
		        <div class="category">Soil Vitality, Erosion & Chemical Pollution Control (1)</div>
		        <div class="category">Energy Capture, Transport, Storage (6)</div>
		        <div class="category">Radiation Protection (4)</div>                      
		      </div>		           	       	    
		    </div><!--/span3-->       
	    </div><!-- /row -->  
	    
	    
	    

      <hr/>

      <footer>      
       <div class="row">
         <div class="span12">
           <div class="pull-left">
             &copy; 2010 - 2012 by Sustainable Silicon Valley. All Rights Reserved.
           </div>
           <div class="pull-right">        
             About Us | Sign Up for Newsletter | Donate | Contact Us | Help | Terms of Service
           </div>
         </div>
       </div>    
      </footer>

    </div><!--/.container-->
    
  </body>
</html>
 