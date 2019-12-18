<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>Just a Markup</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <header>
        <img src="Images/logo.png">


        <nav>

            <div class="list">
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#" class="active">Shop</a></li>
                    <li><a href="aboutus.php" class="active">About Us</a></li>


                </ul>
            </div>


            <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="#">Home</a>
                <a href="#">Shop</a>
                <a href="aboutus">About Us</a>
            

            </div>
        </nav>
        <div id="topright">

        <div id="shopping">
                <i class="fa fa-shopping-basket" style="font-size:30px;color:black;padding-right:30px"></i>
            </div>
            <div id="main">
                <button class="openbtn" onclick="openNav()">☰</button>
            </div>

            
        </div>



    </header>
</body>
</html>