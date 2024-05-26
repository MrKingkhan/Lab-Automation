<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque&family=Itim&family=Playfair+Display:ital,wght@1,600&family=Red+Hat+Display:wght@700&family=Vina+Sans&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque&family=Itim&family=Playfair+Display:ital,wght@1,600&family=Quicksand:wght@300&family=Red+Hat+Display:wght@700&family=Vina+Sans&display=swap');

    body {
        font-family: 'Red Hat Display', sans-serif;
    }

    .row1 {
        width: auto;
        height: 25vh;
        background-color: rgb(236, 231, 224);
        background-image: url('https://images.unsplash.com/photo-1524234107056-1c1f48f64ab8?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .al {
        font-family: 'Bricolage Grotesque', sans-serif;
    }

    .sl {
        font-family: 'Bricolage Grotesque', sans-serif;
    }

    .cl {
        font-family: 'Bricolage Grotesque', sans-serif;
    }

    .cr ul {
        display: flex;
        gap: 20px;
        justify-content: center;


    }

    .cr ul li {
        text-decoration: none;
        list-style: none;

    }

    .img ul{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
        list-style: none;
    }

    .btn{
        padding: 10px 10px; border-radius: 40px; background-color: #9ac100; color: white; border: none;
        transition: 0.5s;
    }

    .btn:hover{
        background-color: #e9f1c5;
        color: #9ac100;
        border: none;
    }
</style>

<body>
    <!-- <div class="container-fluid" style="width: auto;">
        <div class="row" style="width: auto; height: 30vh; background-color: #9ac100;">
            <div class="col-lg-12">
                <h1>content</h1>
            </div>
        </div>
    </div> -->

    <div class="container-fluid">

        <div class="row row1 mt-4" >

            <div class="col-lg-6 mt-2">
                <div class="first" style="text-align: center;">
                    <h3 style="color: white;">Sign up to Newsletter</h3>
                    <div class="searchbar mt-3">
                        <input type="text" placeholder="Your Email Address"
                            style="padding: 10px 10px; width: 30vw; border-radius: 40px; border: none;">
                        <button class="btn">Subscribe</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-2">
                <div class="second" style="text-align: center;">
                    <div class="follow">
                        <h3 style="color: white;">Follow Us</h3>
                    </div>
                    <div class="img mt-4">
                        <ul>
                            <li class="facebook">
                                <i class="fa fa-facebook-square" style="font-size:48px;color:#1877F2"></i>
                            </li>
                            <li class="facebook">
                                <i class="fa fa-twitter-square" style="font-size:48px;color:#1DA1F2"></i>
                            </li>
                            <li class="facebook">
                                <i class='fa fa-youtube' style='font-size:48px;color:#CD201F'></i>
                            </li>
                            <li class="facebook">
                                <i class="fa fa-instagram" style="font-size:48px;color:#fbad50"></i>
                            </li>
                            <li class="facebook">
                                <i class="fa fa-telegram" style="font-size:48px;color:#0088cc"></i>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-lg-3 mt-4" style="text-align: center;">

                <h6 style="color: #9ac100;">ABOUT STORE</h6>
                <div class="al mt-4">
                    <p>About Us</p>
                    <p>Contact Us</p>
                    <p>FAQs</p>
                    <p>Our policies</p>
                    <p>Work with us</p>
                    <p>Offices</p>
                </div>

            </div>
            <div class="col-lg-3 mt-4" style="text-align: center;">
                <h6 style="color: #9ac100;">TOP CATEGORIES</h6>
                <div class="cl mt-4">
                    <p>Fruit Products</p>
                    <p>Fresh Meats</p>
                    <p>Ocean Foods</p>
                    <p>Feature Product</p>
                    <p>New products</p>
                    <p>Sale off</p>
                </div>
            </div>
            <div class="col-lg-3 mt-4" style="text-align: center;">
                <h6 style="color: #9ac100;">OUR STORE</h6>
                <div class="sl mt-4">
                    <p>New York</p>
                    <p>Londona SF</p>
                    <p>Cockfosters BP</p>
                    <p>Los Angeles</p>
                    <p>Chicago</p>
                    <p>Las Vegas</p>
                </div>
            </div>
            <div class="col-lg-3 mt-4">
                <div class="main" style="display: flex; align-items: center; gap: 15px;">
                    <div class="call">
                        <img
                            src="https://velademo-organix.myshopify.com/cdn/shop/t/11/assets/icon-phone.png?v=4818808111040845240">

                    </div>
                    <div class="num" style="font-family: 'Bricolage Grotesque', sans-serif;">
                        <label for="">Got Question? Call us 24/7!</label>
                        <label style="color: #9ac100;">1-888-123-456-89</label>
                    </div>
                </div>

                <div class="address mt-4" style="font-family: 'Bricolage Grotesque', sans-serif;">
                    <label for="">Address: 7563 St. Vicent Place, Glasgow, Greater NewYork NH7689, UK</label>
                </div>

                <div class="mail mt-3" style="font-family: 'Bricolage Grotesque', sans-serif;">
                    <label for="">Email: contact@support.com</label>
                </div>

                <div class="sponser mt-5">
                    <img class="img-responsive paypal img-fluid" loading="lazy"
                        src="https://media.naheed.pk/wysiwyg/paymenticons-4-10-2022_v2.png" alt="Payment">
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mt-5"
            style="width: auto; height: 7vh;background-color: rgb(71, 69, 69); display: flex; justify-content: center; align-items: center;">
            <div class="col-lg-6 " style="text-align: center; font-size: 0.8rem;">
                <label style="color: aliceblue;">Copyright © 2023 <span style="color: #9ac100;">Segan</span> all rights
                    reserved.</label>
            </div>
            <div class="col-lg-6 cr" style="text-align: center; font-size: 0.8rem; margin-top: 14px;">
                <ul>
                    <li>Site Map </li>
                    <li>|</li>
                    <li>Careers </li>
                    <li>|</li>
                    <li>Privacy Policy</li>
                    <li>|</li>
                    <li>Terms of Use</li>
                </ul>
            </div>
        </div>
    </div>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>