<?php
if (isset($_POST['send'])) {
    $to = "nimuel24@gmail.com";
    $toto = "tokizawa@genius-kids.jp";
    $tototo = "sato@genius-kids.jp";
    $totototo = "tanaka@genius-kids.jp";
    $tototototo = "chaudhry@genius-kids.jp";

    $from = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $sunday = $_POST['sunday'];
    $say = $_POST['say'];
    $may = $_POST['may'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $years = $_POST['years'];
    $months = $_POST['months'];
    $days = $_POST['days'];
    // $profession = $_POST['profession'];
    $subject = "Genius Kids";
    $message = ".体験希望日 : " . $sunday . "\n"
    . "お名前 :" . $firstname . " " . $lastname . "\n"
    . "メールアドレス : " . $from . "\n"
    . "カナ : " . $say . " " . $may . "\n"
    . "電話番号 : " . $phone . "\n"
    . "生年月日 : " . $years . "-" . $months . "-" . $days . "\n"
    // . "職業 : " . $profession . "\n"
     . "お問い合わせ内容 : " . $_POST['message'];
    $headers = "From:" . $from;
    mail($to, $subject, $message, $headers);
    mail($toto, $subject, $message, $headers);
    mail($tototo, $subject, $message, $headers);
    mail($totototo, $subject, $message, $headers);
    mail($tototototo, $subject, $message, $headers);
    echo "<script>alert('Successfull!')</script>";
    echo "<script>window.open('thanks#thanks','_self')</script>";

}
