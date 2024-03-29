<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>ユーザー一覧</title>
        <link rel="icon" href="images/favicon.ico">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body style="background-image:url(images/bg.jpg)">
        <!--ビュー(V)-->
        <div class="container">
            <div class="row mt-2">
                <h1 class="col-sm-12 text-center text-primary mt-3 mb-3">ユーザー一覧</h1>
            </div>
            
            <?php include_once 'views/_flush_view.php'?>
            
            <?php if(count($users) !== 0): ?>
            <div class="row mt-2">
                <p class="col-sm-12 text-center text-success">現在のユーザーは<?= count($users)?>人です。</p>
            </div>
            <div class="row mt-2">
                <table class="table table-bordered table-striped">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>名前</th>
                        <th>年齢</th>
                        <th>性別</th>
                        <th>お酒</th>
                    </tr>
                    <?php foreach($users as $user): ?>
                    <tr class="text-center">
                        <!--クエリーパラメーター-->
                        <td><a href="show.php?id=<?= $user->id ?>" id="id"><?= $user->id ?></a></td>
                        <td><?= $user->name ?></td>
                        <td><?= $user->age ?>歳</td>
                        <td><?= $user->gender === 'male' ? '男性' : '女性' ?></td>
                        <td><?= $user->drink() ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <?php else: ?>
                <p class="col-sm-12 text-center text-danger mt-3" id="announce">※ユーザーはいません。</p>
            <?php endif; ?>
            <div class="row mt-5">
                <a href="create.php" class="offset-sm-3 col-sm-6 btn btn-primary">新規ユーザー登録</a>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>