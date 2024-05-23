// save_info.php
session_start();

// 受け取ったJSONデータを処理
$data = json_decode(file_get_contents('php://input'), true);

// データをセッションに保存
$_SESSION['ip'] = $data['ip'];
$_SESSION['user_agent'] = $data['userAgent'];

// JSONレスポンスを返す
echo json_encode(['status' => 'success']);
?>
