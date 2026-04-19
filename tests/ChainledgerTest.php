<?php
/**
 * Tests for ChainLedger
 */

use PHPUnit\Framework\TestCase;
use Chainledger\Chainledger;

class ChainledgerTest extends TestCase {
    private Chainledger $instance;

    protected function setUp(): void {
        $this->instance = new Chainledger(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainledger::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
