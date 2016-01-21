<?php
/*
Template name: CV Page
 */
get_header();
?>

<!-- Begin Wrapper -->
<div id="wrapper">
    <div class="wrapper-top"></div>
    <div class="wrapper-mid">
        <!-- Begin Paper -->
        <div id="paper">
            <div class="paper-top"></div>
            <div id="paper-mid">
                <div class="entry">
                    <!-- Begin Image -->
                    <img class="portrait" src="<?php echo get_template_directory_uri(); ?>/images/image.jpg" alt="John Smith" />
                    <!-- End Image -->
                    <!-- Begin Personal Information -->
                    <div class="self">
                        <!-- @TODO print all options below -->
                        <h1 class="name"><?php print get_option('cv-nume'); ?><br />
                            <span>Interactive Designer</span></h1>
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
                            <li><a class='north' href="#" title="Download .pdf"><img src="<?php echo get_template_directory_uri(); ?>/images/icn-save.jpg" alt="Download the pdf version" /></a></li>
                            <li><a class='north' href="javascript:window.print()" title="Print"><img src="<?php echo get_template_directory_uri(); ?>/images/icn-print.jpg" alt="" /></a></li>
                            <li><a class='north' id="contact" href="contact/index.html" title="Contact Me"><img src="<?php echo get_template_directory_uri(); ?>/images/icn-contact.jpg" alt="" /></a></li>
                            <li><a class='north' href="#" title="Follow me on Twitter"><img src="<?php echo get_template_directory_uri(); ?>/images/icn-twitter.jpg" alt="" /></a></li>
                            <li><a class='north' href="#" title="My Facebook Profile"><img src="<?php echo get_template_directory_uri(); ?>/images/icn-facebook.jpg" alt="" /></a></li>
                        </ul>
                    </div>
                    <!-- End Social -->
                </div>
                <!-- Begin 1st Row -->
                <?php if (get_option('objective') != '') { ?>
                <div class="entry">
                    <h2>OBJECTIVE</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim viverra nibh sed varius. Proin bibendum nunc in sem ultrices posuere. Aliquam ut aliquam lacus.</p>
                </div>
                <?php } ?>
                <!-- End 1st Row -->
                <!-- Begin 2nd Row -->
                <div class="entry">
                    <h2>EDUCATION</h2>
                    <?php
                    $args = array(
                        'post_type' => 'education',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'caller_get_posts' => 1
                    );

                    $query = new WP_Query($args);
                    foreach ($query->posts as $post) {
                        // Get the post meta INSTITUTION for the post with the current ID
                        $institution = get_post_meta($post->ID, 'wpcf-institution', true);
                        $interval = get_post_meta($post->ID, 'wpcf-interval', true);
                        $degree = get_post_meta($post->ID, 'wpcf-degree', true);
                        ?>
                        <div class="content">
                            <h3><?php print $interval; ?></h3>
                            <p><?php print $institution; ?> <br />
                                <em><?php print $degree; ?></em></p>
                        </div>

                    <?php
                    }
                    ?>


                </div>
                <!-- End 2nd Row -->
                <!-- Begin 3rd Row -->
                <div class="entry">
                    <h2>EXPERIENCE</h2>
                    <?php
                    $args = array(
                        'post_type' => 'experience',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'caller_get_posts' => 1
                    );

                    $query = new WP_Query($args);
                    foreach ($query->posts as $post) {
                        // Get the post meta INSTITUTION for the post with the current ID
                        $institution = get_post_meta($post->ID, 'wpcf-institution', true);
                        $interval = get_post_meta($post->ID, 'wpcf-interval', true);
                        $degree = get_post_meta($post->ID, 'wpcf-degree', true);
                        ?>
                        <div class="content">
                            <h3><?php print $interval; ?></h3>
                            <p><?php print $institution; ?> <br />
                                <em><?php print $degree; ?></em></p>
                        </div>

                        <?php
                    }
                    ?>

                </div>
                <!-- End 3rd Row -->
                <!-- Begin 4th Row -->
                <div class="entry">
                    <h2>SKILLS</h2>
                    <div class="content">
                        <h3>Software Knowledge</h3>
                        <ul class="skills">
                            <li>Photoshop</li>
                            <li>Illustrator</li>
                            <li>InDesign</li>
                            <li>Flash</li>
                            <li>Fireworks</li>
                            <li>Dreamweaver</li>
                            <li>After Effects</li>
                            <li>Cinema 4D</li>
                            <li>Maya</li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Languages</h3>
                        <ul class="skills">
                            <li>CSS/XHTML</li>
                            <li>PHP</li>
                            <li>JavaScript</li>
                            <li>Ruby on Rails</li>
                            <li>ActionScript</li>
                            <li>C#</li>
                        </ul>
                    </div>
                </div>
                <!-- End 4th Row -->
                <!-- Begin 5th Row -->
                <div class="entry">
                    <h2>WORKS</h2>
                    <ul class="works">
                        <li><a href="<?php echo get_template_directory_uri(); ?>/images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="<?php echo get_template_directory_uri(); ?>/images/image.jpg" alt="" /></a></li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/images/2.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="<?php echo get_template_directory_uri(); ?>/images/image.jpg" alt="" /></a></li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/images/3.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="<?php echo get_template_directory_uri(); ?>/images/image.jpg" alt="" /></a></li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="<?php echo get_template_directory_uri(); ?>/images/image.jpg" alt="" /></a></li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/images/2.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="<?php echo get_template_directory_uri(); ?>/images/image.jpg" alt="" /></a></li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/images/3.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="<?php echo get_template_directory_uri(); ?>/images/image.jpg" alt="" /></a></li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="<?php echo get_template_directory_uri(); ?>/images/image.jpg" alt="" /></a></li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="<?php echo get_template_directory_uri(); ?>/images/image.jpg" alt="" /></a></li>
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

<?php
get_footer();
?>
