<style>
    .container-custom {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    a {
        -webkit-transition: color 0.25s ease, background 0.25s ease, border-color 0.25s ease;
        transition: color 0.25s ease, background 0.25s ease, border-color 0.25s ease;
    }

    a:hover {
        text-decoration: none !important;
    }

    .mb-60 {
        margin-bottom: 60px;
    }

    .latestblog-categories {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        padding: 30px;
        text-transform: uppercase;
        position: relative;
        font-size: 10px;
        letter-spacing: 2px;
        margin-bottom: 5px;
        display: flex;
        flex-wrap: wrap;
        z-index: 1;
    }

    .economic {
        font-weight: normal;
        text-decoration: none;
        padding: 3px 8px;
        background-color: #eba845;
        color: #ffffff !important;
        margin-bottom: 3px;
        margin-right: 5px;
        z-index: 9999;
        border-radius: 5px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .news {
        font-weight: normal;
        text-decoration: none;
        padding: 3px 8px;
        background-color: #645cf8;
        color: #ffffff !important;
        margin-bottom: 3px;
        margin-right: 5px;
        z-index: 9999;
        border-radius: 5px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .market {
        font-weight: normal;
        text-decoration: none;
        padding: 3px 8px;
        background-color: #6741dc;
        color: #ffffff !important;
        margin-bottom: 3px;
        margin-right: 5px;
        z-index: 9999;
        border-radius: 5px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .world {
        font-weight: normal;
        text-decoration: none;
        padding: 3px 8px;
        background-color: #4dcf8f;
        color: #ffffff !important;
        margin-bottom: 3px;
        margin-right: 5px;
        z-index: 9999;
        border-radius: 5px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .latestblog-page-margin {
        margin: 60px 0px;
    }

    .latestblog-list-post {
        display: flex;
        flex-direction: row-reverse;
    }

    .latestblog-post-image-wrapper {
        margin-right: 0;
        margin-left: 50px;
        width: 555px;
        padding-bottom: 35%;
        margin-bottom: 0 !important;
        flex-grow: 0;
        flex-shrink: 0;
        position: relative;
        overflow: hidden;
        border-radius: 5px;
    }

    .latestblog-post-image-wrapper:hover .latestblog-post-image {
        -webkit-transform: scale(1.1);
        -webkit-transition: transform 0.5s ease-out;
        transition: transform 0.5s ease-out;
    }

    .latestblog-post-image-wrapper img {
        -webkit-transition: transform 0.5s ease-out;
        transition: transform 0.5s ease-out;
        border-radius: 5px;
    }

    .latestblog-post-image-wrapper a {
        text-decoration: none;
    }

    .latestblog-post-image-wrapper a .latestblog-post-image {
        /**background-image: url('https://transdirect.plutustec.in/wp-content/uploads/2022/08/20220120_A7R9210-scaled-1.jpg');*/
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        -webkit-transition: transform 0.5s ease-out;
        transition: transform 0.5s ease-out;
        border-radius: 5px;
    }

    .latestblog-post-details {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .latestblog-post-title {
        font-size: 36px;
        display: block;
        color: #000000;
        margin-top: 0;
        margin-bottom: 15px;
        word-wrap: break-word;
        font-weight: 700;
    }

    .latestblog-post-title a {
        color: #000000;
        font-weight: 700;
        transition: color 0.25s ease, background 0.25s ease, border-color 0.25s ease;
    }

    .latestblog-post-title a:hover {
        color: #645cf8 !important;
        text-decoration: none;
    }

    .latestblog-post-author {
        display: flex;
        align-items: center;
    }

    .latestblog-post-author-section {
        display: flex;
        align-items: center;
    }

    .latestblog-post-author-image {
        display: flex;
        align-items: center;
    }

    .latestblog-post-author-image a {
        width: 28px;
        height: 28px;
    }

    .latestblog-post-author-image a img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .latestblog-post-autho-name {
        margin-bottom: 0px;
        margin-left: 10px;
        color: #868686;
    }

    .latestblog-post-autho-name a {
        margin-left: 3px;
        color: #868686 !important;
    }

    .latestblog-post-autho-name a:hover {
        color: #868686 !important;
    }

    .latestblog-post-date {
        color: #868686;
    }

    .latestblog-post-date:before {
        content: "-";
        margin-left: 10px;
        margin-right: 5px;
    }

    .latestblog-post-excerpt {
        color: #7b7d83;
        margin-top: 20px;
        margin-bottom: 0px;
    }

    .latestblog-overlay-post {}

    .latestblog-overlay-post .latestblog-post-wrapper-inner {
        position: relative;
        height: 100%;
        overflow: hidden;
        background-color: #EFF0F4;
        border-radius: 5px;
    }

    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-image {
        height: 100%;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        /*background-image: url(http://wp.wp-preview.com/saxon/saxon-14/wp-content/uploads/2018/10/saxon-0014-01-1140x694.jpg);*/
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    }

    .latestblog-overlay-post:hover .latestblog-post-details {
        background-color: rgba(0, 0, 0, 0.6) !important;
    }

    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-details {
        position: relative;
        height: 100%;
        padding: 50px;
        background-color: rgba(0, 0, 0, 0.4);
        min-height: 380px;
        -webkit-transition: all 0.45s ease;
        transition: all 0.45s ease;
    }

    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-details .latestblog-categories {
        position: relative !important;
        font-size: 10px;
        letter-spacing: 2px;
        margin-bottom: 5px;
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 30px;
        padding: 0px;
    }

    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-details .latestblog-post-title {
        font-size: 24px !important;
        margin-bottom: 30px;
        color: #fff !important;
        text-transform: capitalize !important;
    }

    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-details .latestblog-post-title a {
        font-size: 24px !important;
        margin-bottom: 30px;
        color: #fff !important;
    }

    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-details .latestblog-post-title a:hover {
        color: #fff !important;
    }

    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-details .latestblog-post-autho-name {
        color: #fff !important;
    }

    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-details .latestblog-post-autho-name a {
        color: #fff !important;
    }

    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-details .latestblog-post-autho-name a:hover {
        color: #fff !important;
    }

    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-details .latestblog-post-date {
        color: #fff !important;
    }

    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-details .latestblog-post-excerpt {
        color: #fff !important;
    }

    @media (min-width: 1200px) {
        .container-custom {
            width: 1170px !important;
        }
    }

    @media (min-width: 992px) {
        .container-custom {
            width: 970px;
        }
    }

    @media (min-width: 768px) {
        .container-custom-custom {
            width: 750px !important;
        }
    }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<?php
/*
 * Template Name: Latest Blog
 * description: >-
  Page template without sidebar
 */

get_header();
?>
<div class="container-custom">
    <div class="row">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC',
            'category_name' => 'first',
            'paged' => 1,
        );
        $firstPosts = array();
        $loop = new WP_Query($args); ?><?php
                                        while ($loop->have_posts()) : $loop->the_post();
                                            $firstPosts[] = $post->ID;
                                        ?>
        <div class="col-md-12">
            <div class="latestblog-list-post latestblog-page-margin">
                <div class="latestblog-post-image-wrapper">
                    <a href="<?php the_permalink(); ?>">
                    <?php $url = wp_get_attachment_url(get_post_thumbnail_id($loop->ID)); ?>
                        <div class="latestblog-post-image" style="background-image: url('<?php echo $url; ?>');"></div>
                    </a>
                    <div class="latestblog-categories">
                    <?php $posttags = get_the_tags();
                                if ($posttags) {
                                    foreach ($posttags as $tag) { ?>
                                        <a href="<?php echo get_tag_link($tag->term_id);?>" class="economic"><?php echo $tag->name; ?></a>
                                <?php }
                                } ?>
                    </div>
                </div>
                <div class="latestblog-post-details">
                    <h3 class="latestblog-post-title">
                        <a href="<?php the_permalink(); ?> "><?php echo the_title(); ?></a>
                    </h3>
                    <div class="latestblog-post-author">
                        <div class="latestblog-post-author-section">
                            <div class="latestblog-post-author-image">
                            <a href="">
                                            <img src="https://transdirect.plutustec.in/wp-content/uploads/2022/08/Screen-Shot-2022-08-15-at-10.22.26-am-modified.png" alt="" />
                                        </a>
                                <p class="latestblog-post-autho-name">
                                    By<a href=""><?php echo get_field('author'); ?></a>
                                </p>
                            </div>
                        </div>
                        <div class="latestblog-post-date">
                            <?php echo get_field('date'); ?>
                        </div>
                    </div>
                    <div class="latestblog-post-excerpt">
                        <?php echo the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
                                        endwhile;
?>
<div class="container-custom mb-60">
    <div class="row">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 2,
            'orderby' => 'date',
            'order' => 'DESC',
            'category_name' => 'first',
            'post__not_in' => $firstPosts,
            'paged' => 1,
        );
        $loop = new WP_Query($args); ?>
        <?php while ($loop->have_posts()) : $loop->the_post();
        ?>
            <div class="col-md-6">
                <div class="latestblog-overlay-post">
                    <div class="latestblog-post-wrapper-inner">
                    <?php $url = wp_get_attachment_url(get_post_thumbnail_id($loop->ID)); ?>
                        <div class="latestblog-post-image" style="background-image: url('<?php echo $url; ?>');">

                        </div>
                        <div class="latestblog-post-details">
                            <div class="latestblog-categories">
                                <?php $posttags = get_the_tags();
                                if ($posttags) {
                                    foreach ($posttags as $tag) { ?>
                                        <a href="<?php echo get_tag_link($tag->term_id);?>" class="economic"><?php echo $tag->name; ?></a>
                                <?php }
                                } ?>
                            </div>
                            <h3 class="latestblog-post-title">
                                <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
                            </h3>
                            <div class="latestblog-post-author">
                                <div class="latestblog-post-author-section">
                                    <div class="latestblog-post-author-image">
                                    <a href="">
                                            <img src="https://transdirect.plutustec.in/wp-content/uploads/2022/08/Screen-Shot-2022-08-15-at-10.22.26-am-modified.png" alt="" />
                                        </a>
                                        <p class="latestblog-post-autho-name">
                                            By<a href=""><?php echo get_field('author'); ?></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="latestblog-post-date">
                                    <?php echo get_field('date'); ?>
                                </div>
                            </div>
                            <div class="latestblog-post-excerpt">
                                <?php echo the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        ?>
        <?php wp_reset_postdata(); ?>

    </div>
</div>
<?php get_footer(); ?>