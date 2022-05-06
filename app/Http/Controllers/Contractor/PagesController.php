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
            $contractor = User::select()->find(Auth::user()->id);
            $props = Property::all();
            if (!$contractor && !$props) {
                return redirect()->route('log_in');
            } else {
                return view('contractor.your_project')->with(compact('contractor'))->with(compact('props'));
            }
        } catch (\Exception $e) {
            return redirect()->route('log_in');
        }
    }

    public function profile()
    {
        try{
            $user = User::select()->find(Auth::user()->id);
            if (!$user) {
                return redirect()->route('log_in');
            } else {
                return view('user_profile.profile', compact('user'));
            }
        } catch (\Exception $e) {
            return redirect()->route('log_in');
        }
    }

    public function edit()
    {
        $user = User::select()->find(Auth::user()->id);
        if (!$user) {
            return redirect()->route('user.profile')->with(['error' => 'هذه اللغة غير موجوده']);
        } else {
            return view('user_profile.edit', compact('user'));
        }
    }

    public function details($id)
    {
        $user = Auth::user();

        $users = User::find($user->id);
        $props = Property::all()->where('project_id', '=', $id);
        $project = Project::all()->where('id', '=', $id);        
        $comments = Comment::where('project_id',$id)->where('user_id',$user->id)->with(['replies','users'])->get();
        $project_id = $id;

        $num_of_comments = Comment::where('user_id',"=",Auth::user()->id)->get();
        
        if (!$users && !$props && !$project && !$comments_of_users && !$replies_of_users) {
            return redirect()->back();
        } else {
            return view('contractor.details')->with(compact('users','props','project','comments','project_id','num_of_comments'));
        }

        // return $comments;


    }


}
