# projeto-exemplo-laravel
Projeto de exemplo para demonstrar algumas funcionalidades do Laravel 5.7
## Lista de comandos executados

Criar estrutura de login:\
`php artisan make:auth`

Criar migration de setor:\
`php artisan make:migration create_sector_table --create=sector`

Criar migration para alterar a tabela de users:\
`php artisan make:migration add_sector_id_to_users_table --table=users`

Executa as migrations para criar as tabelas no banco:\
`php artisan migrate`

Criar o seed para sector:\
`php artisan make:seed SeedSectorDefault`

Executar os seeds:\
`php artisan db:seed`

