# 📚 Bibliotech — Sistema de Biblioteca Escolar

## 👥 Equipe e Divisão de Módulos (Squad)

Este projeto foi desenvolvido como Projeto Integrador do 3º ano do Ensino Médio Técnico em Desenvolvimento de Sistemas. Abaixo estão os integrantes do grupo e suas respectivas responsabilidades de desenvolvimento Full Stack:

*   **Módulo 1 — Autenticação e Usuários:** [Nome do Integrante 1](https://github.com/usuario-github)
*   **Módulo 2 — Acervo de Livros:** [Nome do Integrante 2](https://github.com/usuario-github)
*   **Módulo 3 — Empréstimos e Devoluções:** [Nome do Integrante 3](https://github.com/usuario-github)
*   **Módulo 4 — Dashboard e Penalidades:** [Nome do Integrante 4](https://github.com/usuario-github)

---

## 🛠️ Fluxo de Trabalho e Uso de Branches

Para garantir que ninguém apague ou atropele o código do colega, cada integrante deve trabalhar exclusivamente dentro de sua própria ramificação (**branch**). 

### 1. Qual branch eu devo usar?
Identifique o seu módulo na tabela abaixo e use **apenas** a branch correspondente para desenvolver suas telas e funções:

| Integrante | Módulo | Branch no Git |
| :--- | :--- | :--- |
| **Integrante 1** | Módulo 1 — Autenticação | `feature/autenticacao` |
| **Integrante 2** | Módulo 2 — Acervo | `feature/acervo` |
| **Integrante 3** | Módulo 3 — Empréstimos | `feature/emprestimos` |
| **Integrante 4** | Módulo 4 — Dashboard | `feature/dashboard` |

> ⚠️ **REGRA DE OURO:** Nunca faça commits diretamente nas branches `main` ou `develop`. Todo o seu trabalho deve ser feito na sua branch `feature/` correspondente!

### 2. Como verificar em qual branch estou agora?
Abra o terminal na pasta do seu projeto e digite o seguinte comando:
```bash
git branch
```

*A branch que estiver com um asterisco (`*`) e destacada em verde é a sua branch ativa no momento.*

### 3. Como selecionar e entrar na minha branch de trabalho?

Antes de começar a escrever qualquer linha de código no dia, garanta que você está na sua branch executando o comando abaixo (substitua pelo nome da sua branch):

```bash
# Exemplo para o desenvolvedor do Acervo:
git switch feature/acervo

# Ou se preferir usar o comando tradicional:
git checkout feature/acervo

```

---

## 🔗 Links de Referência do Projeto

* 🎨 **Protótipo no Figma:** [Insira aqui o link do Figma compartilhado pelo professor]
* 🗺️ **Central de Guias de Bolso:** [Clique aqui para acessar as instruções técnicas de cada módulo](./docs/guias/guia-de-bolso.md)

---

## 📐 Modelagem do Banco de Dados (Diagrama ER)

Para garantir a integridade e o correto funcionamento do sistema de ponta a ponta, nossa equipe desenhou e normalizou o seguinte Diagrama Entidade-Relacionamento antes de iniciar a programação:

> *Nota: O script SQL unificado com a criação de todas as tabelas encontra-se na pasta `database/schema.sql`.*

---

## 🛠️ Como Executar o Projeto Localmente

Siga o passo a passo abaixo para rodar o sistema **Bibliotech** em seu computador:

### Pré-requisitos:

* Ter o servidor local instalado (XAMPP, WampServer ou Laragon).
* Ter o Git instalado no sistema.

### 1. Clonar o repositório

Abra o terminal do seu servidor local (geralmente a pasta `htdocs` ou `www`) e clone este projeto:

```bash
git clone [https://github.com/seu-usuario-ou-organizacao/bibliotech.git](https://github.com/seu-usuario-ou-organizacao/bibliotech.git)

```

### 2. Configurar o Banco de Dados

1. Abra o painel do seu servidor local e certifique-se de que o **Apache** e o **MySQL** estão ativos.
2. Acesse o painel de gerenciamento do banco (geralmente `http://localhost/phpmyadmin`).
3. Crie um novo banco de dados vazio chamado `bibliotech`.
4. Vá na aba **Importar**, selecione o arquivo `database/schema.sql` que está dentro do projeto clonado e clique em **Executar**.

### 3. Verificar o Arquivo de Conexão

Certifique-se de que o arquivo `database/conexao.php` está com os dados corretos de acesso ao seu MySQL local:

```php
<?php
// Exemplo de configuração padrão
$host = 'localhost';
$dbname = 'bibliotech';$username = 'root'; // ou seu usuário do MySQL
$password = '';     // ou sua senha do MySQL

```

### 4. Acessar o Sistema

Abra o seu navegador de preferência e acesse:
`http://localhost/bibliotech/`

---

## 📂 Documentação Individual dos Desenvolvedores

Cada integrante detalhou o processo de criação de seu módulo, incluindo diário de erros, fidelidade visual ao Figma e trechos do código back-end. Acesse os relatórios individuais de entrega pelos links abaixo:

* [🗂️ Documentação do Módulo 1 (Autenticação)](./docs/doc-autenticacao-usuarios.md)
* [🗂️ Documentação do Módulo 2 (Acervo)](./docs/doc-acervo-livros.md)
* [🗂️ Documentação do Módulo 3 (Empréstimos)](./docs/doc-emprestimos-devolucoes.md)
* [🗂️ Documentação do Módulo 4 (Dashboard)](./docs/doc-dashboard-penalidades.md)