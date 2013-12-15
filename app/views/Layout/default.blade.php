<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo asset('assets/css/bootmetro.css') ?>"/>
        <link rel="stylesheet" href="<?php echo asset('assets/css/bootmetro-icons.css') ?>"/>
        <link rel="stylesheet" href="<?php echo asset('assets/css/bootmetro-responsive.css') ?>"/>
        <link rel="stylesheet" href="<?php echo asset('assets/css/design.css') ?>"/>
    </head>
    <body>

        <header id="header">
            <div class="container-fluid">
                <div class="row-fluid">

                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3 pull-right clearfix" id="right">
                    <ul class="nav metro-nav-list">
                        <li class="nav-header">Property Management</li>
                        <li>
                            <a href="#">Tenant</a>
                            <ul class="nav">
                                <li><a href="#">Guest List </a></li>
                                <li><a href="#">Tenant List </a></li>
                                <li><a href="#">Add new tenant </a></li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="#">Property</a>
                            <ul class="nav">
                                <li><a href="{{ URL::action('Property\Property\PropertyController@getList') }}">List Properties</a></li>
                                <li><a href="{{ URL::action('Property\Property\PropertyController@getAdd') }}">Add Property</a></li>
                                <li><a href="{{ URL::action('Property\Unit\UnitController@getList') }}">List Units</a></li>
                                <li><a href="{{ URL::action('Property\Unit\UnitController@getAdd') }}">Add Units</a></li>
                                <li><a href="#">Owner Lists</a></li>
                                <li><a href="#">Add New Owner</a></li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="#">Work Order</a>
                            <ul class="nav">
                                <li><a href="#">New Work Order</a></li>
                                <li><a href="#">Work Order List</a></li>
                                <li><a href="#">New Recurring Work Order</a></li>
                                <li><a href="#">Recurring Work Order List</a></li>
                                <li><a href="#">Vendor List</a></li>
                                <li><a href="#">New Vendor</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="span9 clearfix" id="left">
                    @yield('content')
                </div>
            </div>
        </div>

    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.10.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/modernizr-2.6.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    </body>
</html>