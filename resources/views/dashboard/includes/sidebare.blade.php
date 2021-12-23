<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow "
        data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main"
                id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item">
                <a href="{{route('admin.dashboard')}}">
                    <i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">
                        Dashboard
                    </span>
                </a>
            </li>
            {{-- {{request()->is('admin/main_categories') ? 'open-menu' : ''}} --}}
            <li class="nav-item">
                <a href="#">
                    <i class="ft-align-justify"></i>
                    <span class="menu-title" data-i18n="nav.templates.main">
                        Main Category
                    </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{\App\Models\Category::count()}}
                    </span>
                </a>

                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="#" data-i18n="nav.templates.vert.main">
                            All Main Category
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a class="menu-item" href="{{route('admin.maincategories')}}">
                                    View All
                                </a>
                            </li>

                            <li>
                                <a class="menu-item" href="{{route('admin.maincategories.create')}}">
                                    Add New
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#">
                    <i class="ft-align-justify"></i>
                    <span class="menu-title" data-i18n="nav.templates.main">
                        Brands
                    </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{\App\Models\Brand::count()}}
                    </span>
                </a>

                <ul class="menu-content">
                    <li>
                        <a class="menu-item"
                            href="#"
                            data-i18n="nav.templates.vert.main">
                            All brands
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a class="menu-item"
                                    href="{{route('admin.brands')}}">
                                    View All
                                </a>
                            </li>

                            <li>
                                <a class="menu-item" href="{{route('admin.brands.create')}}">
                                    Add New
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a href="#">
                    <i class="la la-briefcase"></i>
                    <span class="menu-title" data-i18n="nav.project.main">Tags</span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{\App\Models\Tag::count()}}
                    </span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item"
                            href="{{route('admin.tags')}}"
                            data-i18n="nav.project.project_summary">
                            View All
                        </a>
                    </li>

                    <li>
                        <a class="menu-item"
                            href="{{route('admin.tags.create')}}"
                            data-i18n="nav.project.project_tasks">
                            Add New
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#">
                    <i class="ft-align-justify"></i>
                    <span class="menu-title" data-i18n="nav.templates.main">
                        Product
                    </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{\App\Models\Product::count()}}
                    </span>
                </a>

                <ul class="menu-content">
                    <li>
                        <a class="menu-item"
                            href="#"
                            data-i18n="nav.templates.vert.main">
                            All Product
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a class="menu-item"
                                    href="{{route('admin.products')}}">
                                    View All
                                </a>
                            </li>

                            <li>
                                <a class="menu-item"
                                    href="{{route('admin.products.general.create')}}">
                                    Add New
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#">
                    <i class="ft-align-justify"></i>
                    <span class="menu-title" data-i18n="nav.templates.main">
                        Attributes
                    </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{\App\Models\Attribute::count()}}
                    </span>
                </a>

                <ul class="menu-content">
                    <li>
                        <a class="menu-item"
                            href="#"
                            data-i18n="nav.templates.vert.main">
                            All Attributes
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a class="menu-item"
                                    href="{{route('admin.attributes')}}">
                                    View All
                                </a>
                            </li>

                            <li>
                                <a class="menu-item"
                                    href="{{route('admin.attributes.create')}}">
                                    Add New
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#">
                    <i class="ft-align-justify"></i>
                    <span class="menu-title" data-i18n="nav.templates.main">
                        Options
                    </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{\App\Models\Option::count()}}
                    </span>
                </a>

                <ul class="menu-content">
                    <li>
                        <a class="menu-item"
                            href="#"
                            data-i18n="nav.templates.vert.main">
                            All Options
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a class="menu-item"
                                    href="{{route('admin.options')}}">
                                    View All
                                </a>
                            </li>

                            <li>
                                <a class="menu-item"
                                    href="{{route('admin.options.create')}}">
                                    Add New
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#">
                    <i class="ft-align-justify"></i>
                    <span class="menu-title" data-i18n="nav.templates.main">
                        Sliders
                    </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{\App\Models\Slider::count()}}
                    </span>
                </a>

                <ul class="menu-content">
                    {{-- {{route('admin.sliders')}} --}}
                    <li>
                        <a class="menu-item"
                            href="{{route('admin.sliders')}}">
                            View All
                        </a>
                    </li>

                    <li>
                        <a class="menu-item"
                            href="{{route('admin.sliders.create')}}"
                            data-i18n="nav.templates.vert.main">
                            Add New Sliders
                        </a>

                    </li>
                </ul>
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


