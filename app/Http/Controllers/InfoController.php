<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cirtificate;

class InfoController extends Controller
{
    public function index_cirtificate()
    {
        return view('cirtificate.page');
    }
    public function cirtificate_store(Request $request)
    {
        try {
            $data_insert = Cirtificate::create([
                'degreeName' => $request->degreeName,
                'institute' => $request->institute,
                'passingYear' => $request->passingYear,
                'studentID' => $request->studentID,
                'GPA' => $request->GPA,
            ]);
            return redirect()->route('cirtificate.store')->with('success', "Student Add Sucessfully");
        } catch (\Exception $e) {
            return redirect()->route('cirtificate.store')->with('fail', "Student Add Failed");
        }
    }
    public function cirtificate_list()
    {
        $cirtificate = Cirtificate::all();
        return view('cirtificate', compact('cirtificate'));
    }
    public function cirtificate_edit($id){
        $cirtificate = Cirtificate::find($id);
        return view('cirtificate-edit', compact('cirtificate','id'));
    }
    public function cirtificate_update(Request $request, $id)
    {
        try {
            $data = Cirtificate::find($id);
            $data->degreeName = $request->degreeName;
            $data->institute = $request->institute;
            $data->passingYear = $request->passingYear;
            $data->studentID = $request->studentID;
            $data->GPA = $request->GPA;
            $data->save();

            return redirect()->route('cirtificate.store')->with('success', "Cirtificate Update Sucessfully");
        } catch (\Exception $e) {
            return redirect()->route('cirtificate.store')->with('fail', "Cirtificate Update Failed");
        }
    }
    public function cirtificate_delete($id){
        try{
            $data = Cirtificate::find($id);
        
            $data->delete();
            
            return redirect()->route('cirtificate.list')->with('success', "Cirtificate Information Delete Sucessfully");
        }
        catch(\Exception $e) {
          return redirect()->route('cirtificate.list',$id)->with('fail', "Cirtificate Information Delete Failed"); 
        }
    }
}