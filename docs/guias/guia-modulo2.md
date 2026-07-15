# 📚 Guias Práticos de Desenvolvimento — Bibliotech 2026

Este documento reúne o roteiro de desenvolvimento passo a passo para o módulo 2 - Acervo de Livros do sistema. Ele foi desenhado como "receita de bolo" para guiar o desenvolvimento lógico e de banco de dados do seu projeto.

---

## 📄 GUIA DE BOLSO: Módulo 2 — Acervo de Livros

Este módulo gerencia o catálogo de livros da biblioteca e suas respectivas categorias.

### 🗂️ O que programar em cada arquivo:

#### 1. `modules/acervo/categorias.php` (Interface) e `processar-categoria.php` (Lógica)

* **O que fazem:** Desenvolva primeiro a tela de categorias. Ela deve ter um formulário simples que envia dados para `processar-categoria.php` contendo apenas o nome e descrição da categoria. Na mesma tela, liste todas as categorias já cadastradas usando `SELECT * FROM categorias` em formato de tabela HTML.

#### 2. `modules/acervo/cadastrar-livro.php` (Interface Visual)

* **O que faz:** Tela para adicionar novos exemplares físicos ao sistema.
* **Como fazer:**
* Crie um formulário apontando para `processar-cadastro-livro.php`.
* O campo de categoria do formulário deve listar dinamicamente as opções existentes no banco de dados. Use o código abaixo:


```php
<?php
// Busca todas as categorias cadastradas no banco
$stmt = $pdo->query("SELECT * FROM categorias");
$categorias = $stmt->fetchAll();
?>
<label>Categoria:</label>
<select name="id_categoria">
    <?php foreach ($categorias as $cat): ?>
        <option value="<?= $cat['id'] ?>"><?= htmlspecialchars($cat['nome']) ?></option>
    <?php endforeach; ?>
</select>

```



#### 3. `modules/acervo/processar-cadastro-livro.php` (Só lógica PHP)

* **O que faz:** Recebe as informações enviadas pelo formulário e executa o comando SQL para salvar no banco de dados.
* **O código padrão que você deve usar:**
```php
<?php
require_once '../../database/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO livros (titulo, autor, isbn, quantidade, id_categoria) VALUES (:titulo, :autor, :isbn, :qtd, :id_cat)");
    $stmt->execute([
        'titulo' => $_POST['titulo'],
        'autor' => $_POST['autor'],
        'isbn' => $_POST['isbn'],
        'qtd' => $_POST['quantidade'],
        'id_cat' => $_POST['id_categoria']
    ]);

    header("Location: index.php?sucesso=livro_cadastrado");
    exit;
}

```



#### 4. `modules/acervo/index.php` (Interface Visual)

* **O que faz:** Exibe a tabela com todos os livros e permite realizar buscas em tempo real por título ou autor.
* **Como fazer a Busca funcionar facilmente:**
```php
<?php
require_once '../../includes/header.php';
require_once '../../database/conexao.php';

// Se o usuário digitou uma busca, filtra usando LIKE. Se não, busca tudo.
$termo = isset($_GET['busca']) ? '%' . $_GET['busca'] . '%' : '%';

$stmt = $pdo->prepare("SELECT l.*, c.nome as categoria_nome FROM livros l LEFT JOIN categorias c ON l.id_categoria = c.id WHERE l.titulo LIKE :termo OR l.autor LIKE :termo");
$stmt->execute(['termo' => $termo]);
$livros = $stmt->fetchAll();
?>

<!-- Formulário de busca simples -->
<form method="GET" action="index.php">
    <input type="text" name="busca" placeholder="Buscar livro ou autor...">
    <button type="submit">Buscar</button>
</form>

<!-- Tabela para listar os livros retornados -->
<table>
    <?php foreach ($livros as $livro): ?>
    <tr>
        <td><?= htmlspecialchars($livro['titulo']) ?></td>
        <td><?= htmlspecialchars($livro['categoria_nome']) ?></td>
        <td>
            <!-- Envia o ID do livro pela URL para as ações de edição e exclusão -->
            <a href="editar-livro.php?id=<?= $livro['id'] ?>">Editar</a>
            <a href="deletar-livro.php?id=<?= $livro['id'] ?>" onclick="return confirm('Deseja excluir este livro?')">Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

```



#### 5. `modules/acervo/editar-livro.php` (Interface) e `processar-editar-livro.php` (Lógica)

* **O que fazem:** O arquivo `editar-livro.php` captura o ID enviado pela URL (`$_GET['id']`), busca o livro no banco de dados e pré-preenche o formulário. O arquivo `processar-editar-livro.php` recebe as alterações e executa: `UPDATE livros SET titulo = :titulo, autor = :autor WHERE id = :id`.

---

💡 **Dica de Ouro:** Sempre que criar uma página visual (`.php`), a primeira linha deve ser: `<?php require_once '../../includes/header.php'; ?>` e a última linha: `<?php require_once '../../includes/footer.php'; ?>`. Isso garante que seu layout não quebre e que a segurança do login funcione!
