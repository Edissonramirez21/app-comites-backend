<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Models\UsuarioLogin;


class EmailController extends Controller
{
    public function enviarCodigo(Request $request)
    {
        // Validar el correo electrónico ingresado
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->input('email');
        $miClaveThree = substr(str_shuffle("0123456789"), 0, 6); // Genera un código aleatorio de 6 dígitos


         // Buscar el usuario existente por correo electrónico
         $user = UsuarioLogin::where('email', $email)->first();

         if (!$user) {
             return redirect('welcome')->with(['error' => 'No se encontró un usuario registrado con este correo.']);
         }

        // Actualizar el código de validación y la expiración en la base de datos para el usuario existente
        $user->codigo_validacion = $miClaveThree;
        $user->codigo_expiracion = now()->addMinutes(15); // Código válido por 15 minutos
        $user->save();

        // Enviar el correo usando la funcionalidad de Laravel
        $data = [
            'codigo' => $miClaveThree,
            'nombre' => $user->name,
        ];

        // Envia el correo usando PHPMailer
        require base_path('/vendor/autoload.php'); // Carga PHPMailer si fue instalado con Composer

        $mail = new PHPMailer(true);
        $mensaje = '';

        try {
            // Configuración del servidor SMTP
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'comeva.sena.interactivo@gmail.com';  // Tu correo SMTP
            $mail->Password   = 'yszl hwcj apyt ytgb';  // Contraseña de aplicación
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Configuración del remitente y destinatario
            $mail->setFrom('comeva.sena.interactivo@gmail.com', 'SENA C.B.A Mosquera - Ingreso App Comeva');
            $mail->addAddress($email);

            // Contenido del correo
            $mail->isHTML(true);
            $mail->Subject = 'Codigo de Validacion - Ingreso';
            $mail->Body    = 'Tu código de validación para ingresar al aplicativo es: <b>' . $miClaveThree . '</b>';

            // Enviar el correo
            $mail->send();
            return redirect('welcome')->with(['success' => 'El código se ha enviado correctamente a ' . $email . ', ahora úselo para iniciar sesión']);
        } catch (Exception $e) {
            $mensaje = 'Error al enviar el correo: ' . $mail->ErrorInfo;
            return redirect('welcome')->with(['error' => 'Error al enviar el correo: ' . $mail->ErrorInfo, ]);
        }
    }
}
