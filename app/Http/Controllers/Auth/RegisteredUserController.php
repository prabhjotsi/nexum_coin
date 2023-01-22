<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Generation;
use Session;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }
    public function search_sponsorid(Request $request){
        $sponsor_id = $request->sponsor_id;
        echo $sponsor_id;
        // $check = User::where(['username' => $sponsor_id, 'status' => 1])->exists();
        // if($check){
        //     $data = User::where(['username' => $sponsor_id, 'status' => 1])->first();
        //     echo $data->first_name;
        // }
        // else{
        //     echo '0';
        // }
    }
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => ['required', 'string','min:2', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //         'sponsor_id' => ['required'],
    //         'username' => ['required', 'unique:users'],
    //         'phone' => ['required', 'numeric', 'unique:users'],
            // 'password' => 'required|confirmed|min:6',
            // 'password_confirmation' => 'required'
        // ]);
            // =====================================
            // $sponsor_check = User::where(['username' =>$request->sponsor_id,'status'=>1])->exists();
            // if($sponsor_check){
            //     $sponsor_details = User::where(['username' =>$request->sponsor_id,'status'=>1])->first();
            //     $model = new User();
            //     $model->name = $request->name;
            //     $model->username = $request->username;
            //     $model->email = $request->email;
            //     $model->mobile = $request->mobile;
            //     $model->sponsor_code = $sponsor_details->id;
            //     $model->password = Hash::make($request->password);
            //     $model->save();

            //     $user_id = $model->id;
            //     $sponsor_id = $sponsor_details->id;

            //         // first level
            //     User::where(['id'=>$sponsor_id, 'status'=>1])->increment('direct_group',1);
            //     User::where(['id'=>$sponsor_id, 'status'=>1])->increment('total_group',1);
            //     $level = new Generation();
            //     $level->main_id = $sponsor_id;
            //     $level->member_id = $user_id;
            //     $level->gen_type = 1;
            //     $level->save();

            //         // all generation
            //     $i = 2;
            //     $generation = $this->generation_loop($sponsor_id,$user_id,$i);
            //     Session::flash('message', 'Registration Success!');
            //     // return redirect()->route('user.register');
            //     return redirect(RouteServiceProvider::HOME);
                
            // }
            // else{
            //     Session::flash('message', 'Sponsor Id Not Match');
            //     return redirect('auth.register');
            // }
            // =====================================
        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
    // }

    // public function generation_loop($sponsor_id,$user_id,$i){
    //     $user_details_check = User::where(['id'=>$sponsor_id, 'status'=>1])->exists();
    //     if($user_details_check){
    //         $sponsor_details = User::where(['id'=>$sponsor_id, 'status'=>1])->first();
    //         if($sponsor_details->sponsor_code!=''){
    //             $sponsor_sponsor_id = $sponsor_details->sponsor_code;
    //             User::where(['id'=>$sponsor_sponsor_id, 'status'=>1])->increment('total_group',1);
    //             $level = new Generation();
    //             $level->main_id = $sponsor_sponsor_id;
    //             $level->member_id = $user_id;
    //             $level->gen_type = $i;
    //             $level->save();
    
    //             $i = $i+1;
    //             if($i<=10){
    //                 return $this->generation_loop($sponsor_sponsor_id,$user_id,$i);
    //             }
    //         }
    //     }
    // }
}
