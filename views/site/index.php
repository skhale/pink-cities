<?php $this->title = 'Home'; ?>

<div id="main">
    <div class="container">
        <div id="campaign">
            <div class="col-md-5 col-sm-7 hidden-xs">
                <img class="pull-right" src="images/home/campaign/placeholder1.jpg" alt="social networking" /><!--  class="banner" -->
            </div>
            <div class="col-md-3 col-sm-5 hidden-xs">
                <img class="center-block" src="images/home/campaign/placeholder2.jpg" alt="with a twist" /><!--  class="banner" -->
            </div>
            <div class="callout col-md-4 col-sm-12 col-xs-12"><!--  class="callout" -->
                <div class="callout-wrapper clearfix">
                    <h1>pink puts GLBT people together online and in the real world!</h1>
                    <p>Have you ever wondered where all the people like us are?</p>
                    <p>They are on pink!</p>
                    <a href="register.html" id="join"><span>Join now</span></a>                     
                </div>
            </div>
        </div>

        <div id="testimonials">
            <?php foreach($testimonials as $testimonial): ?>
                <div class="col-md-4 col-xs-12">
                    <a href="#"><img src="images/home/testimonials/placeholder.jpg" alt=""/></a>
                    <blockquote>"<?= $testimonial->content; ?>"</blockquote>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>

<div id="secondary">
    <div id="secondary-wrapper" class="container">
        <div class="section col-md-4">
            <h2>my pink city</h2>
            <ul>
                <li><a href="#">Manage Your Friends List</a></li>
                <li><a href="/user/dashboard">Your Dashboard</a></li>
                <li><a href="#">Message People</a></li>
                <li><a href="#">Pinkie Profiles</a></li>
            </ul>
        </div>
        <div class="section col-md-4">
            <h2>my friends</h2>
            <ul>
                <li><a href="#">Invite New Friends</a></li>
                <li><a href="#">See Profiles</a></li>
                <li><a href="#">Set Up Events</a></li>
                <li><a href="#">Send Invitations</a></li>
            </ul>
        </div>
        <div class="section col-md-4">
            <h2>about pink</h2>
            <ul>
                <li><a href="faq.html">FAQs</a></li>
                <li><a href="faq.html#howDoISignUp">How to Join</a></li>
                <li><a href="inMyCity.html">In My Pink City</a></li>
                <li><a href="philosophy.html">Company Philosophy</a></li>
            </ul>
        </div>
    </div>
</div>