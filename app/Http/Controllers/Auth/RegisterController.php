<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
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
    // protected $redirectTo = RouteServiceProvider::HOME;

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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'dni' => ['required', 'string', 'max:8'],
            'cellphone' => ['required', 'string', 'max:12'],
            'profession_id' => ['required'],
            'age' => ['required', 'string', 'max:10'],
            'gender' => ['required', 'string', 'max:20'],
            'country_id' => ['required'],
            'city_id' => ['required'],
            'leader_id' => ['required'],
            'username' => ['required', 'string', 'max:255'],
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'dni' => $data['dni'],
            'cellphone' => $data['cellphone'],
            'profession_id' => $data['profession_id'],
            'age' => $data['age'],
            'gender' => $data['gender'],
            'country_id' => $data['country_id'],
            'city_id' => $data['city_id'],
            'leader_id' => $data['leader_id'],
            'username' => $data['username'],
            
        ]);

        $role = Role::findByName('volunteer','web');
        $user->assignRole($role);

        return $user;
    }

    public function redirectTo() {
        $role = Auth::user()->role; 
        switch ($role) {
          case 'leader':
            return '/volunteers';
            break;
          case 'volunteer':
            return '/home';
            break; 
      
          default:
            return '/home'; 
          break;
        }
    }
}
