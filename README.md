# Desafio Liberfly

## Detalhes do Projeto:

- Api usando padrão RESTful.
- Projeto feito em Laravel 10.
- Api documentada com Swagger.
- Instruções:
- clone o projeto com o comando: git clone https://github.com/zurctrebla/Liberfly.git
- acesse a pasta do projeto (cd Liberfly)
- na pasta do projeto, faça uma cópia do .env.example para .env (cp .env.example .env)
- preencha o .env com as credenciais 
- projeto já utiliza o sail (execute sail up -d)
- acesse o container do projeto com (sail bash)
- instale as dependencias com o comando: (composer install)
- crie a key com o comando (php artisan key:generate)
- crie as tabelas do banco de dados com o comando: (php artisan migrate)
- popule a tabelas user do banco de dados com o comando: (php artisan db:seed)
- gere o token com o comando: (php artisan jwt:secret)
- se preferir popule a tabela fly com o comando: (php artisan tinker - Fly::factory()->count(50)->create();)
- necessário autenticar o usuário para realização dos testes.(Existe um usuário de testes em database/seeders)
- documentação em localhost/api/documentation
