<?php
// 이메일 주소를 저장할 파일 경로
$filepath = "subscribers.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // 이메일 주소를 파일에 추가
    if (file_put_contents($filepath, $email . PHP_EOL, FILE_APPEND | LOCK_EX) !== false) {
        echo "이메일이 성공적으로 저장되었습니다.";
    } else {
        echo "이메일 저장에 실패했습니다.";
    }
}
?>
