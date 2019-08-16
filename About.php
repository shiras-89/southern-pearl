<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <?php include("Assets.php"); ?>
</head>

<body>
    <?php $page = "about";
    include('Header.php'); ?>
    <br> <br>
    <center>
        <div class="container">

            <h4> About </h4>
            <hr>

            <p>Southern Pearl is a Sri Lankan hotel specializes in luxery rooms. Since 2001, the hotel has offered a wide range of high quality room services in Sri Lanka</p>

            <br>

            <div class="card mb-3" style="max-width: 540px; background-color:#9a9a9a ; text-align:left">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="images/avatar.jpg" class="card-img img-fluid">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="margin:10% 10% 10% 0%">
                            <h4 class="card-title">Shiras Shahee</h4>
                            <p class="card-text" style="margin-top:-12px">(Chaireman)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
    <br><br><br><br>
    <?php include('Footer.php') ;?>
</body>

</html>