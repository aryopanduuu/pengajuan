<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\factory;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function register(Request $request)
    {

        if ($request->isMethod('post')) {
            $validator = Validator::make(request()->all(), [

                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required'

            ]);
            if ($validator->fails()) {
                return response()->json(['message' => 'gagal register !']);
            }
            $user = User::create([
                'name' => request('name'),
                'email' => request('email'),
                'role' => request('role', 'registered'),
                'password' => Hash::make(request('password')),

            ]);

            if ($user) {
                Session::flash('registrasisuccess', 'Akun telah berhasil dibuat');
                $request->session()->put('name', request('name'));
                return redirect('/login');

                // return response()->json(["message"=>'pendaftaran berhasil !']);
            } else {


                return redirect('/registrasi');

                // return response()->json(["message"=>'pendaftaran gagal !']);
            }
        }
        if ($request->isMethod('get')) {
            return view('registrasi');
        }
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = request(['email', 'password']);
            if (!$token = auth()->attempt($credentials)) {
                // return response()->json(['error' => 'Unauthorized'], 401);

                return redirect()->intended('/');
            }

            $dataUser = DB::table('users')->where('email', '=', request('email'))->get();
            $request->session()->put('name', $dataUser[0]->name);
            $request->session()->put('email', $dataUser[0]->email);
            $request->session()->put('role', $dataUser[0]->role);

            return redirect('/view/users');
        }
        if ($request->isMethod('get')) {
            $name = $request->session()->get('name');
            return view('login', ["name" => $name]);
        }
    }
    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('Successfully logged out');
        // auth()->logout();

        // //return response()->json(['message' => 'Successfully logged out']);
        // return redirect('/')->with('Successfully logged out');
    }

    public function home()
    {
        return response()->json(auth()->user());
    }
    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */


    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    // protected function respondWithToken($token)
    // {
    //     return response()->json([
    //         'access_token' => $token,
    //         'token_type' => 'bearer',
    //         'expires_in' => auth()->factory()->getTTL() * 60
    //     ]);
    // }
}
