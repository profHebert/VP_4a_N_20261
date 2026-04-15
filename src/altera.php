<?php
require_once 'conecta.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("UPDATE produtos SET nome=?, preco=?, quantidade=? WHERE id=?");
    $stmt->execute([$_POST['nome'], $_POST['preco'], $_POST['quantidade'], $_POST['id']]);
    header("Location: relatorio.php?msg=sucesso");
    exit;
}

$id = $_GET['id'] ?? 0;
$stmt = $pdo->prepare("SELECT * FROM produtos WHERE id = ?");
$stmt->execute([$id]);
$p = $stmt->fetch();

include_once 'header.php';
?>
<h2>Alterar Produto</h2>
<form method="POST">
    <input type="hidden" name="id" value="<?= $p['id'] ?>">
    <input type="text" name="nome" value="<?= $p['nome'] ?>" required><br><br>
    <input type="number" step="0.01" name="preco" value="<?= $p['preco'] ?>" required><br><br>
    <input type="number" name="quantidade" value="<?= $p['quantidade'] ?>" required><br><br>
    <button type="submit">Atualizar</button>
</form>
<?php include_once 'footer.php'; ?>