# 📄 Documentação Individual do Desenvolvedor — Módulo Empréstimos (Módulo 3)

## 📌 Informações Gerais
* **Nome do Aluno:** [Seu Nome Completo]
* **Módulo Responsável:** Módulo 3 — Empréstimos e Devoluções (Motor de Transações)

---

## 1. Escopo do Módulo
[Escreva em 1 ou 2 parágrafos o que o seu módulo faz. Liste todas as telas que você programou e quais regras de negócio específicas você implementou no código PHP (ex: impedir empréstimo de livro sem estoque, calcular automaticamente a data de devolução prevista somando 7 ou 14 dias à data atual, dar baixa no estoque quando um livro for emprestado e devolver quando for retornado, etc.).]

---

## 2. Fidelidade de Design (Figma vs. Navegador)

<!-- 
IMPORTANTE: Salve os prints das suas telas na pasta "docs/prints/" do projeto
e substitua os caminhos abaixo pelos nomes dos seus arquivos de imagem.
-->

### Tela 1: Listagem de Empréstimos Ativos
| Protótipo no Figma (Design) | Sistema no Navegador (Código) |
| :---: | :---: |
| ![Figma - Listagem Empréstimos](../prints/figma-emprestimos-ativos.png) | ![Navegador - Listagem Empréstimos](../prints/navegador-emprestimos-ativos.png) |

### Tela 2: Novo Empréstimo (Formulário)
| Protótipo no Figma (Design) | Sistema no Navegador (Código) |
| :---: | :---: |
| ![Figma - Novo Empréstimo](../prints/figma-novo-emprestimo.png) | ![Navegador - Novo Empréstimo](../prints/navegador-novo-emprestimo.png) |

### Tela 3: Histórico de Transações
| Protótipo no Figma (Design) | Sistema no Navegador (Código) |
| :---: | :---: |
| ![Figma - Histórico](../prints/figma-historico.png) | ![Navegador - Histórico](../prints/navegador-historico.png) |

---

## 3. Modelagem de Banco de Dados

### Recorte do Diagrama ER (Entidade-Relacionamento)
[Insira aqui a imagem com o recorte do diagrama que mostra apenas a tabela de empréstimos e como ela se conecta com as tabelas de usuários (do Módulo 1) e de livros (do Módulo 2).]

![Recorte do Diagrama ER](../prints/seu-diagrama-emprestimos.png)

### Script SQL de Criação das Tabelas
```sql
-- Cole aqui o seu código SQL de criação das tabelas 'emprestimos' e 'status_emprestimo'.
-- Certifique-se de incluir as PRIMARY KEYs, FOREIGN KEYs de associação com usuários/livros e tipos de dados.
```

---

## 4. Consulta SQL Destaque (Query Principal)

[Cole aqui a query SQL mais complexa do seu módulo (geralmente o SELECT com INNER JOIN que junta dados do aluno, do livro e o status do empréstimo para exibir na listagem de ativos de forma legível).]

```sql
-- Cole a query SQL usada no seu código PHP aqui
```

* **Explicação da query:** [Explique em poucas palavras quais tabelas essa query junta para resgatar os nomes dos alunos e títulos dos livros, e quais filtros ela aplica para separar o histórico das pendências ativas.]

---

## 5. Evidências do Código Fonte

### Lógica de Controle de Estoque ou Cálculo de Datas em PHP

[Insira o print do trecho de código PHP que processa a transação (ex: o código que reduz a quantidade de estoque do livro no momento do empréstimo ou que calcula a diferença de dias para verificar se a devolução está atrasada).]

---

## 6. Evidências de Funcionamento

[Insira um print, gif animado ou link de vídeo curto que mostre a sua tela funcionando: registrando um novo empréstimo (com a diminuição correspondente no estoque do livro) e realizando a devolução dele com sucesso.]

---

## 7. Diário de Erros e Aprendizados

### Erro 1

* **Mensagem de Erro / Sintoma:** [Cole a mensagem de erro que apareceu na tela ou descreva o comportamento incorreto, como datas gravadas no formato incorreto ou fuso horário desregulado]
* **Por que aconteceu:** [Explique qual era o problema no seu código PHP, HTML ou banco de dados]
* **Como solucionei:** [Escreva qual alteração você fez no código para corrigir o problema]

### Erro 2

* **Mensagem de Erro / Sintoma:** [Cole a mensagem de erro que apareceu na tela ou descreva o comportamento incorreto, como estoque de livro ficando negativo por falta de validação]
* **Por que aconteceu:** [Explique qual era o problema no seu código PHP, HTML ou banco de dados]
* **Como solucionei:** [Escreva qual alteração você fez no código para corrigir o problema]

---

## 8. Melhorias Futuras

[Quais recursos extras você adicionaria na área de controle de movimentação caso tivesse mais tempo para programar? (Ex: envio de aviso via WhatsApp ao aluno quando o prazo de devolução estiver acabando, renovação online do empréstimo pelo próprio perfil do aluno, etc.)]