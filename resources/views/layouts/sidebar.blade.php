<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="app-assets/images/backgrounds/02.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html">
                    <img class=""  width="77px" alt="admin logo" src="{{asset('app-assets/images/logo/prasetia1.png')}}" />
                        <h3 class="brand-text">Page Admin</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="navigation-background"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item {{ Request::routeIs('#') ?  'open' : '' }}"><a href="index.html"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dash Corp</span><span class="badge badge badge-info badge-pill float-right mr-2">3</span></a>
                    <ul class="menu-content">
                        <li class="{{ Request::routeIs('corp.index') ?  'active' : '' }}"><a class="menu-item" href="{{ route('corp.index') }}">Corporate</a>
                        </li>
                        <li class=""><a class="menu-item" href="dashboard-analytics.html">Analytics</a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item {{ Request::routeIs('#') ?  'open' : '' }}"><a href="index.html"><i class="ft-home"></i><span class="menu-title" data-i18n="">Highchart</span></a>
                    <ul class="menu-content">
                        <li class="{{ Request::routeIs('hcrev.index') ?  'active' : '' }}"><a class="menu-item" href="{{ route('hcrev.index') }}">Revenue</a>
                        </li>
                        <li class="{{ Request::routeIs('hcpo.index') ?  'active' : '' }}"><a class="menu-item" href="{{ route('hcpo.index') }}">Purchase Order</a>
                        </li>
                    </ul>
                </li>
                
                <!-- Role Admin -->
                @role('admin')
                <li class=" nav-item {{ Request::routeIs('admin.roles.index') ?  'has-sub open' : '' }}"><a href="{{ route('admin.roles.index') }}" ><i class="ft-info"></i><span class="menu-title" data-i18n="">Roles</span></a>
                <li class=" nav-item nav-item {{ Request::routeIs('admin.permissions.index') ?  'has-sub open' : '' }}"><a href="{{ route('admin.permissions.index') }}"><i class="ft-info"></i><span class="menu-title" data-i18n="">Permission</span></a>
                </li>
                <li class="nav-item {{ Request::routeIs('admin.users.index') ?  'has-sub open' : '' }}"><a href="{{ route('admin.users.index') }}"><i class="ft-user"></i><span class="menu-title" data-i18n="">Users</span></a>
                </li>
                <li class="nav-item {{ Request::routeIs('admin.item.kpi') ?  'has-sub open' : '' }}"><a href="{{ route('admin.item.kpi') }}"><i class="ft-server"></i><span class="menu-title" data-i18n="">Item KPI</span></a>
                </li>
                <li class="nav-item {{ Request::routeIs('admin.realization') ?  'has-sub open' : '' }}"><a href="{{ route('admin.realization') }}"><i class="ft-server"></i><span class="menu-title" data-i18n="">Realization</span></a>
                </li>
                @endrole

                
                <li class=" nav-item {{ Request::routeIs('dashboardVI.index') ?  'has-sub open' : '' }}"><a href="#"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Apps</span></a>
                    <ul class="menu-content">
                        @role('direction')
                        <li class="{{ Request::routeIs('manager.index') ?  'active' : '' }}"><a class="menu-item" href="{{ route('manager.index') }}">Manager</a>
                        </li>
                        @endrole
                        @role('manager')
                        <li class="{{ Request::routeIs('manager.index') ?  'active' : '' }}"><a class="menu-item" href="{{ route('manager.index') }}">Manager</a>
                        </li>
                        @endrole
                        @role('supervisor')
                        <li class="{{ Request::routeIs('spv.index') ?  'active' : '' }}"><a class="menu-item" href="{{ route('spv.index') }}">Supervisor</a>
                        </li>
                        @endrole
                        @role('staff')
                        <li><a class="menu-item" href="#">Staff</a>
                            <ul class="menu-content">
                                <li class="{{ Request::routeIs('staff.index') ?  'active' : '' }}"><a class="menu-item {{ Request::routeIs('staff.index') ?  'active' : '' }}" href="{{ route('staff.index') }}">Role</a>
                                </li>
                                <li class="{{ Request::routeIs('staff.biodata') ?  'active' : '' }}"><a class="menu-item {{ Request::routeIs('staff.biodata') ?  'active' : '' }}" href="{{ route('staff.biodata') }}">Bio</a>
                                </li>
                            
                            </ul>
                        </li>
                        @endrole
                    </ul>
                </li>


                <li class=" nav-item {{ Request::routeIs('dashboardVI.index') ?  'has-sub open' : '' }}"><a href="#"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Aging</span></a>
                    <ul class="menu-content">
                        <li class="{{ Request::routeIs('admin.aging') ?  'active' : '' }}"><a class="menu-item" href="{{ route('admin.aging') }}">Import</a>
                        </li>
                        
                    </ul>
                </li>



                <li class=" nav-item"><a href="#"><i class=""></i><span class="menu-title" data-i18n="">{{Auth::user()->name}}</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="invoice-template.html"><form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>