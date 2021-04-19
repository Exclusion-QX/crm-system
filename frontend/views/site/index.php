<?php

/* @var $this yii\web\View */

use frontend\assets\PreviewAsset;

PreviewAsset::register($this);

$this->title = 'My Yii Application';

?>

<div class="probootstrap-loader"></div>

<header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="<?=Yii::$app->homeUrl?>" class="probootstrap-logo">Black<span>.</span></a>

        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
            <ul class="probootstrap-main-nav">
                <li class="active"><a href="<?=Yii::$app->homeUrl?>">Главная</a></li>
                <li><a href="about.html">О нас</a></li>
                <li><a href="contact.html">Контакты</a></li>
                <li><a href="/site/login">Вход</a></li>
                <li><a href="/site/signup">Регистрация</a></li>
            </ul>
            <ul class="probootstrap-right-nav hidden-xs">
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
            <div class="extra-text visible-xs">
                <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
                <h5>Address</h5>
                <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                <h5>Connect</h5>
                <ul class="social-buttons">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li><a href="#"><i class="icon-instagram2"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<section class="probootstrap-slider flexslider">
    <ul class="slides">
        <li class="flex-active-slide" style="background-image: url(/img/slider_1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="slides-text probootstrap-animate">
                            <h2>Less is more.</h2>
                            <p><a href="https://probootstrap.com/" target="_blank" class="btn btn-primary">Get Started</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="flex-active-slide" style="background-image: url(/img/slider_2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="slides-text probootstrap-animate">
                            <h2>Black is elegant.</h2>
                            <p><a href="https://probootstrap.com/" target="_blank" class="btn btn-primary">Get Started</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="flex-active-slide" style="background-image: url(/img/slider_3.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="slides-text probootstrap-animate">
                            <h2>Whitespace is clever.</h2>
                            <p><a href="https://probootstrap.com/" target="_blank" class="btn btn-primary">Get Started</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</section>
<!-- END: slider  -->

<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="service left-icon probootstrap-animate">

                    <div class="icon">
                        <i class="icon-laptop3"></i>
                    </div>
                    <div class="text">
                        <h3 class="heading">Business Strategy</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <p><a href="single-page.html">Learn more</a></p>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="service left-icon probootstrap-animate">
                    <div class="icon">
                        <i class="icon-presentation"></i>
                    </div>
                    <div class="text">
                        <h3 class="heading">Business Marketing</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <p><a href="single-page.html">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service left-icon probootstrap-animate">
                    <div class="icon">
                        <i class="icon-wallet2"></i>
                    </div>
                    <div class="text">
                        <h3 class="heading">Business Profit</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        <p><a href="single-page.html">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->

<div class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInLeft">

                <div class="panel-group probootstrap-panel" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h3 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                    Business Strategy
                                </a>
                            </h3>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>


                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Business Marketing
                                </a>
                            </h3>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Business Profit
                                </a>
                            </h3>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END panel-group -->
            </div>
            <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInRight">

                <figure>
                    <div class="probootstrap-video">
                        <a href="https://vimeo.com/45830194" class="popup-vimeo probootstrap-video-play"><i class="icon-play3"></i></a>
                        <img src="/img/slider_2.jpg" alt="Free HTML5 Bootstrap Template by ProBootstrap.com" class="img-responsive img-border">
                    </div>
                    <figcaption>This is a caption. Far far away, behind the word mountains.</figcaption>
                </figure>

            </div>
        </div>
    </div>
</div>
<!-- END section -->


<div class="container">
    <div class="probootstrap-cta probootstrap-animate">
        <h2 class="mb20">Create a beautiful templates to benefits many.</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        <p><a href="#" role="button" class="btn btn-primary">Get started</a></p>
    </div>
</div>

<!-- END section cta -->

<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading probootstrap-animate">
                <h2>The Projects</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 probootstrap-animate">
                <div class="probootstrap-card">
                    <div class="probootstrap-card-media">
                        <a href="single-page.html"><img src="/img/slider_1.jpg" class="img-responsive img-border" alt="Free HTML5 Template by ProBootstrap.com"></a>
                    </div>
                    <div class="probootstrap-card-text">
                        <h2 class="probootstrap-card-heading mb0">A Clever Bike</h2>
                        <p class="category">Design &amp; Model</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <p><a href="single-page.html">View details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 probootstrap-animate">
                <div class="probootstrap-card">
                    <div class="probootstrap-card-media">
                        <a href="single-page.html"><img src="/img/slider_2.jpg" class="img-responsive img-border" alt="Free HTML5 Template by ProBootstrap.com"></a>
                    </div>
                    <div class="probootstrap-card-text">
                        <h2 class="probootstrap-card-heading mb0">Sleek Spaker</h2>
                        <p class="category">Design</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <p><a href="single-page.html">View details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 probootstrap-animate">
                <div class="probootstrap-card">
                    <div class="probootstrap-card-media">
                        <a href="single-page.html"><img src="/img/slider_3.jpg" class="img-responsive img-border" alt="Free HTML5 Template by ProBootstrap.com"></a>
                    </div>
                    <div class="probootstrap-card-text">
                        <h2 class="probootstrap-card-heading mb0">Black Person</h2>
                        <p class="category">Photography</p>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <p><a href="single-page.html">View details</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->
