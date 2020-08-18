<?php

namespace App\Services;

Use App\Department;

class departments
{
    public function index()
    {
        $departments = \DB::table('departments')
                    ->select('departments.*')
                    ->orderBy('id','ASC')
                    ->get();
        //return view('index')->with('',$departments);

        return $departments;
    }
    
    public function get()
    {
        $departments = Department::get();
        $departmentsArray[''] = 'Select your department';
        foreach ($departments as $department)
        {
            $departmentsArray[$Department->id] = $department->name;               
        }
        return $departmentsArray;
    }

    public function getDepartments()
    {
        $departments = \DB::table('departments')
                    ->select('departments.*')
                    ->orderBy('id','ASC')
                    ->get();
        //return view('index')->with('',$departments);

        return $departments;
    }
}