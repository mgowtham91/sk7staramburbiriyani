<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SK 7 Star Ambur Biriyani</title>
    <link rel="icon" href="images/fav.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>.logo-container {
    width: 200px;
    height: 200px;
    overflow: hidden;
}

.zoom-logo {
    width: 300%;
    height: 300%;
    animation: zoomInOut 3s infinite ease-in-out;
}

@keyframes zoomInOut {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.2);
    }
    100% {
        transform: scale(1);
    }
}
</style>
</head>
<body>
<div>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="images/logo.png" class="logo logo-container zoom-logo" ></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav">
        <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav"> <!––make sure you add this navbar-nav class––>
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
          <li class="nav-item"><a class="nav-link" href="#outlets">Outlets</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
    </div>

    <section id="home" class="banner-section" style="background-image:url('images/bg_3.jpg');">
        <div class="container">
            <div class="banner-content">
                <h1 class="animate-text" style="color:gold;"><b>Welcome to SK 7 Star Ambur Biriyani</b></h1>
                <p class="lead animate-text delay-1">Indulge in culinary delights crafted with passion.</p>
                <a href="#specials" class="btn btn-primary btn-lg animate-button">View Menu</a>
            </div>
        </div>
    </section>

    <section id="about" class="py-5" style="background-image:url('images/art1.png')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0"> <div class="image-frame animate-image"><img src="images/0.jpg" alt="About Us" class="img-fluid rounded shadow animate-image" style="width:100%;"></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <h2 class="animate-text">Our Story</h2> 
                    <p class="animate-text delay-1">Indulge in the exquisite flavors of Ambur biryani at SK 7 Star Ambur Briyani, a culinary haven with three thriving branches in Poonammallee, Thiruvallur, and its hometown, Ambur. Each location offers a unique dining experience, blending the authenticity of Ambur's renowned biryani tradition with modern comforts. Savor the aromatic spices and tender meats meticulously prepared to perfection, creating a symphony of taste on every plate. The restaurant's commitment to quality and tradition is evident in every dish, making it a go-to destination for biryani enthusiasts.<br><br>

Whether you're in the bustling streets of Poonammallee, the vibrant Thiruvallur district, or the heart of Ambur itself, SK 7 Star Ambur Briyani promises a gastronomic adventure like no other. With its warm ambiance and impeccable service, the restaurant invites you to relish the heritage and culinary excellence that define Ambur's unique biryani legacy.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="specials" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4 animate-text">Our Specials</h2>
            <div class="row">
                </div>
        </div>
    </section>
    <section id="about" class="py-5" style="background-image:url('images/art1.png')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 mb-4 mb-lg-0"> 
                <div class="image-frame animate-image">
                    <img src="images/ambience.jpg" alt="Ambience" class="img-fluid rounded shadow animate-image">
                </div>
            </div>
            <div class="col-lg-6 order-lg-2">
                <h2 class="animate-text">Our Ambience</h2> 
                <p class="animate-text delay-1">
                    Step into a warm and inviting atmosphere at our restaurant, where contemporary decor meets traditional charm. Soft lighting and comfortable seating create the perfect setting for a memorable dining experience. Whether you’re enjoying a cozy meal with family or celebrating a special occasion with friends, our ambiance enhances every moment, making each visit truly delightful. Join us and immerse yourself in an environment that complements our exquisite cuisine!
                </p>
            </div>
        </div>
    </div>
</section>


    <footer class="py-4 bg-dark text-white">
        <div class="container text-center">
            <p class="m-0">© <?php echo date('Y');?>&nbsp;&nbsp;Sk 7 Star Ambur Biriyani </p> 
            <div class="social-icons mt-3">
                <a href="#" class="mx-2"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#" class="mx-2"><i class="fab fa-twitter fa-lg"></i></a>
                <a href="#" class="mx-2"><i class="fab fa-instagram fa-lg"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>