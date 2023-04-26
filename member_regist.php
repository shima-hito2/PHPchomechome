<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>会員登録フォーム</title>
</head>

<body>
  <form action="member_confirm.php" method="POST">
    <h2>会員情報登録フォーム</h2>

    <label class="labels" for="last_name">氏名</label>
    <div class="names">
      <label class="labels" for="last_name">姓:</label>
      <input class="contents" type="text" id="last_name" name="last_name" required><br>     
      <label class="labels" for="first_name">名:</label>
      <input class="contents" type="text" id="first_name" name="first_name" required><br>
    </div>

    <label class="labels" for="gender">性別:</label>
    <select class="contents" id="gender" name="gender">
      <option value="male">男性</option>
      <option value="female">女性</option>
      <option value="other">その他</option>
    </select><br>

    <label class="labels" for="prefecture">都道府県:</label>
    <select class="contents" id="prefecture" name="prefecture">
      <option value="">都道府県を選択してください</option>
      <option value="北海道">北海道</option>
      <option value="青森県">青森県</option>
      <option value="岩手県">岩手県</option>
      <option value="宮城県">宮城県</option>
      <option value="秋田県">秋田県</option>
      <option value="山形県">山形県</option>
      <option value="福島県">福島県</option>
      <option value="茨城県">茨城県</option>
      <option value="栃木県">栃木県</option>
      <option value="群馬県">群馬県</option>
      <option value="埼玉県">埼玉県</option>
      <option value="千葉県">千葉県</option>
      <option value="東京都">東京都</option>
      <option value="神奈川県">神奈川県</option>
      <option value="新潟県">新潟県</option>
      <option value="富山県">富山県</option>
      <option value="石川県">石川県</option>
      <option value="福井県">福井県</option>
      <option value="山梨県">山梨県</option>
      <option value="長野県">長野県</option>
      <option value="岐阜県">岐阜県</option>
      <option value="静岡県">静岡県</option>
      <option value="愛知県">愛知県</option>
      <option value="三重県">三重県</option>
      <option value="滋賀県">滋賀県</option>
      <option value="京都府">京都府</option>
      <option value="大阪府">大阪府</option>
      <option value="兵庫県">兵庫県</option>
      <option value="奈良県">奈良県</option>
      <option value="和歌山県">和歌山県</option>
      <option value="鳥取県">鳥取県</option>
      <option value="島根県">島根県</option>
      <option value="岡山県">岡山県</option>
      <option value="広島県">広島県</option>
      <option value="山口県">山口県</option>
      <option value="徳島県">徳島県</option>
      <option value="香川県">香川県</option>
      <option value="愛媛県">愛媛県</option>
      <option value="高知県">高知県</option>
      <option value="福岡県">福岡県</option>
      <option value="佐賀県">佐賀県</option>
      <option value="長崎県">長崎県</option>
      <option value="熊本県">熊本県</option>
      <option value="大分県">大分県</option>
      <option value="宮崎県">宮崎県</option>
      <option value="鹿児島県">鹿児島県</option>
      <option value="沖縄県">沖縄県</option>
    </select><br>

    <label class="labels" for="address">それ以外の住所:</label>
    <input class="contents" type="text" id="address" name="address"><br>

    <label class="labels" for="password">パスワード:</label>
    <input class="contents" type="password" id="password" name="password" required><br>

    <label class="labels" for="confirm_password">確認用パスワード:</label>
    <input class="contents" type="password" id="confirm_password" name="confirm_password" required><br>

    <label class="labels" for="email">メールアドレス:</label>
    <input class="contents" type="email" id="email" name="email" required><br>

    <input class="regist_button" type="submit" value="登録">
  </form>

</body>

</html>