<?php
    
//contolador de la operación de "contacto"
class ContactoController extends Controller{

    public function index(){
        //carga la vista con el formulario de contacto
        $this->loadView('contacto');          //redirige al método $list
    }
    
    //método que envía el email al administrador
    public function send(){
        
        if(empty($_POST['enviar']))
            throw new Exception('No se recició el formulario de contacto');
        
        $from = $_POST['email'];
        $name = $_POST['nombre'];
        $subject = $_POST['asunto'];
        $message = $_POST['mensaje'];
        
        //preparar y enviar el mail
        $mail = new Email(ADMIN_EMAIL, $from, $name, $subject, $message);
        
        if(!$mail->send())
            throw new Exception('No se pudo enviar el email de contacto');
        
        Session::flash('success', "Mensaje enviado, en breve recibirás una respuesta");
        redirect('/');
    }


}