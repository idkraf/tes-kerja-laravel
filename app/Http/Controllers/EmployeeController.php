<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;
use App\Models\City;
use App\Models\Bank;
use App\Models\Province;

class EmployeeController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $employee = Employee::paginate(10);
        return view('employee.index', compact('employee'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city = City::where('id','!=',1)->orderBy('id', 'desc')->get();
        $bank = Bank::where('id','!=',1)->orderBy('id', 'desc')->get();
        $province = Province::where('id','!=',1)->orderBy('id', 'desc')->get();

        return view('employee.create', compact('city', 'bank', 'province'));
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
        $employee = Employee::findOrFail(decrypt($id));
        
        $city = City::where('id','!=',1)->orderBy('id', 'desc')->get();
        $bank = Bank::where('id','!=',1)->orderBy('id', 'desc')->get();
        $province = Province::where('id','!=',1)->orderBy('id', 'desc')->get();

        return view('employee.edit', compact('employee', 'city', 'bank', 'province'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'date_of_birth' => 'required|date',
            'phone_number' => 'required|regex:/^\d+$/',
            'email' => 'required|email',
            // Add more validation rules as needed
        ]);

        // Create new employee

    }

    public function update(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'date_of_birth' => 'required|date',
            'phone_number' => 'required|regex:/^\d+$/',
            'email' => 'required|email',
            // Add more validation rules as needed
        ]);

        // Update employee
    }

}
