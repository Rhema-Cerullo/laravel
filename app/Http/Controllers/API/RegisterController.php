<?php



namespace App\Http\Controllers\API;



use Illuminate\Http\Request;

use App\Http\Controllers\API\BaseController as BaseController;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends BaseController

{

    /**

     * Register api

     *

     * @return \Illuminate\Http\Response

     */

    public function register(Request $request)

    {

        $validator = Validator::make($request->all(), [

            'name' => 'required',

            'email' => 'required|email',

            'password' => 'required',

            'c_password' => 'required|same:password',

        ]);



        if($validator->fails()){

            return $this->sendError('Validation Error.', $validator->errors());

        }



        $input = $request->all();

        $input['password'] = bcrypt($input['password']);

        $user = User::create($input);

        $success['token'] =  $user->createToken('MyApp')->plainTextToken;

        $success['name'] =  $user->name;



        return $this->sendResponse($success, 'User register successfully.');

    }



    /**

     * Login api

     *

     * @return \Illuminate\Http\Response

     */

    public function login(Request $request)

    {
        //dd($request);

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])
        ||
        Auth::attempt(['email' => $request->username, 'password' => $request->password])
        ){

            $user = Auth::user();

            //return json_encode($user);
            //$success['token'] =  $user->createToken('MyApp')->plainTextToken;

            $success['name'] =  $user->name;



            return view('dashboard', compact('user'));

        }

        else{

            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);

        }



    }

    public function logout(Request $request)

    {
        Auth::logout();

        $request -> session() -> invalidate();

        $request -> session() -> regenerateToken();

        return redirect('/');
    }


    /**
     * A watcher to verify the user's session
     *
     * @author NGAFANSI Rhema-C <email@gmail.com>
     */
    public static function watcher(String $view = "dashboard")
    {
        if (Auth::check()) {
            $user = Auth::user();
            //dd($user);
            return view( $view, compact('user'));
        } else {
            return view('login');
        }
    }


}
