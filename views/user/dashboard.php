<?php $this->title = 'Dashboard'; ?>

<div id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="/user/dashboard" class="pull-right"><img class="profile" src="/images/dashboard/my_photo_placeholder.jpg" alt="" /></a>
            </div>
            <div class="col-md-6">
                <div class="callout" id="user">
                    <div class="callout-wrapper">
                        <h2 class="user-name"><a href="/user/dashboard"><?= $user->username; ?></a></h2>
                        <p class="user-info">Last signed in 5 days ago</p>

                        <div class="row">
                            <div class="user-options col-md-4">
                                <h3>my profile</h3>
                                <ul>
                                    <li><a href="edit_profile.html">Edit Profile</a></li>
                                    <li><a href="#">Messages</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                </ul>
                            </div>
                            <div class="user-options col-md-4">
                                <h3>my friends</h3>
                                <ul>
                                    <li><a href="#">Invite a Friend</a></li>
                                    <li><a href="#">Accept an Invite</a></li>
                                    <li><a href="friends.html">Manage Friends</a></li>
                                </ul>
                            </div>
                            <div class="user-options col-md-4">
                                <h3>my events</h3>
                                <ul>
                                    <li><a href="edit_events.html">Edit Events</a></li>
                                    <li><a href="schedule_event.html">Schedule Event</a></li>
                                    <li><a href="browse_events.html">Browse Events</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="section">
                    <?= $this->render('_calendar', ['user' => $user]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="secondary">
    <div class="container">
        <div class="col-md-3"><!-- id="column-tertiary" -->
            <?= $this->render('_profile-summary', ['profile' => $user->profile]); ?>
        </div>
        <div id="column-main" class="col-md-6">
            <p>Showing (<?= count($user->friends); ?>) friends. <a href="#">Show all?</a></p>
            <?php foreach($user->friends as $friend): ?>
                <div class="friend col-md-4">
                    <a href="#"><img src="/images/dashboard/friend_placeholder.jpg" alt="" class="center-block"/></a>
                    <div class="username"><a href="#"><?= $friend->username; ?></a></div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="col-md-3"><!-- id="column-secondary" -->
            <div class="block">
                <div class="block-wrapper">
                    <h3>upcoming events</h3>
                        <div class="event">
                            <h4>OCT 20</h4>
                            <h5><a href="#">At Vero eos et Accusamus et</a></h5>
                        </div>
                        <div class="event">
                            <h4>OCT 29</h4>
                            <h5><a href="#">Lusto Odio Dignissimos Ducimus</a></h5>
                        </div>
                        <div class="event">
                            <h4>NOV 02</h4>
                            <h5><a href="#">Dui Blanditiis Nam Libero</a></h5>
                        </div>
                        <div class="event">
                            <h4>NOV 02</h4>
                            <h5><a href="#">Tempore, eras Soluta Nobis</a></h5>
                        </div>
                </div>
            </div>
            <div class="block">
                <div class="block-wrapper">
                    <h3>latest queer news</h3>
                    <ul>
                        <li><a href="#">At Vero eos et Accusamus et Lusto Odio Dignissimos Ducimus Dui Blanditiis</a></li>
                        <li><a href="#">Nam Libero Tempore, eras Soluta Nobis est Eligendi Optio que Nihil Impedit Que</a></li>
                        <li><a href="#">Neque Porro Quisquam est, Qui Dolorem Ipsum Quia Dolor sit Amet, Consectetur, Adipisci Velit, sed Quia non Numquam Eius</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>