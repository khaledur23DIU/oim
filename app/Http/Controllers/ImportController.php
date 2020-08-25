<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Faculty;
use App\ImportData;
use App\Imports\ContactImport;
use App\Imports\CsvImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\HeadingRowImport;
use Symfony\Component\HttpFoundation\File\getClientOriginalName;

class ImportController extends Controller
{
     public function getImport()
    {
        return view('import')->with('success' ,'Successfull');
    }

    public function importCsv(Request $request)
    {
    	
    	$headings = (new HeadingRowImport)->toCollection($request->csv_file);
    	
    	// dd($cs);
    	// dd($csv_header_fields);
    	
    	// Excel::import(new ContactImport, $request->csv_file);
    	 // $csv_data = Excel::toCollection(new ContactImport, $request->csv_file);
    	 // $fields = ['first','last', 'email'];
    	 // return view('importField', compact( 'csv_header_fields', 'csv_data'));
    	// dd($aa);
    	// $data = Excel::import(new ContactImport, $request->csv_file);
    	 // dd($data);
    	 // $aa = Excel::toArray(new ContactImport, $request->csv_file);
    	 // dd($aa);
        
        // return redirect('/home')->with('success', 'All good!');
    }

    public function processImport()
    {
    	return view('importSuccess');
    }

    // public function parseImport(ImportRequest $request)
    // {

    //     $path = $request->file('csv_file')->getRealPath();

    //     if ($request->has('header')) {
    //         $data = Excel::import(new CsvImport, $path);
    //     } else {
    //         $data = array_map('str_getcsv', file($path));
    //     }

    //     if (!empty($data)) {
    //         if ($request->has('header')) {
    //             $csv_header_fields = [];
    //             $data = json_decode( json_encode($data), true);
    //             foreach ($data as $key => $value) {
    //                 $csv_header_fields[] = $key;
    //             }
    //         }
    //         $csv_data = array_slice($data, 0, 2);

    //         $credentials = $request->file('csv_file')->getClientOriginalName();
    //         $filename = ImportData::all('csv_filename');


    //         if(ImportData::where('csv_filename', '=' ,$credentials)->exists()){

    //         return redirect()->back()->with('alert', 'This specific file has already been imported!');

    //         }
    //         else{
    //          $csv_data_file = ImportData::create([
    //             'csv_filename' => $request->file('csv_file')->getClientOriginalName(),
    //             'csv_header' => $request->has('header'),
    //             'csv_data' => json_encode($data)
    //             ]);

    //         }

    //     }
    //      else {
    //         return redirect()->back();
    //     }

    //     return view('importField', compact( 'csv_header_fields', 'csv_data', 'csv_data_file'));

    // }

    // public function processImport(Request $request)
    // {
    //     $data = ImportData::find($request->csv_data_file_id);
    //     $csv_data = json_decode($data->csv_data, true);
    //     foreach ($csv_data as $row) {
    //         $contact = new Contact();
    //         foreach (config('app.db_fields') as $index => $field) {
    //             if ($data->csv_header) {
    //                 $contact->$field = $row[$request->fields[$field]];
    //             } else {
    //                 $contact->$field = $row[$request->fields[$index]];
    //             }
    //         }
    //         $contact->save();
    //     }

    //     return view('importSuccess');
    // }

}
