<?php
/**
 * Tests for CryptoPad
 */

use PHPUnit\Framework\TestCase;
use Cryptopad\Cryptopad;

class CryptopadTest extends TestCase {
    private Cryptopad $instance;

    protected function setUp(): void {
        $this->instance = new Cryptopad(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptopad::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
