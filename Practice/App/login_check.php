<?php

// phpファイルへのアクセスはトップにリダイレクト
if (preg_match('/\.php$/', $url)) {
    header('Location: /');
    exit;
}

// ログイン画面の場合は遷移
if ($url === "/login") {
    include "./view/login.php";
    exit;
}

// 未ログインの場合はログイン画面にリダイレクト
if (is_null($uid)) {
    header('Location: /login');
    exit;
}

// ユーザーが存在しない場合はログイン画面にリダイレクト
$user = $db->fetchUserFromUid($uid);
if (!$user) {
    header('Location: /login');
    exit;
}
