<div class="utf_dashboard_navigation js-scrollbar">
    <div class="utf_dashboard_navigation_inner_block">
        <ul>
            <li class="{{ trim($__env->yieldContent('active')) &&  trim($__env->yieldContent('active'))== 'home' ? 'active' : ''}} "  ><a href="{{route("dashboard.home")}}"><i class="sl sl-icon-layers"></i> @lang("sidebar.home")</a></li>

            <li class="{{ trim($__env->yieldContent('active')) &&  trim($__env->yieldContent('active'))== 'categories' ? 'active' : ''}}">
                <a href="#"><i class="sl sl-icon-plus"></i> @lang('sidebar.categories')</a>
                <ul>
                    <li><a href="{{route("dashboard.categories.index")}}">@lang('sidebar.all_categories')</a></li>
                    <li><a href="{{route("dashboard.categories.create")}}">@lang('sidebar.create_category')</a></li>
                </ul>
            </li>

            <li class="{{ trim($__env->yieldContent('active')) &&  trim($__env->yieldContent('active'))== 'subCategories' ? 'active' : ''}}">
                <a href="#"><i class="sl sl-icon-plus"></i> @lang('sidebar.sub_categories')</a>
                <ul>
                    <li><a href="{{route("dashboard.sub_categories.index")}}">@lang('sidebar.all_sub_categories')</a></li>
                    <li><a href="{{route("dashboard.sub_categories.create")}}">@lang('sidebar.create_sub_category')</a></li>
                </ul>
            </li>
            <li class="{{ trim($__env->yieldContent('active')) &&  trim($__env->yieldContent('active'))== 'amenities' ? 'active' : ''}}">
                <a href="#"><i class="sl sl-icon-plus"></i> @lang('sidebar.amenities')</a>
                <ul>
                    <li><a href="{{route("dashboard.amenities.index")}}">@lang('sidebar.all_amenities')</a></li>
                    <li><a href="{{route("dashboard.amenities.create")}}">@lang('sidebar.create_amenity')</a></li>
                </ul>
            </li>


            <li class="{{ trim($__env->yieldContent('active')) &&  trim($__env->yieldContent('active'))== 'countries' ? 'active' : ''}}">
                <a href="#"><i class="sl sl-icon-plus"></i> @lang('sidebar.countries')</a>
                <ul>
                    <li><a href="{{route("dashboard.countries.index")}}">@lang('sidebar.all_countries')</a></li>
                    <li><a href="{{route("dashboard.countries.create")}}">@lang('sidebar.create_country')</a></li>
                </ul>
            </li>

            <li class="{{ trim($__env->yieldContent('active')) &&  trim($__env->yieldContent('active'))== 'cities' ? 'active' : ''}}">
                <a href="#"><i class="sl sl-icon-plus"></i> @lang('sidebar.cities')</a>
                <ul>
                    <li><a href="{{route("dashboard.cities.index")}}">@lang('sidebar.all_cities')</a></li>
                    <li><a href="{{route("dashboard.cities.create")}}">@lang('sidebar.create_city')</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="sl sl-icon-layers"></i> My Listings</a>
                <ul>
                    <li><a href="dashboard_my_listing.html">Active <span class="nav-tag green">10</span></a></li>
                    <li><a href="dashboard_my_listing.html">Pending <span class="nav-tag yellow">4</span></a></li>
                    <li><a href="dashboard_my_listing.html">Expired <span class="nav-tag red">8</span></a></li>
                </ul>
            </li>
            <li><a href="dashboard_bookings.html"><i class="sl sl-icon-docs"></i> Bookings</a></li>
            <li><a href="dashboard_messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
            <li><a href="dashboard_wallet.html"><i class="sl sl-icon-wallet"></i> Wallet</a></li>
            <li>
                <a href="#"><i class="sl sl-icon-star"></i> Reviews</a>
                <ul>
                    <li><a href="dashboard_visitor_review.html">Visitor Reviews <span class="nav-tag green">4</span></a></li>
                    <li><a href="dashboard_submitted_review.html">Submitted Reviews <span class="nav-tag yellow">5</span></a></li>
                </ul>
            </li>
            <li><a href="dashboard_bookmark.html"><i class="sl sl-icon-heart"></i> Bookmark</a></li>
            <li><a href="dashboard_my_profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
            <li><a href="dashboard_change_password.html"><i class="sl sl-icon-key"></i> Change Password</a></li>
            <li><a href="index_1.html"><i class="sl sl-icon-power"></i> Logout</a></li>
        </ul>
    </div>
</div>
