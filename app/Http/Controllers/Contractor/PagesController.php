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
        $comment = Comment::select()->where('project_id', '=', $id)->first();
        $comment_id = $comment->id;

        try{

            $contractor = User::select()->find($user->id);
            $props = Property::all()->where('project_id', '=', $id);
            $project = Project::all()->where('id', '=', $id);
            $comments = Comment::all()->where('project_id', '=', $id);
            $replies = Reply::all()->where('comment_id', '=', $comment_id);
    
            if (!$contractor && !$props && !$project && !$comments && !$replies) {
                return redirect()->back();
            } else {
                return view('contractor.details')->with(compact('contractor'))->with(compact('props'))->with(compact('project'))->with(compact('comments'))->with(compact('replies'));
            }
            // return $replies;

        } catch (\Exception $e) {
            return redirect()->back();
        }


    }


}
