# Aprenderndo sobre composer

## O que é composer
É o gerenciador de dependencias do php assim como npm é o gerenciador de pacotes do node

Ele normalmente pega os pacotes do site packagist.org

## Como instalar o composer
O composer nada mais é que um arquivo .phar (php archive)
[composer]("https://getcomposer.org/doc/00-intro.md#dependency-management")

No caso desse projeto foi optado em instalar o composer na maquina mas tambem é possivel baixar apenas o arquivo .phar para o projeto

### Para inicializar o composer no seu projeto
<code>composer init</code>

Após inicializar o composer ele criará 2 arquivos e 1 pasta:
- composer.json: que referencia a lista de pacotes a serem baixados
- composer.lock: que referencia todas as dependencias que ele detectou, bem como suas versoes e como elas se encaixam
- pasta vendor: local onde o composer vai alocar todas as libs de php baixadas

### Adicionando um pacote
<code>composer require [nome do pacote]</code>

### Adicionando um pacote como dev

<code>composer require --dev [nome do pacote]</code>

- para instalar todos os pacotes menos os de desenvolvimento é adicionado a flag <code>--no-dev</code>  
<code>composer install --no-dev</code>

### autoload
O autoload no Composer é um mecanismo que carrega automaticamente as classes do seu projeto sem a necessidade de incluir ou requerer manualmente cada arquivo PHP individual. Ele facilita a organização do código e melhora a eficiência do desenvolvimento, especialmente em projetos grandes.

- No seu index, voce deve dar um require no autoload:
<code>require __DIR__ . '/../vendor/autoload.php';</code>

### Instalando dependecias do composer.json
Ao baixar um projeto php que utilize composer é necessario instalar os pacotes para isso:
<code>composer install</code>

### Atualizando as dependências
<code>composer update</code>
ou
<code>composer update [nome do pacote]</code>

### Removendo um pacote
<code>composer remove [nome do pacote]</code>

### Atualize o autoload (se necessário):
Se o pacote removido estiver envolvido no autoloading (PSR-4 ou outro), você pode atualizar os arquivos de autoload do Composer executando:
<code>composer dump-autoload</code>

# Conectando ao banco de dados - Postgres

Antes de começar, é importante garantir que você tenha o PostgreSQL instalado em seu ambiente de desenvolvimento e o PHP devidamente configurado. Certifique-se também de possuir as credenciais de acesso necessárias para o banco de dados.

Para conectar ao PostgreSQL com PHP, utilizamos a extensão PDO (PHP Data Objects), que fornece uma interface consistente para se trabalhar com diferentes bancos de dados. Você pode verificar se a extensão PDO está instalada em seu ambiente executando o seguinte código:

<pre>
    <code>
    <?php
        phpinfo();
    ?>
  </code>
</pre>

No resultado exibido, procure pela seção PDO e verifique se o PostgreSQL está listado como um dos drivers disponíveis. Caso não esteja presente, é necessário habilitar a extensão PDO_PGSQL no arquivo de configuração do PHP.

##### Nota: Estou tentando usar o padrão de clean architecture logo:

Na Clean Architecture, geralmente separamos as responsabilidades em diferentes camadas:

Camada de Interface (Controllers): Gerencia a interação do usuário.
Casos de Uso: Onde estão as regras de negócio específicas.
Entidades: Representam os dados e as regras de negócio fundamentais.
Adaptadores e Gateways (Repositories): Fazem a interface entre a aplicação e as fontes de dados, como o banco de dados.
<pre>
<code>
project-root/
├── public/
│   └── index.php             # Arquivo inicial da aplicação
├── src/
│   ├── config/
│   │   └── Database.php      # Configuração e conexão com o banco de dados
│   ├── controllers/
│   │   └── UserController.php # Controlador para gerenciar requests do usuário
│   ├── entities/
│   │   └── User.php          # Entidade que representa o usuário
│   ├── repositories/
│   │   └── UserRepository.php # Classe que interage com o banco de dados
│   └── usecases/
│       └── UserService.php    # Caso de uso para as operações CRUD do usuário
└── vendor/
</code></pre>