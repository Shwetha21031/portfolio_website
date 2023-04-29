<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
      $message[] = 'have a lovely day';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Personal Portfolio </title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#portfolio">Projects</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="https://www.linkedin.com/in/shwetha-a-a37b84256/" class="fab fa-linkedin"></a>
      <a href="https://github.com/Shwetha21031" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
   <img src="images\my-img.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am Shwetha </h3>
      <span data-aos="fade-up">web designer & developer</span>
      <p data-aos="fade-up" id="about" ><b>A highly creative Web Developer. Proven skills in HTML, CSS, and Adobe Creative Suite. Ability to work independently and collaborate effectively with a team.Excellent written and verbal communication skills. seeking an entry-level position in web design.Experienced in handling multiple projects simultaneously and meeting tight deadlines. Seeking an opportunity to use my skills and knowledge to contribute to the company’s success.</b></p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Hello People!!!</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Shwetha A </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> Shwetha21031@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Banglore, india </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +91 7829803042 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 22 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> Fresher </h3>
      </div>

      <a href="Final_resume.pdf" class="btn" data-aos="fade-up" download>download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Java</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>SQL</span> <span>90%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Python</span><span>75%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education and experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2019 - 2023 )</span>
               <h3>Engineering</h3>
               <p>BE(Computer Science),KNS Institute of Technology, yelahanka,VTU - Affiliated (8.1 GPA)</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2017 - 2019 )</span>
               <h3>PCMB</h3>
               <p>SSMRVPU college, Banglore, KSEEB (7 GPA)</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( -2017 )</span>
               <h3>High School</h3>
               <p>KNPS, Banglore, State Board (9.2 GPA)</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( May 2022 - August 2022 )</span>
               <h3>Junior Web developer</h3>
               <p>(Internship), Manac Infotech</p>
               <p>Designed effective interfaces technologies, frameworks and libraries such as HTML, CSS and XML.Completed design projects to meet budget, equipment, performance and legal requirements.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>Start Up</span>
               <h3>Event Management</h3>
               <p>Make Memories Event Management .Hired, trained and supervised volunteers and support staff required for events.Negotiated with vendors to achieve most favorable terms.</p>
            </div>

           
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>web development</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>graphic design</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-bootstrap"></i>
         <h3>bootstrap</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-chart-line"></i>
         <h3>seo marketing</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-bullhorn"></i>
         <h3>digital marketing</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-wordpress"></i>
         <h3>wordpress</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->
 
<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>Mini Projectsss</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         
         <?php echo '<a href="animated_bg\animated_bg.html"><img src="images\a_bg.png" alt=""></a>';?> 
         <h3>Animated background</h3>
         <span>( HTML , Css )</span>
      </div>

      <div class="box" data-aos="zoom-in">
      <?php echo '<a href="Photogallery\pg.html"><img src="images\photo_gallery - Copy.jpg" alt=""></a>';?>
         <h3>Photo gallery of meoww's</h3>
         <span>( Html , Css )</span>
      </div>

      <div class="box" data-aos="zoom-in">
      <?php echo '<a href="404 Page Animation\index.html"><img src="images\404page.jpg" alt=""></a>';?>
         <h3>If the page doesn't load</h3>
         <span> ( HTML , Css ) </span>
      </div>

      <div class="box" data-aos="zoom-in">
      <?php echo '<a href="survey_form\survey_index.html"><img src="images\surveyform.jpg" alt=""></a>';?>
         <h3>Survey form</h3>
         <span>( HTML , Css )</span>
      </div>

      <div class="box" data-aos="zoom-in">
      <?php echo '<a href="Pineapple Animation\index.html"><img src="images\pineapple.jpg" alt=""></a>';?>
         <h3>Happy pineapple animation</h3>
         <span>( HTML , Css )</span>
      </div>

      <div class="box" data-aos="zoom-in">
      <?php echo '<a href="Random_Quote_Generator.html"><img src="images\r_q_g.jpg" alt=""></a>';?>
         <h3>Randome Quote Generator</h3>
         <span>( HTML , Css , Js )</span>
      </div>

      

   </div>

</section> 

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+91 7829803042</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>Shwetha21031@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Banglore, india - 560019</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Shwetha </span> </div>












<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>