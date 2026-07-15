# 📚 Guias Práticos de Desenvolvimento — Bibliotech 2026

Este documento reúne o roteiro de desenvolvimento passo a passo para o módulo 3 - Sistemas e Devoluções do sistema. Ele foi desenhado como "receita de bolo" para guiar o desenvolvimento lógico e de banco de dados do seu projeto.

---

## 📄 GUIA DE BOLSO: Módulo 3 — Empréstimos e Devoluções

Este módulo controla as movimentações de entrada e saída física de livros. É o coração operacional da biblioteca.

### 🗂️ O que programar em cada arquivo:

#### 1. `modules/emprestimos/novo-emprestimo.php` (Interface Visual)

* **O que faz:** Formulário para registrar a retirada de um livro por um aluno.
* **Como fazer:**
* No topo da página, busque todos os alunos cadastrados e os livros que possuam estoque maior do que zero:


```php
<?php
require_once '../../includes/header.php';
require_once '../../database/conexao.php';

$alunos = $pdo->query("SELECT id, nome FROM usuarios WHERE perfil = 'aluno'")->fetchAll();
$livros = $pdo->query("SELECT id, titulo, quantidade FROM livros WHERE quantidade > 0")->fetchAll();
?>

```


* Monte o formulário contendo dois campos `<select name="id_usuario">` e `<select name="id_livro">` alimentados pelos loops das variáveis `$alunos` e `$livros`.



#### 2. `modules/emprestimos/processar-emprestimo.php` (Só lógica PHP)

* **O que faz:** Registra o empréstimo no banco e diminui uma unidade do estoque do livro retirado.
* **O código padrão que você deve usar:**
```php
<?php
require_once '../../database/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_usuario = $_POST['id_usuario'];
    $id_livro = $_POST['id_livro'];

    $data_emprestimo = date('Y-m-d');
    $data_prevista = date('Y-m-d', strtotime('+7 days')); // Define prazo padrão de 7 dias

    // 1. Salva o empréstimo (id_status = 1 significa empréstimo ativo)
    $stmt = $pdo->prepare("INSERT INTO emprestimos (id_usuario, id_livro, data_emprestimo, data_prevista, id_status) VALUES (:id_u, :id_l, :data_e, :data_p, 1)");
    $stmt->execute([
        'id_u' => $id_usuario,
        'id_l' => $id_livro,
        'data_e' => $data_emprestimo,
        'data_p' => $data_prevista
    ]);

    // 2. Decrementa 1 unidade do estoque do livro correspondente
    $update = $pdo->prepare("UPDATE livros SET quantidade = quantidade - 1 WHERE id = :id_livro");
    $update->execute(['id_livro' => $id_livro]);

    header("Location: index.php?sucesso=emprestimo_realizado");
    exit;
}

```



#### 3. `modules/emprestimos/index.php` (Interface Visual)

* **O que faz:** Exibe os empréstimos ativos em andamento.
* **Como fazer:** Busque registros onde o `id_status` seja igual a 1 (ativo). Use `INNER JOIN` para resgatar o nome do aluno e o título do livro:
```sql
SELECT e.*, u.nome as aluno_nome, l.titulo as livro_titulo 
FROM emprestimos e
INNER JOIN usuarios u ON e.id_usuario = u.id
INNER JOIN livros l ON e.id_livro = l.id
WHERE e.id_status = 1

```



#### 4. `modules/emprestimos/devolucao.php` (Interface) e `processar-devolucao.php` (Lógica)

* **O que fazem:** O arquivo `devolucao.php` exibe os empréstimos ativos com um botão de ação "Confirmar Devolução". O botão envia o ID correspondente ao `processar-devolucao.php`, que executa:
1. `UPDATE emprestimos SET data_devolucao = NOW(), id_status = 2 WHERE id = :id` (Define como devolvido).
2. `UPDATE livros SET quantidade = quantidade + 1 WHERE id = :id_livro` (Devolve o livro ao estoque).



#### 5. `modules/emprestimos/historico.php` (Interface Visual)

* **O que faz:** Uma tabela simples listando todos os empréstimos já finalizados no sistema (onde `id_status = 2`).

---

💡 **Dica de Ouro:** Sempre que criar uma página visual (`.php`), a primeira linha deve ser: `<?php require_once '../../includes/header.php'; ?>` e a última linha: `<?php require_once '../../includes/footer.php'; ?>`. Isso garante que seu layout não quebre e que a segurança do login funcione!

