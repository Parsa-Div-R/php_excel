<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class ExcelController extends Controller
{

    function readingFile()
    {
        $className = \PhpOffice\PhpSpreadsheet\Writer\Pdf\Dompdf::class;
        return dd($className);
    }
}
