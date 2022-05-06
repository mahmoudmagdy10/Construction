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

        try {

            $request->request->add(['id'=> $user->id]);
            $request->request->add(['project_id'=>$project_id]);
    
            Comment::create([
                "content" => $request->comment,
                "user_id" => $request->id,
                "project_id" => $request->project_id,
            ]);
            return redirect()->back()->with('message','Created Successfully');
            // return $request;

            

        } catch (\Exception $e) {
            return $this->returnError($e->getCode(), $e->getMessage());
        }
        
    }


    public function reply($comment_id,Request $request){
        $user = User::select()->find(Auth::user()->id);
        $comment = Comment::find($comment_id)->first();
        $project_id = $comment->project_id;

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
        try {

            $request->request->add(['id'=> $user->id]);
            $request->request->add(['project_id'=>$project_id]);
            $request->request->add(['comment_id'=>$comment_id]);
    
            Reply::create([
                "content" => $request->comment,
                "user_id" => $request->id,
                "project_id" => $request->project_id,
                "comment_id" => $request->comment_id,
            ]);
            return redirect()->back()->with('message','Created Successfully');
            // return $id;

            

        } catch (\Exception $e) {
            return $this->returnError($e->getCode(), $e->getMessage());
        }
    }
}
