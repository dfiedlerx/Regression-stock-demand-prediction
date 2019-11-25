@extends('admin.default')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20"><h4 class="c-grey-900 mB-20">
                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Previsões de vendas do próximo mês</font></font>
                </h4>
                <p>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                            Usando como base os registros de venda, os dados estimados de venda para o próximo mês estão
                            listados abaixo.
                        </font>
                    </font>
                </p>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">#</font></font>
                        </th>
                        <th scope="col">
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produto</font></font>
                        </th>
                        <th scope="col">
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Qtde. estoque</font></font>
                        </th>
                        <th scope="col">
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Qtde. para compra</font></font>
                        </th>
                        <th scope="col">
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Qtde. de Vendas</font></font>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font>
                        </th>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Marca</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Otto</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">@mdo</font></font>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font>
                        </th>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jacob</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thornton</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">@gordura</font></font>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font>
                        </th>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Larry</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">o pássaro</font></font>
                        </td>
                        <td>
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">@Twitter</font></font>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection