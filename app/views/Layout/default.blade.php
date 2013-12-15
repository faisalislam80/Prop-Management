<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo asset('assets/css/default.css') ?>"/>
    </head>
    <body>
        <section id="main-content">
            @yield('content')
        </section>
        <aside id="right-side">
            <ul>
                <li>
                    Tenant
                </li>
                <li>
                    Property
                    <ul>
                        <li><a href="{{ URL::action('Property\Property\PropertyController@getList') }}">List Properties</a></li>
                        <li><a href="{{ URL::action('Property\Property\PropertyController@getAdd') }}">Add Property</a></li>
                        <li><a href="{{ URL::action('Property\Unit\UnitController@getList') }}">List Units</a></li>
                        <li><a href="{{ URL::action('Property\Unit\UnitController@getAdd') }}">Add Units</a></li>
                    </ul>
                </li>
                <li>Work Order</li>
            </ul>
        </aside>
    </body>
</html>