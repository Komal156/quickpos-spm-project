<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

require_once __DIR__ . '/../process.php';

/**
 * Contact form validation and availability tests.
 *
 * Jira Epic: Testing Automation (QP-55 to QP-58)
 */
class FormTest extends TestCase
{
    private FormValidator $validator;

    protected function setUp(): void
    {
        $this->validator = new FormValidator();
    }

    /**
     * @ticket QP-55
     * Empty name must produce a validation error.
     */
    public function testEmptyNameFails(): void
    {
        $result = $this->validator->validate('', 'test@email.com', 'Hello');
        $this->assertContains('WRONG MESSAGE.', $result);
    }

    /**
     * @ticket QP-56
     * Malformed email must produce a validation error.
     */
    public function testInvalidEmailFails(): void
    {
        $result = $this->validator->validate('Komal', 'wrong-email', 'Hello');
        $this->assertContains('Invalid email format.', $result);
    }

    /**
     * @ticket QP-55
     * Empty message must produce a validation error.
     */
    public function testEmptyMessageFails(): void
    {
        $result = $this->validator->validate('Komal', 'test@email.com', '');
        $this->assertContains('Message cannot be empty.', $result);
    }

    /**
     * @ticket QP-57
     * All valid inputs must return zero errors.
     */
    public function testValidDataPasses(): void
    {
        $result = $this->validator->validate('Komal', 'test@email.com', 'Hello');
        $this->assertEmpty($result);
    }

    /**
     * @ticket QP-58
     * index.php must exist, load without fatal errors, and return expected content.
     */
    public function testPageLoads(): void
    {
        $this->assertFileExists(__DIR__ . '/../index.php');
        ob_start();
        include __DIR__ . '/../index.php';
        $html = ob_get_clean();
        $this->assertStringContainsString('QuickPOS', $html);
        $this->assertStringContainsString('<form', $html);
    }

    /**
     * @ticket QP-56
     * Multiple invalid email formats must all fail validation (data-driven).
     */
    #[DataProvider('invalidEmailProvider')]
    public function testInvalidEmailFormats(string $email): void
    {
        $result = $this->validator->validate('Komal', $email, 'Hello');
        $this->assertContains('Invalid email format.', $result);
    }

    public static function invalidEmailProvider(): array
    {
        return [
            'no-at-sign'        => ['not-an-email'],
            'missing-tld'       => ['user@domain'],
            'leading-at'        => ['@nodomain.com'],
            'spaces-in-address' => ['spaces in@email.com'],
        ];
    }
}
