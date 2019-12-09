<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Venda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        $graficoVendas =
            array_reverse(
                Venda::select
                    (
                        DB::raw
                        (
                            '
                            YEAR(DATE) AS year,
                            MONTH(DATE) AS month_number,
                            CONCAT(MONTH(DATE), "/",  Year(DATE)) AS month_year,
                            SUM(int_cnt_day) AS sales
                            '
                        )
                    )
                    ->groupBy(DB::raw('Year(DATE)'), DB::raw('MONTH(DATE)'))
                    ->orderByDesc('Date')
                    ->limit(30)
                    ->get()
                    ->toArray()
            );


        $graficoVendas =
            [
                'labels' => $this->labels($graficoVendas),
                'values' => $this->labels($graficoVendas, false)
            ];

        $listaEstoqueItens =
            Item::groupBy(DB::raw('RAND()'))
                ->with('categorias')
                ->limit(20)
                ->get();

        return view('admin.dashboard.index', ['graficoVendas' => $graficoVendas, 'listaEstoqueItens' => $listaEstoqueItens]);

    }

    private function labels ($result, $value = true) {

        $labels = '';

        foreach ($result as $key => $row) {

            if ($key > 0) {

                $labels .= ',';

            }

            if ($value) {

                $labels .= "'" . $this->getMonthName($row['month_number']) . '/' . $row['year'] . "'";

            } else {

                $labels .= $row['sales'];

            }

        }

        return $labels;

    }

    private function getMonthName ($number) {

        return
            [
                'Janeiro',
                'Fevereiro',
                'Março',
                'Abril',
                'Maio',
                'Junho',
                'Julho',
                'Agosto',
                'Setembro',
                'Outubro',
                'Novembro',
                'Dezembro',
            ][$number - 1];

    }
}
