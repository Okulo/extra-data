<?php

declare(strict_types=1);

namespace App\Http\Procedures;

use Illuminate\Http\Request;
use Sajya\Server\Procedure;

class FormProcedure extends Procedure
{
    /**
     * The name of the procedure that will be
     * displayed and taken into account in the search
     *
     * @var string
     */
    public static string $name = 'form';

    /**
     * Execute the procedure.
     *
     * @return string
     */
    public function formsData(Request $request)
    {
        if ($request->input('type') == "getForm"){
            return "тут модель которая получает форму из бд и отдает";
        }
        elseif($request->input('type') == "getData") {
            return "из бд отдаеются данные формы";
       }
        else{
            return "тут идет сохранение днных через модель в бд. данные приходят в массиве параметров data";
        }

    }

    /**
     * Execute the procedure.
     *
     * @param Request $request
     *
     * @return array|string|integer
     */

    public function handle(Request $request)
    {
        // write your code
    }
}
