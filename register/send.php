<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $questions = [
        '質問1' => $_POST['question1'],
        '質問2' => $_POST['question2'],
        '質問3' => $_POST['question3'],
        '質問4' => $_POST['question4'],
        '質問5' => $_POST['question5'],
    ];

    $to = 'test@example.com'; // 任意のメールアドレス
    $subject = 'ユーザーからの回答';
    $message = '';
    foreach ($questions as $key => $answer) {
        $message .= "$key: $answer\n";
    }

    $headers = "From: no-reply@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "メールが送信されました！";
    } else {
        $error = error_get_last();
        echo "メール送信に失敗しました。エラー詳細: " . print_r($error, true);
    }
} else {
    header('Location: index.php');
    exit();
}
