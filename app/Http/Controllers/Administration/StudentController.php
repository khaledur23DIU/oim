<?php

namespace App\Http\Controllers\Administration;

use App\Batch;
use App\Department;
use App\Http\Controllers\Controller;
use App\Student;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class StudentController extends Controller
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
        $students = Student::orderBy('id','ASC')->cursor();
        return view('administration.student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $departments = Department::orderBy('department_initial','ASC')->get();
        return view('administration.student.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

/**
 * valivation of inputs.
 */
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'official_id' => ['required', 'string', 'max:15', 'unique:students'],
            'email' =>['required','string', 'email', 'max:255', 'unique:students'],
            'department_id' =>['required'],
            'batch_id' =>['required'],
            'contact' =>['required','string','max:17','unique:students'],
            'checkAttachAdviser' => ['sometimes'],
            'adviser' => ['required_with:checkAttachAdviser,on']
        ]);

/**
 * Creating new Student. If the adviser is selected then some condition to check for attachting adviser.
 * Finally redirecting.  
 * @var Student
 */
            $student = new Student();
            $student->name = $request['name'];
            $student->official_id = $request['official_id'];
            $student->email = $request['email'];
            $student->department_id = $request['department_id'];
            $student->batch_id = $request['batch_id'];
            $student->contact = $request['contact'];

            if ($request->has('checkAttachAdviser')) {
                $student->adviser_id = $request['adviser'];
            }
            $student->save();

            if ($student->save()) {
               Toastr::success('Data Stored Successfully','Success');
                return redirect()->route('oim.student.index');
            }
            else{
                Toastr::error('Ops! Data Stored failed!','Error');
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
        abort(403,'Unauthorized!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $student = Student::findOrFail($id);

        if (!empty($student)) {
            $departments = Department::orderBy('id','ASC')->cursor();
           return view('administration.student.edit',compact('student','departments'));
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
            'official_id' => ['required', 'string', 'max:15'],
            'email' =>['required','string', 'email', 'max:255'],
            'department_id' =>['required'],
            'batch_id' =>['required'],
            'contact' =>['required','string','max:17'],
            'checkAttachAdviser' => ['sometimes'],
            'adviser' => ['required_with:checkAttachAdviser,on']
        ]);

        $student = Student::findOrFail($id);
        $student->name = $request['name'];
        $student->official_id = $request['official_id'];
        $student->email = $request['email'];
        $student->department_id = $request['department_id'];
        $student->batch_id = $request['batch_id'];
        $student->contact = $request['contact'];

        if ($request->has('checkAttachAdviser')) {
            $student->adviser_id = $request['adviser'];
        }
        $student->save();

        if ($student->save()) {
           Toastr::success('Data Updated Successfully','Success');
            return redirect()->route('oim.student.index');
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
        abort(403,'Unauthorized!');
    }

    public function about()
    {
        abort(403,'Unauthorized!');
    }

    public function fetch(Request $request)
    {
        if ($request->has('division_id')) {
            return Department::where('id',$request->input('division_id'))->get();
        }
    }
/**
 * [fetcmh description]
 * @param  Request $request [description]
 * @return [type]           [description]
 */
   /* public function fetcmh(Request $request)
    {

     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = Department::find($value)->get();
     dd('');
     // $data = DB::table('country_state_city')
     //   ->where($select, $value)
     //   ->groupBy($dependent)
     //   ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data->batches as $row)
     {
      $output .= '<option value="'.$row->$id.'">'.$row->$batch.'</option>';
     }
     echo $output;
    }*/

}
