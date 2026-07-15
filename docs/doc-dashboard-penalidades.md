# 📄 Documentação Individual do Desenvolvedor — Módulo Dashboard e Penalidades (Módulo 4)

## 📌 Informações Gerais
* **Nome do Aluno:** [Seu Nome Completo]
* **Módulo Responsável:** Módulo 4 — Dashboard, Estatísticas e Penalidades

---

## 1. Escopo do Módulo
[Escreva em 1 ou 2 parágrafos o que o seu módulo faz. Liste todas as telas que você programou e quais regras de negócio específicas você implementou no código PHP (ex: cálculo do valor de multas com base nos dias de atraso, lógica para atualizar o status de uma multa de pendente para paga, etc.).]

---

## 2. Fidelidade de Design (Figma vs. Navegador)

<!-- 
IMPORTANTE: Salve os prints das suas telas na pasta "docs/prints/" do projeto
e substitua os caminhos abaixo pelos nomes dos seus arquivos de imagem.
-->

### Tela 1: Painel Principal (Dashboard)
| Protótipo no Figma (Design) | Sistema no Navegador (Código) |
| :---: | :---: |
| ![Figma - Dashboard](../prints/figma-dashboard.png) | ![Navegador - Dashboard](../prints/navegador-dashboard.png) |

### Tela 2: Controle de Multas e Aplicação de Penalidades
| Protótipo no Figma (Design) | Sistema no Navegador (Código) |
| :---: | :---: |
| ![Figma - Multas](../prints/figma-multas.png) | ![Navegador - Multas](../prints/navegador-multas.png) |

### Tela 3: Relatórios e Estatísticas (Leitores Assíduos / Livros Mais Lidos)
| Protótipo no Figma (Design) | Sistema no Navegador (Código) |
| :---: | :---: |
| ![Figma - Relatorios](../prints/figma-relatorios.png) | ![Navegador - Relatorios](../prints/navegador-relatorios.png) |

---

## 3. Modelagem de Banco de Dados

### Recorte do Diagrama ER (Entidade-Relacionamento)
[Insira aqui a imagem com o recorte do diagrama que mostra apenas a sua tabela de penalidades e como ela se conecta com as tabelas de usuários e empréstimos desenvolvidas pelos seus colegas.]

![Recorte do Diagrama ER](../prints/seu-diagrama-dashboard.png)

### Script SQL de Criação das Tabelas
```sql
-- Cole aqui o seu código SQL de criação da tabela 'penalidades'.
-- Certifique-se de incluir as PRIMARY KEYs, FOREIGN KEYs e tipos de dados corretos.
```

---

## 4. Consulta SQL Destaque (Query Principal)

[Cole aqui a query SQL mais complexa ou importante do seu módulo (ex: a query com COUNT/SUM para gerar os números dinâmicos dos cards do dashboard, ou um SELECT com JOIN para listar usuários com multas ativas).]

```sql
-- Cole a query SQL usada no seu código PHP aqui
```

* **Explicação da query:** [Explique em poucas palavras quais tabelas essa query conecta e o que ela calcula ou exibe na tela para o usuário.]

---

## 5. Evidências do Código Fonte

### Lógica de Cálculo ou Agrupamento de Dados em PHP

[Insira o print das principais linhas do seu código PHP que realizam as operações para exibir os dados no painel (ex: exibindo as estatísticas dos cards usando resultados do banco de dados ou a lógica que muda o status de pagamento de uma multa).]

---

## 6. Evidências de Funcionamento

[Insira um print, gif animado ou link de vídeo curto que mostre o seu módulo funcionando: o dashboard atualizando os números dinamicamente ou o processo de quitação/aplicação de uma multa sendo salvo com sucesso.]

---

## 7. Diário de Erros e Aprendizados

### Erro 1

* **Mensagem de Erro / Sintoma:** [Cole a mensagem de erro que apareceu na tela ou descreva o comportamento incorreto, como funções de soma retornando valores nulos ou vazios]
* **Por que aconteceu:** [Explique qual era o problema no seu código PHP, HTML ou banco de dados]
* **Como solucionei:** [Escreva qual alteração você fez no código para corrigir o problema]

### Erro 2

* **Mensagem de Erro / Sintoma:** [Cole a mensagem de erro que apareceu na tela ou descreva o comportamento incorreto, como dados duplicados na contagem dos relatórios]
* **Por que aconteceu:** [Explique qual era o problema no seu código PHP, HTML ou banco de dados]
* **Como solucionei:** [Escreva qual alteração você fez no código para corrigir o problema]

---

## 8. Melhorias Futuras

[Quais recursos extras você adicionaria na área de estatísticas ou penalidades caso tivesse mais tempo para programar? (Ex: geração de gráficos visuais usando JavaScript/Chart.js, envio automático de alertas por e-mail quando uma multa for gerada, exportação de relatórios em formato PDF, etc.)]