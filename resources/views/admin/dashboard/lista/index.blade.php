@extends('admin.default')

@section('content')

    <div class="mB-20">
        <a href="{{ route(ADMIN . '.users.create') }}" class="btn btn-info">
            {{ trans('app.add_button') }}
        </a>
    </div>


    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Qtde. Estoque</th>
                <th></th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th>Id</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Qtde. Estoque</th>
            </tr>
            </tfoot>

            <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td><a href="/lista-produtos/edit">{{ $produto->id }}</a></td>
                    <td>{{ $produto->name }}</td>
                    <td>{{ $produto->categorias->name }}</td>
                    <td>{{  $produto->stock }}</td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="/lista-produtos/edit/{{  $produto->id }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>

@endsection