<?php

namespace App\Http\Controllers\Administration;

use App\Batch;
use App\Department;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BatchController extends Controller
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
        $batches = Batch::orderBy('batch','DESC')->cursor();
        return view('administration.batch.index',compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $department = Department::where('id',$user->userable['department_id'])->first();
        return view('administration.batch.create', compact('department'));
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
            'batch' => ['required', 'numeric','unique:batches']
        ]);

        $batch = Batch::create([
            "batch" => $request['batch']
        ]);
        $user = Auth::user();
        $department = Department::where('id',$user->userable['department_id'])->first();
        $batch->departments()->attach($department);
        if (!empty($batch)) {
        Toastr::success('Data Stored Successful','Success');
        return redirect(route('oim.batch.index'));
        }
        else{
        Toastr::error('Ops! Data Store failed.','Error');
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
        abort(403,'Unauthorized');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $batch = Batch::findOrFail($id);

        if (!empty($batch)) {
            $user = Auth::user();
            $department = Department::where('id',$user->userable['department_id'])->first();
           return view('administration.batch.edit',compact('batch','department'));
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
            'batch' => ['required', 'numeric']
        ]);
        $batch = Batch::findOrFail($id);

        $batch->update([
            "batch" => $request['batch']
        ]);
        $user = Auth::user();
        $department = Department::where('id',$user->userable['department_id'])->first();
        $batch->departments()->sync($department);
        if (!empty($batch)) {
        Toastr::success('Data Stored Successful','Success');
        return redirect(route('oim.batch.index'));
        }
        else{
        Toastr::error('Ops! Data Store failed.','Error');
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
        abort(403,'Unauthorized');
    }
}
