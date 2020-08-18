<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CustomersExport;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customers = \DB::table('customers')
                    ->select('customers.*')
                    ->orderBy('id','ASC')
                    ->get();
        return view('home')->with('customers',$customers);
    }

    public function exportToExcel()
    {
        return Excel::download(new CustomersExport, 'customers-list.xlsx');
    }

}
