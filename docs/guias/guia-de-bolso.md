# 🗺️ Central de Guias de Desenvolvimento — Bibliotech

Seja bem-vindo à central de guias do seu projeto! Para que o desenvolvimento do sistema seja o mais tranquilo e focado possível, dividimos as instruções técnicas e os códigos base em **Guias de Bolso** individuais para cada módulo.

Encontre o seu papel na equipe abaixo, clique no link e acesse o seu passo a passo personalizado:

---

### 🚀 Escolha o seu Guia de Módulo:

* #### [🔐 Módulo 1: Autenticação e Usuários (Porteiro do Sistema)](./guia-modulo1.md)


* **Sua missão:** Controlar quem entra no sistema, realizar cadastros de novos alunos/colaboradores e criptografar as senhas para garantir a segurança dos dados.
* **Foco técnico:** Gerenciamento de sessões (`$_SESSION`), hash de senhas (`password_hash` e `password_verify`) e travas de segurança de rotas.


* #### [📚 Módulo 2: Acervo de Livros (Organizador do Conhecimento)](./guia-modulo2.md)


* **Sua missão:** Gerenciar as categorias e catalogar todos os livros físicos disponíveis, além de criar ferramentas de busca dinâmica para o leitor encontrar o que quer.
* **Foco técnico:** Consultas dinâmicas com filtros SQL (`LIKE`), gerenciamento de chaves estrangeiras relacionais (`id_categoria`) e uploads de dados.


* #### [🤝 Módulo 3: Empréstimos e Devoluções (Motor de Movimentação)](./guia-modulo3.md)


* **Sua missão:** Registrar saídas de livros, prever datas de devolução, dar baixa em livros entregues e gerenciar o estoque físico em tempo real.
* **Foco técnico:** Manipulação de datas no PHP (`strtotime`), lógica de integridade de estoque (remover/adicionar quantidade de livros) e joins de tabelas intermediárias.


* #### [📊 Módulo 4: Dashboard e Penalidades (Cérebro Analítico)](./guia-modulo4.md)


* **Sua missão:** Consolidar os dados gerais da biblioteca em um painel visual, identificar leitores inadimplentes, aplicar/quitar multas e gerar relatórios de uso.
* **Foco técnico:** Consultas SQL complexas com agrupamentos e contadores (`COUNT`, `SUM`, `GROUP BY`, `ORDER BY`), cálculos de intervalo de datas e manipulação de relatórios.



---

### 💡 A Regra de Ouro do Projeto (Para Todos os Integrantes)

Não importa qual tela visual (`.php`) você esteja construindo dentro do seu módulo, a estrutura básica do seu arquivo **deve** seguir este padrão de "encaixe":

```php
<?php 
// 1. A PRIMEIRA linha do seu arquivo visual DEVE ser o cabeçalho global:
require_once '../../includes/header.php'; 
?>

<!-- 2. Escreva o seu HTML estruturado a partir do Figma AQUI (sem criar tags <html> ou <body>) -->
<section class="seu-container-visual">
    <h2>Título da sua Funcionalidade</h2>
    <!-- Seus formulários, tabelas e botões -->
</section>

<?php 
// 3. A ÚLTIMA linha do seu arquivo visual DEVE ser o rodapé global:
require_once '../../includes/footer.php'; 
?>

```

> **Por que fazer isso?**
> Isso garante que o layout do sistema permaneça idêntico em todas as telas, importa automaticamente o CSS global e as travas de segurança, além de evitar que o seu código quebre por falta de tags obrigatórias.

---

### 🛠️ Como usar os códigos de apoio dos guias?

1. Abra o arquivo do seu módulo correspondente.
2. Leia com atenção as explicações do fluxo lógico.
3. Copie as estruturas básicas de **Processamento** e adapte os nomes das colunas e inputs para a tabela do seu banco de dados local.

*Em caso de dúvidas persistentes em relação à sintaxe do PDO ou conexão com o banco de dados, chame o professor durante a aula!*