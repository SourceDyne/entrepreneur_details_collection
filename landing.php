<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enter Details</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body class="container-fluid">
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="index.html">
        Entrepreneur Community
    </a>
</nav>
<?php
/**
 * Created by PhpStorm.
 * User: aravi
 * Date: 23-10-2018
 * Time: 23:19
 */
$mysqli=new mysqli("localhost","root","","Entrepreneur_Details");
if($mysqli->connect_errno){
    echo "MySql Error<br>";
    die("Couldn't Connect");
}
if(isset($_POST['signup'])){
    $email=$mysqli->real_escape_string($_POST['email']);
    $pass1=$mysqli->real_escape_string($_POST['pass1']);
    $pass2=$mysqli->real_escape_string($_POST['pass2']);
    if($email==="")
        die("<h1 class='bg-danger'>email cannot be empty</h1>");
    if($pass1==="")
        die("<h1 class='bg-danger'>pass cannot be empty</h1>");
    if($pass1!==$pass2)
        die("<h1 class='bg-danger'>Password mismatch</h1>");
    ?>
    <div class="row" style="margin-top: 5%;">
        <div class="col-4 offset-4">
            <form action="#" method="post">
                <input type="hidden" name="email" value="<?php echo $email;?>">
                <input type="hidden" name="pass" value="<?php echo md5($pass1);?>">
                <h3>Fill the following details.</h3>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="defaultCheck1" name="n1" onclick="togl(1)">
                    <label class="form-check-label" for="defaultCheck1">
                        Application Developer
                    </label>
                    <p id="1">
                        New applications are launched on a daily basis and if you believe you have the skills to create your own and a unique enough idea, you should do it! Aside from the fact that you will have to invest little to no money to get started, it is far less time consuming than the average 9 to 5. Once you have created your application, couple it with the right marketing strategy and you'll be making money in your sleep. The best part about developing applications is that you can do it from anywhere in the world.
                    </p>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  id="defaultCheck2" name="n2" onclick="togl(2)">
                    <label class="form-check-label" for="defaultCheck2">
                        Website Developer
                    </label>
                    <p  id="2">
                        We live in a digital world where every business needs a website to drive their traffic to in order to make sales. If you have the skills, you could enter an industry that will never die. You can also start small by creating websites on platforms such as Wordpress. If you want to take your web-building skills to the next level, you can learn the language of website creation through Codecademy.com, where you will be able to learn how to incorporate personalized:
                        Shopping carts
                        Product pages
                        Galleries
                        Blogs
                        Services pages
                        Feedback forms
                    </p>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  id="defaultCheck3" name="n3" onclick="togl(3)">
                    <label class="form-check-label" for="defaultCheck3">
                        Blogger or Vlogger
                    </label>
                    <p  id="3">
                        Are you an expert in a specific field? From travel, fashion, cooking, to DIY, and removal services, if you know how to do something particularly well, why not tell the world through a blog or vlog? All you will need is a computer and a good quality camera. You can make money by offering advertising space and reviews of products on your platform.
                    </p>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  id="defaultCheck4" name="n4" onclick="togl(4)">
                    <label class="form-check-label" for="defaultCheck4">
                        Translator
                    </label>
                    <p  id="4">
                        Translating is one of the easiest and most profitable industries to delve into if you are proficient in more than one language. Sought out on a global scale, translators do not need any capital to get started and can earn a salary of $40,000 a year (minimum) depending on the size of the company you are hired by and the length of the contract they offer.
                    </p>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  id="defaultCheck5" name="n5" onclick="togl(5)">
                    <label class="form-check-label" for="defaultCheck5">
                        Financial Adviser
                    </label>
                    <p  id="5">
                        Although the number of people wanting to start their own business has grown, many still do not know how to organize themselves financially. Start by getting your Certified Financial Planner (CFP) certificate to show clients you are credible. On the other hand, if you already have the experience, you can start by advising individuals and then grow your empire to consult for larger organizations.
                    </p>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  id="defaultCheck6" name="n6" onclick="togl(6)">
                    <label class="form-check-label" for="defaultCheck6">
                        Online Photo Selling
                    </label>
                    <p  id="6">
                        If you are a professional photographer or just have a deep-rooted passion for it, you can make money from your pictures on photo selling websites. All you need to get started is a camera, preferably a digital SLR with a minimum of 8 megapixels, and a computer. Once you have established yourself on websites such as GettyImages.com and Flickr.com, you can setup your own website with a list of your watermarked images and their price per unit.
                    </p>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  id="defaultCheck7" name="n7" onclick="togl(7)">
                    <label class="form-check-label" for="defaultCheck7">
                        Ecommerce Store
                    </label>
                    <p  id="7">
                        If you have a great product, but no money to invest in a physical storefront, staff, and bills, why not set yourself up online? Aside from the lack of huge monetary investment and time commitment, the marketing opportunities online are endless. Also, although a storefront is great for branding purposes, it does limit the size and scope of your audience. By setting yourself up with an e-commerce store, you can:
                        Sell to anyone in the world
                        Have a store that is open 24/7 (meaning you literally make money in your sleep)
                        Run promotions easily, whenever you want
                        Cross-sell between your marketing and social media platforms and your website
                        Run marketing campaigns through Google and other platforms
                    </p>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  id="defaultCheck8" name="n8" onclick="togl(8)">
                    <label class="form-check-label" for="defaultCheck8">
                        Event and Project Planning
                    </label>
                    <p  id="8">
                        Event and project planning can be done remotely, but having a hands-on approach and offering your services in your local area will be more beneficial to you from both a quality control and monetary point of view. You can start this business from the comforts of your home and meet with clients in restaurants, cafes, or at their office or home.
                    </p>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  id="defaultCheck9" name="n9" onclick="togl(9)">
                    <label class="form-check-label" for="defaultCheck9">
                        Personal Concierge
                    </label>
                    <p  id="9">
                        You are probably thinking that being the concierge to the executive of a big company will be a piece of cake, think twice. Although you will make good money being someone's personal concierge, it is a very challenging job in which you will be expected to deliver what has been asked of you, on time, with a smile. That said, you will normally be paid very handsomely for your services.
                    </p>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="response">Submit</button>
            </form>
        </div>
    </div>
    <script>
        let a=[false,false,false,false,false,false,false,false,false];
        // for (i=1;i<10;i++)
        //     a[i]=false;

        $("#1").hide();
        $("#2").hide();
        $("#3").hide();
        $("#4").hide();
        $("#5").hide();
        $("#6").hide();
        $("#7").hide();
        $("#8").hide();
        $("#9").hide();

        function togl(id) {
            if(a[id]){
                $("#"+id.toString()).hide();
                a[id]= !a[id];
            }else {
                $("#"+id.toString()).show();
                a[id]= !a[id];
            }
        }


    </script>
    <?php
}else{
    echo "<p class='text-center'>Go to sign up page <a href='index.html' class='btn btn-outline-primary'>Click me</a></p>";
}
if(isset($_POST["response"])){
    $email=$_POST["email"];
    $pass=$_POST['pass'];
    $details="";
    if(isset($_POST["n1"]))$details.="1-";
    if(isset($_POST["n2"]))$details.="2-";
    if(isset($_POST["n3"]))$details.="3-";
    if(isset($_POST["n4"]))$details.="4-";
    if(isset($_POST["n5"]))$details.="5-";
    if(isset($_POST["n6"]))$details.="6-";
    if(isset($_POST["n7"]))$details.="7-";
    if(isset($_POST["n8"]))$details.="8-";
    if(isset($_POST["n9"]))$details.="9-";
    $details=substr($details,0,-1);

    $query="INSERT INTO `submissions` (`id`, `email`, `pass`, `details`) VALUES (NULL, '$email', '$pass', '$details')";
    $res=$mysqli->query($query);
    if($res){
        echo "<h1 class='bg-success'>Submission Successful.</h1>";
    }else{
        echo "<h1 class='bg-danger'>Submission Error.</h1>";
    }
}

?>
</body>
</html>
