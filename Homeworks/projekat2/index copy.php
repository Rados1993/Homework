<?php
if (isset($_GET["ckn-in"]) && isset($_GET["ckn-out"]) && isset($_GET["guests"])) {
    $cknin = $_GET["ckn-in"];
    $in = strtotime($cknin);
    $cknout = $_GET["ckn-out"];
    $out = strtotime($cknout);
    $guests = $_GET["guests"];
    $price = (int)(135);
    $nights = (($out - $in) / 60 / 60 / 24);
    $result = ($nights * $price);
    $book = $result * $guests;
    $totalprice = $book;

    if (isset($_GET["ckn-in"]) && isset($_GET["ckn-out"]) && isset($_GET["guests"]) && isset($_GET["checkbox-food"])) {
        $ckbfood = ($_GET["checkbox-food"]);
        $ckbfood = 30;
        $foodinc = $nights * $ckbfood;
        $totalfood = $foodinc * $guests;
        $totalprice = ($totalfood + $book);
    }
}
?>
<?php
$date = date("H");
$datenight = (int)($date);
$image1 = "./apartment-1-1.jpg";
$image2 = "./apartment-1-2.jpg";
$image3 = "./apartment-2-1.jpg";
$image4 = "./apartment-2-2.jpg";
$image5 = "./apartment-3-1.jpg";
$image6 = "./apartment-3-2.jpg";


if ($datenight < 8 && $datenight > 20) {
    $apartment1 = $image2;
} else {
    $apartment1 = $image1;
}
if ($datenight < 8 && $datenight > 20) {
    $apartment2 = $image4;
} else {
    $apartment2 = $image3;
}
if ($datenight < 8 && $datenight > 20) {
    $apartment3 = $image6;
} else {
    $apartment3 = $image5;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunrise Apartments</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <nav #navigation>
            <ul>
                <li class="left"><a href="#home" target="_self">Home</a></li>
                <li class="left"><a href="#about" target="_self">About</a></li>
                <li class="left"><a href="#contact" target="_self">Contact Us</a></li>
                <li class="rightbook"><a href="#booknow" target="_self" id="booknow">Book Now</a></li>
            </ul>
        </nav>
        <img src="./cover.png" alt="home.jpg" width="100%" height="500px" id="img-home" />
    </header>
    <div id="home">
        <div class="bgstyle">
            <h1>Welcome to Sunrise Aparments!</h1>
            <p class="style-p">Beautiful unique, spacious apartments near city centre, but surrounded by nature and
                greenery.</p>
        </div>
        <br>
        <div>
            <ul>
                <li class="btn-xy"><a href="" target="" class="btn-xy">Discover</a></li>
                <li class="btn-xy"><a href="" target="" class="btn-xy">Galery</a></li>
            </ul>
        </div>

        <h3>Congratulations! You have found the best Apartments on the best location in Kragujevac!</h3>
        <div id="booknow">
            <div>
                <h1>Apartments</h1>
                <h3>A selection of our Luxury Properties</h3>
            </div>

            <div class="inline-blocks">
                <div><img src="<?php echo $apartment1; ?>" alt="apartment-1.jpg" style="width: 70%; height: 70%;" /></div>
                <div class="scroll">
                    <h3>Apartment 1</h3>
                    <textarea class="scroller" rows="7" cols="30" style="resize: none" disabled>Large beautiful one-bedroom apartment and one bathrooms in the heart of Kragujevac with private big Jacuzzi accommodates up to 2 people. In apartment TV and a fully equipped kitchen that provides guests with a dishwasher, a microwave, a washing machine, a fridge, an oven and new furniture. With a huge terrace and magnificent city view. Pet-friendly.</textarea>
                    <ul>
                        <li class="amenities"><img src="./person-icon.png" alt="" width="15px" height="15px" /> 2</li>
                        <li class="amenities"><img src="./bath-icon.png" alt="" width="20px" height="20px" /> 1</li>
                        <li class="amenities"><img src="./bed-icon.png" alt="" width="20px" height="20px" /> 1</li>
                        <li class="amenities"><img src="./area-icon.png" alt="" width="15px" height="15px" /> Size: 36
                            m<sup>2</sup></li>
                    </ul>
                </div>
            </div>

            <div class="inline-blocks">
                <div><img src="<?php echo $apartment2; ?>" alt="apartment-2.jpg" style="width: 70%; height: 70%;" /></div>
                <div>
                    <h3>Apartment 2</h3>
                    <textarea class="scroller" rows="7" cols="30" style="resize: none" disabled>Luxury two-bedroom apartment with city view and privet jacuzzi, accommodates up to 2 people. In apartment TV and a fully equipped kitchen that provides guests with a dishwasher, a microwave, a washing machine, a fridge, an oven and new furniture. With a big veranda and BBQ. Pet-friendly.</textarea>
                    <ul>
                        <li class="amenities"><img src="./person-icon.png" alt="" width="15px" height="15px" /> 2</li>
                        <li class="amenities"><img src="./bath-icon.png" alt="" width="20px" height="20px" /> 1</li>
                        <li class="amenities"><img src="./bed-icon.png" alt="" width="20px" height="20px" /> 1</li>
                        <li class="amenities"><img src="./area-icon.png" alt="" width="15px" height="15px" /> Size: 64
                            m<sup>2</sup></li>
                    </ul>
                </div>
            </div>
            <div class="inline-blocks">
                <div><img src="<?php echo $apartment3; ?>" alt="apartment-3.jpg" style="width: 70%; height: 70%;" /></div>
                <div>
                    <h3>Apartment 3</h3>
                    <textarea class="scroller" rows="7" cols="30" style="resize: none" disabled>Cozy two-bedroom apartment with sea view, accommodates up to 3 people. In apartment TV and a fully equipped kitchen that provides guests with a dishwasher, a microwave, a washing machine, a fridge, an oven and new furniture. Perfect choice for holydays. Pet-friendly.</textarea>
                    <ul>
                        <li class="amenities"><img src="./person-icon.png" alt="" width="15px" height="15px" /> 3</li>
                        <li class="amenities"><img src="./bath-icon.png" alt="" width="20px" height="20px" /> 2</li>
                        <li class="amenities"><img src="./bed-icon.png" alt="" width="20px" height="20px" /> 2</li>
                        <li class="amenities"><img src="./area-icon.png" alt="" width="15px" height="15px" /> Size: 78
                            m<sup>2</sup></li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <form action="" method="get">
                <input type="date" name="ckn-in" id="ckn-in" />
                <input type="date" name="ckn-out" id="ckn-out" />
                <select name="guests" id="guests">
                    <option value="Guests" selected hidden invisible>Guests</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select><br>
                <input type="checkbox" name="checkbox-food" id="checkbox-food" />
                <label for="checkbox-food" class="ckbx-left">$30/day <span class="food">food
                        included</span></label><br>
                <input type="submit" value="Calculate price" id="btn-calculate" />
            </form>
            <?php if (isset($totalprice)) {
                echo "Total price is $totalprice $ . Enjoy and relax in our apartment!";
            } ?>
        </div>
        <div>
            <p>The best price is on our site!</p>
            <span>$135/night</span>
        </div>
        <hr>
        <h4>
            <a href=" https://booking.com/" target="_blank">BOOKING.COM </a> <b>|</b> TRAVELLER REVIEW AWARDS 2021 -
            Sunrise Apartments <span>9.8<b> out of 10</b> </span>
        </h4>

    </div>
    <div id="about">
        <div class="aboutinline">
            <h2>About us</h2>
            <p class="style-p2">Enjoy Your Stay In Our Apartments</p>
        </div>
        <div class="aboutinline">
            <p>We are a leading apartments rental company in Kragujevac serving as a true host and best partner for
                guests. We offer 3 properties that meet the exceptional expectations of our guests, based on our
                experience.</p>
        </div>
        <div class="aboutinline">
            <p>We provide exceptional service to all our guests and strive to provide a hospitality that exceeds guest’s
                expectations. We are always open to new offers and are ready to help you. Come visit us and let the
                genuine service and attentiveness of the team embrace you.
            </p>
        </div>
    </div>

    <div id="contact">
        <div>
            <h1>Contact Us</h1>
            <p>We would love to hear from you!</p>
            <p>Email: something@sunrise.com | Tel: +381 012345678</p>
        </div>
        <div>
            <form action="" method="get">
                <label for="firstname">First Name*</label><br>
                <input type="text" name="firstname" id="firstname" placeholder="Enter your first name" required /><br>
                <label for="lastname">Last Name*</label><br>
                <input type="text" name="lastname" id="lastname" placeholder="Enter your last name" required /><br>
                <label for="subject">Subject*</label><br>
                <input type="text" name="subject" id="subject" placeholder="Give a title to your request" required /><br>
                <label for="message">Message*</label><br>
                <textarea name="message" id="message" cols="80" rows="10" placeholder="Type your message" required style="resize: none;"></textarea><br>
                <input type="checkbox" name="checkbox" id="checkbox" required />
                <label for="checkbox" class="ckbx-left">I agree to the privacy policy and consent to my data beeing used
                    to
                    contact
                    me.*</label><br>
                <input type="submit" value="Send!" class="btn-send" /><br>
            </form>
        </div>
    </div>
    <footer>
        <div class="inlinefooter">
            <ul>
                <li><a href="#home" target="_self">Home</a></li>
                <li><a href="#about" target="_self">About</a></li>
                <li><a href="#contact" target="_self">Contact Us</a></li>
                <li><a href="#booknow" target="_self">Book Now</a></li>
            </ul>
        </div>
        <div class="inlinefooter">
            <p>Copyright by <b>IT Bootcamp</b> <span><sup>&#169;</sup></span> students</p>
        </div>
    </footer>
</body>

</html>