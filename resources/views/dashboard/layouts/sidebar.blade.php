<!-- BEGIN: Main Menu-->

<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">


            <!-- Start Li-->
                <!--test-->
            <li
                class="nav-item {{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'Orders' ? 'active' : '' }}">
                <a href="{{ route('dashboard.orders.show') }}"><i class="la la-home"></i><span class="menu-title"
                        data-i18n="Dashboard">@lang('sidebar.home')</span></a></li>
                <!--test-->
            <!-- End Li-->


            <!-- Start Li-->
            <li
                class=" nav-item {{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'categories' ? 'active' : '' }}">
                <a href="#"><i class="la la-television"></i><span class="menu-title"
                        data-i18n="categories">@lang('sidebar.categories')</span></a>
                <ul class="menu-content">
                    <li
                        class="{{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'all_categories'? 'active': '' }}">
                        <a class="menu-item" href="{{ route('dashboard.categories.index') }}"><i></i><span
                                data-i18n="all_categories">@lang('sidebar.all_categories')</span></a></li>
                    <li
                        class="{{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'create_category'? 'active': '' }}">
                        <a class="menu-item" href="{{ route('dashboard.categories.create') }}"><i></i><span
                                data-i18n="create_category">@lang('sidebar.create_category')</span></a></li>
                </ul>
            </li>
            <!-- End Li-->

            <!-- Start Li-->
            <li
                class=" nav-item {{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'sub_categories'? 'active': '' }}">
                <a href="#"><i class="la la-television"></i><span class="menu-title"
                        data-i18n="sub_categories">@lang('sidebar.sub_categories')</span></a>
                <ul class="menu-content">
                    <li
                        class="{{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'all_sub_categories'? 'active': '' }}">
                        <a class="menu-item" href="{{ route('dashboard.sub_categories.index') }}"><i></i><span
                                data-i18n="all_sub_categories">@lang('sidebar.all_sub_categories')</span></a></li>
                    <li
                        class="{{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'create_sub_categories'? 'active': '' }}">
                        <a class="menu-item" href="{{ route('dashboard.sub_categories.create') }}"><i></i><span
                                data-i18n="create_sub_category">@lang('sidebar.create_sub_category')</span></a></li>
                </ul>
            </li>
            <!-- End Li-->

            <!-- Start Li-->
            <li
                class=" nav-item {{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'sliders' ? 'active' : '' }}">
                <a href="#"><i class="la la-television"></i><span class="menu-title"
                        data-i18n="sliders">@lang('sidebar.sliders')</span></a>
                <ul class="menu-content">
                    <li
                        class="{{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'all_sliders'? 'active': '' }}">
                        <a class="menu-item" href="{{ route('dashboard.sliders.index') }}"><i></i><span
                                data-i18n="all_sliders">@lang('sidebar.all_sliders')</span></a></li>
                    <li
                        class="{{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'create_slider'? 'active': '' }}">
                        <a class="menu-item" href="{{ route('dashboard.sliders.create') }}"><i></i><span
                                data-i18n="create_slider">@lang('sidebar.create_slider')</span></a></li>
                </ul>
            </li>
            <!-- End Li-->


            <!-- Start Li-->
            <li
                class=" nav-item {{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'materials' ? 'active' : '' }}">
                <a href="#"><i class="la la-television"></i><span class="menu-title"
                        data-i18n="materials">@lang('sidebar.materials')</span></a>
                <ul class="menu-content">
                    <li
                        class="{{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'all_materials'? 'active': '' }}">
                        <a class="menu-item" href="{{ route('dashboard.materials.index') }}"><i></i><span
                                data-i18n="all_materials">@lang('sidebar.all_materials')</span></a></li>
                    <li
                        class="{{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'create_material'? 'active': '' }}">
                        <a class="menu-item" href="{{ route('dashboard.materials.create') }}"><i></i><span
                                data-i18n="create_material">@lang('sidebar.create_material')</span></a></li>
                </ul>
            </li>
            <!-- End Li-->

            <!-- Start Li-->
            <li
                class=" nav-item {{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'prices' ? 'active' : '' }}">
                <a href="#"><i class="la la-television"></i><span class="menu-title"
                        data-i18n="prices">@lang('sidebar.prices')</span></a>
                <ul class="menu-content">
                    <li
                        class="{{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'all_prices' ? 'active' : '' }}">
                        <a class="menu-item" href="{{ route('dashboard.prices.index') }}"><i></i><span
                                data-i18n="all_prices">@lang('sidebar.all_prices')</span></a></li>
                    <li
                        class="{{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'create_prices'? 'active': '' }}">
                        <a class="menu-item" href="{{ route('dashboard.prices.create') }}"><i></i><span
                                data-i18n="create_price">@lang('sidebar.create_price')</span></a></li>
                </ul>
            </li>
            <!-- End Li-->

            <!-- Start Li-->
            <li
                class=" nav-item {{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'SectionOne' ? 'active' : '' }}">
                <a href="#"><i class="la la-television"></i><span class="menu-title"
                        data-i18n="SectionOne">@lang('sidebar.SectionOne')</span></a>
                <ul class="menu-content">
                    <li
                        class="{{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'SectionOne' ? 'active' : '' }}">
                        <a class="menu-item" href="{{ route('dashboard.SectionOne.index') }}"><i></i><span
                                data-i18n="SectionOne">@lang('sidebar.SectionOne')</span></a></li>

                </ul>
            </li>
            <!-- End Li-->

                <!-- Start Li-->
                <li
                class=" nav-item {{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'products' ? 'active' : '' }}">
                <a href="#"><i class="la la-television"></i><span class="menu-title"
                        data-i18n="products">@lang('sidebar.products')</span></a>
                <ul class="menu-content">
                    <li
                        class="{{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'all_products' ? 'active' : '' }}">
                        <a class="menu-item" href="{{ route('dashboard.products.index') }}"><i></i><span
                                data-i18n="all_products">@lang('sidebar.all_products')</span></a></li>
                    <li
                        class="{{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'create_products'? 'active': '' }}">
                        <a class="menu-item" href="{{ route('dashboard.products.create') }}"><i></i><span
                                data-i18n="create_products">@lang('sidebar.create_products')</span></a></li>
                </ul>
            </li>
            <!-- End Li-->
            <li
            class="nav-item {{ trim($__env->yieldContent('active')) && trim($__env->yieldContent('active')) == 'settings' ? 'active' : '' }}">
            <a href="{{ route('dashboard.settings.index') }}"><i class="la la-home"></i><span class="menu-title"
                    data-i18n="Dashboard">@lang('sidebar.settings')</span></a></li>
        </ul>
    </div>
</div>

<!-- END: Main Menu-->
