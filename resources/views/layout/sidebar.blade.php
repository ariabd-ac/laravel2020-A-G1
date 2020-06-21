<aside class="left-sidebar">

            <!-- Sidebar scroll-->

            <div class="scroll-sidebar">

                <!-- User profile -->

                <div class="user-profile">

                    <!-- User profile image -->

                    <div class="profile-img"> <img src="{{asset('images/users/profile.png')}}" alt="user" />

                        <!-- this is blinking heartbit-->

                        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>

                    </div>

                    <!-- User profile text-->

                    <div class="profile-text">

                        <h5>{{ Auth::user()->name }}</h5>
                        
                        <div>

                            <a href="{{route('password.change')}}" class="mdi mdi-settings" title="Ganti password"></a>
                            <a href="http://mail.google.com/" class="" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                        </div>



                        <div>

                            <a href="{{ route('logout') }}" class="" data-toggle="tooltip" title="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                            </form>

                        </div>

                    </div>

                </div>

                <!-- End User profile text-->

                <!-- Sidebar navigation-->

                <nav class="sidebar-nav">

                    <ul id="sidebarnav">

                        


                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">Dashboard</li>
                        <li> <a class="" href="/home" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a></li>

                        <li class="nav-devider"></li>
                        <li class=""> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="true"><i class="fa fa-bank "></i><span class="hide-menu">Sekolah</span></a>

                            <ul aria-expanded="true" class="collapse in" style="">

                                <li> <a class="" href="/guru" aria-expanded="false"><i class="fa fa-child"></i><span class="hide-menu"> Data Guru</span></a></li>

                                <li> <a class="" href="/mapel" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu"> Data Mapel</span></a></li>
                            </ul>

                        </li>

                        
                        
                        <li class="nav-devider"></li>
                        <li class=""> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="true"><i class="fa  fa-group"></i><span class="hide-menu">Siswa</span></a>

                            <ul aria-expanded="true" class="collapse in" style="">

                                <li> <a class="" href="/siswa" aria-expanded="false"><i class="fa fa-mortar-board"></i><span class="hide-menu"> Data Siswa</span></a></li>

                                <li> <a class="" href="/walim" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu"> Data Wali Murid</span></a></li>
                            </ul>

                        </li>
  
                    </ul>

                </nav>

                <!-- End Sidebar navigation -->

            </div>

            <!-- End Sidebar scroll-->

        </aside>