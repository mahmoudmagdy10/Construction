<?php

namespace App\Http\Controllers\Contractor;

use Illuminate\Http\Request;

class ContractorUploadController extends Controller
{
    public function comment(Request $request){
        $user = User::select()->find(Auth::user()->id);
        $id = Auth::user()->id;
        $project = Project::select()->where('user_id', '=', $id)->first();


        if(Comment::where('user_id', '=', $user)->count() > 0){

            $comm = Comment::select()->where('user_id', '=', $id)->first();
            $replies = Reply::select()->where('comment_id','=',$comm->id);
    
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

                $request->request->add(['id'=> $id]);
                $request->request->add(['project_id'=>$project->id]);
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

                $request->request->add(['id'=> $id]);
                $request->request->add(['project_id'=>$project->id]);
    
                Comment::create([
                    "content" => $request->comment,
                    "user_id" => $request->id,
                    "project_id" => $request->project_id,
                ]);
                return redirect()->back();
                // return "comment";
    
                
    
            } catch (\Exception $e) {
                return $this->returnError($e->getCode(), $e->getMessage());
            }
        }



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

            $request->request->add(['id'=> $id]);
            $request->request->add(['project_id'=>$project->id]);
            $request->request->add(['comment_id'=>$comm->id]);

            if($comm){
                Reply::create([
                    "content" => $request->comment,
                    "user_id" => $request->id,
                    "project_id" => $request->project_id,
                    "comment_id" => $request->comment_id,
                ]);
                return redirect()->back()->with(compact('comm'))->with(compact('replies'));
                // return "reply";
            }

            Comment::create([
                "content" => $request->comment,
                "user_id" => $request->id,
                "project_id" => $request->project_id,
            ]);
            return redirect()->back()->with(compact('comm'))->with(compact('replies'));
            // return "comment";

            

        } catch (\Exception $e) {
            return $this->returnError($e->getCode(), $e->getMessage());
        }
    }
}
