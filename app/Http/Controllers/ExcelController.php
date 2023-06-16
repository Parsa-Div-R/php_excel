<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;


class ExcelController extends Controller
{

    function readingFile()
    {

        $file = 'C:\Users\Parsa-Div-\Desktop\testxlsx.xlsx';
        $spreadsheet = IOFactory::load($file);


        // Get the active sheet
        $worksheet = $spreadsheet->getActiveSheet();
        // Get the value of a specific cell
        $cellValue = $worksheet->getCell('B3')->getValue();
        // Display the cell value
        $dimandy1= array($cellValue);

        $highestRow = $worksheet->getHighestRow();
// Get the column data
        $columnData = $worksheet->rangeToArray('B4:B' . $highestRow);
// Remove empty cells
        $columnData = array_filter($columnData);
// Display the column data
        array_push($dimandy1,$columnData);
        foreach ($dimandy1 as $numbers) {
            if (is_array($numbers)) {
                foreach ($numbers as $number) {
                   dd ( $number,$numbers);
                }
            } else {
                dd($numbers) ;
            }
        }
    }
}
