//親カテゴリのフォームの表示部分
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="abc.js"></script>
<title><入力フォームからの登録/title>
</head>

<h1>登録フォームからの入力</h1>
<form method="post" action="addin.php">

ID:</br>
<input type="text" name="id" maxlength="256">

名称:</br>
<input type="text" name="meisyou" maxlength="256">

フリガナ：</br>
<input type="text" name="furigana" maxlength="256">

ステータス</br>
<select name="status">
<option value="1" selected>掲載</option>
<option value="2">不掲載</option>
<option value="3">その他</option>
</select>

メモ:</br>
<textarea= name="memo" colos="50" rows="10" maxlength="10000"></textarea>


<input type="confirm" value="確認する"
