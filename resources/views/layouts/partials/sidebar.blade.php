<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" style="position: fixed; ">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <li class="active">
                <a href="{{ url('admin') }}">
                    <i class='fa fa-home'></i>
                    <span>Inicio</span>
                </a>
            </li>
            <li class="treeview">
                <a href="javascript:void(0)">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                    <span>Inscripción</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="/inscripcion/create">
                            <i class='fa fa-plus'></i>
                            Nueva
                        </a>
                    </li>
                    <li><a href="#"></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="javascript:void(0)">
                    <i class='fa fa-users'></i>
                    <span>Empleados</span>
                    <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li>
                        <a href="/empleado">
                            <i class='fa fa-list'></i>
                            Ver
                        </a>
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-registrar-empleado">
                            <i class='fa fa-plus'></i>
                            Agregar
                        </a>
                    </li>
                    <li><a href="#"></a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
