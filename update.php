<?php
    //(C)
    require_once "filters/csrf_filter.php";
    require_once "models/User.php";
    // $_POST はページ間をまたいで飛んでくる連想配列
    $id = $_POST['id'];
    // そのIDのユーザーインスタンスを取得
    $user = User::find($id);
    $name = $_POST['name'];
    // create_view.phpのフォームで入力された値を取得
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    
    // ユーザーインスタンスの個性を変更
    $user->name = $name;
    $user->age = $age;
    $user->gender = $gender;
    
    // 入力された値の検証
    $errors = $user->validate();
    // 入力エラーが一つもなければ新規登録させたい
    if(count($errors) === 0) {
        // データベースに新しいユーザーを登録
        $flush = $user->save();
        $_SESSION['flush'] = $flush;
        // ユーザー一覧へリダイレクト
        header('Location: index.php');
        exit;
    } else {
        // 入力のし直し
        $_SESSION['errors'] = $errors;
        // $_SESSION['user'] = $user;
        header('Location: edit.php?id=' . $user->id);
        exit;
    }