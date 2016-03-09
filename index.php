<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome">
<title>Bootstrap 101 Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->

<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
<link href="css/style.css" type="text/css" rel="stylesheet"/>
<!-- Calling jquery first -->
<script language="JavaScript" type="text/javascript" src="js/jQuery.js"></script>
<script language="JavaScript" type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- Carousel -->
<script language="JavaScript" type="text/javascript">
  $(document).ready(function(){
    $('.carousel').carousel({
      interval: 3000
    })
  });    
</script>  
</head>
<body>

<!--pageheader-->
<div class="page-header" style="background-color:#6C6">
<h1>EVENT MANAGEMENT  </h1>

<!--NAV-->
<ul class="nav nav-tabs">
<li role="presentation" class="active"><a href="index.php">HOME</a>
</li>
<li role="presentation"><a href="about.php">ABOUT</a></li>
<li role="presentation"><a href="contact.php">CONTACT</a></li>

<li role="presentation" style="float:right"><a href="">LOGIN</a></li>
<li role="presentation" style="float:right"><a href="">REGISTER</a></li>

</ul>
</div>

<!--panel for pictures-->

<!-- <div style="background-color:#6c6;float:right;width:8%;line-height:40;">
<h6>Categories</h6>
<div class="listgroup">
<ul>
<a href="" ><li>Event1</li></a>
<a href="" ><li>Event2</li></a>
<a href=""><li>Event3</li></a>
<a href="" ><li>Event4</li></a>
<a href="" ><li>Event5</li></a>
<a href="" ><li>Event6</li></a>
<a href="" ><li>Event7</li></a>
<a href="" ><li>Event8</li></a>
<a href="" ><li>Event9</li></a>
<a href="" ><li>Event10</li></a>
<a href="" ><li>Event11</li></a>
<a href=""><li>Event12</li></a>
<a href="" ><li>Event13</li></a>
<a href="" ><li>Event14</li></a>
<a href="" ><li>Event15</li></a>
<a href="" ><li>Event16</li></a>
<a href="" ><li>Event17</li></a>
<a href="" ><li>Event18</li></a>

</ul>
</div>
</div>


</div> -->


<h2>Welcome</h2>

<!-- <div class="panel panel-default">
  <div class="panel-body">
  
  </div>
</div> -->



<div class="panel panel-default">
  <div class="panel-body">
  <div class="jumbotron">
  <h1>MANAGE YOUR EVENT <h4>START BOOKING,HURRY UP</h4></h1>
  <p>Event Management website allows you to plan your event by selecting our vast themes and booking the service online.</p>
 
 </div>
</div>
</div>




<span class="label">EVENT MILESTONES</span>
 <ul class="list-group">
  <li class="list-group-item"><a href="Cras justo odi">12/AUG/2015</a></li>
  <li class="list-group-item"><a href="Dapibus ac facilisis in">25/SEPT/2011</a></li>
  <li class="list-group-item"><a href="Morbi leo risus">16/FEB/2014</a></li>
  <li class="list-group-item"><a href="Porta ac consectetur ac">14TH/JAN/2016</a></li>
  <li class="list-group-item"><a href="Vestibulum at eros">8TH/AUG/2012</a></li>
</ul>  


<div id="carousel" class="carousel slide" data-ride="carousel">
    <!-- Menu -->
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    
    <!-- Items -->
    <div class="carousel-inner">
        
        <div class="item active">
            <img src="partyimg/image.jpg" alt="Slide 1" />
        </div>
        <div class="item">
            <img src="partyimg/image1.jpg" alt="Slide 2" />
        </div>
        <div class="item">
            <img src="partyimg/image2.jpg" alt="Slide 3" />
        </div>
    </div> 
    <a href="#carousel" class="left carousel-control" data-slide="prev">
        <span class="glyphicon glyphicon-triangle-left"></span>
    </a>
    <a href="#carousel" class="right carousel-control" data-slide="next">
        <span class="glyphicon glyphicon-triangle-right"></span>
    </a>
</div>



<!--paragraph with heading-->

<h3>Event Management</h3>
<p> 
   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

 
  
  <br/><br/>

<!--thumbnail-->
  
<div class="container">
  <div class="col-md-12" style="float:left;padding:1%;">
    <div class="thumbnail">
      <img src="partyimg/download.jpg" alt="...">
      <div class="caption">
        <h3>Featured Birthdays</h3>
        <p>Select our themes for discos and DJ nights</p>
        <p><a href="#" class="btn btn-primary" role="button">OPEN</a></p>
      </div>
    </div>
  </div>


<!--thumbnails-->


  <div class="col-md-12" style="float:left;padding:1%;">
    <div class="thumbnail">
      <img src="partyimg/images.jpg" alt="...">
      <div class="caption">
        <h3>Featured Parties</h3>
        <p>Select our themes for discos and DJ nights</p>
        <p><a href="#" class="btn btn-primary" role="button">OPEN</a></p>
      </div>
    </div>
  </div>







  <div class="col-md-12" style="float:left;padding:1%;">
    <div class="thumbnail">
      <img src="partyimg/images (3).jpg" alt="...">
      <div class="caption">
        <h3>Featured Matrimonies</h3>
        <p>Select our themes for discos and DJ nights</p>
        <p><a href="#" class="btn btn-primary" role="button">OPEN</a></p>
      </div>
    </div>
  </div>




  <div class="col-md-12" style="float:left;padding:1%;">
    <div class="thumbnail">
      <img src="partyimg/image1.jpg" alt="...">
      <div class="caption">
        <h3>Featured Disco Parties</h3>
        <p>Select our themes for discos and DJ nights</p>
        <p><a href="#" class="btn btn-primary" role="button">OPEN</a></p>
      </div>
    </div>
  </div>

</div>


  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>

<footer  >
<div align="left" style="float:left">

<a href="">Terms of service</a> &ensp;
<a href="">Privacy</a> &ensp;
<a href="">Help</a>
</div>
<div class="muted" 
align="right">
<div class="glyphicon glyphicon-copyright">
EMS 2015.ALL Rights Reserved</div>
</div>
</footer>



</body>
</html>
		
