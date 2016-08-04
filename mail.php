<?php



if(isset($_POST['Feedback']['name']) && isset($_POST['Feedback']['phone']) && isset($_POST['Feedback']['email']) && isset($_POST['Feedback']['comment']))
	{
		$content = "<p>Имя: ".$_POST['Feedback']['name']."</p><p>Телефон: ".$_POST['Feedback']['phone']."</p><p>Email: ".$_POST['Feedback']['email']."</p><p>Сообщение: ".$_POST['Feedback']['comment']."</p>";
		mail_utf8('Aleksandra.Alecs1995@yandex.ru', 'Белагропромбанк', 'Уведомление', $content);
		echo "сообщение успешно отправлено!";
		header('Location: /');
	}


function mail_utf8($to, $from, $subject, $message)
{
    $subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
 
    $headers  = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: $from\r\n";
 
    return mail($to, $subject, $message, $headers);
}
 
// пример использования
//mail_utf8('lesha.skorpion@gmail.com', 'maxicolour', 'Заголовок сообщения', 'Текст сообщения');




?>