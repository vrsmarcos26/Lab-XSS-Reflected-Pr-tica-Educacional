<div align="center">
  <h1>
    <img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Animated-Fluent-Emojis/master/Emojis/Objects/Shield.png" alt="Escudo" width="45" height="45" />
    Laboratório de XSS Refletido
    <img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Animated-Fluent-Emojis/master/Emojis/Objects/Desktop%20Computer.png" alt="Computador" width="45" height="45" />
  </h1>
</div>

<p align="center">
  <img alt="Linguagem Principal" src="https://img.shields.io/github/languages/top/vrsmarcos26/Lab-XSS-Reflected-Pr-tica-Educacional?style=for-the-badge&color=777BB4">
  <img alt="Licença" src="https://img.shields.io/github/license/vrsmarcos26/Lab-XSS-Reflected-Pr-tica-Educacional?style=for-the-badge&color=blue">
  <img alt="Último Commit" src="https://img.shields.io/github/last-commit/vrsmarcos26/Lab-XSS-Reflected-Pr-tica-Educacional?style=for-the-badge&color=green">
</p>

<p align="center">
  Um laboratório simples e vulnerável por design para demonstrar e estudar ataques de Cross-Site Scripting (XSS) do tipo Refletido, criado para fins estritamente educacionais.
</p>

<p align="center">
  <a href="#-aviso-importante">Aviso</a> •
  <a href="#-objetivos-de-aprendizagem">Objetivos</a> •
  <a href="#-tecnologias-utilizadas">Tecnologias</a> •
  <a href="#-como-rodar-o-laboratório">Como Rodar</a> •
  <a href="#-créditos">Créditos</a> •
  <a href="#-licença">Licença</a>
</p>

---

### ⚠️ Aviso Importante

> **Este projeto é intencionalmente vulnerável.** Ele foi criado para fins estritamente educacionais, com o objetivo de estudar segurança ofensiva em um ambiente controlado. **NÃO FAÇA O DEPLOY DESTA APLICAÇÃO EM UM SERVIDOR PÚBLICO OU DE PRODUÇÃO.** Use-o apenas localmente.

---

### 🎯 Objetivos de Aprendizagem

Este laboratório foi projetado para entender na prática:

-   Como a entrada de um usuário pode ser refletida diretamente na resposta do servidor sem a devida sanitização.
-   De que forma o navegador interpreta esse conteúdo refletido, executando scripts maliciosos.
-   Como injetar e testar vetores de ataque diretamente pela URL ou por campos de formulário.
-   A diferença conceitual entre um XSS Refletido (interação com servidor) e um XSS Armazenado.

---

### 🛠️ Tecnologias Utilizadas

Este ambiente de laboratório depende das seguintes tecnologias:

<p align="center">
  <a href="https://www.php.net/"><img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP"></a>
  <a href="#"><img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5"></a>
  <a href="#"><img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3"></a>
</p>

---

### ⚙️ Como Rodar o Laboratório

Para executar o laboratório, você precisará ter o **PHP** instalado em sua máquina.

1.  **Clone o Repositório**
    ```bash
    # Substitua 'Lab-XSS-Reflected' pelo nome real do seu repositório, se for diferente
    git clone [https://github.com/vrsmarcos26/Lab-XSS-Reflected.git](https://github.com/vrsmarcos26/Lab-XSS-Reflected.git)
    cd Lab-XSS-Reflected
    ```

2.  **Inicie o Servidor Local do PHP**
    Use o servidor embutido do PHP para rodar a aplicação.
    ```bash
    php -S localhost:8080
    ```

3.  **Acesse o Laboratório**
    Abra seu navegador e acesse: `http://localhost:8080`

<details>
<summary><strong>💡 Como Resolver o Desafio (Write-up)</strong></summary>

<br>

1.  Ao acessar a página, você encontrará um campo de pesquisa.
2.  Digite um texto simples (ex: `Olá Mundo`) e observe como ele é refletido na página após a submissão.
3.  Agora, em vez de um texto simples, injete um payload de JavaScript. O mais básico para confirmar a falha é:
    ```html
    <script>alert('XSS Refletido by vrsmarcos26')</script>
    ```
4.  Submeta o formulário. O servidor irá processar a requisição e "refletir" o seu payload de volta na resposta HTML. O navegador, ao renderizar a página, executará o script e um alerta aparecerá na tela.
5.  O script do laboratório irá detectar a execução bem-sucedida e revelará a flag como recompensa:
    ```
    FLAG{X$$_R3FL3CT3D_5UC3550}
    ```

</details>

---

### 🙌 Créditos

Este projeto foi inspirado e baseado nos excelentes conceitos e aulas práticas do **Hacking Club**, uma referência de alta qualidade para quem está estudando segurança web ofensiva no Brasil.

---

### 📝 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

<hr>

<p align="center">
  Desenvolvido por <b>vrsmarcos26</b>
</p>
