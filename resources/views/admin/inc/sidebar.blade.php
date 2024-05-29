<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-category">Main Menu</li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('admin/users') }}">
        <i class="menu-icon typcn typcn-shopping-bag"></i>
        <span class="menu-title">Users</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/products') }}">
        <i class="menu-icon typcn typcn-th-large-outline"></i>
        <span class="menu-title">Products</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin.orders.index') }}">
        <i class="menu-icon typcn typcn-bell"></i>
        <span class="menu-title">Orders</span>
      </a>
    </li>
  </ul>
</nav>
