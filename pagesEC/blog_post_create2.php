<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8">
    <title>Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Jeff Risberg">
  
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
      hr { 
        height: 3px; color: #888 !important; background-color: #888 !important;
      }   
      
			.classify .qualifier {
			    background: none repeat scroll 0 0 #EEEEEE;
			    color: #333333;
			    font-size: 14px;
			    font-weight: bold;
			    padding: 2px;
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
			          <li><a href="#">Marketplace</a></li>
			          <li class="divider-vertical"></li>
			          <li class="active dropdown">
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
			<div class="span9">
				<strong>Categories for post: </Strong>
				<table cellspacing="5" class="classify">
					<tr>
						<td valign="top">
							<div class="qualifier">Resources</div> <input type="checkbox"
							value="1" id="1" name="qualifiervalue[]" /> &nbsp; Energy <br />
							<input type="checkbox" value="2" id="2" name="qualifiervalue[]" />
							&nbsp; Information <br /> <input type="checkbox" value="3" id="3"
							name="qualifiervalue[]" /> &nbsp; Materials <br /> <input
							type="checkbox" value="4" id="4" name="qualifiervalue[]" />
							&nbsp; Water <br />
						</td>
						<td valign="top">
							<div class="qualifier">Human Systems</div> <input type="checkbox"
							value="5" id="5" name="qualifiervalue[]" /> &nbsp; Communications
							<br /> <input type="checkbox" value="6" id="6"
							name="qualifiervalue[]" /> &nbsp; Culture and Engagement <br /> <input
							type="checkbox" value="7" id="7" name="qualifiervalue[]" />
							&nbsp; Human Behavior Change <br /> <input type="checkbox"
							value="22" id="22" name="qualifiervalue[]" /> &nbsp; Invention &
							Innovation <br /> <input type="checkbox" value="23" id="23"
							name="qualifiervalue[]" /> &nbsp; Knowledge Development &
							Transfer <br /> <input type="checkbox" value="24" id="24"
							name="qualifiervalue[]" /> &nbsp; Policies & Regulation <br />
						</td>
						<td valign="top">
							<div class="qualifier">Enterprise</div> <input type="checkbox"
							value="25" id="25" name="qualifiervalue[]" /> &nbsp; Customers <br />
							<input type="checkbox" value="26" id="26" name="qualifiervalue[]" />
							&nbsp; HR/Engagement <br /> <input type="checkbox" value="27"
							id="27" name="qualifiervalue[]" /> &nbsp; Leadership/Strategy <br />
							<input type="checkbox" value="28" id="28" name="qualifiervalue[]" />
							&nbsp; Metrics/Financial Models/Legal <br /> <input
							type="checkbox" value="29" id="29" name="qualifiervalue[]" />
							&nbsp; Operations <br /> <input type="checkbox" value="30"
							id="30" name="qualifiervalue[]" /> &nbsp; Product/Service Design
							<br /> <input type="checkbox" value="31" id="31"
							name="qualifiervalue[]" /> &nbsp;
							Stakeholders/Community/Infrastructure <br /> <input
							type="checkbox" value="32" id="32" name="qualifiervalue[]" />
							&nbsp; Supply Chain <br />
						</td>
					</tr>
					<tr>
						<td valign="top">
							<div class="qualifier">Regional</div> <input type="checkbox"
							value="33" id="33" name="qualifiervalue[]" /> &nbsp; Industrial
							Ecology & Cradle-to-Cradle <br /> <input type="checkbox"
							value="34" id="34" name="qualifiervalue[]" /> &nbsp;
							Infrastructure <br /> <input type="checkbox" value="35" id="35"
							name="qualifiervalue[]" /> &nbsp; Resource/Waste Management <br />
							<input type="checkbox" value="36" id="36" name="qualifiervalue[]" />
							&nbsp; Transportation <br /> <input type="checkbox" value="37"
							id="37" name="qualifiervalue[]" /> &nbsp; Utilities <br />
						</td>
						<td valign="top">
							<div class="qualifier">Industry</div> <input type="checkbox"
							value="38" id="38" name="qualifiervalue[]" /> &nbsp; Education <br />
							<input type="checkbox" value="39" id="39" name="qualifiervalue[]" />
							&nbsp; Finance/Insurance/Investment <br /> <input type="checkbox"
							value="40" id="40" name="qualifiervalue[]" /> &nbsp;
							Food/Agriculture <br /> <input type="checkbox" value="41" id="41"
							name="qualifiervalue[]" /> &nbsp; Healthcare <br /> <input
							type="checkbox" value="42" id="42" name="qualifiervalue[]" />
							&nbsp; Manufacturing/Supply Chain <br /> <input type="checkbox"
							value="43" id="43" name="qualifiervalue[]" /> &nbsp;
							Transportation <br />
						</td>
						<td valign="top">
							<div class="qualifier">Planetary System</div> <input
							type="checkbox" value="44" id="44" name="qualifiervalue[]" />
							&nbsp; Air Quality Regulation <br /> <input type="checkbox"
							value="45" id="45" name="qualifiervalue[]" /> &nbsp; Climate &
							Natural Hazard Regulation <br /> <input type="checkbox"
							value="46" id="46" name="qualifiervalue[]" /> &nbsp; Disease &
							Pest Control <br /> <input type="checkbox" value="47" id="47"
							name="qualifiervalue[]" /> &nbsp; Energy Capture, Transport,
							Storage <br /> <input type="checkbox" value="48" id="48"
							name="qualifiervalue[]" /> &nbsp; Habitation Systems <br /> <input
							type="checkbox" value="49" id="49" name="qualifiervalue[]" />
							&nbsp; Pollination <br /> <input type="checkbox" value="50"
							id="50" name="qualifiervalue[]" /> &nbsp; Population &
							Biodiversity Management <br /> <input type="checkbox" value="51"
							id="51" name="qualifiervalue[]" /> &nbsp; Radiation Protection <br />
							<input type="checkbox" value="52" id="52" name="qualifiervalue[]" />
							&nbsp; Soil Vitality, Erosion & Chemical Pollution Control <br />
							<input type="checkbox" value="53" id="53" name="qualifiervalue[]" />
							&nbsp; Waste Recycling <br /> <input type="checkbox" value="54"
							id="54" name="qualifiervalue[]" /> &nbsp; Water Cleansing,
							Transport & Storage <br /> <input type="checkbox" value="55"
							id="55" name="qualifiervalue[]" /> &nbsp; Ocean System <br /> <input
							type="checkbox" value="56" id="56" name="qualifiervalue[]" />
							&nbsp; Food Production, Transport & Storage <br />
						</td>
					</tr>
					<tr>
				</table>
				<input type="submit" name="x" value="Save" />
			</div>
			<!--/span-->

			<div class="span3">
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
					<div class="category">Soil Vitality, Erosion & Chemical Pollution
						Control (1)</div>
					<div class="category">Energy Capture, Transport, Storage (6)</div>
					<div class="category">Radiation Protection (4)</div>
				</div>
			</div>
			<!--/span3-->
		</div>
		<!-- /row -->  

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
 