# 📚 Guias Práticos de Desenvolvimento — Bibliotech 2026

Este documento reúne o roteiro de desenvolvimento passo a passo para o módulo 4 - Dashboard e Penalidades do sistema. Ele foi desenhado como "receita de bolo" para guiar o desenvolvimento lógico e de banco de dados do seu projeto.

---

## 📄 GUIA DE BOLSO: Módulo 4 — Dashboard e Penalidades

Este módulo extrai estatísticas analíticas do banco de dados e gerencia as taxas e multas de atraso.

### 🗂️ O que programar em cada arquivo:

#### 1. `modules/dashboard/index.php` (Interface Visual Principal)

* **O que faz:** Painel inicial interno com cartões de indicadores numéricos gerais.
* **O código padrão que você deve usar para os cartões:**
```php
<?php
require_once '../../includes/header.php';
require_once '../../database/conexao.php';

// Consultas para obter os números de forma dinâmica
$total_livros = $pdo->query("SELECT SUM(quantidade) FROM livros")->fetchColumn() ?: 0;
$emprestimos_ativos = $pdo->query("SELECT COUNT(*) FROM emprestimos WHERE id_status = 1")->fetchColumn();
$total_usuarios = $pdo->query("SELECT COUNT(*) FROM usuarios WHERE perfil = 'aluno'")->fetchColumn();
?>

<!-- Exibição na Interface -->
<div class="dashboard-grid">
    <div class="card">
        <h3>Total de Livros no Acervo</h3>
        <p><?= $total_livros ?></p>
    </div>
    <div class="card">
        <h3>Empréstimos Ativos</h3>
        <p><?= $emprestimos_ativos ?></p>
    </div>
    <div class="card">
        <h3>Alunos Cadastrados</h3>
        <p><?= $total_usuarios ?></p>
    </div>
</div>

```



#### 2. `modules/dashboard/inadimplentes.php` (Interface Visual)

* **O que faz:** Lista todos os alunos que estão com livros em posse após a data prevista de entrega.
* **Sua Query SQL chave:**
```sql
SELECT e.*, u.nome as aluno_nome, l.titulo as livro_titulo 
FROM emprestimos e
INNER JOIN usuarios u ON e.id_usuario = u.id
INNER JOIN livros l ON e.id_livro = l.id
WHERE e.id_status = 1 AND e.data_prevista < CURDATE()

```



#### 3. `modules/dashboard/multas.php` (Interface) e `processar-multa.php` (Lógica)

* **O que fazem:** O arquivo `multas.php` exibe a lista de penalidades registradas no sistema. Ao clicar em um botão "Quitar Multa", o ID é enviado para o `processar-multa.php`, que realiza a atualização do status da multa no banco: `UPDATE penalidades SET paga = 1 WHERE id = :id`.

#### 4. `modules/dashboard/relatorios.php` (Interface Visual)

* **O que faz:** Exibe estatísticas como as obras mais populares da biblioteca.
* **Sua Query SQL chave:**
```sql
SELECT l.titulo, COUNT(e.id) as total_leituras 
FROM emprestimos e
INNER JOIN livros l ON e.id_livro = l.id
GROUP BY e.id_livro 
ORDER BY total_leituras DESC 
LIMIT 5

```
---

💡 **Dica de Ouro:** Sempre que criar uma página visual (`.php`), a primeira linha deve ser: `<?php require_once '../../includes/header.php'; ?>` e a última linha: `<?php require_once '../../includes/footer.php'; ?>`. Isso garante que seu layout não quebre e que a segurança do login funcione!