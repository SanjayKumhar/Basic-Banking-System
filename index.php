<html>

<head>
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: linear-gradient(#905400, #814B00, #714200, #613900, #533100, #422700);
        }

        html {
            overflow: scroll;
            overflow-x: hidden;
        }

        ::-webkit-scrollbar {
            width: 0;
            /* Remove scrollbar space */
            background: transparent;
            /* Optional: just make scrollbar invisible */
        }

        .main_div {
            color: #FFC100;
            font-family: 'Dela Gothic One', cursive;
        }

        .main_text {
            color: #FFC100;
            margin-top: 120px;
            font-family: 'Dela Gothic One', cursive;
        }

        .big-text {

            margin: 20px 0;
            color: #FFC100;
            font-family: 'Dela Gothic One', cursive;
        }

        .contactus {
            width: 100%;
            height: 100vh;
            padding: 80px 0;
            position: relative;
            color: white;
            font-family: 'Dela Gothic One', cursive;
        }

        .linkedin,
        .facebook {
            margin: 10px 10px;
            padding: 10px 10px;
            border: 2px solid blue;
            border-radius: 2px;
            width: 5vw;
        }

        .instagram {
            margin: 10px 10px;
            padding: 10px 10px;
            border: 2px solid magenta;
            border-radius: 2px;
            width: 5vw;
        }

        .formbutton button {
            border: 1px solid #FFC100;
            border-radius: 18px;
            margin: 0 50px;
            padding: 12px 35px;
            outline: none;
            columns: #50d1c0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.4;
            text-align: center;
            background: transparent;
            color: white;
            font-family: 'Dela Gothic One', cursive;
        }

        form:hover .formbutton button {
            background: #FFC100;
            color: white;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3);

        }


        @media(min-width:400px) {
            .main_div {
                max-height: 1000px;
            }
        }
    </style>
</head>

<body>
    <div class="main_div">

        <div class="navbar navbar-expand-md">

            <a href="#" class="navbar-brand font-weight-bold text-white text-center">
                <h2>BB</h2>
            </a>
            <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="collapsenavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" style="padding: 0px 4px;">
                        <a href="index.php" class="nav-link text-white "><span style="margin-left:90px;">HOME</span></a>
                    </li>
                    <li class="nav-item" style="padding: 0px 0px 0px 4px;">
                        <a href="viewcustomers.php" class="nav-link text-white ">VIEW CUSTOMER</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link text-white">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <h1 class="main_text">BASIC Bank</h1>
                    <p class="big-text">Sending so much more than money!!</p>
                </div>

                <div class="col-sm-6">

                    <img src="3.png" class="img-fluid" width="560" height="345" style="margin-top:20px; position: relative; right: 0px;">

                </div>

            </div>

        </div>

    </div>

    </div>


    <!--contact starts-->
    <section class="contactus" id="contact">
        <div class="container headings text-center">
            <h1 class="center" style="font-weight: bold;text-align: center;">CONTACT US</h1>
            <p style="padding: 15px 0px;;">Contact us at the follwing social media platforms</p>
            <p style="padding: 5px 0px;">Feel FREE to ask your QUESTIONS !! It would be a great pleasure to help you :)</p>
            <a href="https://www.linkedin.com/in/sanjay-kumhar-6138b9205/"><img class="linkedin" src="l.png" alt=""></a>
            <a href="https://www.facebook.com/sanjay.kumhar.12382/"><img class="facebook" src="f.png" alt=""></a>
            <a href="https://www.instagram.com/sanjaymkumhar196/"><img class="instagram" src="i.png" alt=""></a>
            <p style="padding: 100px 0px; font-family: cursive;"> Copyrights &copy; All Rights Reserved</p>
        </div>
    </section>
</body>

</html>