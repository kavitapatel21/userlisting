<style>
    .container-custom {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
    a{
        -webkit-transition: color 0.25s ease, background 0.25s ease, border-color 0.25s ease;
        transition: color 0.25s ease, background 0.25s ease, border-color 0.25s ease;
    }
    h1, h2, h3, h4, h5, h6{
        text-transform: capitalize !important;
    }
    a:hover{
        text-decoration: none !important;
    }
    .mb-60{
        margin-bottom:60px;
    }
    .latestblog-categories{
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
    .economic{
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
    .news{
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
    .market{
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
    .world{
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
    .highlights-post-image-wrapper:hover .highlights-post-image{
        transform: scale(1.1);
        -webkit-transform: scale(1.1);
        -o-transform: scale(1.1);
    }
    .latestblog-page-margin{
        margin:60px 0px;
    }
    .latestblog-list-post{
        display:flex;
        flex-direction: row-reverse;
    }
    .latestblog-post-image-wrapper{
        margin-right: 0;
        margin-left: 50px;
        width: 555px;
        padding-bottom: 35%;
        margin-bottom: 0!important;
        flex-grow: 0;
        flex-shrink: 0;
        position: relative;
        overflow: hidden;
        border-radius: 5px;
    }
    .latestblog-post-image-wrapper:hover .latestblog-post-image{
        -webkit-transform: scale(1.1);
        -webkit-transition: transform 0.5s ease-out;
        transition: transform 0.5s ease-out;
    }
    .latestblog-post-image-wrapper img{
        -webkit-transition: transform 0.5s ease-out;
        transition: transform 0.5s ease-out;
        border-radius: 5px;
    }
    .latestblog-post-image-wrapper a{
        text-decoration: none;
    }
    .latestblog-post-image-wrapper a .latestblog-post-image{
        background-image: url('https://transdirect.plutustec.in/wp-content/uploads/2022/08/20220120_A7R9210-scaled-1.jpg');
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
    .latestblog-post-details{
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .latestblog-post-title{
        font-size: 36px;
        display: block;
        color: #000000;
        margin-top: 0;
        margin-bottom: 15px;
        word-wrap: break-word;
        font-weight: 700;
    }
    .latestblog-post-title a{
        color: #000000;
        font-weight: 700;
        transition: color 0.25s ease, background 0.25s ease, border-color 0.25s ease;
    }
    .latestblog-post-title a:hover{
        color: #645cf8 !important;
        text-decoration: none;
    }
    .latestblog-post-author{
        display: flex;
        align-items: center;
    }
    .latestblog-post-author-section{
        display: flex;
        align-items: center;
    }
    .latestblog-post-author-image{
        display: flex;
        align-items: center;
    }
    .latestblog-post-author-image a{
        width: 28px;
        height: 28px;
    }
    .latestblog-post-author-image a img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .latestblog-post-autho-name{
        margin-bottom: 0px;
        margin-left: 10px;
        color: #868686;
    }
    .latestblog-post-autho-name a{
        margin-left: 3px;
        color: #868686 !important;
    }
    .latestblog-post-autho-name a:hover{
        color: #868686 !important;
    }
    .latestblog-post-date{
        color: #868686;
    }
    .latestblog-post-date:before{
        content: "-";
        margin-left: 10px;
        margin-right: 5px;
    }
    .latestblog-post-excerpt{
        color: #7b7d83;
        margin-top: 20px;
        margin-bottom: 0px;
    }
    .latestblog-overlay-post{
    }
    .latestblog-overlay-post .latestblog-post-wrapper-inner{
        position: relative;
        height: 100%;
        overflow: hidden;
        background-color: #EFF0F4;
        border-radius: 5px;
    }
    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-image{
        height: 100%;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-image: url(http://wp.wp-preview.com/saxon/saxon-14/wp-content/uploads/2018/10/saxon-0014-01-1140x694.jpg);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    }
    .latestblog-overlay-post:hover .latestblog-post-details{
        background-color: rgba(0, 0, 0, 0.6) !important;
    }
    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-details{
        position: relative;
        height: 100%;
        padding: 50px;
        background-color: rgba(0, 0, 0, 0.4);
        min-height: 380px;
        -webkit-transition: all 0.45s ease;
        transition: all 0.45s ease;
    }
    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-details .latestblog-categories{
        position: relative !important;
        font-size: 10px;
        letter-spacing: 2px;
        margin-bottom: 5px;
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 30px;
        padding: 0px;
    }
    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-details .latestblog-post-title{
        font-size: 24px !important;
        margin-bottom: 30px;
        color:#fff !important;
        text-transform: capitalize !important;
    }
    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-details .latestblog-post-title a{
        font-size: 24px !important;
        margin-bottom: 30px;
        color:#fff !important;
    }
    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-details .latestblog-post-title a:hover{
        color:#fff !important;
    }
    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-details .latestblog-post-autho-name{
        color:#fff !important;
    }
    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-details .latestblog-post-autho-name a{
        color:#fff !important;
    }
    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-details .latestblog-post-autho-name a:hover{
        color:#fff !important;
    }
    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-details .latestblog-post-date{
        color:#fff !important;
    }
    .latestblog-overlay-post .latestblog-post-wrapper-inner .latestblog-post-details .latestblog-post-excerpt{
        color:#fff !important;
    }
    .page-title-icon{
        color: #7b7d83;
        font-size: 16px;
        line-height: 1.75;
    }
    .page-title-icon h2{
        font-size: 24px;
        font-weight: 700 !important;
        color:#000000 !important;
    }
    .highlights-post-image-wrapper{
        position: relative;
        background-color: #EFF0F4;
        margin-bottom: 30px;
        overflow: hidden;
        display: block; 
        border-radius: 5px;
        -webkit-transition: transform 0.5s ease-out;
        transition: transform 0.5s ease-out;
        padding-bottom:146px;
    }
    .highlights-grid-post .latestblog-post-title{
        font-size: 24px !important;
    }
    .highlights-post-image-wrapper .highlights-post-image{
        background-image: url(http://wp.wp-preview.com/saxon/saxon-14/wp-content/uploads/2018/10/saxon-0014-02-555x360.jpg);
        border-radius: 5px; 
        -webkit-transition: transform 0.5s ease-out;
        transition: transform 0.5s ease-out;
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    }
    .highlights-grid-post{
        margin-bottom: 60px;
    }
    .btn-load-more{
        background: #ECEFF3 !important;
        border-color: #ECEFF3 !important;
        color: #000000 !important;
        font-weight: 600;
        -webkit-transition: color 0.25s ease, background 0.25s ease, border-color 0.25s ease;
        transition: color 0.25s ease, background 0.25s ease, border-color 0.25s ease;
        padding: 7px 17px !important;
        line-height: 1;
        text-align: center;
        text-shadow: none;
        text-decoration: none;
        text-align: center;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-radius: 5px;
        font-size: 13px !important;
    }
    .btn-load-more:hover{
        border-color: #645cf8 !important;
        background-color: #645cf8 !important;
        color: #ffffff !important;
        box-shadow: none;
    }

    /*Slider CSS Start*/
    #news-slider{
        margin-top: 0px;
    }
    .post-slide{
        background: #fff;
        margin: 0px 15px 20px;
        border-radius: 15px;
        padding-top: 1px;
    }
    .post-slide .post-img{
        position: relative;
        overflow: hidden;
        border-radius: 5px;
        margin-left: 0px;
    }
    #news-slider .post-slide .post-img .latestblog-categories{
        position: absolute !important;
        padding: 20px !important;
    }
    .post-slide .post-img img{
        width: 100%;
        height: auto;
        transform: scale(1,1);
        transition:transform 0.2s linear;
    }
    .post-slide:hover .post-img img{
        transform: scale(1.1,1.1);
    }
    .post-slide .over-layer{
        width:100%;
        height:100%;
        position: absolute;
        top:0;
        left:0;
        opacity:0;
        background: linear-gradient(-45deg, rgba(6,190,244,0.75) 0%, rgba(45,112,253,0.6) 100%);
        transition:all 0.50s linear;
    }
    .post-slide:hover .over-layer{
        opacity:1;
        text-decoration:none;
    }
    .post-slide .over-layer i{
        position: relative;
        top:45%;
        text-align:center;
        display: block;
        color:#fff;
        font-size:25px;
    }
    .post-slide .post-content{
        margin-top: 30px;
    }
    .post-slide .post-title a{
        font-size:18px;
        font-weight:bold;
        color:#000;
        display: inline-block;
        text-transform: capitalize;
        transition: all 0.3s ease 0s;
    }
    .post-slide .post-title a:hover{
        text-decoration: none;
        color:#3498db;
    }
    .post-slide .post-description{
        line-height:24px;
        color:#808080;
        margin-bottom:25px;
    }
    .post-slide .post-date{
        color:#a9a9a9;
        font-size: 14px;
    }
    .post-slide .post-date i{
        font-size:20px;
        margin-right:8px;
        color: #CFDACE;
    }
    .post-slide .read-more{
        padding: 7px 20px;
        float: right;
        font-size: 12px;
        background: #2196F3;
        color: #ffffff;
        box-shadow: 0px 10px 20px -10px #1376c5;
        border-radius: 25px;
        text-transform: uppercase;
    }
    .post-slide .read-more:hover{
        background: #3498db;
        text-decoration:none;
        color:#fff;
    }
    .owl-controls .owl-buttons{
        text-align:center;
        margin-top:20px;
    }
    .owl-controls .owl-buttons .owl-prev{
        background: #fff;
        position: absolute;
        top:-13%;
        left:15px;
        padding: 0 18px 0 15px;
        border-radius: 50px;
        box-shadow: 3px 14px 25px -10px #92b4d0;
        transition: background 0.5s ease 0s;
    }
    .owl-controls .owl-buttons .owl-next{
        background: #fff;
        position: absolute;
        top:-13%;
        right: 15px;
        padding: 0 15px 0 18px;
        border-radius: 50px;
        box-shadow: -3px 14px 25px -10px #92b4d0;
        transition: background 0.5s ease 0s;
    }
    .owl-controls .owl-buttons .owl-prev:after,
    .owl-controls .owl-buttons .owl-next:after{
        content:"\f104";
        font-family: FontAwesome;
        color: #333;
        font-size:30px;
    }
    .owl-controls .owl-buttons .owl-next:after{
        content:"\f105";
    }
    #news-slider .latestblog-post-details .latestblog-post-title{
        font-size:18px!important;
    }
    #news-slider .latestblog-post-details .latestblog-post-date:before{
        content: none !important;
        margin-left: 0px !important;
        margin-right: 0px !important;
    }
    /*Slider CSS End*/
    .full-width-post .container-custom{
        width: 100% !important;
        padding: 0px !important;
    }
    .full-width-post .container-custom .latestblog-post-wrapper-inner{
        border-radius: 0px !important;
    }
    .full-width-post .container-custom .latestblog-post-details{
        min-height: 450px !important;
        padding: 30px !important;
        justify-content: flex-start !important;
    }
    .full-width-post .container-custom .latestblog-post-details .fixed-bottom-text{
        position: absolute;
        bottom: 0;
        width: 100%;
        padding: 30px;
        left: 0;
    }
    @media only screen and (max-width:1280px) {
        .post-slide .post-content{
            padding: 0px 15px 25px 15px;
        }
    }
    

    @media (min-width: 1200px){
        .container-custom {
            width: 1170px !important;
        }
    }
    @media (min-width: 992px){
        .container-custom {
            width: 970px;
        }
    }
    @media (min-width: 768px){
        .container-custom-custom {
            width: 750px !important;
        }
    }
    
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
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
        <div class="col-md-12">
            <div class="latestblog-list-post latestblog-page-margin">
                <div class="latestblog-post-image-wrapper">
                    <a href="">
                        <div class="latestblog-post-image"></div>
                    </a>
                    <div class="latestblog-categories">
                        <a href="" class="news">News</a>
                        <a href="" class="world">World</a>
                    </div>
                </div>
                <div class="latestblog-post-details">
                    <h3 class="latestblog-post-title">
                        <a href="">CES 2019: It’s the Year of Virtual Assistants and 5G</a>
                    </h3>
                    <div class="latestblog-post-author">
                        <div class="latestblog-post-author-section">
                            <div class="latestblog-post-author-image">
                                <a href="">
                                    <img src="https://transdirect.plutustec.in/wp-content/uploads/2022/08/Screen-Shot-2022-08-15-at-10.22.26-am-modified.png" alt="" />
                                </a>
                                <p class="latestblog-post-autho-name">
                                    By<a href="">Saxon Matney</a>
                                </p>
                            </div>
                        </div>
                        <div class="latestblog-post-date">
                            October 26, 2018
                        </div>
                    </div>
                    <div class="latestblog-post-excerpt">
                        Certainly, they are not an answer to everything. The key feature of a website generator lies in universality. In principle, they should meet the requirements and expectations of the majority. When it…
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-custom mb-60">
    <div class="row">
            <div class="col-md-6">
                <div class="latestblog-overlay-post">
                    <div class="latestblog-post-wrapper-inner">
                        <div class="latestblog-post-image">

                        </div>
                        <div class="latestblog-post-details">
                            <div class="latestblog-categories">
                                <a href="" class="economic">Economic</a>
                                <a href="" class="news">News</a>
                            </div>
                            <h3 class="latestblog-post-title">
                                <a href="">China’s Best 2019 Stock Is Already Up 33% and No One Knows Why</a>
                            </h3>
                            <div class="latestblog-post-author">
                                <div class="latestblog-post-author-section">
                                    <div class="latestblog-post-author-image">
                                        <a href="">
                                            <img src="https://transdirect.plutustec.in/wp-content/uploads/2022/08/Screen-Shot-2022-08-15-at-10.22.26-am-modified.png" alt="" />
                                        </a>
                                        <p class="latestblog-post-autho-name">
                                            By<a href="">Saxon Matney</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="latestblog-post-date">
                                    October 26, 2018
                                </div>
                            </div>
                            <div class="latestblog-post-excerpt">
                                Certainly, they are not an answer to everything. The key feature of a website generator lies in universality. In principle, they should meet the requirements and expectations of the majority. When it…
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="latestblog-overlay-post">
                    <div class="latestblog-post-wrapper-inner">
                        <div class="latestblog-post-image">

                        </div>
                        <div class="latestblog-post-details">
                            <div class="latestblog-categories">
                                <a href="" class="market">Market</a>
                                <a href="" class="news">News</a>
                            </div>
                            <h3 class="latestblog-post-title">
                                <a href="">Analysts Expect McDonald’s EPS Growth to Slow in 2019</a>
                            </h3>
                            <div class="latestblog-post-author">
                                <div class="latestblog-post-author-section">
                                    <div class="latestblog-post-author-image">
                                        <a href="">
                                            <img src="https://transdirect.plutustec.in/wp-content/uploads/2022/08/Screen-Shot-2022-08-15-at-10.22.26-am-modified.png" alt="" />
                                        </a>
                                        <p class="latestblog-post-autho-name">
                                            By<a href="">Saxon Matney</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="latestblog-post-date">
                                    October 26, 2018
                                </div>
                            </div>
                            <div class="latestblog-post-excerpt">
                            Feedback that the system provides doesn’t convey emotion. It is robotic. When a user interacts with such a system, it feels giving commands to a computer. The only difference from a traditional GUI is that you use a different medium…
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<div class="container-custom mb-60">
   <div class="row">
      <div class="col-md-12 page-title-icon">
         <h2>
            <i class="fa fa-bookmark-o"></i>
            Today Highlights
        </h2>
         Put your startup on steroids with these gigs. Get a shortcut to success!
      </div>
   </div>
</div>
<div class="container-custom mb-60">
    <div class="today-highlights">
        <div class="row flex-wrap-wrap">
            <div class="col-md-4">
                <div class="highlights-grid-post">
                    <div class="highlights-post-image-wrapper">
                        <a href="">
                            <div class="highlights-post-image"></div>
                            <div class="latestblog-categories">
                                <a href="" class="market">Market</a>
                                <a href="" class="news">News</a>
                            </div>
                        </a>
                    </div>
                    <div class="latestblog-post-details">
                        <h3 class="latestblog-post-title">
                            <a href="">Buying into the market’s ‘First Five Days of January’ indicator is a mistake</a>
                        </h3>
                        <div class="latestblog-post-author">
                            <div class="latestblog-post-author-section">
                                <div class="latestblog-post-author-image">
                                    <a href="">
                                        <img src="https://transdirect.plutustec.in/wp-content/uploads/2022/08/Screen-Shot-2022-08-15-at-10.22.26-am-modified.png" alt="" />
                                    </a>
                                    <p class="latestblog-post-autho-name">
                                        By<a href="">Saxon Matney</a>
                                    </p>
                                </div>
                            </div>
                            <div class="latestblog-post-date">
                                October 26, 2018
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="highlights-grid-post">
                    <div class="highlights-post-image-wrapper">
                        <a href="">
                            <div class="highlights-post-image"></div>
                            <div class="latestblog-categories">
                                <a href="" class="market">Market</a>
                                <a href="" class="news">News</a>
                            </div>
                        </a>
                    </div>
                    <div class="latestblog-post-details">
                        <h3 class="latestblog-post-title">
                            <a href="">Buying into the market’s ‘First Five Days of January’ indicator is a mistake</a>
                        </h3>
                        <div class="latestblog-post-author">
                            <div class="latestblog-post-author-section">
                                <div class="latestblog-post-author-image">
                                    <a href="">
                                        <img src="https://transdirect.plutustec.in/wp-content/uploads/2022/08/Screen-Shot-2022-08-15-at-10.22.26-am-modified.png" alt="" />
                                    </a>
                                    <p class="latestblog-post-autho-name">
                                        By<a href="">Saxon Matney</a>
                                    </p>
                                </div>
                            </div>
                            <div class="latestblog-post-date">
                                October 26, 2018
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="highlights-grid-post">
                    <div class="highlights-post-image-wrapper">
                        <a href="">
                            <div class="highlights-post-image"></div>
                            <div class="latestblog-categories">
                                <a href="" class="market">Market</a>
                                <a href="" class="news">News</a>
                            </div>
                        </a>
                    </div>
                    <div class="latestblog-post-details">
                        <h3 class="latestblog-post-title">
                            <a href="">Buying into the market’s ‘First Five Days of January’ indicator is a mistake</a>
                        </h3>
                        <div class="latestblog-post-author">
                            <div class="latestblog-post-author-section">
                                <div class="latestblog-post-author-image">
                                    <a href="">
                                        <img src="https://transdirect.plutustec.in/wp-content/uploads/2022/08/Screen-Shot-2022-08-15-at-10.22.26-am-modified.png" alt="" />
                                    </a>
                                    <p class="latestblog-post-autho-name">
                                        By<a href="">Saxon Matney</a>
                                    </p>
                                </div>
                            </div>
                            <div class="latestblog-post-date">
                                October 26, 2018
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="highlights-grid-post">
                    <div class="highlights-post-image-wrapper">
                        <a href="">
                            <div class="highlights-post-image"></div>
                            <div class="latestblog-categories">
                                <a href="" class="market">Market</a>
                                <a href="" class="news">News</a>
                            </div>
                        </a>
                    </div>
                    <div class="latestblog-post-details">
                        <h3 class="latestblog-post-title">
                            <a href="">Buying into the market’s ‘First Five Days of January’ indicator is a mistake</a>
                        </h3>
                        <div class="latestblog-post-author">
                            <div class="latestblog-post-author-section">
                                <div class="latestblog-post-author-image">
                                    <a href="">
                                        <img src="https://transdirect.plutustec.in/wp-content/uploads/2022/08/Screen-Shot-2022-08-15-at-10.22.26-am-modified.png" alt="" />
                                    </a>
                                    <p class="latestblog-post-autho-name">
                                        By<a href="">Saxon Matney</a>
                                    </p>
                                </div>
                            </div>
                            <div class="latestblog-post-date">
                                October 26, 2018
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="highlights-grid-post">
                    <div class="highlights-post-image-wrapper">
                        <a href="">
                            <div class="highlights-post-image"></div>
                            <div class="latestblog-categories">
                                <a href="" class="market">Market</a>
                                <a href="" class="news">News</a>
                            </div>
                        </a>
                    </div>
                    <div class="latestblog-post-details">
                        <h3 class="latestblog-post-title">
                            <a href="">Buying into the market’s ‘First Five Days of January’ indicator is a mistake</a>
                        </h3>
                        <div class="latestblog-post-author">
                            <div class="latestblog-post-author-section">
                                <div class="latestblog-post-author-image">
                                    <a href="">
                                        <img src="https://transdirect.plutustec.in/wp-content/uploads/2022/08/Screen-Shot-2022-08-15-at-10.22.26-am-modified.png" alt="" />
                                    </a>
                                    <p class="latestblog-post-autho-name">
                                        By<a href="">Saxon Matney</a>
                                    </p>
                                </div>
                            </div>
                            <div class="latestblog-post-date">
                                October 26, 2018
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="highlights-grid-post">
                    <div class="highlights-post-image-wrapper">
                        <a href="">
                            <div class="highlights-post-image"></div>
                            <div class="latestblog-categories">
                                <a href="" class="market">Market</a>
                                <a href="" class="news">News</a>
                            </div>
                        </a>
                    </div>
                    <div class="latestblog-post-details">
                        <h3 class="latestblog-post-title">
                            <a href="">Buying into the market’s ‘First Five Days of January’ indicator is a mistake</a>
                        </h3>
                        <div class="latestblog-post-author">
                            <div class="latestblog-post-author-section">
                                <div class="latestblog-post-author-image">
                                    <a href="">
                                        <img src="https://transdirect.plutustec.in/wp-content/uploads/2022/08/Screen-Shot-2022-08-15-at-10.22.26-am-modified.png" alt="" />
                                    </a>
                                    <p class="latestblog-post-autho-name">
                                        By<a href="">Saxon Matney</a>
                                    </p>
                                </div>
                            </div>
                            <div class="latestblog-post-date">
                                October 26, 2018
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <a href="#" class="btn btn-grey btn-load-more">Load more</a>
            </div>
        </div>
    </div>
</div>
<div class="container-custom mb-60">
   <div class="row">
      <div class="col-md-12 page-title-icon">
         <h2>
            <i class="fa fa-bookmark-o"></i>
            Don't miss
        </h2>
        Learn how to start a startup and own business
      </div>
   </div>
</div>
<div class="container-custom mb-60">
  <div class="row">
    <div class="col-md-12">
      <div id="news-slider" class="owl-carousel">
        <div class="post-slide">
            <div class="post-img">
                <img src="http://wp.wp-preview.com/saxon/saxon-14/wp-content/uploads/2018/10/saxon-0014-16-555x360.jpg" alt="">
                <!-- <a href="#" class="over-layer"><i class="fa fa-link"></i></a> -->
                <div class="latestblog-categories"><a href="">
                    </a><a href="" class="market">Market</a>
                    <a href="" class="news">News</a>
                </div>
            </div>
            <div class="post-content">
                <div class="latestblog-post-details">
                    <h3 class="latestblog-post-title">
                        <a href="">Buying into the market’s ‘First Five Days of January’ indicator is a mistake</a>
                    </h3>
                    <div class="latestblog-post-author">
                        <div class="latestblog-post-date">
                            October 26, 2018
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="post-slide">
            <div class="post-img">
                <img src="http://wp.wp-preview.com/saxon/saxon-14/wp-content/uploads/2018/10/saxon-0014-14-555x360.jpg" alt="">
                <!-- <a href="#" class="over-layer"><i class="fa fa-link"></i></a> -->
                <div class="latestblog-categories"><a href="">
                    </a><a href="" class="market">Market</a>
                    <a href="" class="news">News</a>
                </div>
            </div>
            <div class="post-content">
                <div class="latestblog-post-details">
                    <h3 class="latestblog-post-title">
                        <a href="">200 Million Reasons Why 3M's Latest Buy Is a Smart Move</a>
                    </h3>
                    <div class="latestblog-post-author">
                        <div class="latestblog-post-date">
                            October 26, 2018
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="post-slide">
            <div class="post-img">
                <img src="http://wp.wp-preview.com/saxon/saxon-14/wp-content/uploads/2018/10/saxon-0014-05-555x360.jpg" alt="">
                <!-- <a href="#" class="over-layer"><i class="fa fa-link"></i></a> -->
                <div class="latestblog-categories"><a href="">
                    </a><a href="" class="market">Market</a>
                    <a href="" class="news">News</a>
                </div>
            </div>
            <div class="post-content">
                <div class="latestblog-post-details">
                    <h3 class="latestblog-post-title">
                        <a href="">200 Million Reasons Why 3M's Latest Buy Is a Smart Move</a>
                    </h3>
                    <div class="latestblog-post-author">
                        <div class="latestblog-post-date">
                            October 26, 2018
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="post-slide">
            <div class="post-img">
                <img src="http://wp.wp-preview.com/saxon/saxon-14/wp-content/uploads/2018/10/saxon-0014-13-1-555x360.jpg" alt="">
                <!-- <a href="#" class="over-layer"><i class="fa fa-link"></i></a> -->
                <div class="latestblog-categories"><a href="">
                    </a><a href="" class="market">Market</a>
                    <a href="" class="news">News</a>
                </div>
            </div>
            <div class="post-content">
                <div class="latestblog-post-details">
                    <h3 class="latestblog-post-title">
                        <a href="">200 Million Reasons Why 3M's Latest Buy Is a Smart Move</a>
                    </h3>
                    <div class="latestblog-post-author">
                        <div class="latestblog-post-date">
                            October 26, 2018
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="post-slide">
            <div class="post-img">
                <img src="http://wp.wp-preview.com/saxon/saxon-14/wp-content/uploads/2018/10/saxon-0014-01-555x360.jpg" alt="">
                <!-- <a href="#" class="over-layer"><i class="fa fa-link"></i></a> -->
                <div class="latestblog-categories"><a href="">
                    </a><a href="" class="market">Market</a>
                    <a href="" class="news">News</a>
                </div>
            </div>
            <div class="post-content">
                <div class="latestblog-post-details">
                    <h3 class="latestblog-post-title">
                        <a href="">200 Million Reasons Why 3M's Latest Buy Is a Smart Move</a>
                    </h3>
                    <div class="latestblog-post-author">
                        <div class="latestblog-post-date">
                            October 26, 2018
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="post-slide">
            <div class="post-img">
                <img src="http://wp.wp-preview.com/saxon/saxon-14/wp-content/uploads/2018/10/saxon-0014-01-555x360.jpg" alt="">
                <!-- <a href="#" class="over-layer"><i class="fa fa-link"></i></a> -->
                <div class="latestblog-categories"><a href="">
                    </a><a href="" class="market">Market</a>
                    <a href="" class="news">News</a>
                </div>
            </div>
            <div class="post-content">
                <div class="latestblog-post-details">
                    <h3 class="latestblog-post-title">
                        <a href="">200 Million Reasons Why 3M's Latest Buy Is a Smart Move</a>
                    </h3>
                    <div class="latestblog-post-author">
                        <div class="latestblog-post-date">
                            October 26, 2018
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="full-width-post">
    <div class="container-custom">
        <div class="row">
            <div class="col-md-3">
                <div class="latestblog-overlay-post">
                    <div class="latestblog-post-wrapper-inner">
                        <div class="latestblog-post-image">
                        </div>
                        <div class="latestblog-post-details">
                            <div class="latestblog-categories">
                                <a href="" class="economic">Economic</a>
                                <a href="" class="news">News</a>
                            </div>
                            <div class="fixed-bottom-text">
                                <h3 class="latestblog-post-title">
                                    <a href="">China’s Best 2019 Stock Is Already Up 33% and No One Knows Why</a>
                                </h3>
                                <div class="latestblog-post-author">
                                    <div class="latestblog-post-date">
                                    October 26, 2018
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#news-slider").owlCarousel({
            items : 4,
            itemsDesktop:[1199,3],
            itemsDesktopSmall:[980,2],
            itemsMobile : [600,1],
            navigation:false,
            navigationText:["",""],
            pagination:true,
            autoPlay:true
        });
    });
</script>
<?php get_footer(); ?>