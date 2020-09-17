    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php 
              echo Session::get('userName');
           ?>
           </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>           
          </a>         
        </li>



        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addCategory.php"><i class="fa fa-circle-o"></i>Category Add</a></li>
            <li><a href="categorylist.php"><i class="fa fa-circle-o"></i> Category List</a></li>         
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Brand</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addBrand.php"><i class="fa fa-circle-o"></i>Brand Add</a></li>
            <li><a href="brandlist.php"><i class="fa fa-circle-o"></i> Brand List</a></li>         
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addSlider.php"><i class="fa fa-circle-o"></i>Add Slider</a></li>
            <li><a href="sliderList.php"><i class="fa fa-circle-o"></i> Slider List</a></li>         
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addprodcut.php"><i class="fa fa-circle-o"></i>Product Add</a></li>
            <li><a href="productlist.php"><i class="fa fa-circle-o"></i> Product List</a></li>         
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">         
            <li><a href="orderlist.php"><i class="fa fa-circle-o"></i> Order List</a></li>         
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Contacts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">         
            <li><a href="contactlist.php"><i class="fa fa-circle-o"></i> Contact List</a></li>         
          </ul>
        </li>





      </ul>
    </section>