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