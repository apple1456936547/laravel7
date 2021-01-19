<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

// 這裡要新增 (01-19進度)
// 因為function register (下面的function)
// 疑惑：這裡是import ?????
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
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
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    //新增使用者的資料
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    // 使用者註冊畫面(不包含後台畫面)
    public function showRegistrationForm()
    {
        // 等等改成font.register
        // 等等先創造一個使用者的register的view
        return view('front.register');
    }

    //新增管理者的資料
    protected function create_admin(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'type' => 'admin',
            'password' => Hash::make($data['password']),
        ]);
    }
    // 管理者註冊畫面(包含後台畫面-->在register.blade.php更動)
    public function showAdminRegistrationForm()
    {
        //轉到後台的註冊畫面
        return view('auth.register');
    }

    // 使用者送出表單後會來到這個function
    // 會根據register.blade.php 表單裡面的 action 導到這個function
    public function register(Request $request)
    {
        // 先驗證表單送進的資料是否符合規則
        $this->validator($request->all())->validate();

        // 拆解下面的function
        // 資料驗證完後會先進到create(使用者)/create_admin(管理者)的function
        // 就是上面的validator後面的create 和 create_admin 的function
        // (現在請到create/create_admin function看)
        // 然後把表單資料建立起來送進去User的Model裡面-->然後Model再把資料送進資料庫
        // 做完上面的動作後把這串資料指給$user這個變數
        // 而event做的事情就是讓我們知道有人註冊
        event(new Registered($user = $this->create($request->all())));

        // event(new Registered($user = $this->create_admin($request->all())));

        // 註冊完後直接登入
        $this->guard()->login($user);

        // 待理解
        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        // 網頁HTTP轉資料型態(待理解)
        return $request->wantsJson()
            ? new JsonResponse([], 201)
            // 導回頁面
            : redirect($this->redirectPath());
    }

    // 管理者
    public function admin_register(Request $request)
    {
        // 先驗證表單送進的資料是否符合規則
        $this->validator($request->all())->validate();

        // 拆解下面的function
        // 資料驗證完後會先進到create(使用者)/create_admin(管理者)的function
        // 就是上面的validator後面的create 和 create_admin 的function
        // (現在請到create/create_admin function看)
        // 然後把表單資料建立起來送進去User的Model裡面-->然後Model再把資料送進資料庫
        // 做完上面的動作後把這串資料指給$user這個變數
        // 而event做的事情就是讓我們知道有人註冊
        event(new Registered($user = $this->create_admin($request->all())));

        // 註冊完後直接登入
        $this->guard()->login($user);

        // 待理解
        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        // 網頁HTTP轉資料型態(待理解)
        return $request->wantsJson()
            ? new JsonResponse([], 201)
            // 導回頁面
            : redirect($this->redirectPath());
    }
}
