# Twitter Clone (Agora X)

Bem-vindo ao **Twitter Clone**, um projeto full-stack que recria a interface e funcionalidades principais da plataforma **Twitter (atualmente X)**. Desenvolvido com foco em proporcionar uma experiência similar à original, o sistema permite criar posts, interagir com outros usuários e gerenciar contas.

## 🌟 Funcionalidades
- **Criação de Posts**: Compartilhe ideias e pensamentos.
- **Interações**: Curta e comente publicações.
- **Gerenciamento de Usuários**: Crie e gerencie perfis de forma prática.

## 🛠️ Tecnologias Utilizadas
- **Frontend**: HTML, CSS, Bootstrap, JavaScript
- **Backend**: PHP
- **Banco de Dados**: MySQL

## 🚀 Como Executar o Projeto
1. Clone o repositório:
   ```bash
   git clone https://github.com/AlexandreLiberatto/twitter-clone.git
   ```
2. Instale as dependências do Composer:
   ```bash
   composer install
   ```
3. Configure o banco de dados:
   - Crie um banco no MySQL.
   - Importe o arquivo `database.sql` (localizado na pasta `App/Database`).
   - Atualize as credenciais no arquivo de configuração do banco (`App/Config/database.php`).

4. Inicie o servidor:
   ```bash
   php -S localhost:8000
   ```
5. Acesse o projeto no navegador: [http://localhost:8000](http://localhost:8000)

## 🌐 Demonstração
Veja o projeto em ação: [twitter-clone.vercel.app](https://twitter-clone-seven-peach.vercel.app)

## 🤝 Contribuição
Contribuições são bem-vindas! Siga os passos abaixo:
1. Faça um fork do repositório.
2. Crie uma branch para sua feature:
   ```bash
   git checkout -b minha-feature
   ```
3. Realize as alterações e faça o commit:
   ```bash
   git commit -m "Minha nova feature"
   ```
4. Envie suas alterações:
   ```bash
   git push origin minha-feature
   ```
5. Abra um Pull Request.

## 📜 Licença
Este projeto está licenciado sob a [MIT License](LICENSE).
