<h2><p align="center">  Projeto de Produtos do Mercadinho (PHP - Laravel)</p></h2>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Descrição do Projeto

   O Mercadinho Local é um estabelecimento situado no coração do bairro, comprometido em fornecer uma variedade de produtos essenciais e de qualidade aos moradores da comunidade. Para melhorar a experiência de compra dos clientes e otimizar as operações internas, o Mercadinho está implementando um sistema de cadastro de produtos. O objetivo principal do projeto é criar um banco de dados abrangente que contenha informações detalhadas sobre todos os produtos disponíveis no Mercadinho. Isso permitirá uma gestão eficiente do estoque, facilitará a reposição de itens e proporcionará aos clientes uma visão clara das opções disponíveis.


## Requisitos

   Você precisa de um servidor web configurado para hospedar o aplicativo Laravel. O processo de build não é necessário no sentido tradicional, como em linguagens compiladas, mas você ainda precisa garantir que todas as dependências do seu projeto Laravel estejam instaladas e que o aplicativo esteja configurado corretamente.


## Passo a Passo

1. **Configuração do ambiente**: Certifique-se de que o ambiente de desenvolvimento ou produção esteja configurado corretamente. Certifique-se de ter o PHP instalado no seu servidor, com uma versão compatível com o Laravel. Recomenda-se usar o PHP 7.4 ou superior.

2. **Clone do repositorio**: (https://github.com/Milena-Calado/Produtos-Mercado.git).
   
3. **Instalação das dependências do projeto**: Verifique se todas as extensões necessárias para o Laravel estão instaladas e habilitadas. Isso pode incluir extensões como OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype e JSON. Você pode precisar habilitar essas extensões no arquivo de configuração do PHP. No diretório do seu projeto Laravel, execute `composer install` para instalar todas as dependências do Laravel especificadas no arquivo `composer.json`.
   
4. **Bando de dados**: Escolha e configure um banco de dados suportado pelo Laravel, eu usei o MySQL porém pode ser usado o PostgreSQL ou SQLite. Certifique-se de criar um banco de dados vazio e as credenciais de acesso necessárias para que o Laravel possa se conectar a ele. Certifique-se de que o arquivo `.env` esteja configurado corretamente para o ambiente em que seu aplicativo está sendo executado. Isso inclui configurações como conexão com banco de dados, chave de criptografia, etc.

5. **Composer**: é uma ferramenta essencial para o gerenciamento de dependências do PHP. Certifique-se de ter o Composer instalado no seu servidor. Você pode usar o Composer para instalar as dependências do Laravel e gerenciar pacotes PHP adicionais.
   
6. **Permissões de arquivo e diretório**: Certifique-se de que as permissões de arquivo e diretório estejam configuradas corretamente para que o servidor web possa ler e gravar os arquivos conforme necessário. Isso é especialmente importante para armazenar logs, caches e arquivos carregados.

Uma vez configurado e em execução, você poderá acessar o projeto Laravel através do navegador digitando o URL correto. Se estiver configurado localmente acesse usando `http://localhost:8000/login` ou atraves do terminal por linha de comando usando `php artisan serve` no terminal da sua IDE.
Registre um usuário e pode começar a navegar pela página. 

O framework Laravel é um software de código aberto licenciado sob a [licença MIT](https://opensource.org/licenses/MIT).
