<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Student;
use App\Models\Classname;
use App\Models\Section;
use App\Models\Attendance;
use Carbon\Carbon;
use DB;
use Auth;


class UserController extends Controller
{
    
     function __construct()
    {
        /* $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index','store']]);
         $this->middleware('permission:user-create', ['only' => ['create','store']]);
         $this->middleware('permission:user-show', ['only' => ['index','show']]);
         $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:user-delete', ['only' => ['destroy']]);*/
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users =  User::all();
         if(!empty($users)){
            return response()->json([
                'data'   =>  $users
            ], 200);
        }else{
            return response()->json([
                'message'   =>  'Sorry you have no users.'
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();

         if(!empty($roles)){
            return response()->json([
                'data'   =>  $roles
            ], 200);
        }else{
            return response()->json([
                'message'   =>  'Sorry you have no roles.'
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|max:100|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = new User();

        if(Auth::user()->user_type == 'systemadmin'){
            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->user_type = 'coaching';
            $user->password = bcrypt($request->password);
        }
        else if(Auth::user()->user_type == 'coaching'){
            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->user_type = 'admin';
            $user->coaching_id = Auth::user()->id;
            $user->password = bcrypt($request->password);
        }
        else if(Auth::user()->user_type == 'admin'){
            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->user_type = 'teacher';
            $user->coaching_id = Auth::user()->coaching_id;
            $user->admin_id = Auth::user()->id;
            $user->password = bcrypt($request->password);
        }

        if($user->save()){
            $user->syncRoles($request->get('roles'));

            return response()->json([
                'message'   =>  'User Created Successfully',
                'status_code'   =>  201,
                 'data'   =>  $user,
            ], 201);
        }else{
            return response()->json([
                'message'   =>  'Sorry you have no data.',
                'status_code'   =>  500
            ], 500);
        }
            
          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $data = [
            'model' => $user,
        ];

        if(!empty($data)){
            return response()->json([
                'data'   =>  $data
            ], 200);
        }else{
            return response()->json([
                'message'   =>  'Sorry you have no data.'
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();

         if(!empty($roles)){
            return response()->json([
                'user'   =>  $user,
                'roles'   =>  $roles
            ], 200);
        }else{
            return response()->json([
                'message'   =>  'Sorry you have no data.'
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|max:100|email|unique:users',
            'password' => 'confirmed',
        ]);

        $user = User::find($id);

        if(Auth::user()->user_type == 'systemadmin'){
            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->user_type = 'coaching';
            $user->password = bcrypt($request->password);
        }
        else if(Auth::user()->user_type == 'coaching'){
            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->user_type = 'admin';
            $user->coaching_id = Auth::user()->id;
            $user->password = bcrypt($request->password);
        }
        else if(Auth::user()->user_type == 'admin'){
            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->user_type = 'teacher';
            $user->coaching_id = Auth::user()->coaching_id;
            $user->admin_id = Auth::user()->id;
            $user->password = bcrypt($request->password);
        }

         if($user->save()){
            $user->syncRoles($request->get('roles'));

            return response()->json([
                'message'   =>  'User Update Successfully',
                'status_code'   =>  201,
                 'data'   =>  $user,
            ], 201);
        }else{
            return response()->json([
                'message'   =>  'Sorry you have no data.',
                'status_code'   =>  500
            ], 500);
        }
           
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
       
       if($user->delete()){
            return response()->json([
                'message'   =>  'User Delete Successfully',
                'status_code'   =>  201,
                 'data'   =>  $user,
            ], 201);
        }else{
            return response()->json([
                'message'   =>  'Sorry you have no data.',
                'status_code'   =>  500
            ], 500);
        }
    }




    //User-Profile Section....

    public function userProfile(Request $request, $id)
    {
        $data = Student::find($id);

        //Student-Present Count....
        $januaryPresent = Attendance::where('student_id', $id)->where('present', true)->where('month', 'January')->count();
        $februaryPresent = Attendance::where('student_id', $id)->where('present', true)->where('month', 'February')->count();
        $marchPresent = Attendance::where('student_id', $id)->where('present', true)->where('month', 'March')->count();
        $aprilPresent = Attendance::where('student_id', $id)->where('present', true)->where('month', 'April')->count();
        $mayPresent = Attendance::where('student_id', $id)->where('present', true)->where('month', 'May')->count();
        $junePresent = Attendance::where('student_id', $id)->where('present', true)->where('month', 'June')->count();
        $julyPresent = Attendance::where('student_id', $id)->where('present', true)->where('month', 'July')->count();
        $augustPresent = Attendance::where('student_id', $id)->where('present', true)->where('month', 'August')->count();
        $septemberPresent = Attendance::where('student_id', $id)->where('present', true)->where('month', 'September')->count();
        $octoberPresent = Attendance::where('student_id', $id)->where('present', true)->where('month', 'October')->count();
        $novemberPresent = Attendance::where('student_id', $id)->where('present', true)->where('month', 'November')->count();
        $decemberPresent = Attendance::where('student_id', $id)->where('present', true)->where('month', 'December')->count();
        
        //Student-Absence Count....
        $januaryAbsence = Attendance::where('student_id', $id)->where('absence', true)->where('month', 'January')->count();
        $februaryAbsence = Attendance::where('student_id', $id)->where('absence', true)->where('month', 'February')->count();
        $marchAbsence = Attendance::where('student_id', $id)->where('absence', true)->where('month', 'March')->count();
        $aprilAbsence = Attendance::where('student_id', $id)->where('absence', true)->where('month', 'April')->count();
        $mayAbsence = Attendance::where('student_id', $id)->where('absence', true)->where('month', 'May')->count();
        $juneAbsence = Attendance::where('student_id', $id)->where('absence', true)->where('month', 'June')->count();
        $julyAbsence = Attendance::where('student_id', $id)->where('absence', true)->where('month', 'July')->count();
        $augustAbsence = Attendance::where('student_id', $id)->where('absence', true)->where('month', 'August')->count();
        $septemberAbsence = Attendance::where('student_id', $id)->where('absence', true)->where('month', 'September')->count();
        $octoberAbsence = Attendance::where('student_id', $id)->where('absence', true)->where('month', 'October')->count();
        $novemberAbsence = Attendance::where('student_id', $id)->where('absence', true)->where('month', 'November')->count();
        $decemberAbsence = Attendance::where('student_id', $id)->where('absence', true)->where('month', 'December')->count();

        return view('backend.profile.userProfile',compact(
            'data','januaryPresent','februaryPresent','marchPresent','aprilPresent','mayPresent','junePresent','julyPresent','augustPresent','septemberPresent','octoberPresent','novemberPresent','decemberPresent',
            'januaryAbsence','februaryAbsence','marchAbsence','aprilAbsence','mayAbsence','juneAbsence','julyAbsence','augustAbsence','septemberAbsence','octoberAbsence','novemberAbsence','decemberAbsence',
        ));
    }
    
    public function userEdit(Request $request, $id)
    {
        return view('backend.profile.userEdit');
    }
}
