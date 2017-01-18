<?php include('./contentSend.php');?>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./index.php">lazyBlogger</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./index.php">Home</a></li>
            <!--<li><a href="#contact">Contact</a></li>-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="container">

      <div class="starter-template">
          <h3>lazy<span style="font-weight:bold;font-size:28px;">Bloggers</span> are welcome here.</h3>
          
          <hr style="width:50%;height:3px;">
          
          
          
          <!--rectangular box
          <div class="col-md-12" id="rectangularBox">
        <p class="lead" style="font-size:16px;">Write your short fiction, real stories, poems whatever it is, and give them to be infront of the world, share it with us and we will give it a look and making you people happy is our statement.</p>
        </div>
              rectangular box end-->  

<div class="panel panel-default" style="margin-top:30px;">
  <div class="panel-heading">
    <h3 class="panel-title">Write your short fiction, real stories, poems whatever it is, and give them to be infront of the world, share it with us and we will give it a beautiful look.</h3>
  </div>
  <div class="panel-body">
     
          <div class="row">
              <form method="post" action="./contentSend.php">
            <div class="col-md-12">      
            <div class="form-group">
                <textarea class="form-control" rows="5" id="comment" name="contentArea" required="true"></textarea>
          </div>
      </div>
                  
                  
              <div class="col-md-8">
                  <div class="form-group emailId">
              <!--<label for="emailId" style="margin-top:5px;" id="emailIdLabel">Email Address : </label>-->
              <input type="email"  class="form-control" placeholder="Enter your email id" name="emailId" id="emailId">
                  </div>
                </div>
                <div class="col-md-4" >
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary  submitBtn" name="submit" data-toggle="modal" data-target="#myModal">Submit</button>
                    </div> 
                  </div> 
              
              </form>
          
      </div>
      <div id="msg"><?php echo $message; ?></div>
          
  </div>
</div>
          
          
    </div>
    
    </div><!-- /.container -->