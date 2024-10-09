<?php

namespace ThothClient\Tests\GraphQL\Models;

use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\Models\Publisher;

final class PublisherTest extends TestCase
{
    public function testGettersAndSetters(): void
    {
        $publisherId = '8777100f-84d4-4138-b8f5-5bd2677b2353';
        $publisherName = 'FooBar';
        $publisherShortName = 'Foo';
        $publisherUrl = 'https://foo.bar/';

        $publisher = new Publisher();
        $publisher->setPublisherId($publisherId);
        $publisher->setPublisherName($publisherName);
        $publisher->setPublisherShortName($publisherShortName);
        $publisher->setPublisherUrl($publisherUrl);

        $this->assertSame($publisherId, $publisher->getPublisherId());
        $this->assertSame($publisherName, $publisher->getPublisherName());
        $this->assertSame($publisherShortName, $publisher->getPublisherShortName());
        $this->assertSame($publisherUrl, $publisher->getPublisherUrl());
    }
}
