<?php

namespace App\Http\Controllers\Administration;

use App\Department;
use App\Faculty;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FacultyController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','verified','role:admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = Faculty::orderBy('id','ASC')->cursor();
        return view('administration.faculty.index',compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::orderBy('department_initial','ASC')->get();
        return view('administration.faculty.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'initial' => ['required','string','max:10'],
            'email' =>['required','string', 'email', 'max:255', 'unique:faculties'],
            'official_id' => ['required', 'string', 'max:15', 'unique:faculties'],
            'contact' =>['required','string','max:17','unique:faculties'],
            'department_id' =>['required'],
            'designation' => ['required','string','max:155']
        ]);

        $faculty = Faculty::create([
            "name" => $request['name'],
            "initial" => Strtoupper($request['initial']),
            "email" => $request['email'],
            "official_id" => $request['official_id'],
            "contact" => $request['contact'],
            "department_id" => $request['department_id'],
            "designation" => $request['designation']
        ]);

        if (!empty($faculty)) {
           Toastr::success('Data Updated Successfully','Success');
            return redirect()->route('oim.faculty.index');
        }
        else{
            Toastr::error('Ops! Data Update failed!','Error');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(403, 'Unauthorized');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faculty = Faculty::findOrFail($id);

        if (!empty($faculty)) {
            $departments = Department::orderBy('id','ASC')->cursor();
           return view('administration.faculty.edit',compact('faculty','departments'));
        }
        else{
            Toastr::info('Record not found.','Info');
            return redirect(route('dashboard'));
        }
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
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'initial' => ['required','string','max:10'],
            'email' =>['required','string', 'email', 'max:255'],
            'official_id' => ['required', 'string', 'max:15'],
            'contact' =>['required','string','max:17'],
            'department_id' =>['required'],
            'designation' => ['required','string','max:155']
        ]);

        $faculty = Faculty::findOrFail($id);

        $faculty->update([
            "name" => $request['name'],
            "initial" => Strtoupper($request['initial']),
            "email" => $request['email'],
            "official_id" => $request['official_id'],
            "contact" => $request['contact'],
            "department_id" => $request['department_id'],
            "designation" => $request['designation']
        ]);

        if (!empty($faculty)) {
           Toastr::success('Data Updated Successfully','Success');
            return redirect()->route('oim.faculty.index');
        }
        else{
            Toastr::error('Ops! Data Update failed!','Error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort(403, 'Unauthorized');
    }

    public function about()
    {
        abort(403,'Unauthorized');
    }
}
