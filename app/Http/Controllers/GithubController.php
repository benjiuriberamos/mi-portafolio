<?php

namespace App\Http\Controllers;

use App\Models\User;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;
use App\Services\GithubService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Psr\Http\Message\ResponseInterface;

class GithubController extends Controller
{

    public function token(Request $request)
    {
        $credentials = $request->header('Authorization', null);
        $credentials = base64_decode(substr($credentials, 6));
        list($username, $password) = explode(":", $credentials);
        $user = User::where('email', $username)
            ->first();

        if (!$user or !Hash::check($password, $user->password)) {
            return response()->json([
                'messaje'=>'Usuario no encontrado.',
            ]);
        }

        $payload = ['id' =>  $user->id];
        $jwt = JWT::encode($payload, env('JWT_SECRET'), 'HS256');

        return response()->json([
            'token'=>$jwt,
            'messaje'=>'This is your token.',
        ]);
    }

    public function repos(Request $request)
    {
        $jwt = $request->header('Authorization', '<token>');

        try {
            JWT::decode($jwt, new Key(env('JWT_SECRET'), 'HS256'));
            return response()
                ->json((new GithubService())->getRepos());
        } catch (\Throwable $th) {
            return response()
                ->json([
                    'message'=>'JWT is invalid or is expired.',
                ])
                ->setStatusCode(401);
        }
    }

}
