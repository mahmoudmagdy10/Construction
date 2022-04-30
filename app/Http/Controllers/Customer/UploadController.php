<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Property;
use App\Traits\GeneralTrait;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class UploadController extends Controller
{
    use GeneralTrait;
    public function upload(Request $request)
    {
        $user = User::select()->find(Auth::user()->id);
        $id = Auth::user()->id;

        // Validation
        try {
            $rules = [
                'arch' => "required|in:Italian,UK,American",
                'file' => 'required|mimes:doc,pdf,docx,zip,png,jpge,jpg',
                'csv' => "required",
            ];

            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return redirect()->route('customer.construction_style');
            }

        } catch (\Exception $e) {
            return $this->returnError($e->getCode(), $e->getMessage());
        }

        // Store Project data && save File 2D
        try{
            $request->request->add(['id'=>$id]);
            if($request->file()) {
                $fileName = time().'_'.$request->file->getClientOriginalName();
                $request->file('file')->move(base_path().'/public/files_2D/',$fileName);
                $request->request->add(['fileName'=> $fileName]);
            }
            Project::create([
                'arch' => $request['arch'],    
                'file_path' => $request['fileName'],     
                'user_id' => $request['id'],    
            ]);

        } catch (\Exception $e) {

            return redirect()->route('customer.construction_style');
        }
        
        // Open CSV && Save in DB
        try{
            $project = Project::select()->where('user_id', '=', $id)->first();
            $request->request->add(['id'=> $id]);
            $request->request->add(['project_id'=> $project->id]);

            $students = [];
            if (($open = fopen($request['csv'], "r")) !== FALSE) {  
                while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
                    $students[] = $data;
                }
            
                fclose($open);
            }
            Property::create([
                "PREDICTION"=>$students[1][0],
                "OverallQual"=>$students[1][1],
                "Neighborhood"=>$students[1][2],
                "GrLivArea"=>$students[1][3],
                "GarageCars"=>$students[1][4],
                "BsmtQual"=>$students[1][5],
                "ExterQual"=>$students[1][6],
                "GarageArea"=>$students[1][7],
                "KitchenQual"=>$students[1][8],
                "YearBuilt"=>$students[1][9],
                "TotalBsmtSF"=>$students[1][10],
                "FirstFlrSF"=>$students[1][11],
                "GarageFinish"=>$students[1][12],
                "FullBath"=>$students[1][13],
                "YearRemodAdd"=>$students[1][14],
                "GarageType"=>$students[1][15],
                "FireplaceQu"=>$students[1][16],
                "Foundation"=>$students[1][17],
                "MSSubClass"=>$students[1][18],
                "TotRmsAbvGrd"=>$students[1][19],
                "Fireplaces"=>$students[1][20],
                'user_id' => $request['id'],    
                'project_id' => $request['project_id'],    
        ]);

            return redirect()->route('customer.your_project');
            
        } catch (\Exception $e) {

            return redirect()->route('customer.construction_style');
        }
    }
}