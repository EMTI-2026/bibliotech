# 📄 Documentação Individual do Desenvolvedor — Bibliotech

## 📌 Informações Gerais
* **Nome do Aluno:** [Seu Nome Completo]
* **Módulo Responsável:** [Módulo 1 / Módulo 2 / Módulo 3 / Módulo 4]

---

## 1. Escopo do Módulo
[Escreva um texto curto, de 1 a 2 parágrafos, explicando o objetivo prático do seu módulo. Liste as principais telas que você desenvolveu e quais regras de negócio o seu código PHP valida.]

> **💡 Exemplo de preenchimento (Módulo 3 - Empréstimos):** 
> *O objetivo do meu módulo é controlar as movimentações físicas de entrega e devolução de livros da biblioteca escolar. Desenvolvi as telas de "Novo Empréstimo", "Controle de Devoluções" e "Histórico de Movimentações". No código PHP, implementei validações para impedir que um livro com estoque zerado seja emprestado e criei uma regra que bloqueia novos empréstimos para alunos que possuam multas pendentes no sistema.*

---

## 2. Fidelidade de Design (Figma vs. Navegador)
*Nesta seção, você deve comparar o design original desenhado no Figma com o resultado final que você programou e que está rodando no navegador.*

### 🛠️ Instruções para os prints:
1. Tire prints das suas telas no Figma e no Navegador.
2. Salve os arquivos de imagem na pasta `docs/prints/` do seu repositório.
3. Substitua os caminhos abaixo apontando para os seus prints (ex: `../prints/sua-imagem.png`).

### Tela 1: [Nome da Tela, ex: Tela de Login ou Cadastro]
| Protótipo no Figma (Design) | Sistema no Navegador (Código) |
| :---: | :---: |
| ![Figma - Tela 1](../prints/figma-tela1.png) | ![Navegador - Tela 1](../prints/navegador-tela1.png) |

### Tela 2: [Nome da Tela, ex: Listagem de Livros]
| Protótipo no Figma (Design) | Sistema no Navegador (Código) |
| :---: | :---: |
| ![Figma - Tela 2](../prints/figma-tela2.png) | ![Navegador - Tela 2](../prints/navegador-tela2.png) |

---

## 3. Modelagem de Banco de Dados

### Recorte do Diagrama ER (Entidade-Relacionamento)
[Insira aqui a imagem com o recorte do Diagrama de banco de dados, mostrando apenas as tabelas que você criou/gerenciou no seu módulo e como elas se conectam com o resto do sistema.]

### 🛠️ Instruções para os prints:
1. Tire print do Diagrama ER.
2. Salve o arquivo de imagem na pasta `docs/` do seu repositório com o nome `diagrama-er.png`.

![Recorte do Diagrama ER](../docs/diagrama-er.png)

### Script SQL de Criação das Tabelas
```sql
-- Cole aqui o script SQL completo de criação das suas tabelas.
-- Lembre-se de incluir chaves primárias (PRIMARY KEY), estrangeiras (FOREIGN KEY) e os tipos de dados corretos.

CREATE TABLE exemplo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    campo_exemplo VARCHAR(255) NOT NULL
);

```

---

## 4. Consulta SQL Destaque (Query Principal)

[Cole aqui a consulta SQL mais complexa ou importante que você precisou escrever no seu código PHP (ex: consultas utilizando INNER JOIN, agrupamentos com GROUP BY ou filtros específicos) e explique brevemente o que ela traz do banco de dados.]

```sql
-- Exemplo de query destaque utilizando relacionamento entre tabelas
SELECT e.*, u.nome as aluno_nome, l.titulo as livro_titulo 
FROM emprestimos e
INNER JOIN usuarios u ON e.id_usuario = u.id
INNER JOIN livros l ON e.id_livro = l.id
WHERE e.id_status = 1;

```

* **Explicação da query:** *Esta consulta é o coração da listagem de empréstimos ativos. Ela une a tabela de empréstimos com as tabelas de usuários e livros para buscar o nome legível do aluno e o título do livro, em vez de exibir apenas os IDs numéricos salvos na tabela principal.*
