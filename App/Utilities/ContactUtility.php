<?php
/**
 * Contact Utility
 *
 */
namespace App\Utilities;

//use App\Config\SMTP;//todo

use App\Interfaces\UtilityInterface;

class ContactUtility implements UtilityInterface
{
    public function execute($request)
    {
        //$credentials = $request->getCookieParams();

        $credentials = [
            'user_name' => 'testUserName',
            'user_email' => 'test@email.fake'
        ];

        $input = $request->getParsedBody();
        
        $files = $request->getUploadedFiles();
    
        $mail = new \PHPMailer;
        
       /*
        //SMTP Setup
        $mail->SMTPDebug = 3;
        
        $mail->isSMTP();
        $mail->Host = 'localhost';
        
        $mail->SMTPAuth = true;
        $mail->Username = 'email';
        $mail->Password = 'secret';
        
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
       */
        
        $mail->FromName = $credentials['user_name'];
        
        $mail->From = $credentials['user_email'];
        
        $mail->addAddress('stephen.swahn@coxautoinc.com');
        
        //$mail->addAddress('ddcinsights.ops@coxautoinc.com');
        
        $mail->addReplyTo($credentials['user_email']);
        
        //$mail->isHTML(true);

        $mail->Subject = $input['subject'];
        
        $mail->Body = $input['body'];
        
        //$mail->AltBody = 'for plain text if body version is html';
        
        if (isset($input['carbon_copy']) && !empty($input['carbon_copy'])) {
            $mail->addCC($input['carbon_copy']);
        }
        if (isset($input['blind_carbon_copy']) && !empty($input['blind_carbon_copy'])) {
            $mail->addBCC($input['blind_carbon_copy']);
        }
        if (!empty($files)) {
            $mail->addAttachment($files['tmp/path/file.txt']);
        }
        if (!$mail->send()) {
            throw new \Exception(__METHOD__ . '::' . $mail->ErrorInfo, 554);
        }
        
        return [
            'message' => 'Success! Your message has been sent.'
        ];
    }
}
