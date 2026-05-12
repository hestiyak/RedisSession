<?php
/**
 * Tests for RedisSession
 */

use PHPUnit\Framework\TestCase;
use Redissession\Redissession;

class RedissessionTest extends TestCase {
    private Redissession $instance;

    protected function setUp(): void {
        $this->instance = new Redissession(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Redissession::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
