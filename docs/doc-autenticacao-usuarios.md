# 📄 Documentação Individual do Desenvolvedor — Módulo Autenticação (Módulo 1)

## 📌 Informações Gerais
* **Nome do Aluno:** [Seu Nome Completo]
* **Módulo Responsável:** Módulo 1 — Autenticação e Usuários

---

## 1. Escopo do Módulo
[Escreva em 1 ou 2 parágrafos o que o seu módulo faz. Liste todas as telas que você programou e quais regras de negócio específicas você implementou no código PHP (ex: criptografia de senha, validação de e-mail duplicado, bloqueio de páginas para usuários não logados, etc.).]

---

## 2. Fidelidade de Design (Figma vs. Navegador)

<!-- 
IMPORTANTE: Salve os prints das suas telas na pasta "docs/prints/" do projeto
e substitua os caminhos abaixo pelos nomes dos seus arquivos de imagem.
-->

### Tela 1: Login
| Protótipo no Figma (Design) | Sistema no Navegador (Código) |
| :---: | :---: |
| ![Figma - Login](../prints/figma-login.png) | ![Navegador - Login](../prints/navegador-login.png) |

### Tela 2: Cadastro de Usuários (Admin)
| Protótipo no Figma (Design) | Sistema no Navegador (Código) |
| :---: | :---: |
| ![Figma - Cadastro de Usuários](../prints/figma-cadastro-usuario.png) | ![Navegador - Cadastro de Usuários](../prints/navegador-cadastro-usuario.png) |

### Tela 3: Perfil do Usuário (Edição de Dados)
| Protótipo no Figma (Design) | Sistema no Navegador (Código) |
| :---: | :---: |
| ![Figma - Perfil](../prints/figma-perfil.png) | ![Navegador - Perfil](../prints/navegador-perfil.png) |

---

## 3. Modelagem de Banco de Dados

### Recorte do Diagrama ER (Entidade-Relacionamento)
[Insira aqui a imagem com o recorte do diagrama que mostra apenas as suas tabelas de usuários/perfis e os relacionamentos delas com o restante do sistema.]

![Recorte do Diagrama ER](../prints/seu-diagrama-autenticacao.png)

### Script SQL de Criação das Tabelas
```sql
-- Cole aqui o seu código SQL de criação das tabelas 'usuarios' e 'perfis'.
-- Certifique-se de incluir as PRIMARY KEYs, FOREIGN KEYs e tipos de dados corretos.
```

---

## 4. Consulta SQL Destaque (Query Principal)

[Cole aqui a query SQL mais importante do seu módulo (geralmente o SELECT com relacionamento para verificar as credenciais no login ou para listar os usuários com seus respectivos níveis de acesso).]

```sql
-- Cole a query SQL usada no seu código PHP aqui
```

* **Explicação da query:** [Explique em poucas palavras quais tabelas essa query relaciona e qual é o papel dela no fluxo de segurança ou exibição do sistema.]

---

## 5. Evidências do Código Fonte

### Lógica de Segurança e Sessão PHP

[Insira o print das linhas do seu código PHP onde você inicia a sessão (session_start), valida se o usuário está logado e verifica o nível de permissão (perfil) antes de carregar o conteúdo da página.]

---

## 6. Evidências de Funcionamento

[Insira um print, gif animado ou link de vídeo curto que mostre a sua tela funcionando: realizando um login com sucesso, acessando as páginas restritas e, em seguida, realizando o logout com segurança.]

---

## 7. Diário de Erros e Aprendizados

### Erro 1

* **Mensagem de Erro / Sintoma:** [Cole a mensagem de erro que apareceu na tela ou descreva o comportamento incorreto, como loops de redirecionamento]
* **Por que aconteceu:** [Explique qual era o problema no seu código PHP, HTML ou banco de dados]
* **Como solucionei:** [Escreva qual alteração você fez no código para corrigir o problema]

### Erro 2

* **Mensagem de Erro / Sintoma:** [Cole a mensagem de erro que apareceu na tela ou descreva o comportamento incorreto, como senhas que não batiam na verificação]
* **Por que aconteceu:** [Explique qual era o problema no seu código PHP, HTML ou banco de dados]
* **Como solucionei:** [Escreva qual alteração você fez no código para corrigir o problema]

---

## 8. Melhorias Futuras

[Quais recursos extras de segurança ou usabilidade você adicionaria na área de usuários caso tivesse mais tempo para programar? (Ex: envio de e-mail real para recuperação de senha, autenticação em duas etapas, botão "Lembre-me" com cookies criptografados, etc.)]
