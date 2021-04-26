<center>
    <img src="./public/images/logo.png">
</center>
<br><br>

# Sobre

Trabalho da disciplina linguagem de programação III do curso Sistemas de informação da Universidade Estadual da Bahia 2021.1

&nbsp;


# Requisitos

- [php ^7.3 *](https://www.php.net/)
- [composer ^1.10 *](https://getcomposer.org/download/)
- [docker](https://docs.docker.com/docker-for-windows/install/)
- [wsl2 **](https://docs.microsoft.com/pt-br/windows/wsl/install-win10)
- *Ou docker 
- ** Para windows

&nbsp;



# Subindo a aplicação
- Insira o arquivo .env enviado por e-mail na raiz do projeto
- Dentro da pasta do projeto rode o comando  `composer install`
- Em seguida `./vendor/bin/sail up` , esse processo demora um pouco pois  os containers serão construídos em sua máquina
- Após os contêineres do Docker do aplicativo forem iniciados acesse o aplicativo em seu navador em: http://localhost
&nbsp;


&nbsp;


# Observações

### Possíveis situações 

&nbsp;

### permission denied

Caso ao subir a aplicação apresente o erro de permissão siga os passos abaixo:

1. Liste todos os containers com `docker ps`
2. Copie o id do container do sail
3. E acesse-o com o comando `docker exec -it {idDoContainer} bash`
4. Execute o comando `chmod -R 777 .`

&nbsp;

### port already in use

A aplicação utiliza as portas 8000, 3306, 4444, 6379, 1025, 7700.
Caso as esteja utilizando para outras finalidades, encerre o processo ou modifique as portas no arquivo docker-compose.yml

