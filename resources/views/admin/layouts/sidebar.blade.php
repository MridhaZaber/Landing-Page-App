<div class="main-sidebar">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index.html">Admin Panel</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index.html"></a>
                </div>

                <ul class="sidebar-menu">

                    <li class="{{ Request::is('admin/home-banner') ? "active" : "" }} ? "><a class="nav-link" href="index.html"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>

                    <li class="nav-item dropdown active">
                        <a href="#" class="nav-link has-dropdown "><i class="fas fa-hand-point-right"></i><span>Home Page</span></a>
                        <ul class="dropdown-menu">
                        <li class="{{ Request::is('admin/home-banner') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_home_banner') }}"><i class="fas fa-angle-right"></i> Banner Section</a></li>  
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown "><i class="fas fa-hand-point-right"></i><span>Service Section</span></a>
                        <ul class="dropdown-menu">
                        <li class="{{ Request::is('admin/page/services') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin_page_services') }}"><i class="fas fa-angle-right"></i> Services Page</a></li>
                        <li class="{{ Request::is('admin/service-category/*') ? "active" : "" }}"><a class="nav-link" href="{{ route('admin.service_category_show') }}"><i class="fas fa-angle-right"></i> Category</a></li>
                        </ul>
                    </li>

                    <li class=""><a class="nav-link" href="setting.html"><i class="fas fa-hand-point-right"></i> <span>Setting</span></a></li>

                    <li class=""><a class="nav-link" href="form.html"><i class="fas fa-hand-point-right"></i> <span>Form</span></a></li>

                    <li class=""><a class="nav-link" href="table.html"><i class="fas fa-hand-point-right"></i> <span>Table</span></a></li>

                    <li class=""><a class="nav-link" href="invoice.html"><i class="fas fa-hand-point-right"></i> <span>Invoice</span></a></li>

                </ul>
            </aside>
        </div>