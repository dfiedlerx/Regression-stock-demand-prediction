@extends('admin.default')

@section('content')

    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>

        <div class="masonry-item col-12">
            <!-- #Monthly Stats ==================== -->
            <div class="bd bgc-white">
                <div class="layers">
                    <div class="layer w-100 pX-20 pT-20">
                        <h6 class="lh-1">Variação total de vendas</h6>
                    </div>
                    <div class="layer w-100 p-20">
                        <canvas id="line-chart" height="220"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="masonry-item col-12">
            <!-- #Sales Report ==================== -->
            <div class="bd bgc-white">
                <div class="layers">
                    <div class="layer w-100 p-20">
                        <h6 class="lh-1">Produtos em estoque</h6>
                    </div>
                    <div class="layer w-100">
                        <div class="table-responsive p-20">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class=" bdwT-0">Id</th>
                                        <th class=" bdwT-0">Descrição</th>
                                        <th class=" bdwT-0">Categoria</th>
                                        <th class=" bdwT-0">Quantidade em Estoque</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($listaEstoqueItens as $currentItem) {
                                    ?>
                                    <tr>
                                        <td class="fw-600">{{$currentItem->id}}</td>
                                        <td>{{$currentItem->name}}</td>
                                        <td>{{$currentItem->categorias->name}}</td>
                                        <td><span class="text-success">{{$currentItem->stock}}</span></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                         </div>
                    </div>
                </div>
                <div class="ta-c bdT w-100 p-20">
                    <a href="/lista-produtos">Checar todos os produtos</a>
                </div>
            </div>
        </div>

    </div>
    <script>

        document.addEventListener('DOMContentLoaded', function() {


            const lineChartBox = document.getElementById('line-chart');

            if (lineChartBox) {
                const lineCtx = lineChartBox.getContext('2d');
                lineChartBox.height = 80;

                new Chart(lineCtx, {
                    type: 'line',
                    data: {
                        labels: [ <?php echo $graficoVendas['labels'] ?>],
                        datasets: [{
                            label                : 'Quantidade de vendas',
                            backgroundColor      : 'rgba(56, 176, 157, 0.5)',
                            borderColor          : 'rgba(57, 142, 128, 0.5)',
                            pointBackgroundColor : '#1b957c',
                            borderWidth          : 2,
                            data                 : [<?php echo $graficoVendas['values'] ?>],
                        }],
                    },

                    options: {
                        legend: {
                            display: false,
                        },
                    },

                });
            }

        }, false);

    </script>
@endsection