<?php

namespace App\Http\Controllers;

use App\Exports\PostExport;
use App\Imports\PostImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

//use Maatwebsite\Excel\Excel;


class ExportController extends Controller
{
    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function export()
    {
        return Excel::download(new PostExport(), 'posts.xlsx');
        //return $this->excel->download(new PostExport(), 'posts.xlsx');
    }

    public function import(Request $request)
    {
        $posts=$request->file('input_file');
        Excel::import(new PostImport(), $posts);

        return redirect('/')->with('success', 'All good!');
    }
}
