<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('AdminLTE-2.4.5/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Jorge Valdés</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Bienvenido</a>
        </div>
      </div>


      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENÚ</li>

        <!-- Noticias -->
        <li class="treeview @yield('noticias', '')">
          <a href="#">
            <i class="fa fa-fw fa-comments-o"></i>
            <span>Noticias</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.noticias.create') }}"><i class="fa fa-circle-o text-aqua"></i> Registrar Noticia</a></li>
            <li><a href="{{ route('admin.noticias.index') }}"><i class="fa fa-circle-o text-yellow"></i> Ver Noticia</a></li>
          </ul>
        </li>

        <!-- Productos -->
        <li class="treeview  @yield('productos', '')">
          <a href="#">
            <i class="fa fa-fw fa-skyatlas"></i>
            <span>Productos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.productos.create') }}"><i class="fa fa-circle-o text-aqua"></i> Registrar Producto</a></li>
            <li><a href="{{ route('admin.productos.index') }}"><i class="fa fa-circle-o text-yellow"></i> Ver Producto</a></li>
          </ul>
        </li>

        <!-- Pedidos -->
        <li class="treeview @yield('pedidos', '')">
          <a href="#">
            <i class="fa fa-fw fa-sellsy"></i>
            <span>Pedidos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.pedidos.create') }}"><i class="fa fa-circle-o text-aqua"></i> Registrar Pedido</a></li>
            <li><a href="{{ route('admin.pedidos.index') }}"><i class="fa fa-circle-o text-yellow"></i> Ver Pedido</a></li>
          </ul>
        </li>

        <!-- Usuarios -->
        <li class="treeview @yield('usuarios', '')">
          <a href="#">
            <i class="fa fa-fw fa-user"></i>
            <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.clientes.create') }}"><i class="fa fa-circle-o text-aqua"></i> Registrar Usuario</a></li>
            <li><a href="{{ route('admin.clientes.index') }}"><i class="fa fa-circle-o text-yellow"></i> Ver Usuario</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>