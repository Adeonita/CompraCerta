## Sobre
<p>
    Para os passos abaixo considere uma máquina que o 
    <a href="https://docs.docker.com/engine/install/ubuntu/">
        docker
    </a> esteja instalado.
</p>
<br>

## Configurações iniciais

<p>
    Caso não tenha instalado anteriormente adicione o repositório abaixo ao seu sistema
</p>

- `sudo add-apt-repository ppa:ondrej/php`
- `sudo apt-get update`
<br><br>

## Subindo a aplicação
<p>
    Dentro da pasta do projeto rode o comando 
        <code>./vendor/bin/sail up</code>
    para que os containers sejam construídos em sua máquina.
    Depois que os contêineres do Docker do aplicativo forem iniciados, 
    você pode acessar o aplicativo em seu navegador da web em: <code>http://localhost</code>
</p>

## Alguns Comandos 
Executar um seed específico
- `php artisan db:seed --class=ClassNameSeeder`


<br>

## Padrão de commit 

- `chore`: se refere à alguma implementação que não impacta diretamente o usuário. Por exemplo, uma mudança no `Readme.md`.
- `feat`: se refere à implementação de features
- `fix`: se refere à uma correção
- `refactor`: se refere à refatoração de uma feature previamente implementada
- `style`: se refere à uma mudança estética no código. Por exemplo: alterar a indentação de espaço para tab
- `test`: se refere à uma implementação de teste
