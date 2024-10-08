<?php

namespace ThothClient\Tests\GraphQL\Models;

use PHPUnit\Framework\TestCase;
use ThothClient\GraphQL\Models\AbstractModel;

final class AbstractModelTest extends TestCase
{
    public function testConstructWithData(): void
    {
        $model = $this->getMockBuilder(AbstractModel::class)
            ->setConstructorArgs([['foo' => 'bar']])
            ->getMockForAbstractClass();

        $this->assertSame('bar', $model->getData('foo'));
    }

    public function testSetData(): void
    {
        $model = $this->getMockBuilder(AbstractModel::class)
            ->getMockForAbstractClass();

        $model->setData('foo', 'bar');

        $this->assertSame('bar', $model->getData('foo'));
    }

    public function testSetDataToNull(): void
    {
        $model = $this->getMockBuilder(AbstractModel::class)
            ->setConstructorArgs([['foo' => 'bar']])
            ->getMockForAbstractClass();

        $model->setData('foo', null);

        $this->assertNull($model->getData('foo'));
    }

    public function testGetAllData(): void
    {
        $data = [
            'foo' => 'bar',
            'baz' => 'qux'
        ];

        $model = $this->getMockBuilder(AbstractModel::class)
            ->setConstructorArgs([$data])
            ->getMockForAbstractClass();

        $this->assertSame($data, $model->getAllData());
    }
}
