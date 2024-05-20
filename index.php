   <?php  
include "include/nav.php"
?>

<title>Home</title>
<!-- header area -->
<section id="header">
    <div class="overlay"></div>
    <div class="content">
    <h1>Photography made Easy</h1>
    <p>Creating memories for the Future</p>
    <a href="#about" class="button">Learn More</a>
    </div>
    

</section>

<section id="services" class="services">
    <h1>Our Services</h1>

    <div class="container">
        <div class="box">
            <h4>Training</h4>
            <p>Full detailed training <a href="services.php" target="_blank">readmore...</a></p>
        </div>

        <div class="box">
            <h4>Event Management</h4>
            <p>We manage your events in a way no one can <a href="services.php" target="_blank">read more...</a></p>
        </div>
        <div class="box">
            <h4>Web Development</h4>
            <p>Web designing at its peak <a href="services.php" target="_blank">read more...</a></p>
        </div>
    </div>
</section>

<section id="about" class="about">
    <div class="container">
        <div class="col1">
            <img src="image/AduTUTU.jpg" alt="">
        </div>
          
        <div class="col2">
            <h1>About Us</h1>
            <p>We create memories </p>
        </div>
    </div>
</section>

<section class="customer_review">
    <h3>What Our Customers Have to Say</h3>
    <div class="container">
        <!-- review div -->
        <div class="review">
            <!-- reveiewer div -->
            <div class="reviewer">
                <img src="image/ggr.jpeg" alt="">
                <h4>Dada Jide</h4>
            </div>
            <!-- reveiwer div ends here -->
            <p class="comment">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
        <!-- review div ends here -->
        <!-- second review div -->
        <div class="review">
            <!-- reveiwer div -->
            <div class="reviewer">
                <img src="image/ggg.jpeg" alt="">
                <h4>Ayodele Ayodeji</h4>
            </div>
            <!-- reviewer ends here -->
            <p class="comment">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
        <!-- second review div ends here -->
        <!-- third div review -->
        <div class="review">
            <!-- reviewer div -->
            <div class="reviewer">
                <img src="image/cam.jpg" alt="">
                <h4>Esan Tobi</h4>
            </div>
            <!-- reviewer ends here -->
            <p class="comment">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
        <!-- third div review ends here -->
    </div>
</section>

<!-- blog post -->
    <section class="blog_post">
        <h4>Blog/News</h4>
        <div class="container">
        <div class="post">
            <img src="image/ggr.jpeg" alt="">
            <h2>Frames are available</h2>
            <p>available in everything you want</p>
        </div>
        <div class="post">
            <img src="image/ggr.jpeg" alt="">
            <h2>Frames are available</h2>
            <p>available in everything you want</p>
        </div>
        <div class="post">
            <img src="image/ggr.jpeg" alt="">
            <h2>Frames are available</h2>
            <p>available in everything you want</p>
        </div>
        </div>
    </section>
<!-- blog post ends here -->

<section id="contact">
  <h1>Contact Us</h1>
  <div class="container">
    <div class="col1">
      <p><strong>Address:</strong> 25, college road street, Osogbo</p>
      <p><strong>Email:</strong> mayorjohn@gmail.com</p>
      <p><strong>Phone:</strong> 07069126912</p>
    </div>

    <div class="col2">
    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=25,%20college%20road%20street,%20odiolowo%20area,%20osogbo+(HB)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps systems</a></iframe></div>
    </div>

    <div class="col3">
        <h4>Contact Form</h4>
        <form action="">
            <label for="">Fullname</label> <br>
            <input type="text"> <br>
            <label for="">Email</label>
            <br>
            <input type="email">
            <br>
            <label for="">Phone</label>
            <br>
            <input type="tel">
            <br>
            <label for="">Message</label>
            <br>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <button>Submit</button>
        </form>

    </div>
  </div>
</section>


<?php 
include "include/footer.php" ?>
