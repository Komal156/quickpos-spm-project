# QuickPOS — Landing Page

[![QuickPOS CI Pipeline](https://github.com/Komal156/quickpos-spm-project/actions/workflows/ci.yml/badge.svg)](https://github.com/Komal156/quickpos-spm-project/actions/workflows/ci.yml)

A professional PHP landing page for a Point of Sale system, built as part of the SPM course project.

## Pages

| File | Purpose |
|---|---|
| `index.php` | Main landing page (Header, Hero, Features, Pricing, Contact) |
| `process.php` | Contact form handler with server-side validation |
| `thank-you.html` | Confirmation page shown after successful form submission |

## Local Setup

```bash
# Install PHP dependencies
composer install

# Serve locally (PHP built-in server)
php -S localhost:8000

# Run tests
vendor/bin/phpunit tests/FormTest.php

# Run code quality check
vendor/bin/phpstan analyse --no-progress
```

## CI/CD Pipeline

The GitHub Actions pipeline runs on every push to `feature/**` / `bugfix/**` branches and on Pull Requests to `main`.

| Job | What it does |
|---|---|
| **Validate** | Checks every commit message contains a Jira ticket ID (`QP-XXX`) |
| **Code Quality** | Runs PHPStan static analysis — fails the build on violations |
| **Test & Syntax** | PHP syntax check, PHPUnit test suite, uploads test report and build artifacts |

The `Code Quality` and `Test & Syntax` jobs run **in parallel** after `Validate` passes.

## Test Cases

| Test | Jira Ticket | Description |
|---|---|---|
| `testEmptyNameFails` | QP-55 | Empty name triggers validation error |
| `testInvalidEmailFails` | QP-56 | Malformed email triggers validation error |
| `testEmptyMessageFails` | QP-55 | Empty message triggers validation error |
| `testValidDataPasses` | QP-57 | Valid inputs produce zero errors |
| `testPageLoads` | QP-58 | index.php loads without fatal errors and returns expected HTML |
| `testInvalidEmailFormats` | QP-56 | Data-driven: 4 invalid email formats all fail validation |

## Branching Strategy

```
main
├── feature/QP-XX-description   ← feature work
└── bugfix/QP-XX-description    ← bug fixes
```

All changes enter `main` via Pull Request only. Direct commits to `main` are blocked by branch protection rules.
