<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <?php include("Assets.php"); ?>
</head>

<body>
    <?php $page = "home";
    include('Header.php'); ?>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/Slides/Slide0.jpg" class="d-block w-100" style="height:50vh" alt="...">
                <div class="carousel-caption">
                    <h1 class="textShadow">Welcome To Southern Pearl Hikkaduwa</h1>
                    <p class="textShadow">Visit us to make your stay remarkable.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Slides/Slide1.jpg" class="d-block w-100" style="height:50vh" alt="...">
                <div class="carousel-caption" style="padding-bottom: 50px;">
                    <h1 class="textShadow">Welcome To Southern Pearl Hikkaduwa</h1>
                    <p class="textShadow">Service is exceptionally friendly and amenities are plentiful ensuring a most pleasurable and memorable stay with us.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Slides/Slide2.jpg" class="d-block w-100" style="height:50vh" alt="...">
                <div class="carousel-caption" style="padding-bottom: 50px;">
                    <h1 class="textShadow">Welcome To Southern Pearl Hikkaduwa</h1>
                    <p class="textShadow">We do considerate your happiness and satisfaction more than anythingelse.</p>
                </div>
            </div>
        </div>
    </div>
    <section id="service" class="counters1 counters cid-rvlMfPTp3I" id="counters1-4">
        <div class="container">
            <br />
            <h3 class="display-4 " align="center">Our Guests enjoy the best of everything</h3>
            <div class="container pt-4 mt-2">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="images/36.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Rooms</h5>
                                <p class="card-text">The hotel has 17 beautifully appointed air conditioned rooms with stunning views of the Indian Ocean. Each room has Satellite TV, Free Wi-Fi in Rooms and Public Areas, Tea making facilities and Safety Deposit Lockers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="images/37.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Outdoor</h5>
                                <p class="card-text">Hikkaduwa has many things to offer you. Visit Village Temples, Old Churches, Historical buidings built by the Dutch, Lagoon boat trip, Visith Hikkaduwa Fish Market, Toddy Tapping and Coconut Plantation in neer by Hotel.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="images/38.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Food</h5>
                                <p class="card-text">Dine under the stars by the pool, Beach pavilion or at the restaurant with commanding views of the Ocean. Choose from Western, Eastern and traditional Sri Lankan cuisine at the Buffet meals or from the Ala Carte Menu.</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        </div>
        </div>
    </section>
    </br></br></br>
    <?php include('Footer.php'); ?>
</body>

</html>