<?php
// Включаем отображение ошибок для отладки
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 1. Вывод времени
echo date('H:i:s') . "\n";

// 2. Работа с массивом (без ошибок)
$arr = ['a' => 1, 'b' => 2];

// Безопасный вывод значения ключа 'c'
echo $arr['c'] ?? 'Ключ "c" не существует';

// 3. Отправка письма
$to = '1@1.ru';
$subject = 'Тестовое письмо';
$message = 'Проверка отправки через MailHog';
$headers = "From: sender@localhost\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "\nПисьмо отправлено в MailHog";
} else {
    echo "\nОшибка отправки письма";
}
?>