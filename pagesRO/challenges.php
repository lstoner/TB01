<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8">
    <title>Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Various">
   
    <link href="../css/bootstrap.css" rel="stylesheet">   
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
    
    <script src="../js/jquery-1.7.2.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/less-1.3.0.min.js"></script>
    
    <link href="../css/stylesRO.less" rel="stylesheet">
    
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 10px;
        background-image: url(./img/background-tile.png);
      }
      .rightPanel {
        background: #66BB66;
        padding: 5px;
        height: 60px;
        border-radius: 10px;
        margin-bottom: 10px;
      }
      .rightPanel .title {
        font-weight: bold;
        font-size: 15px;  
        margin-bottom: 5px;
      }
      .lowerPanel {
        background: #E9B665;
        padding: 5px;
        border-radius: 10px;
        height: 200px;
      }
      .lowerPanel .title {
        font-weight: bold;
        font-size: 15px;  
        margin-bottom: 5px;      
      }
      .lowerPanel .post {
        border-bottom: 1px solid black;
      }
      .lowerPanel .event {
        border-bottom: 1px solid black;
      }
      .lowerPanel .activity {
        border-bottom: 1px solid black;
      }
      hr { 
        height: 3px; color: #888 !important; background-color: #888 !important;
      }
    </style>    

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  
    <link rel="shortcut icon" href="ico/favicon.ico">
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
    
    <div class="container" style="width: 1090px; background: #fff; box-shadow: 0px 0px 15px 15px #fff; padding: 0px 20px 0px 20px;">
    
      <div style="margin-bottom: 10px">
        <img width="900" height="100" src="img/ecocloud_header.png" />      
      </div>
    
      <div class="row-fluid">
        <div class="span12">           
	        <div class="navbar" style="margin-bottom: 10px">
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
			    <div style="background: red; height: 5px; margin-bottom: 10px;"></div>
				</div>
			      
        To be filled in
      <hr>
     
      <footer>      
       <div class="row-fluid">
         <div class="span12">
           <div class="pull-left">
             &copy; 2010 - 2012 by RallyOn, Inc. All Rights Reserved.
           </div>
           <div class="pull-right">        
             About Us | Help | Terms of Service
           </div>
         </div>
       </div>     
      </footer>

    </div><!--/.container-->
    
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <script type="text/javascript">
      $(function () {           
        $(".pop").popover({trigger: 'hover'});          
      });  
    </script>
  </body>
</html>
 