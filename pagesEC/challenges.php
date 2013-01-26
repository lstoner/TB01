<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8">
    <title>Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Jagruti Varia">
  
    <link href="../css/bootstrap.css" rel="stylesheet">   
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
    
    <script src="../js/jquery-1.8.3.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/less-1.3.0.min.js"></script>
    
    <link href="../css/stylesEC.less" rel="stylesheet">
    
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 10px;
      } 
      .page-header {
        padding: 10px 10px 10px 10px;
        margin: 0px 0px 10px 0px;
        background: #EEEEEE;
        border-radius: 10px 10px 10px 10px; 
      }      
      .challenge {
        background: #6FC1D8;
        border-radius: 10px;
        height: 330px;
        padding: 10px;
      }
      hr { 
        height: 3px; color: #888 !important; background-color: #888 !important;
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
   
      <?php $data = array();
        $data['1'] = array("id" => 1, "title" => "SAP Challenge", 'startDate' => "09/18/12", 'endDate' => '12/13/12',
        		'entries' => 15,
        		"description" => "SAP and NASA announce a challenge to support green technology with
		              funding of up to $40,000.  Judges are from NASA research projects
		              and SAP's green team");
        $data['2'] = array("id" => 2, "title" => "Intel Foundation", 'startDate' => "10/10/12", 'endDate' => '12/13/12',
        		'entries' => 11,
        		"description" => "Welcome to a collaborative competition where social entrepreneurs enter 
		           their ideas and programs to gain funding and support.  This challenge supports
		           technology, women, and society");
        $data['3'] = array("id" => 3, "title" => "Skoll Foundation", 'startDate' => "10/15/12", 'endDate' => '12/13/12',
        		'entries' => 27,
        		"description" => "Results for Development, with support from the Skoll Foundation, 
		            is exploring innovative models for skills delivery at the 
		            secondary school level in Africa and Asia.");     
        $data['4'] = array("id" => 4, "title" => "Hackerdojo", 'startDate' => "04/01/12", 'endDate' => '04/01/13',
        		'entries' => 43,
        		"description" => "Creating a better life for all hackers, with free high-speed
        		  network access and free storage for all.");
        $data['5'] = array("id" => 5, "title" => "Menlo School", 'startDate' => "11/01/12", 'endDate' => '01/01/13',
        		'entries' => 3,
        		"description" => "The Menlo Foundation provides financial aid programs
        		  for distinguished students, and a college-prep educational
        		  experience.");
      ?>
          
      <div class="row-fluid">
	      <div class="span9">      
		      <div class="page-header">
		         <h2>Challenges</h2>
		         <p>
		           These can be a powerful catalyst for innovation as products and processes 
		           are optimized or	completely re-imagined.
		         </p>      
		      </div>
	        <div class="row-fluid" style="margin-bottom: 10px">
	          <?php $count = 0; ?>
	          <?php foreach ($data as $item) { ?>
	          
	            <?php /* Create a new row if needed, on count = 3, 6, 9, ... */ ?>
              <?php if ($count > 0 && $count%3==0) { echo "</div>"; } ?>
              <?php if ($count > 0 && $count%3==0) { echo "<div class='row-fluid' style='margin-bottom: 10px'>"; } ?>
      
	            <div class="span4 challenge">           
							  <img width="120" height="120" src="../img/challengeEC.png" align="middle" >
			          <h4><?php echo $item['title'] ?></h4>
			          <p><?php echo $item['description'] ?></p>
			          <div class="pull-left">
			            Start: <?php echo $item['startDate'] ?>
			          </div>
			          <div class="pull-right">
			            End: <?php echo $item['endDate'] ?>
			          </div>
			          <div style="clear:both"></div>
			          <div style="line-height: 5px; background:red; padding: 0px; margin: 2px 0px 2px 0px; height: 10px"></div>
			          <?php echo $item['entries'] ?> entries
			        </div><!--/span-->
			        <?php $count++; ?>   
		        <?php } ?>	        
	        </div><!-- /row -->
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
 