<?php

namespace App\Http\Controllers\Contractor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Property;
use App\Models\Project;
use App\Models\Comment;
use App\Models\Reply;
use App\Traits\GeneralTrait;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use DB;


class PagesController extends Controller
{
    public function homepage()
    {
        try{
            $contractor = User::select()->find(Auth::user()->id);
            if (!$contractor) {
                return redirect()->route('log_in');
            } else {
                return view('contractor.homepage')->with(compact('contractor'));
            }

        } catch (\Exception $e) {
            return redirect()->route('log_in');
        }

    }

    public function explor()
    {
        $id = Auth::user()->id;
        try{
            $contractor = User::select()->find($id);
            $props = Property::all();
            $project = Project::all();
            if (!$contractor && !$props && !$project) {
                return redirect()->route('log_in');
            } else {
                return view('contractor.explor')->with(compact('contractor'))->with(compact('props'))->with(compact('project'));
            }

        } catch (\Exception $e) {
            return redirect()->route('log_in');
        }

    }

    public function your_project()
    {
        try{
            $user= Auth::user();
            $contractor = User::select()->find($user->id);

            $project = Project::where('belong_to_contractor', '=', $user->id)->with(['props'])->get();

            if (!$contractor && !$project) {
                return redirect()->route('log_in');
            } else {
                return view('contractor.your_project')->with(compact('contractor'))->with(compact('project'));
            }
            // return $project;

        } catch (\Exception $e) {
            return redirect()->route('log_in');
            // return "no";
        }
    }

    public function interested_projects()
    {
        try{
            $user= Auth::user();
            $contractor = User::select()->find($user->id);

            $project = Project::whereHas('comments', function($query) use($user) {
                $query->whereUserId($user->id);
            })->with(['props'])->get();

            if (!$contractor && !$project) {
                return redirect()->route('log_in');
            } else {
                return view('contractor.interested')->with(compact('contractor'))->with(compact('project'));
            }
            // return $project;

        } catch (\Exception $e) {
            // return redirect()->route('log_in');
            return "no";
        }
    }
    // Accept => Add To your Projects
    public function accept($id,Request $request)
    {
        $user_id= Auth::user()->id;
        $contractor = User::find($user_id);
        $add_pro = Project::find($id);
        $props = Property::where('project_id', '=', $id)->with(['project'])->get();
        $project = Project::where('id', '=', $id)->with(['props'])->get();
        $comments = Comment::where('project_id',$id)->where('user_id',$user_id)->with(['replies','users'])->get();
        
        try{

            if (!$contractor) {
                return redirect()->route('log_in');
            }
            if (!$add_pro) {
                return redirect()->route('contractor.explor');
            }
            $request->request->add(['user_id'=>$user_id]);
            // Project Accept
            $add_pro->accepted = 1;
            $add_pro->belong_to_contractor = $request['user_id'];
            $add_pro->save();
            
            // return $add_pro;
            return redirect()->route('contractor.your_project')->with(['success' => 'Updated Successfully']);

        } catch (\Exception $e) {
            return redirect()->route('contractor.your_project')->with('هناك خطأ يرجي المحاوله في وقت اخر');
            // return "no";
        }


        // return $comments;

    }
    // ==========================
    // UnAccept => Add To your Projects
    public function unaccept($id)
    {
        $user_id= Auth::user()->id;
        $contractor = User::find($user_id);
        $add_pro = Project::find($id);
        $project = Project::where('id', '=', $id)->with(['props'])->get();
        
        try{

            if (!$contractor) {
                return redirect()->route('log_in');
            }
            if (!$add_pro) {
                return redirect()->route('contractor.explor');
            }
            // Project Accept
            $add_pro->accepted = 0;
            $add_pro->belong_to_contractor = 0;
            $add_pro->save();
            
            // return $add_pro;
            return redirect()->route('contractor.your_project')->with(['success' => 'Updated Successfully']);

        } catch (\Exception $e) {
            return redirect()->route('contractor.your_project')->with('هناك خطأ يرجي المحاوله في وقت اخر');
            // return "no";
        }


        // return $comments;

    }
    // ==========================

    public function profile()
    {
        $profile_picture = Auth::user()->profile_picture;
        if(Auth::check()){
            try{
                $contractor = User::select()->find(Auth::user()->id);
                if (!$contractor) {
                    return redirect()->route('log_in');
                } else {
                    return view('contractor.profile', compact('contractor','profile_picture'));
                }
            } catch (\Exception $e) {
                return redirect()->route('log_in');
            }
        } else{
            return redirect()->route('log_in');
        }

    }

    public function edit()
    {
        $contractor = User::select()->find(Auth::user()->id);
        if (!$contractor) {
            return redirect()->route('contractor.profile')->with(['error' => 'هذه اللغة غير موجوده']);
        } else {
            return view('contractor.edit', compact('contractor'));
        }
    }

    public function update(Request $request)
    {
        $id= Auth::user()->id;
        $contractor = User::find($id);
        try {
            // Validation
            $rules = [
                "name" => "required|string|max:30",
                "address" => "required|string",
                "phone" => "required",
                "password" => "required",
                "national_id" => "required",
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return redirect()->route('contractor.edit')->with(['error' => 'هناك خطأ يرجي المحاوله في وقت اخر']);            
                return"no";
            }
        } catch (\Exception $e) {
            return redirect()->route('contractor.edit')->with(['error' => 'هناك خطأ يرجي المحاوله في وقت اخر']);            
            return "no no";
        }
        // return $request;
        try{

            if (!$contractor) {
                return redirect()->route('log_in');
            }

            $contractor->name = $request['name'];
            $contractor->address = $request['address'];
            $contractor->phone = $request['phone'];
            $contractor->national_id = $request['national_id'];
            $contractor->password = Hash::make($request['password']);
            $contractor->save();

            return redirect()->route('contractor.profile')->with(['success' => 'Updated Successfully']);
            // return "yes";

        } catch (\Exception $e) {
            return redirect()->route('contractor.edit')->with('هناك خطأ يرجي المحاوله في وقت اخر');
            // return 'no';
        }

    }

    public function details($id)
    {
        $user = Auth::user();

        $users = User::find($user->id);
        $props = Property::where('project_id', '=', $id)->with(['project'])->get();
        $project = Project::all()->where('id', '=', $id);        
        $comments = Comment::where('project_id',$id)->where('user_id',$user->id)->with(['replies','users'])->get();
        $project_id = $id;

        $num_of_comments = Comment::where('user_id',"=",Auth::user()->id)->where('project_id',$id)->get();
        
        if (!$users && !$props && !$project && !$comments_of_users && !$replies_of_users) {
            return redirect()->back();
        } else {
            return view('contractor.details')->with(compact('users','props','project','comments','project_id','num_of_comments'));
        }

        // return $props;


    }


}
