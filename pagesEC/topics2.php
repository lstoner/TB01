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
			<div class="span9">

				<div class="row-fluid">
					<div style="margin-bottom: 20px">
						<a class="btn btn-large btn-primary"  style="margin-right: 20px">Smart Grid</a>
						<a class="btn btn-large btn-primary" style="margin-right: 20px">Renewables</a>
						<a class="btn btn-large btn-primary" style="margin-right: 20px">Effeciency</a>
						<a class="btn btn-large btn-primary" style="margin-right: 20px">Policies</a>
						<a class="btn btn-large btn-primary" style="margin-right: 20px">Events Archive</a>
					</div>
				
				</div><!--/row-->
				<div class="row-fluid">
					<div class="well" >
					 
						<h3 style="margin-left:40%">Live Rss/Ticker</h3>
						<div style="margin-left:30%">
							<a class="btn" style="margin-right:3%"><i class="icon-thumbs-up"></i>like</a>
							<a class="btn" style="margin-right:3%"><i class="icon-signal"></i>Twitter</a>
							<a class="btn" style="margin-right:3%"><i class="icon-thumbs-up"></i>Like</a>
							<a class="btn" style="margin-right:3%"><i class="icon-pencil"></i>Comment</a>
						</div>
						
					</div>			
				</div><!--/row-->
				
			<?php $data = array();
            $data['1'] = array("id"=>1,"title" => "Holiday Book Talk: Gift Book Suggestions", 'updated_on' => "2012/09/18", "description" => "High-eff industrial solar panel");
            $data['2'] = array("id"=>2,"title" => "Transportation Meeting @ City of Mountain View 12/5, 7-9 pm", 'updated_on' => "2012/10/10", "description" => "Municipal waste recycling systems");
            $data['3'] = array("id"=>3,"title" => "Bay Area inspector wins prestigious awards", 'updated_on' => "2012/10/15", "description" => "Collector system for households");         
            $data['4'] = array("id"=>4,"title" => "Silicon Valley Water Awards", 'updated_on' => "2012/10/15", "description" => "Collector system for households");
            ?>
     
            
				
				<div class="row-fluid">
					<div class="span6">
						<div class="well" style="height:300px">
							<h4> Core Knowledge</h4>
							<a class="btn btn-info">by popular</a>
							<a class="btn btn-success">by latest</a>
							<table class="table table-striped">
								<thead>
									<th>date</th>
									<th>title</th>
								</thead>
								<tbody>
								 <?php foreach ($data as $d):?>
								 <tr>
								 <td> <?php echo $d["updated_on"]?></td>
								 <td> <?php echo $d["title"]?></td>							
								 </tr>
								 <?php endforeach?>
								
								</tbody>
							
							</table>
						</div>
					</div>
					<div class="span6">
						<div class="well" style="height:300px">
							<h4> Successful Stories</h4>
							<a class="btn btn-info">by popular</a>
							<a class="btn btn-success">by latest</a>
							<table class="table table-striped">
								<thead>
									<th>date</th>
									<th>title</th>
								</thead>
								<tbody>
								 <?php foreach ($data as $d):?>
								 <tr>
								 <td> <?php echo $d["updated_on"]?></td>
								 <td> <?php echo $d["title"]?></td>							
								 </tr>
								 <?php endforeach?>
								
								</tbody>
							
							</table>
						</div>
					</div>		
				</div><!--/row-->
				
				<div class="row-fluid">
					<div class="span6">
						<div class="well" style="height:300px">
						  <h4>Evaluate your smart grid:Tools and Metrics</h4>
						  <a class="btn btn-info">by popular</a>
							<a class="btn btn-success">by latest</a>
							<table class="table table-striped">
								<thead>
									<th>date</th>
									<th>title</th>
								</thead>
								<tbody>
								 <?php foreach ($data as $d):?>
								 <tr>
								 <td> <?php echo $d["updated_on"]?></td>
								 <td> <?php echo $d["title"]?></td>							
								 </tr>
								 <?php endforeach?>
								
								</tbody>
							
							</table>
						</div>
					</div>
					
					<div class="span6">
						<div class="well" style="height:300px">
						  <h4>Smart Grid: Local News & Development</h4>
						  <a class="btn btn-info">by popular</a>
							<a class="btn btn-success">by latest</a>
							<table class="table table-striped">
								<thead>
									<th>date</th>
									<th>title</th>
								</thead>
								<tbody>
								 <?php foreach ($data as $d):?>
								 <tr>
								 <td> <?php echo $d["updated_on"]?></td>
								 <td> <?php echo $d["title"]?></td>							
								 </tr>
								 <?php endforeach?>
								
								</tbody>
							
							</table>
						</div>
					</div>		
				</div><!--/row-->
				
			</div><!--/span9-->

			<div class="span3">
				<div class="widget w1">
					<div class="title">Recent Blog Posts</div>
					<div class="post">Adobe Systems is winning awards</div>
					<div class="post">Now is the time for all men to come their
						aid of their party</div>
					<div class="post">Sustainable Showcase is now open</div>
					<div class="post">Why I'm recycling all water at my house.</div>
				</div>
				<br>
				<div class="widget w2">
					<div class="title">Upcoming Events</div>
					<div class="event">
						NASA Event
						<div clas="date">08/23/12</div>
					</div>
					<div class="event">
						Sustainability Workshop
						<div class="date">10/15/12</div>
					</div>
				</div>
				<br>
				<div class="widget w3">
					<div class="title">Recent Activity</div>
					<div class="activity">Jack Smith commented on "The
						Water-Energy Nexus" on 09/12/12</div>
					<div class="activity">Sally Jones commented on "Recycled
						Water Case Study" on 09/14/12</div>
					<div class="activity">Sally Jones commented on "New Trends in
						Wind Power Usage" on 09/15/12</div>
					<div class="activity">Craig Criddle commented on "Wastewater
						Recovery" on 09/17/12</div>
				</div>
				<br>
				<div class="widget w4">
					<div class="title">About Us</div>
					<div class="text">SSV is a leadership group that helps companies become more sustainable.</div>
					<div class="text">
						We welcome your financial support of EcoCloud™.<br /> You can
						contribute by making a tax-deductible donation to Sustainable
						Silicon Valley, a 501(c)(3) non-profit organization. Tax ID:
						56-2464045.
					</div>
				</div>
			</div>
			<!--/span3-->
		</div>
		<!--/row-->      

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
 