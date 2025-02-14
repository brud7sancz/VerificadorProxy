# VerificadorProxy

Um verificador de proxy simples e eficiente em PHP para validar a disponibilidade e o tempo de resposta de proxies.

## 🚀 Funcionalidades

- ✅ Verifica se um proxy está ativo e válido.
- 📄 Suporta listas de proxies em arquivos `.txt`
- 📊 Relatório de proxies válidos e inválidos.

## 📋 Requisitos

- PHP 7.4 ou superior
- cURL habilitado (`php-curl`)
- Permissão para acessar a internet (para testar os proxies)

## 📌 Como Funciona?

Usando o script no PHP
Para utilizar o verificador de proxy no seu código PHP, basta incluir o arquivo chk-proxy.php no seu projeto:

require_once("chk-proxy.php");

Usando com cURL no PHP
Caso esteja configurando uma requisição cURL para testar um proxy, basta adicionar a opção CURLOPT_PROXY ao seu código:

curl_setopt($ch, CURLOPT_PROXY, $proxy);

## 📌 Resumo
Este projeto torna o uso de proxies mais simples, eliminando a necessidade de serviços pagos externos. Basta atualizar sua lista de proxies regularmente para garantir um melhor desempenho.

Para obter novos proxies gratuitamente, acesse:
🔗 TheSpeedX/PROXY-List

Substitua os proxies antigos pelos novos e continue utilizando o script sem complicações.
