<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="title">
    <meta name="description" content="課題用のサンプルページです。">
    <meta name="keywords" content="">
    <title>ランディングページ</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/scripts.js" defer></script>
</head>
<body>
    <div class="container">
        <header>
            <h1>おすすめ商品</h1>
            <img src="img/product.svg" alt="林檎の画像">
            <p>この素晴らしい林檎をチェックしてください！以下の質問に答えて、詳しい情報をゲットしましょう！</p>
        </header>

        <form id="questionnaire" method="POST" action="send.php">
            <!-- 質問1 -->
            <div class="question" data-step="1">
                <h2>質問1: この林檎をどこで知りましたか？</h2>
                <label><input type="radio" name="question1" value="スーパーで見た" required> スーパーで見た</label><br>
                <label><input type="radio" name="question1" value="友人に聞いた" required> 友人に聞いた</label><br>
                <label><input type="radio" name="question1" value="インターネットで見た" required> インターネットで見た</label>
            </div>

            <!-- 質問2 -->
            <div class="question" data-step="2">
                <h2>質問2: 林檎のどこが魅力的ですか？</h2>
                <label><input type="radio" name="question2" value="甘みがある" required> 甘みがある</label><br>
                <label><input type="radio" name="question2" value="食感が良い" required> 食感が良い</label><br>
                <label><input type="radio" name="question2" value="見た目が良い" required> 見た目が良い</label>
            </div>

            <!-- 質問3 -->
            <div class="question" data-step="3">
                <h2>質問3: この林檎を買ったら何に使いますか？</h2>
                <label><input type="radio" name="question3" value="そのまま食べる" required> そのまま食べる</label><br>
                <label><input type="radio" name="question3" value="料理に使う" required> 料理に使う</label><br>
                <label><input type="radio" name="question3" value="プレゼントする" required> プレゼントする</label>
            </div>

            <!-- 質問4 -->
            <div class="question" data-step="4">
                <h2>質問4: 林檎の価格はいくらが妥当だと思いますか？</h2>
                <label><input type="radio" name="question4" value="100円以下" required> 100円以下</label><br>
                <label><input type="radio" name="question4" value="100〜200円" required> 100〜200円</label><br>
                <label><input type="radio" name="question4" value="200円以上" required> 200円以上</label>
            </div>

            <!-- 質問5 -->
            <div class="question" data-step="5">
                <h2>質問5: 他に興味のある果物を教えてください。</h2>
                <label><input type="radio" name="question5" value="みかん" required> みかん</label><br>
                <label><input type="radio" name="question5" value="バナナ" required> バナナ</label><br>
                <label><input type="radio" name="question5" value="ぶどう" required> ぶどう</label>
            </div>

            <!-- ナビゲーションボタン -->
            <div class="buttons">
                <button type="button" id="prev" disabled>前へ</button>
                <button type="button" id="next">次へ</button>
                <button type="submit" id="submit" disabled>送信</button>
            </div>
        </form>
    </div>
</body>
</html>

