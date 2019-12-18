<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>Just a Markup</title>
    
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

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

    <main>
        <div class="background background-filter"></div>



        <script>
            function openNav() {
                document.getElementById("mySidebar").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
            }

            function closeNav() {
                document.getElementById("mySidebar").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
            }
        </script>

        <div class="box">
            <div class="content">
                <h1> WELCOME TO OUR SHOP </h1>
            </div>

            <div class="content1">
                <h2> Here, you can shop drinks of your Choice</h2>
            </div>

            <div class="content2">

                <h1> Click the button below to start shopping </h1> <br> <br>
            </div>


            <div class="thebutton">
                <button class="btn" href="shop.php">Button</button>

            </div>
        </div>

    </main>
    <div class="content3">

        <strong> OUR BEST SELLERS: </strong>
    </div>
    <div class="footer">
        <footer>
            <p>Posted by: bla bla bla</p>
            <p>Contact information: <a href="mailto:someone@example.com">someone@example.com</a>.</p>
        </footer>
    </div>

</body>

</html>