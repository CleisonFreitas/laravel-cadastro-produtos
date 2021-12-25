<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class ProductChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     *
     *
     */

    public ?string $name = 'product_chart_r';


    public ?string $prefix = 'product_chart';


    public ?array $middlewares = ['auth'];

    public function handler(Request $request): Chartisan
    {
        return Chartisan::build()
            ->labels(['Janeiro', 'Fevereiro', 'Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'])
            ->dataset('2020', [1, 2, 3,5,3,2,3,5,5,3,1,5])
            ->dataset('2021', [3, 2, 1,3,5,2,2,1, 2, 3,5,3]);
    }
}
