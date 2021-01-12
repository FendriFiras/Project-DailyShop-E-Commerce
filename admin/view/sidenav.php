<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../../notre_site/admin/controller/router.php?page=dashboard&type=home&action=getall">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-direction-alt menu-icon"></i>
              <span class="menu-title">Category</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../admin/controller/router.php?page=category/addCategory">Add Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../admin/controller/router.php?page=category/category&type=category&action=getall">Manage Categorie</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-medall-alt menu-icon"></i>
              <span class="menu-title">Brand</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../admin/controller/router.php?page=brand/addBrand">Add Brand</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../admin/controller/router.php?page=brand/brand&type=brand&action=getall">Manage Brand</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-layers-alt menu-icon"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../admin/controller/router.php?page=product/addProduct">Add Products</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../admin/controller/router.php?page=product/product&type=product&action=getall">Manage Products</a></li>
              </ul>
            </div>
          </li>    
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-shopping-cart-full menu-icon"></i>
              <span class="menu-title">Orders</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
            
                <li class="nav-item"> <a class="nav-link" href="../../admin/controller/router.php?page=order/order&type=order&action=getall">Manage Orders</a></li>
              </ul>
            </div>
          </li> 
        </ul>
      </nav>