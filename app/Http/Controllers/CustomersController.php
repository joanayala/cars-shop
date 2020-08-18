<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Customers;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customers::all();
        //return view('customers.list_customers', compact('customers'));
        return view('customers.index')->with('customers',$customers);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function add(Request $request)
    {
        //return $request->all();

        Customers::create($request->all());
        
        $tot_customers = Customers::count();

        if ($tot_customers >= 5) {
            $customers = Customers::all()->random(1);

            return view('winner')->with('customers', json_decode($customers, true));
            //return Redirect::to('index')->with('message', 'WINNER');
        } else {
            return back()->with('success', 'Thanks for registering!');
        }
    }

    public function getCities(Request $request)
    {
        if ($request->ajax()) {
            $cities = City::where('department_id', $request->dept_id)->get();
            foreach($cities as $city){
                $citiesArray[$city->id] = $city->name;
            }
            return response()->json($citiesArray);
        }
    }

    public function getCities2(Request $request)
    {
        if ($request->ajax()) {
            $cities = \DB::table('cities')
                        ->select('cities.*')
                        ->where('department_id', $request->dept_id)
                        ->orderBy('id','ASC')
                        ->get();
            
            foreach($cities as $city){
                $citiesArray[$city->id] = $city->name;
            }
        }    
        return $citiesArray;
    }
}
