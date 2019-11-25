@extends('admin.default')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20"><h4 class="c-grey-900 mB-20">
                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Previsões de vendas do próximo mês</font></font>
                </h4>
                <p>
                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usando a marcação de tabela mais básica, </font></font><code class="highlighter-rouge">.table</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">veja </font><font style="vertical-align: inherit;">como as </font><font style="vertical-align: inherit;">tabelas baseadas são exibidas no Bootstrap. </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Todos os estilos de tabela são herdados no Bootstrap 4</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> , o que significa que todas as tabelas aninhadas serão estilizadas da mesma maneira que o pai.</font></font>
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
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Qtde. atual</font></font>
                        </th>
                        <th scope="col">
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Qtde. para compra</font></font>
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