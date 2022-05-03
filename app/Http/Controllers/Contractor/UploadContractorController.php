<?php

namespace App\Http\Controllers\Contractor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Property;
use App\Models\Comment;
use App\Models\Reply;
use App\Traits\GeneralTrait;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;

class UploadContractorController extends Controller
{
    use GeneralTrait;

    public function comment($project_id,Request $request){
        $user = User::select()->find(Auth::user()->id);
        $project = Project::select()->where('user_id', '=', $user->id)->first();

        // Validation
        try {
            $rules = [
                'comment' => "required",
            ];

            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return redirect()->back();
            }

        } catch (\Exception $e) {
            return $this->returnError($e->getCode(), $e->getMessage());
        }

        if(Comment::where('user_id', '=', $user->id)->count() > 0){

            $comm = Comment::select()->where('user_id', '=', $user->id)->first();
            $replies = Reply::select()->where('comment_id','=',$comm->id);

            try {

                $request->request->add(['id'=> $user->id]);
                $request->request->add(['project_id'=>$project_id]);
                $request->request->add(['comment_id'=>$comm->id]);
    
                    Reply::create([
                        "content" => $request->comment,
                        "user_id" => $request->id,
                        "project_id" => $request->project_id,
                        "comment_id" => $request->comment_id,
                    ]);
                    return redirect()->back();
                    // return "reply";
    
            } catch (\Exception $e) {
                return $this->returnError($e->getCode(), $e->getMessage());
            }

        }else{

            try {

                $request->request->add(['id'=> $user->id]);
                $request->request->add(['project_id'=>$project_id]);
        
                Comment::create([
                    "content" => $request->comment,
                    "user_id" => $request->id,
                    "project_id" => $request->project_id,
                ]);
                return redirect()->back();
                // return $request;
    
                
    
            } catch (\Exception $e) {
                return $this->returnError($e->getCode(), $e->getMessage());
            }
        }
    }
}
