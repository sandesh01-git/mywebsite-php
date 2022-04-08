<!DOCTYPE html>
<html>
<head>
	<title>My Project</title>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <link href ="style.css" type="text/css" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Josefin+Sansdisplay=swap" rel="stylesheet">
 <link rel="stylesheet" href="gallery-grid.css">


</head>
<body>

 <?php include'menu.php'; ?>  

  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/7.jpeg" alt="Illam" width="1100" height="500">
        <div class="carousel-caption">
          <h3>ILLAM</h3>
           <p style="font-size:15px;">Illam is famous for tea and there are many tourist places in Illam so, visit Illam to be with nature. </p>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="images/6.jpeg" alt="Chatara" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Chatara</h3>
          <p style="font-size:25px;">Barachetra temple is hidden tourist places for nepalese</p>
        </div>   
      </div>

      <div class="carousel-item">
        <img src="images/4.jpeg" alt="Dharan" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Dharan</h3>
          <p style="font-size:20px;">Dharan is so beautiful places of nepal </p>
        </div>   
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <section class="my-5">
   <div class="py-5">

    <h2 class="text-center"> About US</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
     <div class="col-lg-6 col-md-6 col-12">
      <img src="images/55.jpeg" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
     <h2 class="display-4">Visit Nepal 2020</h2>
     <p class="py-3">
      This website is specially desgined for eastern tourism places which are not so much famous .Our aim is to focus on eastern tourism places of nepal .Let's make sucessful about our government theme. 
    </p>
    <a href="about.php" class="btn btn-outline-success"> Visit About Page </a>
  </div>
</div>


</div>

</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Services</h2>
    
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
    <img class="card-img-top" src="images/1.jpeg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Photo</h4>
            <p class="card-text">Some example text.</p>
            <a href="Services.php" class="btn btn-outline-success"> Visit Our Services </a>
          </div>
        </div>
        
      </div>

       <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
    <img class="card-img-top" src="images/1.jpeg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Photo</h4>
            <p class="card-text">Some example text.</p>
            <a href="Services.php" class="btn btn-outline-success"> Visit Our Services </a>
          </div>
        </div>
        
      </div>
      
       <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
    <img class="card-img-top" src="images/1.jpeg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Photo</h4>
            <p class="card-text">Some example text.</p>
             <a href="Services.php" class="btn btn-outline-success"> Visit Our Services </a>
          </div>
        </div>
        
      </div>
      

    </div>
    
  </div>
</section>
<section>
<div class="container gallery-container">

    <h1>Bootstrap 3 Gallery</h1>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
   

    <p class="page-description text-center">Grid Layout With Zoom Effect</p>
    
    <div class="tz-gallery">

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/1.jpeg">
                    <img src="images/1.jpeg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/1.jpeg">
                    <img src="images/1.jpeg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/1.jpeg">
                    <img src="images/1.jpeg" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/1.jpeg">
                    <img src="images/1.jpeg" alt="Coast">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/1.jpeg">
                    <img src="images/1.jpeg" alt="Rails">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/1.jpeg">
                    <img src="images/1.jpeg" alt="Traffic">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/1.jpeg">
                    <img src="images/1.jpeg" alt="Rocks">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/1.jpeg">
                    <img src="images/1.jpeg" alt="Benches">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/1.jpeg">
                    <img src="images/1.jpeg" alt="Sky">
                </a>
            </div>
        </div>

    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</div>



</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Any Queries </h2>
    
  </div>

  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="User" autocomplete="off" class="form-control">
        
      </div> 

      <div class="form-group">
        <label>Email Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
        
      </div>

      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
        
      </div>

      <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" name="comments">
          
        </textarea>
        
      </div>
      <button type="submit" class="btn btn-outline-success">Submit</button>
      
    </form>
  </div>
  </section>

  <footer>
    <p class="p-3 bg-dark text-white text-center"> @sandesh Neupane</p>
  </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>


</body>
</html>
