<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home.home');
    }
    public function add(){
        return view('admin.report.add-report');
    }
    public function manage(){

        $reportAll = Report::all();
        // return $reportAll;
        return view('admin.report.manage-report', [
            'reportAll' => $reportAll,
        ]);
    }
    public function saveReport(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'district' => 'required',
            'nid' => 'required',
            'photo' => 'required',
            'fee' => 'required',
            'email' => 'required',
        ]);

        $nidImage = $request->file('nid');
        $nidName = $nidImage->getClientOriginalName();
        $directory = 'report-image/';
        $nidUrl = $directory.$nidName;
        $nidImage->move($directory, $nidName);
        
        $photoImage = $request->file('photo');
        $photoName = $photoImage->getClientOriginalName();
        $directory = 'report-image/';
        $photoUrl = $directory.$photoName;
        $photoImage->move($directory, $photoName);

        
        $report = new Report();
        $report->name = $request->name; 
        $report->address = $request->address; 
        $report->phone = $request->phone; 
        $report->district = $request->district; 
        $report->nid  = $nidUrl;
        $report->photo  = $photoUrl;
        $report->fee  = $request->fee;
        $report->email  = $request->email;
        $report->password  = $request->password;
        $report->confirm_password  = $request->confirm_password;
        $report->save();
        
        return redirect('/add-report')->with('message', 'Report Add Successfully');
        
    }

    public function viewReport($id){
        $viewReport = Report::find($id);

        return view('admin.report.view-report', [
            'viewReport' => $viewReport,
        ]);
    }
    public function editReport($id){
        $editReport = Report::find($id);

        return view('admin.report.edit-report', [
            'editReport' => $editReport,
        ]);
    }
    public function deleteReport($id){
        $deleteReport = Report::find($id);
        $deleteReport->delete();
        
        return redirect ('/manage-report')->with('message', 'Report Delete Successfully');  

    }

    protected function nidImageUpdate(Request $request){
        $nidImage = $request->file('nid');
        $nidName = $nidImage->getClientOriginalName();
        $directory = 'report-image/';
        $nidUrl = $directory.$nidName;
        $nidImage->move($directory, $nidName);

        return $nidUrl;
    }
    protected function photoImageUpdate(Request $request){
        $photoImage = $request->file('photo');
        $photoName = $photoImage->getClientOriginalName();
        $directory = 'report-image/';
        $photoUrl = $directory.$photoName;
        $photoImage->move($directory, $photoName);

        return $photoUrl;
    }

    protected function nidBasicInfoUpdate($request, $report, $nidUrl){
        $report->name = $request->name; 
        $report->address = $request->address; 
        $report->phone = $request->phone; 
        $report->district = $request->district; 
        $report->nid  = $nidUrl;
        $report->fee  = $request->fee;
        $report->email  = $request->email;
        $report->password  = $request->password;
        $report->confirm_password  = $request->confirm_password;
        $report->save();
    }
    protected function photoBasicInfoUpdate($request, $report, $photoUrl){
        $report->name = $request->name; 
        $report->address = $request->address; 
        $report->phone = $request->phone; 
        $report->district = $request->district; 
        $report->photo  = $photoUrl;
        $report->fee  = $request->fee;
        $report->email  = $request->email;
        $report->password  = $request->password;
        $report->confirm_password  = $request->confirm_password;
        $report->save();
    }
    protected function reportBasicInfoUpdate($request, $report){
        $report->name = $request->name; 
        $report->address = $request->address; 
        $report->phone = $request->phone; 
        $report->district = $request->district;
        $report->fee  = $request->fee;
        $report->email  = $request->email;
        $report->password  = $request->password;
        $report->confirm_password  = $request->confirm_password;
        $report->save();
    }

    public function updateReport(Request $request){

        $nidImage = $request->file('nid');
        $photoImage = $request->file('photo');
        $report = Report::find($request->id);
        
        if($request->hasFile('nid') || $request->hasFile('photo')){
            
            if($nidImage){
                unlink($report->nid);

                $nidUrl = $this->nidImageUpdate($request);                
                
                $this->nidBasicInfoUpdate($request, $report, $nidUrl);
            }
            
            if($photoImage){
                unlink($report->photo);
                
                $photoUrl = $this->photoImageUpdate($request);                
                
                $this->photoBasicInfoUpdate($request, $report, $photoUrl);
                
            }

            return redirect ('/manage-report')->with('message', 'Report Updated Successfully');

        }else{

            $this->reportBasicInfoUpdate($request, $report);

            return redirect ('/manage-report')->with('message', 'Report Updated Successfully');  
        }


    }
}
