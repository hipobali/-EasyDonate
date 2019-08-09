<?php

namespace App\Http\Controllers;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;

class MailController extends Controller{
    public  function sendEmail(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        $name = $request['name'];
        $email = $request['email'];
        $message = $request['message'];
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'denl4ct28@gmail.com';                 // SMTP username
            $mail->Password = 'ktrkjdaptualorrf';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
            //Recipients
            $mail->setFrom($email, $email);
            $mail->addAddress('denl4ct28@gmail.com', 'De Naung Lin');     // Add a recipient
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'User Contacted My Team';
            $mail->Body = $message . "<br>" . $name;
            $mail->send();
            return redirect()->back()->with(['success'=>'Email sent successfully']);
        } catch (Exception $e) {
            return redirect()->back()->with(['error'=>'Email cannot sent']);
        }

    }

}
