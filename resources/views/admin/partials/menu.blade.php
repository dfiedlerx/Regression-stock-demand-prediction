@php
    $r = \Route::current()->getAction();
    $route = (isset($r['as'])) ? $r['as'] : '';
@endphp

<li class="nav-item mT-30">
    <a class="sidebar-link {{ starts_with($route, ADMIN . '.dash') ? 'active' : '' }}" href="{{ route(ADMIN . '.dash') }}">
        <span class="icon-holder">
            <i class="c-dark-petronas ti-home"></i>
        </span>
        <span class="title">Início</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link" href="/previsao-vendas">
        <span class="icon-holder">
            <i class="c-dark-petronas ti-layout-list-thumb"></i>
        </span>
        <span class="title">Lista de Produtos</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link" href="/previsao-vendas">
        <span class="icon-holder">
            <i class="c-dark-petronas ti-pencil"></i>
        </span>
        <span class="title">Adi/Rem Produtos</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link" href="/previsao-vendas">
        <span class="icon-holder">
            <i class="c-dark-petronas ti-share"></i>
        </span>
        <span class="title">Previsão de Vendas</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ starts_with($route, ADMIN . '.users') ? 'active' : '' }}" href="{{ route(ADMIN . '.users.index') }}">
        <span class="icon-holder">
            <i class="c-dark-petronas ti-settings"></i>
        </span>
        <span class="title">Configurações</span>
    </a>
</li>