<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Rodando o Projeto

Para executar o Projeto é preciso ter instalado o Docker, de preferência a versão estável.
Faça o Download do Docker Desktop clicando [aqui].
Após instalar o Docker e verificar se o mesmo está rodando, basta executar o comando 

``` sh
    docker -v
```

Você deverá receber no seu terminal a versão do Docker que está sendo executada.
Após instalar o Docker, é preciso baixar o projeto, para isso é preciso ter instalado o Git, acesse a página do [Git], após a instalação do Git, rode o seguinte comando no seu terminal

Caso use SSH:
```sh
    git clone git@github.com:viniciuspdiogo/miniLoja.git
```

Caso use HTTPS:
```sh
    git clone https://github.com/viniciuspdiogo/miniLoja.git
```

Após baixar o código, iremos dar start no projeto com os seguintes porojetos.

```sh
    cd pasta-do-projeto/
    ./vendor/bin/sail up -d
    ./vendor/bin/sail artisan migrate:refresh --seed
```
Caso tudo execute corretamente, você receberá um retorno parecido:
Rolling back migrations.  
```sh
  2022_08_28_002148_create_order_products_table ............................................ 46ms DONE
  2022_08_27_215813_create_adresses_table .................................................. 42ms DONE
  2022_08_27_215600_create_orders_table .................................................... 47ms DONE
  2022_08_27_201130_create_categorys_products_table ........................................ 54ms DONE
  2022_08_27_195703_create_categories_table ................................................ 38ms DONE
  2022_08_27_001241_create_table_product ................................................... 44ms DONE
  2019_12_14_000001_create_personal_access_tokens_table .................................... 48ms DONE
  2019_08_19_000000_create_failed_jobs_table ............................................... 38ms DONE
  2014_10_12_100000_create_password_resets_table ........................................... 47ms DONE
  2014_10_12_000000_create_users_table ..................................................... 36ms DONE

   INFO  Running migrations.  

  2014_10_12_000000_create_users_table .................................................... 116ms DONE
  2014_10_12_100000_create_password_resets_table .......................................... 129ms DONE
  2019_08_19_000000_create_failed_jobs_table .............................................. 129ms DONE
  2019_12_14_000001_create_personal_access_tokens_table ................................... 348ms DONE
  2022_08_27_001241_create_table_product .................................................. 146ms DONE
  2022_08_27_195703_create_categories_table ............................................... 156ms DONE
  2022_08_27_201130_create_categorys_products_table ....................................... 471ms DONE
  2022_08_27_215600_create_orders_table ................................................... 228ms DONE
  2022_08_27_215813_create_adresses_table ................................................. 244ms DONE
  2022_08_28_002148_create_order_products_table ........................................... 421ms DONE

   INFO  Seeding database.  

  Database\Seeders\ProductSeeder ............................................................. RUNNING  
  Database\Seeders\ProductSeeder ...................................................... 118.38 ms DONE  

  Database\Seeders\CategorySeeder ............................................................ RUNNING  
  Database\Seeders\CategorySeeder ...................................................... 49.88 ms DONE  

  Database\Seeders\CategorysProductsSeeder ................................................... RUNNING  
  Database\Seeders\CategorysProductsSeeder ............................................ 211.94 ms DONE  

  Database\Seeders\UserSeeder ................................................................ RUNNING  
  Database\Seeders\UserSeeder .......................................................... 61.88 ms DONE  
```
[aqui]: <https://www.docker.com/>
[Git]: <https://git-scm.com/downloads>
