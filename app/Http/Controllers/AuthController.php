<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function login(Request $request)
    {
       /*  $request->validate([
            'identificacion' => 'required|string',
            'email' => 'required|email',
        ]);

        $user = User::where('identificacion', $request->identificacion)
                    ->where('email', $request->email)
                    ->first();

        if ($user) {
            // Genera random verificacion codigo
            $verificationCode = rand(100000, 999999);

            // Guarda el codigo in la sesion de la base de datos si es necesario
            session(['verification_code' => $verificationCode]);
            session(['user_id' => $user->id]);

            // envia el codigo al email del usuario
            Mail::to($user->email)->send(new VerificationCodeMail($verificationCode));

            return response()->json(['message' => 'Codigo enviado al email.'], 200);
        } else {
            return response()->json(['message' => 'Usuario no encontrado.'], 404);
        }
    }

    public function verifyCode(Request $request)
    {
        $request->validate([
            'code' => 'required|numeric',
        ]);

        $code = $request->input('code');

        if ($code == session('verification_code')) {
           
            $user = User::find(session('user_id'));
            session()->forget(['verification_code', 'user_id']);

           
            Auth::login($user);

            return response()->json(['message' => 'Verificacion correcta.'], 200);
        } else {
            return response()->json(['message' => 'Codigo de verificacion invalido.'], 401);
        } */
    }
}
