<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item">
                <a href="{{route('admin.dashboard')}}">
                    <i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">
                        {{__('admin/sidebar.Dashboard')}}
                    </span>
                </a>
            </li>
            {{-- {{request()->is('admin/main_categories') ? 'open-menu' : ''}} --}}

            <li class=" nav-item">
                <a href="{{route('admin.maincategories')}}">
                    <i class="ft-align-justify"></i>
                    <span class="menu-title" data-i18n="Dashboard">
                        {{__('admin/categories.Categories')}}
                    </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{\App\Models\Category::count()}}
                    </span>
                </a>

                <ul class="menu-content">

                    <li>
                        <a class="menu-item" href="{{route('admin.maincategories')}}">
                            <i></i><span data-i18n="Crypto">
                                {{__('admin/sidebar.Mains Sections')}}
                            </span>
                        </a>
                    </li>

                    <li>
                        <a class="menu-item" href="{{route('admin.maincategories.create')}}">
                            <i></i><span data-i18n="Sales">
                                {{__('admin/sidebar.Add Main Section')}}
                            </span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item">
                <a href="{{route('admin.brands')}}">
                    <i class="ft-align-justify"></i>
                    <span class="menu-title" data-i18n="Dashboard">
                        {{__('admin/sidebar.Brands')}}
                    </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{\App\Models\Brand::count()}}
                    </span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('admin.tags')}}">
                    <i class="ft-align-justify"></i>
                    <span class="menu-title" data-i18n="Dashboard">
                        {{__('admin/sidebar.Tags')}}
                    </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{\App\Models\Tag::count()}}
                    </span>
                </a>
            </li>

            <li class=" nav-item">
                <a href="{{route('admin.products')}}">
                    <i class="ft-align-justify"></i>
                    <span class="menu-title" data-i18n="Dashboard">
                        {{__('admin/sidebar.Products')}}
                    </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{\App\Models\Product::count()}}
                    </span>
                </a>

                <ul class="menu-content">

                    <li class="active">
                        <a class="menu-item" href="{{route('admin.products')}}">
                            <i></i><span data-i18n="Crypto">
                                {{__('admin/sidebar.All Products')}}
                            </span>
                        </a>
                    </li>

                    <li class="active">
                        <a class="menu-item" href="{{route('admin.products.general.create')}}">
                            <i></i><span data-i18n="Sales">
                                {{__('admin/sidebar.Add Product')}}
                            </span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
                <a href="{{route('admin.attributes')}}">
                    <i class="ft-align-justify"></i>
                    <span class="menu-title" data-i18n="Dashboard">
                        {{__('admin/sidebar.Attributes')}}
                    </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{\App\Models\Attribute::count()}}
                    </span>
                </a>
            </li>

            <li class=" nav-item">
                <a href="{{route('admin.options')}}">
                    <i class="ft-align-justify"></i>
                    <span class="menu-title" data-i18n="Dashboard">
                        {{__('admin/sidebar.Options')}}
                    </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{\App\Models\Option::count()}}
                    </span>
                </a>

                <ul class="menu-content">

                    <li>
                        <a class="menu-item" href="{{route('admin.options')}}">
                            <i></i><span data-i18n="Crypto">
                                {{__('admin/sidebar.All Options')}}
                            </span>
                        </a>
                    </li>

                    <li>
                        <a class="menu-item" href="{{route('admin.options.create')}}">
                            <i></i><span data-i18n="Sales">
                                {{__('admin/sidebar.Add Options')}}
                            </span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item">
                <a href="{{route('admin.sliders')}}">
                    <i class="ft-align-justify"></i>
                    <span class="menu-title" data-i18n="Dashboard">
                        {{__('admin/sidebar.Sliders')}}
                    </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{\App\Models\Slider::count()}}
                    </span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('admin.subsliders')}}">
                    <i class="ft-align-justify"></i>
                    <span class="menu-title" data-i18n="Dashboard">
                        {{__('admin/sidebar.Sub Sliders')}}
                    </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{\App\Models\Subslider::count()}}
                    </span>
                </a>
            </li>

            <li class=" nav-item">
                <a href="{{route('admin.sections')}}">
                    <i class="ft-align-justify"></i>
                    <span class="menu-title" data-i18n="Dashboard">
                        {{__('admin/sidebar.Sections')}}
                    </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{\App\Models\Section::count()}}
                    </span>
                </a>
            </li>

            <li class="nav-item">
                <a href="#">
                    <i class="la la-cog"></i>
                    <span class="menu-title" data-i18n="nav.templates.main">
                        {{__('admin/sidebar.settings')}}
                    </span>
                </a>

                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="#" data-i18n="nav.templates.vert.main">
                            {{__('admin/sidebar.Means Delivery')}}
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a class="menu-item" href="{{route('edit.shippings.methods', 'free')}}">
                                    {{__('admin/sidebar.Free Delivery')}}
                                </a>
                            </li>

                            <li>
                                <a class="menu-item" href="{{route('edit.shippings.methods','inner')}}">
                                    {{__('admin/sidebar.Internal Delivery')}}
                                </a>
                            </li>

                            <li>
                                <a class="menu-item" href="{{route('edit.shippings.methods','outer')}}">
                                    {{__('admin/sidebar.External Delivery')}}
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>



        </ul>
    </div>
</div>


