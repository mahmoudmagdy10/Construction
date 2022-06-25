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
            // $request->request->add(['profile_picture'=>$user->profile_picture]);
            // $request->request->add(['user_name'=>$user->name]);


            Reply::create([
                "content" => $request->comment,
                "user_id" => $request->id,
                "project_id" => $request->project_id,
                "comment_id" => $request->comment_id,
            ]);

            // $reply = Reply::select()->latest()->first();
            // $address = route('customer.details',$project_id);
            // $request->request->add(['address'=>$address]);


            // $data = [
            //     "user_photo" => $request->profile_picture,
            //     "user_name" => $request->user_name,
            //     "user_id" => $request->id,
            //     "project_id" => $request->project_id,
            //     "comment_id" => $request->comment_id,
            //     "address" => $request->address,
            // ];

            // event(new NewNotificationContractor($data));

            return redirect()->back()->with('message','Created Successfully');

        } catch (\Exception $e) {
            return $this->returnError($e->getCode(), $e->getMessage());
        }
    }

    public function profile_picture(Request $request){

        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        // Validation
        try {
            $rules = [
                'photo' => "required|mimes:png,jpge,jpg",
            ];

            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return redirect()->route('contractor.edit');
            }

        } catch (\Exception $e) {
            return $this->returnError($e->getCode(), $e->getMessage());
        }

        // Save Picture
        try{
            if($request->file()) {
                $Picture_Name = time().'_'.$request->photo->getClientOriginalName();
                $request->file('photo')->move(base_path().'/public/Profile_Picture/',$Picture_Name);

            }

            if($user) {
                $user->profile_picture = $Picture_Name;
                $user->save();
            }
            return redirect()->route('contractor.profile');

        } catch (\Exception $e) {

            // return redirect()->route('customer.construction_style');
            return "bad";
        }


    }
}
