# Desafio Liberfly

## Detalhes do Projeto:

- Api usando padrão RESTful.
- Projeto feito em Laravel 10.
- Api documentada com Swagger.
- Projeto hospedado na Digital Ocean no endereço: (https://loff.tk, foi o único domínio disponível no momento ;) )
- Instruções para clonar o projeto:
- clone o projeto com o comando: git clone https://github.com/zurctrebla/Liberfly.git
- acesse a pasta do projeto (cd Liberfly)
- na pasta do projeto, faça uma cópia do .env.example para .env (cp .env.example .env)
- preencha o .env com as credenciais 
- projeto já utiliza o sail, vc precisa ter o docker instalado. (execute: docker run --rm \
                                                                    -u "$(id -u):$(id -g)" \
                                                                    -v "$(pwd):/var/www/html" \
                                                                    -w /var/www/html \
                                                                    laravelsail/php82-composer:latest \
                                                                    composer install --ignore-platform-reqs)

- depois de executar o comando acima execute: (./vendor/bin/sail up -d)
- acesse o container do projeto com (sail bash)
- instale as dependencias com o comando: (composer install)
- crie a key com o comando (php artisan key:generate)
- crie as tabelas do banco de dados com o comando: (php artisan migrate) ou crie as tabelas e popule-as com o comando: (php artisan migrate --seed)
- popule a tabelas user do banco de dados com o comando: (php artisan db:seed)
- gere o token com o comando: (php artisan jwt:secret)
- gere a documentação do swagger com o comando: (php artisan l5-swagger:generate)
- se preferir popule a tabela fly com o comando: (php artisan tinker - Fly::factory()->count(50)->create();)
- Instruções para testar o projeto:
- Antes de realizar os testes, é necessário obter um toker JWT válido enviando uma solicitação POST para a rota /api/login com as credenciais 
    de usuário (email: albertcruz@terra.com.br, password: 12345678) no corpo da solicitação. Isso pode ser feito usando ferramentas como Postman ou curl.
    Após obter o toker válido, use-o para acessar a rota /flies e obter a lista de todos os voos disponíveis, utilizando uma solicitação do tipo GET.
    Para visualizar um voo específico, utilize /flies/identificador/, aqui o identificador é o uuid.
- documentação em localhost/api/documentation
