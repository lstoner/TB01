<!-- Dialog examples page -->
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
		<meta charset="utf-8">
		<title>Twitter Bootstrap</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Jeff Risberg">
		
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<style type="text/css">
		  body {
		    padding-top: 60px;
		    padding-bottom: 40px;
		  }		 
		</style>
		
		<!--[if lt IE 9]>
		      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<link rel="shortcut icon" href="ico/favicon.ico">
  </head>

  <body>
    <script src="js/jquery-1.8.3.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  
	 
  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="index.html">TB01</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
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
	    <p><a class="btn" role="button" data-toggle="modal" href="#myModal">
	      Launch demo modal dialog
	    </a><p>
	    	  
	    <p><a class="btn btn-danger" role="button" data-toggle="modal" data-target="#deleteConf" href="#deleteConf">
	       Delete Report
	    </a></p>	 
	    
	    <p><a class="btn" role="button" data-toggle="modal" data-target="#newUserConf" href="#newUserConf">
         Confirm New User
      </a></p>      
	  
	    <!-- Modal 1 -->
	    <div class="modal hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	        <h3 id="myModalLabel">Modal header text</h3>
	      </div>
	      <div class="modal-body">
	        <p>Modal body text</p>
	      </div>
	      <div class="modal-footer">
	        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	        <button class="btn btn-primary">Save changes</button>
	      </div>
	    </div>    
	    
	    <!-- Modal 2 -->
		  <div class="modal hide fade" id="deleteConf" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">   
		    <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		        <h3 id="deleteLabel">Confirm report deletion</h3>     
		    </div>   
		    <div class="modal-body">       
		        <p>
		            Are you sure you want to delete this report?  This action cannot be undone.
		        </p>
		    </div>  
		    <div class="modal-footer">
		     <a href="#" class="btn btn-danger">Delete</a>
		     <a href="#" class="btn" data-dismiss="modal" aria-hidden="true">Cancel</a>
		    </div>
		  </div>
		
			<!-- Modal 3 -->
	    <div class="modal hide fade" id="newUserConf" tabindex="-1" role="dialog" aria-labelledby="newUserLabel" aria-hidden="true">   
	      <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	          <h3 id="newUserLabel">Confirm New User</h3>     
	      </div>   
	      <div class="modal-body">       
	          <p>
	              Are you sure you want to confirm the new user?  This action cannot be undone.
	          </p>
	      </div>  
	      <div class="modal-footer">         
	       <a href="#" class="btn" data-dismiss="modal" aria-hidden="true">Cancel</a>
	       <a href="#" class="btn btn-primary">OK</a>
	      </div>
	    </div>  
  
		  <?php $data = array();
         $data[] = array("id" => 3, "first_name" => "Bob",   'last_name' => "Smith", "email" => "bob@aol.com");
         $data[] = array("id" => 4, "first_name" => "Carol", 'last_name' => "Jones", "email" => "carol@aol.com");
      ?>
      
		  <!-- This is the table that shows the user information -->
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th>Id</th>
			      <th>First Name</th>
			      <th>Last Name</th>
			      <th>Email</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php
			    $fields = array('id', 'first_name', 'last_name', 'email');
          foreach ($data as $user) { ?>
			      <tr>
			        <?php foreach ($fields as $field) { ?>
			          <td><?php echo $user[$field]; ?></td>
			        <?php } ?>
			        <td data-href="/tb01/userEdit.php?id=<?php echo $user['id'] ?>">
			          <div class="btn">Edit &raquo;</div>
			        </td>
			      </tr>
			    <?php } ?>
			  </tbody>
			</table>
			
			<!-- This is the placeholder for the modal box -->
			<div id="modal-editUser" class="modal hide fade">			  
			   <!-- Content will go here -->
			</div>

	    <hr/>
	    
	    <footer>
	      <div class="row">
	        <div class="span6">
	          <p>&copy; Company 2012</p>
	        </div>
	        <div class="span6" style="text-align: right">
	          <p>All Rights Reserved</p>
	        </div>
	       </div>
	    </footer>
	  </div>
    	
	  <!-- This is the code that makes it all happen -->     
    <script type="text/javascript">     
      jQuery( function($) { 
        // find all td's with a data-href attribute
        $('tbody td[data-href]').click( function() {
          // copy the data-href value to the modal for later use
          $('#modal-editUser').attr('data-href', $(this).attr('data-href'));
          // show the modal window
          $('#modal-editUser').modal({show: true, backdrop: true, keyboard: true});
        }).find('a').hover( function() { 
          // unbind it in case I put some "<a>" tags in the table row eventually
          $(this).parents('td').unbind('click'); 
        }, function() { 
          $(this).parents('td').click( function() { 
            // rebind it
            $('#modal-editUser .modal-body').attr('data-href', $(this).attr('data-href'));
            $('#modal-editUser').modal({show: true, backdrop: true, keyboard: true});
          }); 
        });
        
        // When the modal show event fires, load the url that was copied to the data-href attribute
        $('#modal-editUser').bind('show', function() {
          $(this).load($(this).attr('data-href'));
        });
      });      
    </script>
	</body>
</html>