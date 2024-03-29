<!DOCTYPE html>

<html class="app-ui">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- Document title -->
        <title>Dashboard | AppUI</title>

        <meta name="description" content="AppUI - Admin Dashboard Template & UI Framework" />
        <meta name="author" content="rustheme" />
        <meta name="robots" content="noindex, nofollow" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="<?=base_url('assets')?>/img/favicons/apple-touch-icon.png" />
        <link rel="icon" href="<?=base_url('assets')?>/img/favicons/favicon.ico" />

        <!-- Google fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="<?=base_url('assets')?>/js/plugins/slick/slick.min.css" />
        <link rel="stylesheet" href="<?=base_url('assets')?>/js/plugins/slick/slick-theme.min.css" />

        <!-- AppUI CSS stylesheets -->
        <link rel="stylesheet" id="css-font-awesome" href="<?=base_url('assets')?>/css/font-awesome.css" />
        <link rel="stylesheet" id="css-ionicons" href="<?=base_url('assets')?>/css/ionicons.css" />
        <link rel="stylesheet" id="css-bootstrap" href="<?=base_url('assets')?>/css/bootstrap.css" />
        <link rel="stylesheet" id="css-app" href="<?=base_url('assets')?>/css/app.css" />
        <link rel="stylesheet" id="css-app-custom" href="<?=base_url('assets')?>/css/app-custom.css" />
        <!-- End Stylesheets -->
    </head>

    <body class="app-ui layout-has-drawer layout-has-fixed-header">
        <div class="app-layout-canvas">
            <div class="app-layout-container">

                <!-- Drawer -->
                <aside class="app-layout-drawer">

                    <!-- Drawer scroll area -->
                    <div class="app-layout-drawer-scroll">
                        <!-- Drawer logo -->
                        <div id="logo" class="drawer-header">
                            <a href="<?=site_url('dashboard')?>"><img class="img-responsive"  src="<?=base_url('assets')?>/img/logo/logo-backend.png" title="AppUI" alt="AppUI" /></a>
                        </div>

                        <!-- Drawer navigation -->
                        <nav class="drawer-main">
                            <ul class="nav nav-drawer">

                                <li class="nav-item nav-drawer-header">Apps</li>

                                <li class="nav-item active">
                                    <a href="<?=site_url('dashboard')?>"><i class="ion-ios-speedometer-outline"></i> Dashboard</a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?=site_url()?>"><i class="ion-ios-monitor-outline"></i> Frontend</a>
                                </li>

                                <li class="nav-item nav-drawer-header">Components</li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="fa fa-envelope"></i> Mail</a>
                                    <ul class="nav nav-subnav">
                                        <li>
                                            <a href="<?=site_url('mail')?>">Inbox</a>
                                        </li>


                                    </ul>
                                </li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-ios-calculator-outline"></i> UI Elements</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="base_ui_buttons.html">Buttons</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_cards.html">Cards</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_cards_api.html">Cards API</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_layout.html">Layout</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_grid.html">Grid</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_icons.html">Icons</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_modals_tooltips.html">Modals / Tooltips</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_alerts_notify.html">Alerts / Notify</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_pagination.html">Pagination</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_progress.html">Progress</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_tabs.html">Tabs</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_typography.html">Typography</a>
                                        </li>

                                        <li>
                                            <a href="base_ui_widgets.html">Widgets</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-ios-compose-outline"></i> Forms</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="base_forms_elements.html">Elements</a>
                                        </li>

                                        <li>
                                            <a href="base_forms_samples.html">Samples</a>
                                        </li>

                                        <li>
                                            <a href="base_forms_pickers_select.html">Pickers &amp; Select</a>
                                        </li>

                                        <li>
                                            <a href="base_forms_validation.html">Validation</a>
                                        </li>

                                        <li>
                                            <a href="base_forms_wizard.html">Wizard</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-ios-list-outline"></i> Tables</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="base_tables_styles.html">Styles</a>
                                        </li>

                                        <li>
                                            <a href="base_tables_responsive.html">Responsive</a>
                                        </li>

                                        <li>
                                            <a href="base_tables_tools.html">Tools</a>
                                        </li>

                                        <li>
                                            <a href="base_tables_pricing.html">Pricing</a>
                                        </li>

                                        <li>
                                            <a href="base_tables_datatables.html">Wizard</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-ios-browsers-outline"></i> Pages</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="<?=site_url('administration/blank')?>">Blank</a>
                                        </li>

                                        <li>
                                            <a href="base_pages_inbox.html">Inbox</a>
                                        </li>

                                        <li>
                                            <a href="base_pages_invoice.html">Invoice</a>
                                        </li>

                                        <li>
                                            <a href="base_pages_profile.html">Profile</a>
                                        </li>

                                        <li>
                                            <a href="base_pages_search.html">Search</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item nav-item-has-subnav">
                                    <a href="javascript:void(0)"><i class="ion-social-javascript-outline"></i> JS plugins</a>
                                    <ul class="nav nav-subnav">

                                        <li>
                                            <a href="base_js_maps.html">Maps</a>
                                        </li>

                                        <li>
                                            <a href="base_js_sliders.html">Sliders</a>
                                        </li>

                                        <li>
                                            <a href="base_js_charts_flot.html">Charts - Flot</a>
                                        </li>

                                        <li>
                                            <a href="base_js_charts_chartjs.html">Charts - Chart.js</a>
                                        </li>

                                        <li>
                                            <a href="base_js_charts_sparkline.html">Charts - Sparkline</a>
                                        </li>

                                        <li>
                                            <a href="base_js_draggable.html">Draggable</a>
                                        </li>

                                        <li>
                                            <a href="base_js_syntax_highlight.html">Syntax highlight</a>
                                        </li>

                                    </ul>
                                </li>

                            </ul>
                        </nav>
                        <!-- End drawer navigation -->

                        <div class="drawer-footer">
                            <p class="copyright">AppUI-CodeIgniter &copy;</p>
                            <a href="//phlab.tech" target="_blank" rel="nofollow">Unified by: PHLab.Tech</a>
                        </div>
                    </div>
                    <!-- End drawer scroll area -->
                </aside>
                <!-- End drawer -->

                <!-- Header -->
                <header class="app-layout-header">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                                <button class="pull-left hidden-lg hidden-md navbar-toggle" type="button" data-toggle="layout" data-action="sidebar_toggle">
					<span class="sr-only">Toggle drawer</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                                <span class="navbar-page-title">
					
					Dashboard
				</span>
                            </div>

                            <div class="collapse navbar-collapse" id="header-navbar-collapse">
                                <!-- Header search form -->
                                <form class="navbar-form navbar-left app-search-form" role="search">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="search" id="search-input" placeholder="Search..." />
                                            <span class="input-group-btn">
								<button class="btn" type="button"><i class="ion-ios-search-strong"></i></button>
							</span>
                                        </div>
                                    </div>
                                </form>

                                <ul id="main-menu" class="nav navbar-nav navbar-left">
                                    <li class="dropdown">
                                        <a href="#" data-toggle="dropdown">English <span class="caret"></span></a>

                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0)">French</a></li>
                                            <li><a href="javascript:void(0)">German</a></li>
                                            <li><a href="javascript:void(0)">Italian</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" data-toggle="dropdown">Pages <span class="caret"></span></a>

                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0)">Analytics</a></li>
                                            <li><a href="javascript:void(0)">Visits</a></li>
                                            <li><a href="javascript:void(0)">Changelog</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- .navbar-left -->

                                <ul class="nav navbar-nav navbar-right navbar-toolbar hidden-sm hidden-xs">
                                    <li>
                                        <!-- Opens the modal found at the bottom of the page -->
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#apps-modal"><i class="ion-grid"></i></a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown"><i class="ion-ios-bell"></i> <span class="badge">3</span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-header">Profile</li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">3</span> News </a>
                                            </li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">1</span> Messages </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">More</li>
                                            <li>
                                                <a tabindex="-1" href="javascript:void(0)">Edit Profile..</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="dropdown dropdown-profile">
                                        <a href="javascript:void(0)" data-toggle="dropdown">
                                            <span class="m-r-sm">John Doe <span class="caret"></span></span>
                                            <img class="img-avatar img-avatar-48"  src="<?=base_url('assets')?>/img/avatars/avatar3.jpg" alt="User profile pic" />
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-header">
                                                Pages
                                            </li>
                                            <li>
                                                <a href="base_pages_profile.html">Profile</a>
                                            </li>
                                            <li>
                                                <a href="base_pages_profile.html"><span class="badge badge-success pull-right">3</span> Blog</a>
                                            </li>
                                            <li>
                                                <a href="<?=site_url('logout')?>">Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- .navbar-right -->
                            </div>
                        </div>
                        <!-- .container-fluid -->
                    </nav>
                    <!-- .navbar-default -->
                </header>
                <!-- End header -->