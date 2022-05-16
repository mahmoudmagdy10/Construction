<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Property;
use App\Models\project;
use App\Models\Comment;
use App\Models\Reply;
use App\Traits\GeneralTrait;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Requests\ProfileRequest;

class CustomerPagesController extends Controller
{
    public function homepage()
    {
        try{
            $customer = User::select()->find(Auth::user()->id);
            if (!$customer) {
                return redirect()->route('log_in');
            } else {
                return view('customer.homepage')->with(compact('customer'));
            }

        } catch (\Exception $e) {
            return redirect()->route('log_in');
        }

    }

    public function construction_style()
    {
        try{
            $customer = User::select()->find(Auth::user()->id);
            if (!$customer) {
                return redirect()->route('log_in');
            } else {
                return view('customer.construction_style')->with(compact('customer'));
            }

        } catch (\Exception $e) {
            return redirect()->route('log_in');
        }

    }
    public function your_project()
    {
        $id =Auth::user()->id;
        try{
            $customer = User::find($id);
            $project = Project::where('user_id', '=', $id)->with(['props'])->get();


            if (!$customer && !$project) {
                return redirect()->route('log_in');
            } else {
                return view('customer.your_project')->with(compact('customer','project'));
            }
        } catch (\Exception $e) {
            return redirect()->route('log_in');
        }
    }

    public function profile()
    {
        if(Auth::check()){
            try{
                $customer = User::select()->find(Auth::user()->id);
                if (!$customer) {
                    return redirect()->route('log_in');
                } else {
                    return view('customer.profile', compact('customer'));
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
        try{
            $customer = User::select()->find(Auth::user()->id);
            if (!$customer) {
                return redirect()->route('customer.profile')->with(['error' => 'هذه اللغة غير موجوده']);
            } else {
                return view('customer.edit', compact('customer'));
            }
        } catch (\Exception $e) {
            return redirect()->route('log_in');
        }
    }

    public function update(ProfileRequest $request)
    {
        $id= Auth::user()->id;
        $customer = User::find($id);

        try{

            if (!$customer) {
                return redirect()->route('log_in');
            }

            $customer->name = $request['name'];
            $customer->address = $request['address'];
            $customer->phone = $request['phone'];
            $customer->national_id = $request['national_id'];
            $customer->password = Hash::make($request['password']);
            $customer->save();

            return redirect()->route('customer.edit')->with('success','Updated Successfully');
            // return "yes";

        } catch (\Exception $e) {
            return redirect()->route('customer.edit')->with('error' , 'هناك خطأ يرجي المحاوله في وقت اخر');   
            // return 'no';
        }

    }

    public function details($id)
    {
        try{

            $user = Auth::user();
            $users = User::find($user->id);
            $props = Property::all()->where('project_id', '=', $id);
            $project = Project::all()->where('id', '=', $id);        
            $comments = Comment::where('project_id',$id)->with(['users','replies'])->get();
            $project_id = $id;
            $user = Comment::where('user_id',$user->id)->with(['users'])->get();
            $num_of_comments = Comment::where('user_id',"=",Auth::user()->id)->get();

            
            if (!$users && !$props && !$project && !$comments_of_users && !$replies_of_users) {
                return redirect()->back();
            } else {
                return view('customer.details')->with(compact('users','props','project','comments','project_id','num_of_comments'));
            }

        } catch (\Exception $e) {
            return redirect()->route('log_in')->with('هناك خطأ يرجي المحاوله في وقت اخر');
        }

    }


}
