<?php
    if(isset($_POST['email']) && isset($_POST['message'])){
        $email = $_POST['email'];
        $message = $_POST['message'];
        $email = htmlentities($email, ENT_QUOTES, "UTF-8");
        $message = htmlentities($message, ENT_QUOTES, "UTF-8");

        $to = "artiveagency@gmail.com";
        $title = "$name, Wysyła wiadomość ze strony!";
        $headers = 'From:' . $email . "\r\n" .'Reply-To:'. $to . "\r\n" . 'Content-Type: text/html; charset=UTF-8' .'X-Mailer: PHP/' . phpversion();

        @mail($to, $title, "$message  telefon: $phone", $headers);
    }
    
    header("Location: /../");
    exit();