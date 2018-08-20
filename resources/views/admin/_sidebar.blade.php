<ul class="sidebar-menu">
    <li class="header"><a href="{{url('/')}}">Главная</a> </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Админ-панель</span>
        </a>
    </li>
    <li class="{{{ (Request::is('admin/kuran', 'admin/ayats') ? 'treeview active' : 'treeview') }}}">
        <a href="#">
            <i class="fa fa-tags"></i>
            <span>Коран</span>
            <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{{ (Request::is('admin/kuran') ? 'treeview active' : 'treeview') }}}"><a href="{{ route('kuran.index') }}"><i class="fa fa-tags"></i> <span>Суры</span></a></li>
            <li class="{{{ (Request::is('admin/ayats') ? 'treeview active' : 'treeview') }}}"><a href="{{ route('ayats.index') }}"><i class="fa fa-tags"></i> <span>Аяты</span></a></li>
        </ul>
    </li>

</ul>
