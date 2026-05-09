<?php
use PHPUnit\Framework\TestCase;
require_once 'process.php';

class FormTest extends TestCase {
    private $validator;

    protected function setUp(): void {
        $this->validator = new FormValidator();
    }

    public function testEmptyNameFails() {
        $result = $this->validator->validate('', 'test@email.com', 'Hello');
        $this->assertContains("Name is required.", $result);
    }

    public function testInvalidEmailFails() {
        $result = $this->validator->validate('Komal', 'wrong-email', 'Hello');
        $this->assertContains("Invalid email format.", $result);
    }

    public function testValidDataPasses() {
        $result = $this->validator->validate('Komal', 'test@email.com', 'Hello');
        $this->assertEmpty($result);
    }
}

