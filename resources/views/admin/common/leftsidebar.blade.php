<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
			{!! Html::image('admintheme/dist/img/user2-160x160.jpg','User Image',array('class'=>'img-circle')) !!}
            </div>
            <div class="pull-left info">
              <p>{!! Auth::user()->name !!}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview {!! ($activeClass['parent'] =='dashboard' ? 'active': '') !!}">
              <a href="{{ url('/dashboard') }}" >
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
            </li>
			<li class="treeview {!! ($activeClass['parent'] =='client' ? 'active': '') !!}">
              <a href="#">
                <i class="fa fa-dashboard"></i>
                <span>Client Management</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
				<li class="{!! ($activeClass['child'] =='client/create' ? 'active': '') !!}"><a href="{{ url('client/create') }}"><i class="fa fa-circle-o"></i> Add Client</a></li>
                <li class="{!! ($activeClass['child'] =='client/index' ? 'active': '') !!}"><a href="{{ url('client/index') }}"><i class="fa fa-circle-o"></i> Client List</a></li>
              </ul>
            </li>
			<li class="treeview {!! ($activeClass['parent'] =='user' ? 'active': '') !!}">
              <a href="#">
                <i class="fa fa-dashboard"></i>
                <span>User Management</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="{!! ($activeClass['child'] =='user/create' ? 'active': '') !!}"><a href="{{ url('user/create') }}"><i class="fa fa-circle-o"></i> Add User</a></li>
				<li class="{!! ($activeClass['child'] =='user/index' ? 'active': '') !!}"><a href="{{ url('user/index') }}"><i class="fa fa-circle-o"></i> User List</a></li>
              </ul>
            </li>
            <li class="treeview {!! ($activeClass['parent'] =='product' ? 'active': '') !!}">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Product Management</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="{!! ($activeClass['child'] =='product/create' ? 'active': '') !!}"><a href="{{ url('product/create') }}"><i class="fa fa-circle-o"></i> Add Product</a></li>
                <li class="{!! ($activeClass['child'] =='product/index' ? 'active': '') !!}"><a href="{{ url('product/index') }}"><i class="fa fa-circle-o"></i> Product List</a></li>
              </ul>
            </li>
            <li class="treeview {!! ($activeClass['parent'] =='category' ? 'active': '') !!}">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Category Management</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="{!! ($activeClass['child'] =='category/create' ? 'active': '') !!}"><a href="{{ url('category/create') }}"><i class="fa fa-circle-o"></i> Add Category</a></li>
                <li class="{!! ($activeClass['child'] =='subcategory/create' ? 'active': '') !!}"><a href="{{ url('subcategory/create') }}"><i class="fa fa-circle-o"></i> Add Sub Category</a></li>
                <li class="{!! ($activeClass['child'] =='category/index' ? 'active': '') !!}"><a href="{{ url('category/index') }}"><i class="fa fa-circle-o"></i> Category List</a></li>
                <li class="{!! ($activeClass['child'] =='subcategory/index' ? 'active': '') !!}"><a href="{{ url('subcategory/index') }}"><i class="fa fa-circle-o"></i> Sub Category List</a></li>
              </ul>
            </li>
			<li class="treeview {!! ($activeClass['parent'] =='page' ? 'active': '') !!}">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Pages Management</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="{!! ($activeClass['child'] =='page/create' ? 'active': '') !!}"><a href="{{ url('page/create') }}"><i class="fa fa-circle-o"></i> Add Page</a></li>
                <li class="{!! ($activeClass['child'] =='page/index' ? 'active': '') !!}"><a href="{{ url('page/index') }}"><i class="fa fa-circle-o"></i> Page List</a></li>
              </ul>
            </li>
			<li class="treeview {!! ($activeClass['parent'] =='order' ? 'active': '') !!}">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Order Management</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="{!! ($activeClass['child'] =='order/index' ? 'active': '') !!}"><a href="{{ url('order/index') }}"><i class="fa fa-circle-o"></i> Order List</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Examples</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
              </ul>
            </li>
              <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

