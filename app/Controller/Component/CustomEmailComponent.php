<?php

App::uses('Component', 'Controller');
/**
 * 
 * Email componment to send emails.
 * 
 * 
 */
class CustomEmailComponent extends Component {
    
    public $type='PHP';
    public $to='';
    public $subject='';
    public $body ='';
    
    public function sendmail() {
        if($this->type=='PHP') {
            $this->sendPhpMail();
        }
        elseif ($this->type=='SMTP') {
            $this->sendSmtpMail();
        }
        return false;
    }
    /**
     * 
     * SendPhpMail- send mail using PHP mail() function.
     * 
     */
    public function sendPhpMail() {
        return mail($this->to,$this->subject,$this->body);
    }
    
    /**
     * 
     * sendSmtpMail - send mail using smtp .
     * 
     */
    public function sendSmtpMail() {
        // Smtp mail sendding logic will come here .  include swiftmailer /php mailer library here.
    }
    
    
}

