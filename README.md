# 🛡️ Lab XSS Reflected – Prática Educacional

Este repositório contém um laboratório simples e intencionalmente vulnerável à vulnerabilidade **XSS Reflected**. O objetivo é exclusivamente educacional e de estudo pessoal.

---

## 📚 Sobre o projeto

Este lab foi criado com base nos conceitos estudados nas aulas do **Hacking Club**, com o intuito de aprofundar o entendimento sobre **Cross-Site Scripting (XSS)**, especialmente do tipo **Reflected**.

Durante o desenvolvimento, explorei:
- Como entradas do usuário são refletidas diretamente na resposta do servidor.
- Como browsers interpretam esse conteúdo de forma perigosa.
- Como injetar scripts maliciosos pela URL.

---

## 🧪 Como funciona

- O usuário digita algo em um campo de pesquisa.
- O valor é refletido diretamente na resposta HTML sem sanitização.
- Se a entrada contiver código como `<script>alert(1)</script>`, será executado pelo navegador.
- Quando um vetor de ataque é detectado, a aplicação revela uma flag como recompensa.

---

## 💻 Como rodar localmente

1. Clone este repositório:
   ```
   git clone https://github.com/seu-usuario/xss-reflected-lab.git
   cd xss-reflected-lab
   ```
2. Inicie um servidor local com PHP:
```
php -S localhost:8080
Acesse no navegador:
```

```http://localhost:8080```

##📝 Como realizar o lab (Write-up)
Acesse a URL do lab.
Digite um valor simples como teste no campo de pesquisa e veja o resultado refletido.
Tente injetar JavaScript usando:

```
<script>alert('XSS')</script>
```
A página refletirá o script, e o navegador executará.
Ao sucesso, a flag será exibida:

```FLAG{XSS_REFLECTED_SUCESSO}```

##🚨 Aviso de segurança
Este código é deliberadamente vulnerável e não deve ser usado em produção. É um projeto para fins de estudo em ambientes controlados.

##🙌 Créditos
Baseado nas aulas e desafios do Hacking Club.
