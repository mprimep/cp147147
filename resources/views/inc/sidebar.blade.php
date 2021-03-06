

<!-- sidebar menu-->
<ul class="sidebar-menu" data-widget="tree">
<li class="user-profile treeview">
   <a href="index.html">
   <img src="{{asset('svg/manager.svg')}}" alt="user">
   <span>Juliya Brus</span>
   <span class="pull-right-container">
   <i class="fa fa-angle-right pull-right"></i>
   </span>
   </a>
   <ul class="treeview-menu">
      <li><a href="javascript:void()"><i class="fa fa-user mr-5"></i>My Profile </a></li>
      <li><a href="javascript:void()"><i class="fa fa-money mr-5"></i>My Balance</a></li>
      <li><a href="javascript:void()"><i class="fa fa-envelope-open mr-5"></i>Inbox</a></li>
      <li><a href="javascript:void()"><i class="fa fa-cog mr-5"></i>Account Setting</a></li>
      <li><a href="javascript:void()"><i class="fa fa-power-off mr-5"></i>Logout</a></li>
   </ul>
</li>
<li class="header nav-small-cap">PERSONAL</li>
<li {{{ (Request::is('/') ? 'class=active' : '') }}}>
   <a href="/">
   <i class="fa fa-dashboard"></i> <span>Dashboard</span>
   <span class="pull-right-container">
   <i class="fa fa-angle-right pull-right"></i>
   </span>
   </a>
</li>



<li {{{ (Request::is('projects') ? 'class=active' : '') }}}>
   <a href="/projects">
   <i class="fa fa-dashboard"></i> <span>Projets</span>
   <span class="pull-right-container">
   <i class="fa fa-angle-right pull-right"></i>
   </span>
   </a>
</li>

<li {{{ (Request::is('documents_management') ? 'class=active' : '') }}}>
   <a href="index.html">
   <i class="fa fa-dashboard"></i> <span>Espace Documents</span>
   <span class="pull-right-container">
   <i class="fa fa-angle-right pull-right"></i>
   </span>
   </a>
</li>

<li {{{ (Request::is('statistics') ? 'class=active' : '') }}}>
   <a href="index.html">
   <i class="fa fa-dashboard"></i> <span>Statistuqes</span>
   <span class="pull-right-container">
   <i class="fa fa-angle-right pull-right"></i>
   </span>
   </a>
</li>


<li {{{ (Request::is('cartography') ? 'class=active' : '') }}}>
   <a href="index.html">
   <i class="fa fa-dashboard"></i> <span>Cartographie</span>
   <span class="pull-right-container">
   <i class="fa fa-angle-right pull-right"></i>
   </span>
   </a>
</li>




</ul>
   

