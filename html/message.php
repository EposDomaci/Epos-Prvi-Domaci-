<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact| SportLine™ </title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="../css/style4.css">

</head>

<body>
    <script src="../js/script4.js"></script>
    <div class="navbar">
        <a href="#" class="logo"><img src="../slike-videi/LOGO2.png" alt=""></a>
        <ul class="nav">
            <li> <a href="#">Home</a></li>
            <li> <a href="#about">About</a></li>
            <li> <a href="#ourCollection">Our collection</a> </li>
            <li> <a href="#contact">Contact Us</a></li>
            <li> <a href="#faq">FAQ</a></li>
        </ul>
    </div>

    <div class="top_image">

    </div>

    <div class="row">
        <div id="clm">
            <img src="../slike-videi/27b9bf7ead19bb83d7d86d3d3de943bd.gif" alt="first" width="200" height="auto">
        </div>
        <div id="clm">
            <img src="../slike-videi/27b9bf7ead19bb83d7d86d3d3de943bd.gif" alt="first" width="200" height="auto">
        </div>
        <div id="clm">
            <img src="../slike-videi/27b9bf7ead19bb83d7d86d3d3de943bd.gif" alt="first" width="200" height="auto">
        </div>
        <div id="clm">
            <img src="../slike-videi/27b9bf7ead19bb83d7d86d3d3de943bd.gif" alt="second" width="200" height="auto">
        </div>
    </div>


    <div class="description">
        <h2>LET'S TALK. BUT YOU FIRST.</h2>
        <p>Need something? The <b><i>SportLiners</i></b> are here to help! <br>
            Please first check out our FAQ session where you can find answers to most common questions. <br>
            Still didn't find what you were looking for? <br>
            Then feel free to ask us anything and we will be sure to get back to you as soon as possible. <br>
        </p>
    </div>
    <div class="form">
        <form id=registration_form action="message.php" method="post">
            <div class="customer_information">
                <h3>Please fill the following form:</h3>


                <label for="name">First Name *:</label>
                <input type="text" name="name" size="40" maxlength="50" id="name" placeholder=" Your name.."> <br>
                <label for="email">Email *:</label>
                <input type="text" name="email" size="40" maxlength="50" id="email" placeholder=" Your email.."> <br>
                <label for="phone">Mobile Phone:</label>
                <input type="text" name="phone" size="40" maxlength="50" id="phone" placeholder=" Your mobile phone..">
                <br>
                <div class="continent_selection">
                    <label for="continent">I am buying from *:</label>
                    <select id="continent" name="continent">
                        <option value="australia">Australia</option>
                        <option value="north_america">North America</option>
                        <option value="south_america">South America</option>
                        <option value="europe">Europe</option>
                        <option value="asia">Asia</option>
                    </select>
                </div>
                <label for="message">Message *:</label>
                <textarea name="Message" rows="6" cols="45" id="message" placeholder="Your message.."
                    style="height:250px"></textarea> <br>
            </div>
            <br>
            <p id="sex">Sex *:</p>
            <div class="gender_selection">

                <input type="radio" name="gender" value="male"> Male<br>
                <input type="radio" name="gender" value="female"> Female<br>
                <input type="radio" name="gender" value="other"> Other<br>
            </div>
            <br>
            <div class="submit_reset">
                <input type="submit" value="Send the message">
                <input type="reset" value="Clear this form">
            </div>
        </form>
    </div>



</body>



</html>