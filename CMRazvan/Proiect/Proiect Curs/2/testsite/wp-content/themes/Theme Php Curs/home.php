<?php
/*
Template name: Home
 */
get_header();
$home = new classes\Home();
$a=1;
?>

<body>
<!-- Begin Wrapper -->
<div id="wrapper">
    <div class="wrapper-top"></div>
    <div class="wrapper-mid">
        <!-- Begin Paper -->
        <div id="paper">
            <div class="paper-top" style="background: url('<?php print get_template_directory_uri();?>/images/ptop.jpg') no-repeat;"></div>
            <div id="paper-mid">
                <div class="entry">
                    <!-- Begin Image -->
                    <img class="portrait" src="<?php print get_template_directory_uri();?>/images/image.jpg" alt="John Smith" />
                    <!-- End Image -->
                    <!-- Begin Personal Information -->
                    <div class="self">
                        <h1 class="name"><?php bloginfo('name');?> <br />
                            <span><?php bloginfo('description');?></span></h1>
                        <ul>
                            <li class="ad">111 Lorem Street, 34785, Ipsum City</li>
                            <li class="mail">johnsmith@business.com</li>
                            <li class="tel">+11 444 555 22 33</li>
                            <li class="web">www.businessweb.com</li>
                        </ul>
                    </div>
                    <!-- End Personal Information -->
                    <!-- Begin Social -->
                    <div class="social">
                        <ul>
                            <li><a class='north' href="#" title="Download .pdf"><img src="<?php print get_template_directory_uri();?>/images/icn-save.jpg" alt="Download the pdf version" /></a></li>
                            <li><a class='north' href="javascript:window.print()" title="Print"><img src="<?php print get_template_directory_uri();?>/images/icn-print.jpg" alt="" /></a></li>
                            <li><a class='north' id="contact" href="contact/index.html" title="Contact Me"><img src="<?php print get_template_directory_uri();?>/images/icn-contact.jpg" alt="" /></a></li>
                            <li><a class='north' href="#" title="Follow me on Twitter"><img src="<?php print get_template_directory_uri();?>/images/icn-twitter.jpg" alt="" /></a></li>
                            <li><a class='north' href="#" title="My Facebook Profile"><img src="<?php print get_template_directory_uri();?>/images/icn-facebook.jpg" alt="" /></a></li>
                        </ul>
                    </div>
                    <!-- End Social -->
                </div>
                <!-- Begin 1st Row -->
                <div class="entry">
                    <h2>OBJECTIVE</h2>
                    <p><?php print $home->content;?></p>
                </div>
                <!-- End 1st Row -->
                <!-- Begin 2nd Row -->
                <div class="entry">

                    <h2>EDUCATION</h2>
                    <?php foreach($home->education as $education) { ?>
                        <div class="content">
                            <h3><?php print $education['start'];?> - <?php print $education['end'];?></h3>
                            <p><?php print $education['location'];?> <br />
                                <em><?php print $education['degree'];?></em></p>
                        </div>
                    <?php } ?>
                </div>
                <!-- End 2nd Row -->
                <!-- Begin 3rd Row -->
                <div class="entry">
                    <h2>EXPERIENCE</h2>
                    <?php foreach($home->experience as $experience) { ?>
                        <div class="content">
                            <h3><?php print $experience['start'];?> - <?php print $experience['end'];?></h3>
                            <p><?php print $experience['employer'];?>, <?php print $experience['city'];?> <br />
                                <em><?php print $experience['position'];?></em></p>
                            <ul class="info">
                                <?php print $experience['description'];?>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
                <!-- End 3rd Row -->
                <!-- Begin 4th Row -->
                <div class="entry">
                    <h2>SKILLS</h2>
                    <?php foreach($home->skills as $skill) { ?>
                        <div class="content">
                            <h3><?php print $skill['name'];?></h3>
                            <ul class="skills">
                                <?php foreach($skill['list'] as $list) { ?>
                                    <li><?php print $list;?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
                <!-- End 4th Row -->
                <!-- Begin 5th Row -->
                <div class="entry">
                    <h2>WORKS</h2>
                    <ul class="works">
                        <li><a href="<?php print get_template_directory_uri();?>/images/1.jpg" class="gallery cboxElement" title="Lorem ipsum dolor sit amet."><img src="<?php print get_template_directory_uri();?>/images/image.jpg" alt="" /></a></li>
                        <li><a href="<?php print get_template_directory_uri();?>/images/2.jpg" class="gallery cboxElement" title="Lorem ipsum dolor sit amet."><img src="<?php print get_template_directory_uri();?>/images/image.jpg" alt="" /></a></li>
                        <li><a href="<?php print get_template_directory_uri();?>/images/3.jpg" class="gallery cboxElement" title="Lorem ipsum dolor sit amet."><img src="<?php print get_template_directory_uri();?>/images/image.jpg" alt="" /></a></li>
                        <li><a href="<?php print get_template_directory_uri();?>/images/1.jpg" class="gallery cboxElement" title="Lorem ipsum dolor sit amet."><img src="<?php print get_template_directory_uri();?>/images/image.jpg" alt="" /></a></li>
                        <li><a href="<?php print get_template_directory_uri();?>/images/2.jpg" class="gallery cboxElement" title="Lorem ipsum dolor sit amet."><img src="<?php print get_template_directory_uri();?>/images/image.jpg" alt="" /></a></li>
                        <li><a href="<?php print get_template_directory_uri();?>/images/3.jpg" class="gallery cboxElement" title="Lorem ipsum dolor sit amet."><img src="<?php print get_template_directory_uri();?>/images/image.jpg" alt="" /></a></li>
                        <li><a href="<?php print get_template_directory_uri();?>/images/1.jpg" class="gallery cboxElement" title="Lorem ipsum dolor sit amet."><img src="<?php print get_template_directory_uri();?>/images/image.jpg" alt="" /></a></li>
                        <li><a href="<?php print get_template_directory_uri();?>/images/1.jpg" class="gallery cboxElement" title="Lorem ipsum dolor sit amet."><img src="<?php print get_template_directory_uri();?>/images/image.jpg" alt="" /></a></li>
                    </ul>
                </div>
                <!-- Begin 5th Row -->
            </div>
            <div class="clear"></div>
            <div class="paper-bottom"></div>
        </div>
        <!-- End Paper -->
    </div>
    <div class="wrapper-bottom"></div>
</div>
<div id="message"><a href="#top" id="top-link">Go to Top</a></div>
<!-- End Wrapper -->
</body>
<? get_footer();?>

