# 📄 Documentação Individual do Desenvolvedor — Módulo Acervo (Módulo 2)

## 📌 Informações Gerais
* **Nome do Aluno:** [Seu Nome Completo]
* **Módulo Responsável:** Módulo 2 — Acervo de Livros e Categorias

---

## 1. Escopo do Módulo
[Escreva em 1 ou 2 parágrafos o que o seu módulo faz. Liste todas as telas que você programou e quais regras de negócio específicas você implementou no código PHP (ex: impedir cadastro de livro com quantidade negativa, validação de campos vazios, etc.).]

---

## 2. Fidelidade de Design (Figma vs. Navegador)

<!-- 
IMPORTANTE: Salve os prints das suas telas na pasta "docs/prints/" do projeto
e substitua os caminhos abaixo pelos nomes dos seus arquivos de imagem.
-->

### Tela 1: Listagem do Acervo (Busca e Filtros)
| Protótipo no Figma (Design) | Sistema no Navegador (Código) |
| :---: | :---: |
| ![Figma - Tela 1](../prints/figma-acervo.png) | ![Navegador - Tela 1](../prints/navegador-acervo.png) |

### Tela 2: Formulário de Cadastro/Edição de Livro
| Protótipo no Figma (Design) | Sistema no Navegador (Código) |
| :---: | :---: |
| ![Figma - Tela 2](../prints/figma-cadastro-livro.png) | ![Navegador - Tela 2](../prints/navegador-cadastro-livro.png) |

### Tela 3: Gerenciamento de Categorias
| Protótipo no Figma (Design) | Sistema no Navegador (Código) |
| :---: | :---: |
| ![Figma - Tela 3](../prints/figma-categorias.png) | ![Navegador - Tela 3](../prints/navegador-categorias.png) |

---

## 3. Modelagem de Banco de Dados

### Recorte do Diagrama ER (Entidade-Relacionamento)
[Insira aqui a imagem com o recorte do diagrama que mostra apenas as suas tabelas de livros/categorias e os relacionamentos delas.]

![Recorte do Diagrama ER](../prints/seu-diagrama-acervo.png)

### Script SQL de Criação das Tabelas
```sql
-- Cole aqui o seu código SQL de criação das tabelas 'livros' e 'categorias'.
-- Certifique-se de incluir as PRIMARY KEYs, FOREIGN KEYs e tipos de dados.
```

---

## 4. Consulta SQL Destaque (Query Principal)

[Cole aqui a query SQL mais complexa do seu módulo (geralmente o SELECT com INNER JOIN e filtros de busca da tela principal do acervo).]

```sql
-- Cole a query SQL usada no seu código PHP aqui
```

* **Explicação da query:** [Explique em poucas palavras quais tabelas essa query junta (JOIN) e quais campos ela filtra na busca.]

---

## 5. Evidências do Código Fonte

### Lógica de Inserção/Edição no Banco de Dados

[Insira o print das principais linhas do seu código PHP que recebe os dados do formulário, valida e executa o INSERT ou UPDATE no banco de dados.]

---

## 6. Evidências de Funcionamento

[Insira um print, gif animado ou link de vídeo curto que mostre a sua tela funcionando: cadastrando um livro com sucesso e listando ele logo em seguida.]

---

## 7. Diário de Erros e Aprendizados

### Erro 1

* **Mensagem de Erro / Sintoma:** [Cole a mensagem de erro que apareceu na tela ou descreva o comportamento incorreto]
* **Por que aconteceu:** [Explique qual era o problema no seu código PHP, HTML ou banco de dados]
* **Como solucionei:** [Escreva qual alteração você fez no código para corrigir o problema]

### Erro 2

* **Mensagem de Erro / Sintoma:** [Cole a mensagem de erro que apareceu na tela ou descreva o comportamento incorreto]
* **Por que aconteceu:** [Explique qual era o problema no seu código PHP, HTML ou banco de dados]
* **Como solucionei:** [Escreva qual alteração você fez no código para corrigir o problema]

---

## 8. Melhorias Futuras

[Quais recursos extras você adicionaria na área de acervo caso tivesse mais tempo para programar? (Ex: upload da capa do livro, leitor de código de barras para o ISBN, etc.)]
