[English](/README.md) | [Español](/docs/README-es.md) | **Português Brasileiro**

# Thoth Cliente PHP

Cliente PHP para as APIs GraphQL e REST do Thoth.

## Instalação

Esta biblioteca pode ser instalada via Composer:

```bash
composer require thoth-pub/thoth-client-php
```

## Uso

### GraphQL

Documentação da API: https://api.thoth.pub/graphiql

```php
$client = new \ThothApi\GraphQL\Client();
```

#### Consultas

As classes de consultas, mutações, schemas, inputs, enums e scalars são geradas a partir do schema de
introspecção GraphQL do Thoth. A API mais simples é chamar no cliente o método com o mesmo nome da
operação GraphQL.

```php
$works = $client->works(5, [
    'workId',
    'fullTitle',
]);

echo $works[0]->getWorkId();
echo $works[0]->getFullTitle();
```

Os argumentos podem ser passados por posição ou por nome. Valores de enum podem ser passados
diretamente com constantes das classes de enum geradas. `OperationRequest::enum()` continua disponível
para operações customizadas.

```php
use ThothApi\GraphQL\Enums\Direction;
use ThothApi\GraphQL\Enums\WorkField;

$works = $client->works([
    'publishers' => ['71faf1c3-900a-4b8c-bca7-4f927699fb90'],
    'limit' => 5,
    'order' => [
        'field' => WorkField::PUBLICATION_DATE,
        'direction' => Direction::DESC,
    ],
], [
    'workId',
    'fullTitle',
    'doi',
]);
```

A seleção pode incluir campos aninhados. Campos que retornam objetos ou listas são hidratados em
classes geradas de schema.

```php
$work = $client->work('5a5b0fe3-03a9-444b-b221-ecae5370ff30', [
    'workId',
    'fullTitle',
    'titles' => [
        'titleId',
        'fullTitle',
    ],
    'imprint' => [
        'imprintId',
        'publisher' => [
            'publisherId',
            'publisherName',
        ],
    ],
]);

echo $work->getImprint()->getPublisher()->getPublisherName();
echo $work->getTitles()[0]->getFullTitle();
```

O executor genérico continua disponível quando for melhor usar diretamente as classes geradas de
operação. Ele retorna arrays brutos, sem hidratar objetos de schema.

```php
use ThothApi\GraphQL\Queries\WorksQuery;

$works = $client->execute(WorksQuery::operation([
    'limit' => 5,
], [
    'workId',
    'fullTitle',
]));
```

Também é possível executar GraphQL bruto. O token configurado com `setToken()` é usado nesse caminho.

```php
$data = $client->rawQuery('query { workCount }');
```

#### Mutações

Para executar mutações, forneça ao cliente um personal access token válido.

```php
$client->setToken($token);
```

Inputs são gerados a partir do schema. Eles podem ser criados com arrays, a partir de DTOs que expõem
`getAllData()` ou de objetos `JsonSerializable`.

```php
use ThothApi\GraphQL\Enums\SubjectType;
use ThothApi\GraphQL\Inputs\NewSubject;

$newSubject = new NewSubject([
    'workId' => '5a5b0fe3-03a9-444b-b221-ecae5370ff30',
    'subjectType' => SubjectType::BIC,
    'subjectCode' => '1D',
    'subjectOrdinal' => 3,
]);

$subjectId = $client->createSubject($newSubject);
```

Por padrão, mutações que retornam objetos selecionam o primeiro campo `*Id` e retornam esse valor
escalar.

```php
$subjectId = $client->createSubject($newSubject);
```

Informe uma seleção explícita quando quiser receber um objeto de schema hidratado com getters,
setters e `toArray()`.

```php
$subject = $client->createSubject($newSubject, [
    'subjectId',
    'subjectCode',
]);

echo $subject->getSubjectId();
echo $subject->getSubjectCode();
print_r($subject->toArray());
```

As classes de schema também podem ser instanciadas e populadas manualmente.

```php
use ThothApi\GraphQL\Schemas\Work;

$work = (new Work())
    ->setWorkId('5a5b0fe3-03a9-444b-b221-ecae5370ff30')
    ->setFullTitle('Titulo de exemplo');

echo $work->getFullTitle();
print_r($work->toArray());
```

Regere as classes GraphQL a partir do schema atual do Thoth:

```bash
composer generate-graphql-client
```

#### Exceções

Uma exceção do tipo *QueryException* é lançada em caso de erro na solicitação à API GraphQL. É possível recuperar a mensagem do erro, os detalhes, a query e as variáveis enviadas.

```php
try {
    $client->createWork(new \ThothApi\GraphQL\Inputs\NewWork([
        'doi' => 'https://doi.org/10.00000/00000000',
    ]));
} catch (\ThothApi\Exception\QueryException $exception) {
    echo $exception->getMessage();
    echo print_r($exception->getDetails(), true);
    echo $exception->getQuery();
    echo print_r($exception->getVariables(), true);
}
```

### REST

Documentação da API: https://export.thoth.pub/

```php
$client = new \ThothApi\Rest\Client();
```

O client REST exporta metadados nos formatos disponibilizados pela API de exportação do Thoth.

```php
$formats = $client->formats();

$metadata = $client->work(
    'doideposit::crossref',
    'e0f748b2-984f-45cc-8b9e-13989c31dda4'
);
```

#### Exceções

```php
try {
    $result = $client->publisher('foo', '42b3315e-07e9-4e23-92ae-86932e4ef0e3');
} catch (\ThothApi\Exception\RestException $exception) {
    echo $exception->getMessage(); // "foo is not a valid metadata specification"
}
```

### Construção do Cliente

O construtor de ambos os Clientes pode receber um array opcional para adicionar configurações personalizadas de [solicitação do Cliente HTTP Guzzle](https://docs.guzzlephp.org/en/latest/request-options.html).

```php
$client = new Client([
    'allow_redirects' => false,
    'connect_timeout' => 3.14,
    'timeout' => 3.14,
    'proxy' => [
        'http' => 'http://localhost:8125',
        'https' => 'http://localhost:9124',
        'no' => ['.mit.edu', 'foo.com'],
    ],
    'debug' => true,
]);
```

Os clientes fazem requisições para os endereços padrão das APIs Thoth: https://api.thoth.pub/ para a API GraphQL e https://export.thoth.pub/ para a API REST. Se você deseja utilizar um endereço diferente (como "localhost" para testes), basta adicionar a opção "base_uri" com o novo endereço no construtor do cliente.

```php
$client = new Client(['base_uri' => 'localhost:8000']);
```

## Créditos

Idealizado e patrocinado por [Thoth](https://thoth.pub/).

Desenvolvido por [Lepidus Tecnologia](https://github.com/lepidus).

## Licença

Licenciado sob a Licença Apache, Versão 2.0 - [Veja o arquivo de licença.](/LICENSE)

Copyright (c) 2024-2026 Lepidus Tecnologia

Copyright (c) 2024-2026 Thoth Open Metadata
