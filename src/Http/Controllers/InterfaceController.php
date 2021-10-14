<?php

namespace Ui\Component\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    //
    public function index()
    {
        return view('ui::login');
    }


    public function dashboard()
    {
        $table = config('data.table');

        $columns = explode(',', config('data.columns'));


        $records = DB::table($table)
            ->get();

        // print_r($columns[0]);
        // die();
        return view('ui::index', compact('table', 'columns', 'records'));
    }
}
