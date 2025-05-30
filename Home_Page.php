<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seoul Infinity Bank</title>
    <link rel="icon" href="SIB logo.png">

    <style>
        body {
            background-image: url('w2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        #div_1 {
            display: flex;
            justify-content: center;
            gap: 10%;
            align-items: center;
            padding: 40px;
            margin: 0px auto;
            width: 90%;
        }

        h1 {
            color: white;
            font-family: 'Georgia';
            font-size: 70px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        #img_1 {
            max-height: 250px;
            width: auto;
        }

        #para_1 {
            background: linear-gradient(to right, rgb(87, 3, 255), rgb(0, 2, 5));
            font-size: 22px;
            color: white;
            border: 3px solid white;
            padding: 20px;
            border-radius: 10px;
            width: 70%;
            height: 140px;

            justify-content: center;
            align-items: center;
            padding: 40px;
            margin: 50px auto;
        }

        blockquote {
            margin: 5% 50px 8%;
            font-size: 40px;
            font-family: Georgia;
            color: white;
            padding: 10px;
        }

        #pic_quote {
            display: flex;
            margin-top: 10%;
            margin-bottom: 10%;
        }

        .about-us {
            background: linear-gradient(to right, rgb(87, 3, 255), rgb(0, 2, 5));
            font-size: 20px;
            color: white;
            border: 3px solid white;
            padding: 20px;
            border-radius: 20px;
            width: 60%;
            height: 80%;
            margin-bottom: 15%;
        }
    </style>

</head>
<body>

    <?php include 'Navigation_bar.php'; ?>

    <div id="div_1">
        <h1> Welcome To <br> Seoul Infinity Bank </h1>
        <img id="img_1" src="SIB logo.png" alt="Logo">
    </div>

    <p id="para_1">
        <b>Your trusted partner in smart banking.</b>
        <br><br>
        At Seoul Infinity Bank, we make banking easy and safe. Whether you’re saving, investing, or managing your money, we offer simple solutions for your financial needs. We use the latest technology to keep your money secure and help you make smart financial choices. We are here to help you achieve your financial goals with confidence. <br>
    </p>

    <div id="pic_quote">
        <blockquote>
            <b>
                Seoul Infinity Bank:<br><br>
                <q>
                    Trust, Security, and Limitless Growth
                    Come Together to Build your Financial Success.
                </q>
            </b>
        </blockquote>
        <img src="admin pic.jpg" alt="Bank" width="50%">
    </div>

    <div class="about-us">
        <h2> About Us </h2>
        <p>
            Seoul Infinity Bank is a leading financial institution based in Hankuk, Seoul, South Korea. We are committed to providing innovative, secure, and reliable banking services to our customers.<br><br>
            Our goal is to make banking simple, accessible, and safe. Whether you are an individual or a business, we offer personalized services tailored to meet your financial goals.<br><br>
            With advanced technology and a customer-first approach, we ensure that your financial needs are managed with the highest standards of trust and integrity.<br><br>
            We pride ourselves on our values of growth, security, and transparency, creating long-lasting relationships with our customers to help them succeed financially.<br><br>
            Seoul Infinity Bank is a registered entity under the laws of the Republic of Korea, and we are dedicated to building a better financial future for everyone.
        </p>
    </div>

    <?php include 'Footer.php'; ?>

</body>
</html>