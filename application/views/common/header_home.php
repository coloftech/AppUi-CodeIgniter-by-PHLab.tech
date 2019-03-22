<!DOCTYPE html>

<html class="app-ui">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- Document title -->
        <title>Frontend - Home | AppUI</title>

        <meta name="description" content="AppUI - Frontend Template & UI Framework" />
        <meta name="robots" content="noindex, nofollow" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="<?=base_url('assets')?>/dist/assets/img/favicons/apple-touch-icon.png" />
        <link rel="icon" href="<?=base_url('assets')?>/dist/assets/img/favicons/favicon.ico" />

        <!-- Google fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

        <!-- AppUI CSS stylesheets -->
        <link rel="stylesheet" id="css-font-awesome" href="<?=base_url('assets')?>/dist/assets/css/font-awesome.css" />
        <link rel="stylesheet" id="css-ionicons" href="<?=base_url('assets')?>/dist/assets/css/ionicons.css" />
        <link rel="stylesheet" id="css-bootstrap" href="<?=base_url('assets')?>/dist/assets/css/bootstrap.css" />
        <link rel="stylesheet" id="css-app" href="<?=base_url('assets')?>/dist/assets/css/app.css" />
        <link rel="stylesheet" id="css-app-custom" href="<?=base_url('assets')?>/dist/assets/css/app-custom.css" />
        <!-- End Stylesheets -->
    </head>

    <body class="app-ui">
        <div class="app-layout-canvas">
            <div class="app-layout-container">

                <!-- Header -->
                <header class="app-layout-header">
                    <nav class="navbar navbar-default p-y">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                                <!-- Header logo -->
                                <a class="navbar-brand" href="javascript:void(0)">
                                    <img class="img-responsive" src="<?=base_url('assets')?>/dist/assets/img/logo/logo-frontend.png" title="AppUI" alt="AppUI" />
                                </a>
                            </div>

                            <div class="collapse navbar-collapse" id="header-navbar-collapse">
                                <!-- Header search form -->
                                <form class="navbar-form navbar-right app-search-form" role="search">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="search" id="search-input" placeholder="Search..." />
                                            <span class="input-group-btn">
                                <button class="btn" type="button"><i class="ion-ios-search-strong"></i></button>
                            </span>
                                        </div>
                                    </div>
                                </form>

                                <!-- Header navigation menu -->
                                <ul id="main-menu" class="nav navbar-nav navbar-left">

                                    <li class="active">
                                        <a href="<?=site_url()?>">Home</a>
                                    </li>

                                    <li>
                                        <a href="frontend_about.html">About</a>
                                    </li>

                                    <li>
                                        <a href="frontend_pricing.html">Pricing</a>
                                    </li>

                                    <li>
                                        <a href="frontend_team.html">Team</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#" data-toggle="dropdown">Pages <span class="caret"></span></a>
                                        <ul class="dropdown-menu">

                                            <li>
                                                <a href="frontend_search.html">Search</a>
                                            </li>

                                            <li>
                                                <a href="frontend_support.html">Support</a>
                                            </li>

                                            <li>
                                                <a href="frontend_contact.html">Contact</a>
                                            </li>

                                            <li>
                                                <a href="<?=site_url('login')?>">Login / Signup</a>
                                            </li>

                                            <li>
                                                <a href="frontend_400.html">Error 400</a>
                                            </li>

                                        </ul>
                                    </li>

                                </ul>
                                <!-- End header navigation menu -->
                            </div>
                        </div>
                        <!-- .container -->
                    </nav>
                    <!-- .navbar -->
                </header>
                <!-- End header -->