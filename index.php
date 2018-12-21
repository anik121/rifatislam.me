<?php
/*
 * @package mixpro
 * make it 14-12-1018
 * this template displaying header area
 * */
get_header();
?>

<!-- this section add some of information -->
<div class="some-info container center-align">
    <h3><?php echo esc_html(cs_get_option('info_title'))?></h3>
    <p><?php echo esc_html(cs_get_option('info_disc'))?></p>
</div>

<!-- this section for about myself -->
<section id="about" class="scrollspy row ">

    <div class="profile col s12 l5">
        <img src="<?php echo esc_url(wp_get_attachment_image_src(cs_get_option('about_image'), 'full')[0])?>" alt="about me" title="About Myself">
    </div>
    <div class="info col s12 l7">
        <p class="title"><?php echo esc_html(cs_get_option('about_title'))?><span></span></p>
        <h2 class="subtitle"><?php echo esc_html(cs_get_option('about_sub_title'))?></h2>
        <p><?php echo esc_html(cs_get_option('about_desc'))?></p>
    </div>

</section>



<!-- this is section for explain what i do -->
<section id="wedo" class="scrollspy">
    <h2 class="title"><?php echo esc_html(cs_get_option('group_area_title'));?> <span></span></h2>
    <div class="content">
        <?php $get_ex_group = cs_get_option('group_field_1');
        foreach ($get_ex_group as $group_ex_value){?>

        <div class="b">
            <div class="icon">
                <i class="<?php echo esc_html($group_ex_value['group_icon'])?>" aria-label="hidden"></i>
            </div>
            <h4 class="subtitle"><?php echo esc_html($group_ex_value['group_title']);?></h4>
            <p><?php echo esc_html($group_ex_value['group_desc'])?></p>
        </div>

        <?php } ?>
    </div>
</section>


<section id="experience" class="scrollspy">
    <h2 class="title"><?php echo esc_html(cs_get_option('experience_title'))?> <span></span></h2>
    <div class="content row">
        <div class="col s12 l4 ss">
            <img src="<?php echo esc_url(wp_get_attachment_image_src(cs_get_option('experience_image'),'full')[0])?>" alt="experience">
        </div>
        <div class="col s12 l8 ss">

            <div class="skilsbar">

                <?php $get_skill = cs_get_option('experience_skill_bar');
                foreach ($get_skill as $key=> $skill_value){ ?>
                    <div id="bar<?php echo $key?>" class="barfiller sk">
                        <div class="tipWrap">
                            <span class="tip"></span>
                        </div>
                        <span role="progressbar" class="fill" data-percentage="<?php echo esc_html($skill_value['skill_bar_percent'])?>"></span>
                        <span class="skill_name"><?php echo esc_html($skill_value['skill_title'])?></span>
                    </div>
                <?php } ?>
            </div>

            </div>
        </div>
    </div>

</section>



<section id="portfolio" class="scrollspy">
    <div class="my_portfolio">
        <button type="button" data-filter="*">All</button>
        <button type="button" data-filter=".ht">HTML Template</button>
        <button type="button" data-filter=".wt">Wordpress Template</button>
        <button type="button" data-filter=".pt">PSD Template</button>
    </div>
    <div class="post-content row">

        <div class="ht col s12 m6 l4 s">
            <img src="<?php echo get_theme_file_uri('store/img/img1.jpeg')?>">
        </div>
        <div class="wt col s12 m6 l4 s">
            <img src="<?php echo get_theme_file_uri('store/img/img3.jpg')?>">
        </div>
        <div class="pt col s12 m6 l4 s">
            <img src="<?php echo get_theme_file_uri('store/img/img1.jpg')?>">
        </div>
        <div class="wt col s12 m6 l4 s">
            <img src="<?php echo get_theme_file_uri('store/img/img2.jpeg')?>">
        </div>
        <div class="ht col s12 m6 l4 s">
            <img src="<?php echo get_theme_file_uri('store/img/img2.jpg')?>">
        </div>
        <div class="pt col s12 m6 l4 s">
            <img src="<?php echo get_theme_file_uri('store/img/img3.jpeg')?>">
        </div>
        <div class="ht col s12 m6 l4 s">
            <img src="<?php echo get_theme_file_uri('store/img/img4.jpeg')?>">
        </div>
        <div class="pt col s12 m6 l4 s">
            <img src="<?php echo get_theme_file_uri('store/img/img4.jpg')?>">
        </div>
        <div class="wt col s12 m6 l4 s">
            <img src="<?php echo get_theme_file_uri('store/img/img5.jpeg')?>">
        </div>
        <div class="pt col s12 m6 l4 s">
            <img src="<?php echo get_theme_file_uri('store/img/img6.jpeg')?>">
        </div>
        <div class="pt col s12 m6 l4 s">
            <img src="<?php echo get_theme_file_uri('store/img/img7.jpeg')?>">
        </div>
        <div class="ht col s12 m6 l4 s">
            <img src="<?php echo get_theme_file_uri('store/img/img8.jpeg')?>">
        </div>
        <div class="wt col s12 m6 l4 s">
            <img src="<?php echo get_theme_file_uri('store/img/img9.jpeg')?>">
        </div>
        <div class="ht col s12 m6 l4 s">
            <img src="<?php echo get_theme_file_uri('store/img/img4.jpeg')?>">
        </div>
    </div>
</section>

<section id="hireme">
    <div class="container row">
        <div class="col s12 l9">
            <h1 class="title">Hire Me For Awesome Project</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci aperiam libero suscipit quibusdam
                eaque ipsam perferendis nobis iste, eius harum doloremque velit perspiciatis cupiditate nemo qui!
                Natus ipsam reiciendis repellat.</p>
        </div>
        <a href="#" class="btns col s5 l3">Hire Me</a>
    </div>
</section>

<section id="timeline">
    <div class="timeline">
        <?php
        $args = array(
            'category_name' => 'work',
            'posts_per_page' => 8
        );
        $blog_post = new WP_Query($args);

        if($blog_post->have_posts()):?>
        <h2 class="titles">Blog Post</h2>
                <?php endif;?>
        <ul>
        <?php 
        if($blog_post->have_posts()): while($blog_post->have_posts()): $blog_post->the_post();
        ?>
            <li id="post-<?php the_ID()?>" <?php post_class('blog')?>">
                <div class="content">
                    <h3 class="title"><?php the_title()?></h3>
                    <?php the_excerpt()?>
                </div>
                <div class="time">
                    <h4><?php the_time('F j,Y')?></h4>
                </div>
            </li>
            <?php

            endwhile;
        else:
            echo "<h3>Not Found Any Post</h3>";
            endif;
            wp_reset_postdata();
            ?>
            
        </ul>
    </div>
</section>


<section id="contact">
    <div class="content">
        <div class="info">
            <h4 class="title">Get In Touch</h4>
            <ul class="information">
                <li>
                    <div class="icon"><i class="fa fa-location-arrow" aria-label="hidden"></i></div>
                    <address>
                        600 Congress Area <br>
                        Flor 14 Blog C,<br>
                        Austin Tx 768463
                    </address>
                </li>
                <li>
                    <div class="icon"><i class="fa fa-phone" aria-label="hidden"></i></div>
                    <div class="phone">
                        <a href="tel:0986876866">09868 768 66</a><br>
                        <a href="tel:0828487689">08284 876 89</a>
                    </div>
                </li>
                <li>
                    <div class="icon"><i class="fa fa-envelope-open" aria-label="hidden"></i></div>
                    <div class="mail">
                        <a href="mailto:rifatislam30@gmail.com">Your@mail.com</a><br>
                        <a href="mailto:rifatislam23@gmail.com">Name@Domain.com</a>
                    </div>
                </li>
            </ul>
            <ul class="social">
                <li><a href="#"><i class="fa fa-facebook-square" aria-label="hidden"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square" aria-label="hidden"></i></a></li>
                <li><a href="#"><i class="fa fa-tumblr-square" aria-label="hidden"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-label="hidden"></i></a></li>
            </ul>
        </div>
        <div class="contact">
            <h4 class="title">Say Hello</h4>
            <form action="<?php echo $_SERVER['SCRIPT_NAME']?>" method="post">
                <p class="input-field">
                    <input type="text" id="fname" name="fn" required>
                    <label for="fname">FirstName</label>
                </p>
                <p class="input-field">
                    <input type="text" name="ln" id="lname" required>
                    <label for="lname">LastName</label>
                </p>
                <p class="input-field">
                    <input type="email" id="mail" name="m" required>
                    <label for="mail">Email Address</label>
                </p>
                <p class="input-field">
                    <textarea name="message" placeholder="Your Message" required></textarea>
                </p>
                <p class="input-field"><input type="submit" value="Sent Message"></p>
            </form>
        </div>
    </div>
</section>


<?php get_footer()?>
