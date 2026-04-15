<?php
require_once 'conecta.php';
$produtos = $pdo->query("SELECT * FROM produtos ORDER BY nome")->fetchAll();

// Sistema de Mensagens
$status = $_GET['msg'] ?? '';
$mensagens = [
    'sucesso' => 'Ação realizada com sucesso!',
    'excluido' => 'Produto removido do sistema.',
    'erro' => 'Erro ao processar solicitação.',
    'tabela_pronta' => 'Banco de dados configurado!'
];

include_once 'header.php';
?>

<h1>Relatório de Estoque</h1>

<?php if ($status && isset($mensagens[$status])): ?>
    <div class="alert <?= $status === 'erro' ? 'error' : 'success' ?>">
        <?= $mensagens[$status] ?>
    </div>
<?php endif; ?>

<table border="1" width="100%" cellpadding="10" style="border-collapse: collapse;">
    <tr>
        <th>ID</th><th>Nome</th><th>Preço</th><th>Quantidade</th><th>Ações</th>
    </tr>
    <?php foreach($produtos as $p): ?>
    <tr>
        <td><?= $p['id'] ?></td>
        <td><?= htmlspecialchars($p['nome']) ?></td>
        <td>R$ <?= number_format($p['preco'], 2, ',', '.') ?></td>
         <td><?= $p['quantidade'] ?></td>
        <td>
            <a href="altera.php?id=<?= $p['id'] ?>">Editar</a> |
            <form action="exclui.php" method="POST" style="display:inline" onsubmit="return confirm('Excluir?')">
                <button type="submit" name="id" value="<?= $p['id'] ?>">Excluir</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php include_once 'footer.php'; ?>