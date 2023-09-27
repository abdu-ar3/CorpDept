<!-- BEGIN: Main Menu-->
<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper">
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-home"></i><span>Dashboard</span></a>
                    <ul class="dropdown-menu">
                        <div class="arrow_box">
                            <li data-menu=""><a class="dropdown-item" href="" data-toggle="dropdown">2022</a>
                            <li data-menu=""><a class="dropdown-item" href="" data-toggle="dropdown">2023</a>
                            </li>
                            <!-- <li class="active" data-menu=""><a class="dropdown-item" href="dashboard-analytics.html" data-toggle="dropdown">Analytics</a>
                            </li> -->
                        </div>
                    </ul>
                </li>
                
                <!-- <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-grid"></i><span>Tables</span></a>
                    <ul class="dropdown-menu">
                        <div class="arrow_box">
                            <li data-menu=""><a class="dropdown-item" href="table-bootstrap.html" data-toggle="dropdown">Bootstrap Tables</a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">DataTables</a>
                                <ul class="dropdown-menu">
                                    <div class="arrow_box">
                                        <li data-menu=""><a class="dropdown-item" href="dt-basic-initialization.html" data-toggle="dropdown">Basic Initialisation</a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-styling.html" data-toggle="dropdown">Styling</a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-data-sources.html" data-toggle="dropdown">Data Sources</a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-advanced-initialization.html" data-toggle="dropdown">Advanced initialisation</a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="dt-api.html" data-toggle="dropdown">API</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </div>
                    </ul>
                </li> -->
                <!-- <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-bar-chart-2"></i><span>Charts</span></a>
                    <ul class="dropdown-menu">
                        <div class="arrow_box">
                            <li data-menu=""><a class="dropdown-item" href="chartist-charts.html" data-toggle="dropdown">Chartist</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="chartjs-charts.html" data-toggle="dropdown">Chartjs</a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Maps</a>
                                <ul class="dropdown-menu">
                                    <div class="arrow_box">
                                        <li data-menu=""><a class="dropdown-item" href="google-maps.html" data-toggle="dropdown">Google Maps</a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="jvector-maps.html" data-toggle="dropdown">jVector Map</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </div>
                    </ul>
                </li> -->
                
                <!-- Testing -->
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="" data-toggle="dropdown"><i class="ft-bar-chart"></i><span>KPI Corporate</span></a>
                    <ul class="dropdown-menu">
                        <div class="arrow_box">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Revenue</a>
                                <ul class="dropdown-menu">
                                    <div class="arrow_box">
                                        <li data-menu=""><a class="dropdown-item" href="" data-toggle="dropdown">2022</a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="" data-toggle="dropdown">2023</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Purchase Order</a>
                                <ul class="dropdown-menu">
                                    <div class="arrow_box">
                                        <li data-menu=""><a class="dropdown-item" href="" data-toggle="dropdown">2022</a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="" data-toggle="dropdown">2023</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </div>
                    </ul>
                </li>

                @can('admin')
                <!-- User Management -->
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="" data-toggle="dropdown"><i class="ft-users"></i><span>User</span></a>
                    <ul class="dropdown-menu">
                        <div class="arrow_box">
                            <li data-menu=""><a class="dropdown-item" href="" data-toggle="dropdown">Export & Import Users</a>
                            </li>
                            
                            <li data-menu=""><a class="dropdown-item" href="" data-toggle="dropdown">Users Akses</a>
                        </div>
                    </ul>
                </li>
                @endcan
                

        
                
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" 
                href="" data-toggle="dropdown"><i class="ft-server"></i><span>Aging Project</span></a>
                    <ul class="dropdown-menu">
                        <div class="arrow_box">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Data Aging Project</a>
                                <ul class="dropdown-menu">
                                    <div class="arrow_box">
                                        </li>
                                        <li data-menu=""><a class="dropdown-item" href="" data-toggle="dropdown">2023</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                          
                          
                            <li data-menu=""><a class="dropdown-item" href=" 
                            " data-toggle="dropdown">Status Aging</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href=" 
                            " data-toggle="dropdown">Aging Comment</a>
                            </li>
                        </div>
                    </ul>
                </li>
                
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" 
                href="" data-toggle="dropdown"><i class="ft-codepen"></i><span>KPI Dept</span></a>
                    <ul class="dropdown-menu">
                        <div class="arrow_box">
                            <li data-menu=""><a class="dropdown-item" href="https://kpi.prasetia.co.id/" data-toggle="dropdown">KPI Dept</a>
                            </li>
                         
                        </div>
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->