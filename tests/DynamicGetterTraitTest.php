<?php

use Mazzcris\OoStripePhp\Invoice;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class DynamicGetterTraitTest extends TestCase
{
    private object $objectUsingTrait;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->objectUsingTrait = Invoice::constructFrom(json_decode(file_get_contents(__DIR__ . '/fixtures/invoice.json'), true));
    }

    #[Test]
    public function testCallGetExistingField()
    {
        $this->assertEquals('jennyrosen@example.com', $this->objectUsingTrait->getCustomerEmail());
    }

    #[Test]
    public function testCallGetExistingDateField()
    {
        $this->assertEquals((new \DateTime(''))->setTimestamp(1680644467), $this->objectUsingTrait->getCreated());
    }

    #[Test]
    public function testCallGetMissingField()
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage('Method getSomeMissingField does not exist');

        $this->objectUsingTrait->getSomeMissingField();
    }

    #[Test]
    public function testCallMissingMethod()
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage('Method checkSomeMissingMethod is not valid');

        $this->objectUsingTrait->checkSomeMissingMethod();
    }
}