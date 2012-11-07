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
      .solution {
        background: #eee;
        border-radius: 5px;
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
        <img width="900" height="100" src="img/ecocloud_header.png" />      
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
   
      <?php
        $base_url = ""; 
        $solutions = array();
        $solutions['1'] = array("id" => 1, "title" => "Water Recycling", 'created_on' => "09/18/12", 'updated_on' => '12/13/12',
        		"description" => "Water recycling can reduce the water consumption in every household");
        $solutions['2'] = array("id" => 2, "title" => "Plasma-Arc Burning", 'created_on' => "10/10/12", 'updated_on' => '12/13/12',
        		"description" => "A plasma-arc is a new way to dispose of wastes, producing very little by-products");
        $solutions['3'] = array("id" => 3, "title" => "Anaerobic Digesters", 'created_on' => "10/15/12", 'updated_on' => '12/13/12',
        		"description" => "Anerobic digesters can actually produce energy from waste.");     
        $solutions['4'] = array("id" => 4, "title" => "Cogeneration", 'created_on' => "04/01/12", 'updated_on' => '04/01/13',
        		"description" => "Reusing extra heat and waste power from one site to help another site.");       
      ?>
      <div class="row-fluid">
	      <div class="span9">      
		      
	        <?php foreach ($solutions as $solution) { ?>
	          <div class="row-fluid" style="margin-bottom: 10px">              
  <div class="span1">
    <a href="<?php echo $base_url . 'solutions/view/'.$solution['id'] ?>">
      <img src="../img/solution.png" width=120 height=130 />
    </a>
  </div>
  
  <div class="span11" style="background: #f5f5f5; padding: 5px; border-radius: 5px;">
    <div class="span9">
	    <div>	       
          <span class="label label-success">Submitted</span>         
                  
          <span class="label label-info">In Showcase</span>
                
          <?php if ($solution['created_on'] > 0) { ?>
            <span>
              <?php echo "Entered " . $solution['created_on']; ?>
            </span>
          <?php } ?>
          <?php if ($solution['updated_on'] > 0) { ?>
            <span>
              <?php echo "Updated " . $solution['updated_on']; ?>
            </span>
          <?php } ?>
          </div>         
          <div style="font-size: 16px; font-weight: bold;">
            <a href="<?php echo $base_url . 'solution_view?id='.$solution['id']; ?>">
              <?php echo $solution['title']; ?>
            </a>
          </div>                             
          <div>
            <?php echo $solution['description'] ?> 
	        </div>
      </div>
      <div class="span2">          
	          <div class="btn-group">
	            <a class="btn" href="#"><i class="icon-leaf"></i> Action</a>
	            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	            <ul class="dropdown-menu">
	             <li><a href="<?php echo $base_url . 'solution_view?id='.$solution['id'] ?>"><i class="icon-eye-open"></i>View</a></li>            
               <li><a href="<?php echo $base_url . 'solution_edit?id='.$solution['id'] ?>"><i class="icon-pencil"></i>Edit/Submit</a></li>            
               <li class="divider"></li>
               <li><a href="<?php echo $base_url . 'solution_delete?id='.$solution['id'] ?>"><i class="icon-trash"></i>Delete</a></li>    
	            </ul>
	    </div>
	  </div>
  </div>
</div>		       
		      <?php } ?>	        
	        
        </div><!--/span-->
	    </div><!-- /row -->  

      <hr>

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
 