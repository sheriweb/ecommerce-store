<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        @php
        $imgPath = '/admin-side/feather/';
        @endphp
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="#dashboard" data-active="true" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <img src="{{asset($imgPath .'home.svg')}}" class="sidebar-icon">
                        <span>Dashboard</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled show" id="dashboard" data-parent="#accordionExample">
                    <li class="active">
                        <a href="index-2.html"> Sales </a>
                    </li>
                    <li>
                        <a href="index2.html"> Analytics </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <img src="{{asset($imgPath .'cpu.svg')}}" class="sidebar-icon">
                        <span>Apps</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="app" data-parent="#accordionExample">
                    <li>
                        <a href="apps_chat.html"> Chat </a>
                    </li>
                    <li>
                        <a href="apps_mailbox.html"> Mailbox  </a>
                    </li>
                    <li>
                        <a href="#appInvoice" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Invoice <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="appInvoice" data-parent="#app">
                            <li>
                                <a href="apps_invoice-list.html"> List </a>
                            </li>
                            <li>
                                <a href="apps_invoice-preview.html"> Preview </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="apps_calendar.html"> Calendar </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <img src="{{asset($imgPath .'box.svg')}}" class="sidebar-icon">
                        <span>Components</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="components" data-parent="#accordionExample">
                    <li>
                        <a href="component_tabs.html"> Tabs </a>
                    </li>
                    <li>
                        <a href="component_accordion.html"> Accordions  </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <img src="{{asset($imgPath .'zap.svg')}}" class="sidebar-icon">
                        <span>Elements</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="elements" data-parent="#accordionExample">
                    <li>
                        <a href="element_alerts.html"> Alerts </a>
                    </li>
                    <li>
                        <a href="element_avatar.html"> Avatar </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="fonticons.html" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <img src="{{asset($imgPath .'target.svg')}}" class="sidebar-icon">
                        <span>Font Icons</span>
                    </div>
                </a>
            </li>
        </ul>

    </nav>

</div>