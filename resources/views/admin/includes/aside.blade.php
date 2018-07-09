<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Home </span>
                </a>
            </li>


            <li class="">
                <a href="{{url('/admin/category')}}">
                    <i class="fa fa-folder-open"></i> <span>Category </span>
                </a>
            </li>



            <li class="">
                <a href="{{url('/admin/slider')}}">
                    <i class="fa fa-plane"></i> <span>Slider </span>
                </a>
            </li>



            <li class="">
                <a href="{{url('/admin/trip')}}">
                    <i class="fa fa-plane"></i> <span>Trip </span>
                </a>
            </li>
            <li class="">
                <a href="{{url('/admin/bulid-trip')}}">
                    <i class="fa fa-plane"></i> <span>Bulid-Trips</span>
                </a>
            </li>
            <li class="">
                <a href="{{url('/admin/transfer')}}">
                    <i class="fa fa-plane"></i> <span>Transfer</span>
                </a>
            </li>


            <li class="">
                <a href="{{url('/admin/manager')}}">
                    <i class="fa fa-users"></i> <span>Manager </span>
                </a>
            </li>

            <li class="">
                <a href="{{url('/admin/advantage')}}">
                    <i class="fa fa-users"></i> <span>Advantage </span>
                </a>
            </li>


            <li class="">
                <a href="{{url('/admin/role')}}">
                    <i class="fa fa-folder-open"></i> <span>Role </span>
                </a>
            </li>

            <li class="">
                <a href="{{url('/admin/permission')}}">
                    <i class="fa fa-folder-open"></i> <span>Permission </span>
                </a>
            </li>

            <li class="">
                <a href="{{url('/admin/setting')}}">
                    <i class="fa fa-plane"></i> <span>Site Setting </span>
                </a>
            </li>



        </ul>
    </section>
    <!-- /.sidebar -->
</aside>