<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>新規ユーザー登録</title>
        <link rel="icon" href="images/favicon.ico">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body style="background-image:url(images/bg.jpg)">
        <div class="container">
            <div class="row mt-3">
                <h1 class="col-sm-12 text-primary text-center pb-1 mt-3 mb-3">ユーザー登録</h1>
            </div>
            <?php include_once 'views/_errors_view.php';?>
            <div class="row mt-3">
                <form class="col-sm-12" action="store.php" method="POST">
                    <!-- 1行 -->
                    <div class="row mb-5">
                        <label class="col-2 col-form-label">名前</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="name" value="<?= $user->name ?>">
                        </div>
                    </div>
                    
                    <!-- 1行 -->
                    <div class="mb-3 row">
                        <label class="col-2 col-form-label">年齢</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="age" value="<?= $user->age ?>">
                        </div>
                    </div>
                    
                    <!-- 1行 -->
                    <div class="mt-3 row">
                        <p class="col-2 col-form-label">性別</p> 
                        <div class="form-check form-check-inline col-3 ml-5">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" <?= $user->gender === 'male' ? 'checked' : '' ?>>
                            <label class="form-check-label" for="male">男性</label>
                        </div>
                        <div class="form-check form-check-inline col-3">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?= $user->gender === 'female' ? 'checked' : '' ?>>
                            <label class="form-check-label" for="female">女性</label>
                        </div>
                    </div>
                    
                    <!-- 1行 -->
                    <div class="row mt-5 mb-3">
                        <button type="submit" class="offset-sm-3 col-sm-6 btn btn-primary">登録</button>
                    </div>
                    <input type="hidden" name="_token" value="<?= $token ?>">
                </form>
                
            </div>
            
            <div class="row mt-3">
                <a href="index.php" class="offset-sm-3 col-sm-6 btn btn-danger">ユーザー一覧に戻る</a>
            </div>
        </div>
            
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>