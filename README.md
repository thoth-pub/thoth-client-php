**English** | [Español](/docs/README-es.md) | [Português Brasileiro](/docs/README-pt_BR.md)

# Thoth Client PHP

PHP client for the Thoth GraphQL and REST APIs.

## Uso

### GraphQL

```php
$client = new \ThothApi\GraphQL\Client();
```

#### Queries

The client maps all queries from the Thoth GraphQL API. Methods return data in an object-oriented format, making it easy to use and manipulate information.

```php
$contributors = $client->contributors();

echo print_r($contributors, true);
/**
 * Array (
 *    [0] => ThothApi\GraphQL\Models\Contributor Object (
 *            [data] => Array (
 *                    [contributorId] => e1de541c-e84b-4092-941f-dab9b5dac865
 *                    [firstName] => Aaron
 *                    [lastName] => Ansell
 *                    [fullName] => Aaron Ansell
 *                    [orcid] => https://orcid.org/0000-0001-6365-5168
 *                    [website] =>
 *                )
 *        )
 *    [1] => ThothApi\GraphQL\Models\Contributor Object (
 *            [data] => Array (
 *                    [contributorId] => 1c3aade6-6d48-41b4-8def-b435f4b43573
 *                    [firstName] => Aaron D.
 *                    [lastName] => Hornkohl
 *                    [fullName] => Aaron D. Hornkohl
 *                    [orcid] =>
 *                    [website] => https://www.ames.cam.ac.uk/people/dr-aaron-d-hornkohl
 *                )
 *        )
 *    ...
 * )
*/

$contributor = array_shift($contributors);

echo $contributor->getLastName(); // Ansell
echo $contributor->getOrcid(); // https://orcid.org/0000-0001-6365-5168
```

Queries can accept an array with the required arguments as specified in the Thoth GraphQL schema. It's possible to use the "order" argument specifying only the field and the desired direction.

```php
$works = $client->works([
    'publishers' => ['71faf1c3-900a-4b8c-bca7-4f927699fb90'],
    'limit' => 5,
    'field' => 'PUBLICATION_DATE',
    'direction' => 'DESC'
]);
```

#### Mutations

To execute mutations, authentication with a Thoth account's credentials is required.

```php
$client->login($email, $password);
```

Mutations can be executed by providing an instance of the model class corresponding to the mutation type. For deletion mutations, only the object's ID is required. When the operation is successful, the object's ID is returned.

```php
use ThothApi\GraphQL\Models\Subject;

$subject = new Subject();
$subject->setWorkId('5a5b0fe3-03a9-444b-b221-ecae5370ff30');
$subject->setSubjectType(Subject::SUBJECT_TYPE_BIC);
$subject->setSubjectCode('1D');
$subject->setSubjectOrdinal(3);

$subjectId = $client->createSubject($subject); // 1d5ae47b-9e0c-4fba-b2d4-a3a2cdd8860c

$client->deleteSubject($subjectId);
```

#### Exceptions

A QueryException is thrown in case of an error in the request to the GraphQL API. It's possible to retrieve the error message and a more detailed description from the exception.

```php
try {
    $work = new \ThothApi\GraphQL\Models\Work();
    $workId = $client->createWork($work);
} catch (\ThothApi\Exception\QueryException $exception) {
    echo $exception->getMessage();
    /**
     * Invalid value for argument "data", reason:
     * "NewWork" is missing fields: "title", "imprintId", "fullTitle", "workStatus", "workType"
    */
    echo print_r($exception->getDetails());
    /**
     *  Array (
     *      [message] => Invalid value for argument "data", reason: "NewWork" is missing fields: "title", "imprintId", "fullTitle", "workStatus", "workType"
     *      [locations] => Array (
     *          [0] => Array (
     *              [line] => 3
     *              [column] => 15
     *          )
     *      )
     * )
    */
}
```

### REST

```php
$client = new \ThothApi\Rest\Client();

echo(print_r($client->work('doideposit::crossref', 'e0f748b2-984f-45cc-8b9e-13989c31dda4'), true));
/**
 * <?xml version="1.0" encoding="utf-8"?>
 * <doi_batch version="5.3.1" xmlns="http://www.crossref.org/schema/5.3.1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.crossref.org/schema/5.3.1 http://www.crossref.org/schemas/crossref5.3.1.xsd" xmlns:ai="http://www.crossref.org/AccessIndicators.xsd" xmlns:jats="http://www.ncbi.nlm.nih.gov/JATS1" xmlns:fr="http://www.crossref.org/fundref.xsd">
 *  <head>
 *      <doi_batch_id>e0f748b2-984f-45cc-8b9e-13989c31dda4_20241010195624</doi_batch_id>
 *      <timestamp>20241010195624</timestamp>
 *      <depositor>
 *          <depositor_name>Thoth</depositor_name>
 *          <email_address>distribution@thoth.pub</email_address>
 *      </depositor>
 *      <registrant>Thoth</registrant>
 *  </head>
 *  <body>
 *      <book book_type="monograph">
 *          <book_metadata language="en">
 *          <contributors>
 *              <person_name sequence="first" contributor_role="author">
 *                  <given_name>Ammiel</given_name>
 *                  <surname>Alcalay</surname>
 *                  <affiliations>
 *                      <institution>
 *                          <institution_name>Queens College, CUNY</institution_name>
 *                          <institution_id type="ror">https://ror.org/03v8adn41</institution_id>
 *                      </institution>
 *                      <institution>
 *                          <institution_name>The Graduate Center, CUNY</institution_name>
 *                          <institution_id type="ror">https://ror.org/00awd9g61</institution_id>
 *                      </institution>
 *                  </affiliations>
 *              </person_name>
 *          </contributors>
 *          <titles>
 *              <title>A Bibliography for After Jews and Arabs</title>
 *          </titles>
 *          ...
 */
```

#### Exceptions

```php
try {
    $result = $client->publisher('foo', '42b3315e-07e9-4e23-92ae-86932e4ef0e3');
} catch (\ThothApi\Exception\RestException $exception) {
    echo $exception->getMessage(); // "foo is not a valid metadata specification"
}
```

### Client Construction

The constructor of both Clients can receive an optional array to add custom [Guzzle HTTP Client request options](https://docs.guzzlephp.org/en/latest/request-options.html).

```php
$client = new Client([
    'allow_redirects' => false,
    'connect_timeout' => 3.14,
    'timeout' => 3.14
    'proxy' => [
        'http'  => 'http://localhost:8125', // Use this proxy with "http"
        'https' => 'http://localhost:9124', // Use this proxy with "https",
        'no' => ['.mit.edu', 'foo.com']    // Don't use a proxy with these
    ],
    'debug' => true
    ...
]);
```

Clients make requests to the default addresses of the Thoth APIs: https://api.thoth.pub/ for the GraphQL API and https://export.thoth.pub/ for the REST API. If you want to use a different address (such as "localhost" for testing), just add the "base_uri" option with the new address in the client's constructor.

```php
$client = new Client(['base_uri' => 'localhost:8000']);
```

## Credits

Idealized and sponsored by  [Thoth](https://thoth.pub/).

Developed by [Lepidus Tecnologia](https://github.com/lepidus).

## License

Licensed under the Apache License, Version 2.0 - [See the License file.](/LICENSE)

Copyright (c) 2024 Lepidus Tecnologia

Copyright (c) 2024 Thoth