<?php


/**
 * Відправляємо листа на пошту
 */
function apiSendEmail() {

    // Перевірка на json
    if(empty($_POST)) {
        
        // Отримуємо JSON-дані з тіла запиту
        $post_data = file_get_contents("php://input");
    
        // Перевірка на JSON
        $_POST = json_decode($post_data, true);
    }

	 // Формуємо заголовки з правильною адресою відправника
     $headers = "MIME-Version: 1.0\r\n";
     $headers .= "Content-type: text/html; charset=utf-8\r\n";
     $headers .= "From: noreply@projectsbyelizabeth.com\r\n"; // Вкажіть реальний домен
     $headers .= "Reply-To: noreply@projectsbyelizabeth.com\r\n"; // Також реальний домен
     $headers .= "X-Mailer: PHP/" . phpversion();

	// Відправляємо лист
	return (mail($_POST['to'], $_POST['subject'], $_POST['message'], $headers)) ? "Лист успішно відправлено." : "Помилка відправки листа.";
}


// Відправляємо листа
$res = apiSendEmail();	

echo $res;

