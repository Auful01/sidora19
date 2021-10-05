    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
           <!--  <div class="profile-userpic">
                <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
            </div> -->
            <div class="profile-usertitle">
                {{-- {{Auth::user()->name}} --}}
                <div class="profile-usertitle-name"></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <form role="search">
            <div class="form-group">
               Menu Admin
            </div>
        </form>
        <ul class="nav menu">
            @php $act = Session::get('menu'); @endphp
            <li class="{{Request::segment(1) == 'home' ? 'active' : ''}}"><a href="{{url('home')}}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li class="{{Request::segment(1) == 'hospital' ? 'active' : ''}}"><a href="{{url('hospital')}}"><em class="fa fa-hospital-o">&nbsp;</em> Rumah Sakit </a></li>
           <!--  <li class="{{ ( $act == 'bank') ? 'active' : ''}}"><a  href="{{url('bank')}}"><em class="fa fa-dot-circle-o">&nbsp;</em> Bank</a></li> -->
           <!--   <li class="{{ ( $act == 'receiver') ? 'active' : ''}}"><a href="{{url('receiver')}}">
                <em class="fa fa-dot-circle-o">&nbsp;</em> Receiver</a></li> -->
           <!--  <li class="{{ ( $act == 'donation') ? 'active' : ''}}"><a href="{{url('donation')}}">
                <em class="fa fa-dot-circle-o">&nbsp;</em> Pendonor </a></li> -->
           <!--  <li class="{{ ( $act == 'contributor') ? 'active' : ''}}"><a href="{{url('contributor')}}"><em class="fa fa-dot-circle-o">&nbsp;</em> Donor</a></li> -->

           <!--  <li class="{{ ( $act == 'transaction') ? 'active' : ''}}"><a href="{{url('transaction')}}"><em class="fa fa-dot-circle-o">&nbsp;</em>Donation Activity</a></li> -->
            <!--  <li class="{{ ( $act == 'report') ? 'active' : ''}}"><a href="{{url('/report')}}"><em class="fa fa-dot-circle-o">&nbsp;</em> Report </a></li> -->
            <li class="{{Request::segment(1) == 'donor' ? 'active' : ''}}"><a href="{{route("donor.index")}}"><em class="fa fa-tint">&nbsp;&nbsp;</em>Pendonor</a></li>
            <li>
                <form id="logout-form" action="{{ url('log_out_admin') }}"
                 method="POST" style="display: none;">@csrf </form>
                <a style="cursor: pointer;" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <em class="fa fa-power-off">&nbsp;
                    </em> 
                Logout
            </a></li>
        </ul>
    </div><!--/.sidebar-->