<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Role;
use App\Rules\FindIdentity;
use App\User;
use Helpers;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller implements ShouldQueue
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // $this->showw($data['email']);
        return Validator::make($data, [
            // 'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',new FindIdentity(), 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $adminRole = Role::where('name','admin')->first();
        $facultyRole = Role::where('name','faculty')->first();
        $studentRole = Role::where('name','student')->first();
        
        $student = Helpers::findEmail_from_students($data['email']);

        if (!empty($student)) {
            $user = $student->user()->create([
                'name' => $student['name'],
                'email' => $student['email'],
                'password' => Hash::make('password'),

            ]);

            $user->roles()->attach($studentRole);
        }

        $faculty = Helpers::findEmail_from_faculties($data['email']);

        if (!empty($faculty)) {
            $user = $faculty->user()->create([
                'name' => $faculty['name'],
                'email' => $faculty['email'],
                'password' => Hash::make('password'),

            ]);

            $user->roles()->attach([$adminRole['id'],$facultyRole['id']]);
            $user->roles()->attach($facultyRole);
        }
        
        return $user;
       
    }

    protected function registered(Request $request, $user)
    {
        if ($request->user()->hasAnyRole(['admin','faculty'])) {
            return redirect(route('dashboard'));
        }

        else if ($request->user()->hasRole('student')) {
            return redirect(route('home'));
        }

        else{
            return redirect('/home');
        }
    }
}
