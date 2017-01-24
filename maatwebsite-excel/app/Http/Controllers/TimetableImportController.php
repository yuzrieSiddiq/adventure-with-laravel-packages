<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimetableImportController extends Controller
{
    public function importXLSX(Request $request)
    {
        # Upload .xlsx file
        return "xlsx";
    }

    public function importXLS(Request $request)
    {
        # Upload .xls file
        return 'xls';
    }

    public function importCSV(Request $request)
    {
        # Upload .csv file
        return 'csv';
    }
}
