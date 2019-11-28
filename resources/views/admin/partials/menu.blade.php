@php
    $r = \Route::current()->getAction();
    $route = (isset($r['as'])) ? $r['as'] : '';
@endphp

<li class="nav-item mT-30">
    <a class="sidebar-link" href="/">
        <span class="icon-holder">
            <i class="ti-home"></i>
        </span>
        <span class="title">Início</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link" href="/lista-produtos">
        <span class="icon-holder">
            <i class="ti-layout-list-thumb"></i>
        </span>
        <span class="title">Lista de Produtos</span>
    </a>
</li>
<!--
<li class="nav-item">
    <a class="sidebar-link" href="/gerenciar-produtos">
        <span class="icon-holder">
            <i class="ti-pencil"></i>
        </span>
        <span class="title">Gerenciar Produtos</span>
    </a>
</li> -->
<li class="nav-item">
    <a class="sidebar-link" href="/estimativa-vendas">
        <span class="icon-holder">
            <i class="ti-share"></i>
        </span>
        <span class="title">Estimativa de Vendas</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link" href="/users">
        <span class="icon-holder">
            <i class="ti-settings"></i>
        </span>
        <span class="title">Configurações</span>
    </a>
</li>