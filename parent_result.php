//フォームから親カテゴリへ登録したデータの表示部分
<?php
require_once '../DbManager.php'; //getDB関数の有効化
require_once '../Encode.php';   //HTMLエスケープの為の関数の有効化
?>
<html>
<head>
<title>親カテゴリデータの表示</title>
</head>
<body>
//外枠線の幅を指定する
<tabel border="1">
<tr>
	<th>ID</th><th>名称</th><th>フリガナ</th><th>ステータス</th><th>メモ</th><th>登録日時</th><th>登録者</th><th>更新日時</th><th>更新者</th><th>並び順</th>
</tr>
<?php
try {
	//DBへの接続の確率
	$db = getDb();
	
	//SELECT命令の実行(SELECT命令を実行することでDBの中身を取り出す
	//更新日時のDESC（降順）でソート
	$parent_db = $db->prepare('SELECT * FROM 親カテゴリ ORDER BY 更新日時 DESC');
	$parent_db->execute();
	//結果セットの内容を順番に出力a
	while($row = $parent_db->fetch(PDO::FETCH_ASSOC)) {
?>
	<tr>
		<td><?php e($row['ID']); ?></td>
		<td><?php e($row['名称']); ?></td>
		<td><?php e($row['フリガナ']); ?></td>
		<td><?php e($row['ステータス']); ?></td>
		<td><?php e($row['メモ']); ?></td>
		<td><?php e($row['登録日時']); ?></td>
		<td><?php e($row['登録者']); ?></td>
		<td><?php e($row['更新日時']); ?></td>
		<td><?php e($row['更新者']); ?></td>
		<td><?php e($row['並び順']); ?></td>
	</tr>
<?php
	}
	$db = NULL;
}catch(PDOException $e) {
	die("エラーメッセージ:{$e->getMessage()}");
}
?>
</table>
</body>
</html>
