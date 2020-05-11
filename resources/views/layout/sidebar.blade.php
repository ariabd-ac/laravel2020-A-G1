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
                            <a href="app-email.html" class="" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
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
                        <li class="nav-small-cap">Pegawai</li>
                        <li> <a class="" href="/guru" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Data Guru</span></a></li>
                        <li> <a class="" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Data Staff dan TU</span></a></li>
                        
                        
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">Siswa</li>
                        <li> <a class="" href="/siswa" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Data Siswa</span></a></li>


                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">Sekolah</li>
                        <li> <a class="" href="/mapel" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Data Mapel</span></a></li>
                        

                    </ul>

                </nav>

                <!-- End Sidebar navigation -->

            </div>

            <!-- End Sidebar scroll-->

        </aside>