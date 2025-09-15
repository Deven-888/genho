<?php
declare(strict_types=1);

// ---- 讀取查詢字串 ----
$q = trim((string)($_GET['q'] ?? ''));

// ---- DB 連線（Railway 變數；以 MySQL 為例）----
$DB_HOST = 'localhost';
$DB_PORT = 3306;
$DB_NAME = 'test';
$DB_USER = 'root';
$DB_PASS = '';

try {
  $dsn = "mysql:host={$DB_HOST};port={$DB_PORT};dbname={$DB_NAME};charset=utf8mb4";
  $pdo = new PDO($dsn, $DB_USER, $DB_PASS, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ]);
} catch (Throwable $e) {
  http_response_code(500);
  die('資料庫連線失敗：' . $e->getMessage());
}

// ---- 查詢（只有在有關鍵字時才跑）----
$results = [];
$error = '';
if ($q !== '') {
  try {
    $sql = "SELECT id, name, model, category, summary
            FROM products
            WHERE name LIKE :kw OR model LIKE :kw OR category LIKE :kw
            ORDER BY name ASC
            LIMIT 50";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':kw' => "%{$q}%"]);
    $results = $stmt->fetchAll();
  } catch (Throwable $e) {
    http_response_code(500);
    $error = '查詢發生錯誤：' . $e->getMessage(); // 上線時可改成通用訊息
  }
}


// ---- 輔助：HTML escape ----
function h(string $s): string { return htmlspecialchars($s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
?>
<!doctype html>
<html lang="zh-Hant">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>查詢結果 - 產品搜尋</title>
  <meta name="description" content="產品搜尋結果">
  <style>
    :root{ --line:#233454; --text:#e6eefc; --muted:#a9b3c9; --brand:#3cd4c9; --brand2:#81e6b0; --radius:16px; }
    *{ box-sizing:border-box }
    body{ margin:0; background:linear-gradient(180deg,#f7f8fa,#fafafb); color:#0f1b34;
          font-family:system-ui,-apple-system,Segoe UI,Roboto,Helvetica,Arial,'Noto Sans TC','PingFang TC','Microsoft JhengHei',sans-serif }
    a{ color:#155191; text-decoration:none }
    .wrap{ max-width:1200px; margin:auto; padding:24px 20px }
    h1{ font-size:clamp(22px,3vw,28px); margin:0 0 8px; color:#155191b8; }
    .sub{ color:#4b5563; margin:0 0 16px; }
    .actions{ display:flex; gap:10px; margin-bottom:16px; }
    .btn{ display:inline-flex; align-items:center; gap:8px; padding:10px 14px;
          border-radius:10px; font-weight:700; background:linear-gradient(135deg,var(--brand),var(--brand2)); color:#071424; border:0 }
    .ghost{ background:transparent; border:1px solid var(--line); color:#0f1b34 }
    .table{ background:#0f1b33; border:1px solid var(--line); border-radius:14px; overflow:auto; }
    table{ width:100%; border-collapse:collapse; min-width:720px }
    th,td{ padding:12px 14px; border-bottom:1px solid #1b2d51; text-align:left; color:#e6eefc }
    th{ background:#102243; position:sticky; top:0 }
    tr:hover td{ background:#0c162b }
    .muted{ color:#9db0ce; }
    .searchbox{ display:flex; gap:8px; margin: 10px 0 18px; }
    .searchbox input{ flex:1; padding:10px; border-radius:8px; border:1px solid var(--line); }
  </style>
</head>
<body>
  <div class="wrap">
    <h1>查詢結果</h1>
    <p class="sub">關鍵字：<strong><?= h($q) ?: '（未輸入）' ?></strong></p>

    <div class="actions">
      <a class="btn ghost" href="index.php">← 回首頁</a>
      <!-- 二次搜尋（留在 search.php） -->
      <form method="get" action="search.php" class="searchbox" role="search" style="margin:0;">
        <input name="q" value="<?= h($q) ?>" placeholder="重新搜尋：輸入品名、型號或類別">
        <button class="btn" type="submit">查詢</button>
      </form>
    </div>

    <?php if ($error): ?>
      <p class="muted"><?= h($error) ?></p>
    <?php elseif ($q === ''): ?>
      <p class="muted">請輸入關鍵字。</p>
    <?php else: ?>
      <div class="table">
        <table>
          <thead>
            <tr>
              <th>品名</th>
              <th>型號</th>
              <th>類別</th>
              <th>簡述</th>
            </tr>
          </thead>
          <tbody>
          <?php if ($results): ?>
            <?php foreach ($results as $row): ?>
              <tr>
                <td><?= h($row['name'] ?? '') ?></td>
                <td><?= h($row['model'] ?? '') ?></td>
                <td><?= h($row['category'] ?? '') ?></td>
                <td><?= h($row['summary'] ?? '') ?></td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr><td colspan="4">沒有找到「<?= h($q) ?>」的相關產品。</td></tr>
          <?php endif; ?>
          </tbody>
        </table>
      </div>
    <?php endif; ?>
  </div>
</body>
</html>
