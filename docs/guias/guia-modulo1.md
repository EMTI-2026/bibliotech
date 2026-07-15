# 📚 Guias Práticos de Desenvolvimento — Bibliotech 2026

Este documento reúne o roteiro de desenvolvimento passo a passo para o módulo 1 - Autenticação e Usuários do sistema. Ele foi desenhado como "receita de bolo" para guiar o desenvolvimento lógico e de banco de dados do seu projeto.

---

## 📄 GUIA DE BOLSO: Módulo 1 — Autenticação e Usuários

Este módulo é o "porteiro" do sistema. Sem você, ninguém entra e as páginas ficam totalmente desprotegidas.

### 🗂️ O que programar em cada arquivo:

#### 1. `login.php` (Fica na raiz do projeto)

* **O que faz:** Exibe a tela de login para o usuário.
* **Como fazer:**
* Crie uma interface HTML com um formulário `<form>`.
* O atributo `action` deve apontar exatamente para `modules/autenticacao/processar-login.php`.
* O atributo `method` deve ser obrigatoriamente `POST`.
* Crie dois campos: um `<input type="email" name="email">` e um `<input type="password" name="senha">`.



#### 2. `modules/autenticacao/processar-login.php` (Só lógica PHP)

* **O que faz:** Confere se o e-mail existe no banco de dados e se a senha está correta.
* **O código padrão que você deve usar:**
```php
<?php
session_start();
require_once '../../database/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];

    // 1. Busca o usuário pelo e-mail
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $usuario = $stmt->fetch();

    // 2. Se o usuário existir, testa a senha com hash criptografado
    if ($usuario && password_verify($senha, $usuario['senha'])) {
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];
        $_SESSION['usuario_perfil'] = $usuario['perfil']; // admin, bibliotecario, aluno

        header("Location: ../dashboard/index.php");
        exit;
    } else {
        // Se falhar, volta para a tela de login com uma mensagem de erro na URL
        header("Location: ../../login.php?erro=dados_invalidos");
        exit;
    }
}

```



#### 3. `modules/autenticacao/cadastrar-usuario.php` (Interface Visual)

* **O que faz:** Cadastra novos colaboradores ou alunos no sistema.
* **Como fazer:**
* Abra o arquivo incluindo o cabeçalho e feche com o rodapé padrão.
* Crie um formulário apontando para `processar-cadastro.php` via `POST`.
* Adicione os campos de nome, e-mail, senha e um campo `<select name="perfil">` com as opções: `admin`, `bibliotecario` e `aluno`.



#### 4. `modules/autenticacao/processar-cadastro.php` (Só lógica PHP)

* **O que faz:** Recebe os dados do formulário de cadastro, criptografa a senha com segurança e faz a inserção no banco de dados.
* **O código padrão que você deve usar:**
```php
<?php
require_once '../../database/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];
    $perfil = $_POST['perfil'];

    // Criptografa a senha para maior segurança
    $senha_segura = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
    $stmt->execute([
        'nome' => $nome,
        'email' => $email,
        'senha' => $senha_segura,
        'perfil' => $perfil
    ]);

    header("Location: cadastrar-usuario.php?sucesso=1");
    exit;
}

```



#### 5. `modules/autenticacao/perfil.php` (Interface) e `processar-perfil.php` (Lógica)

* **O que fazem:** O arquivo `perfil.php` mostra os dados do usuário atualmente conectado (você pega as informações dele consultando o ID salvo na variável global `$_SESSION['usuario_id']`). O arquivo `processar-perfil.php` executa a query de atualização: `UPDATE usuarios SET nome = :nome, senha = :senha WHERE id = :id`.

---

💡 **Dica de Ouro:** Sempre que criar uma página visual (`.php`), a primeira linha deve ser: `<?php require_once '../../includes/header.php'; ?>` e a última linha: `<?php require_once '../../includes/footer.php'; ?>`. Isso garante que seu layout não quebre e que a segurança do login funcione!

---
