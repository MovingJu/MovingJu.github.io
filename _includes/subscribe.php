<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 사용자로부터 이메일을 받아옵니다.
    $email = $_POST['EMAIL'];

    // 이메일이 유효한지 확인합니다.
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // test.txt 파일에 이메일을 추가합니다.
        $file = fopen("test.txt", "a");
        if ($file) {
            fwrite($file, $email . PHP_EOL);
            fclose($file);
            echo "구독이 완료되었습니다!";
        } else {
            echo "파일을 열 수 없습니다.";
        }
    } else {
        echo "유효한 이메일 주소를 입력하세요.";
    }
} else {
    echo "잘못된 요청입니다.";
}
?>
