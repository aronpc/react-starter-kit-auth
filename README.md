# React Starter Kit with Auth

<p>
    <a href="https://github.com/aronpc/react-starter-kit-auth/actions"><img src="https://github.com/aronpc/react-starter-kit-auth/actions/workflows/tests.yml/badge.svg" alt="Build Status"></a>
    <a href="https://github.com/aronpc/react-starter-kit-auth/blob/main/LICENSE.md"><img src="https://img.shields.io/github/license/aronpc/react-starter-kit-auth" alt="License"></a>
    <a href="https://github.com/aronpc/react-starter-kit-auth"><img src="https://img.shields.io/github/stars/aronpc/react-starter-kit-auth" alt="GitHub Stars"></a>
</p>


This starter kit updates the base Laravel starter kit with opinionated modern tooling setup.

**What's Included:**
- **Laravel Latest**: Built with the latest Laravel version (requires PHP 8.4+)
- **Essential Packages**: Pre-configured with Laravel Essentials and Laravel Boost
- **Code Quality**: Integrated Pint, Rector, and PHPStan
- **Testing Ready**: Pest testing framework included
- **IDE Support**: Laravel IDE Helper for better development experience
- **Enhanced Enums**: Pre-configured with ArchTech Enums package and HasEnumFeatures trait

## 🚀 Quick Start

> **Requires [PHP 8.4+](https://php.net/releases/)**.

### Using Laravel Installer (Recommended)

```bash
# Create a new project using Laravel installer
laravel new my-project --using=aronpc/react-starter-kit-auth

composer run dev
```

### Using Git Clone

```bash
# Clone the repository via github
git clone git@github.com:aronpc/react-starter-kit-auth.git
cd react-starter-kit-auth

# Install dependencies
composer install
npm install

# Set up environment
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# Start development server
composer run dev
```

## 📦 Included Packages

### Production
- `nunomaduro/essentials` - Essential Laravel packages
- `archtechx/enums` - Enhanced PHP enums with powerful features

### Development
- `larastan/larastan` - PHP static analysis
- `rector/rector` - Code refactoring and upgrades
- `barryvdh/laravel-ide-helper` - IDE autocompletion
- `laravel/boost` - Laravel-focused MCP server

## 🛠️ Development Tools

```bash
# Code formatting with Pint
./vendor/bin/pint

# Static analysis with PHPStan/Larastan
./vendor/bin/phpstan analyse --memory-limit=-1

# Code refactoring with Rector
./vendor/bin/rector

# Run tests
php artisan test
```

## 🏗️ Architecture Tests

This starter kit includes comprehensive architecture tests using Pest to enforce code quality and consistency:

### Included Presets

- **PHP Preset**: Ensures no `var_dump`, `dd()`, or deprecated functions
- **Security Preset**: Prevents usage of dangerous functions like `eval()`, `exec()`, `shell_exec()`
- **Laravel Preset**: Enforces Laravel best practices and conventions

### Custom Rules

- **Enum Validation**: All files in `App\Enums` must be valid enum classes
- **HasEnumFeatures Trait**: All enums must use the `HasEnumFeatures` trait for consistency

These tests run automatically with your test suite and help maintain code quality standards across the project.

```bash
# Run only architecture tests
php artisan test --filter=ArchTest
```

## 🎯 Enhanced Enums

This starter kit includes the [ArchTech Enums](https://github.com/archtechx/enums) package with a pre-configured
`HasEnumFeatures` trait that provides:

- **Invokable cases**: Use enums as callables
- **Metadata**: Attach arbitrary data to enum cases
- **Names & Values**: Easy access to case names and values
- **From**: Create enums from various inputs with better error handling
- **Comparison**: Rich comparison methods
- **Options**: Generate arrays for dropdowns and forms

### Usage

All enums in `app/Enums` should use the `HasEnumFeatures` trait:

```php
<?php

namespace App\Enums;

use App\Contracts\HasEnumFeatures;

enum Status: string
{
    use HasEnumFeatures;

    case PENDING = 'pending';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';
}
```

Architecture tests ensure all enums follow this convention.

## 📝 License

This project is open-sourced software licensed under the [MIT license](LICENSE.md).

Credits: 
- [Laravel Starter Kit](https://github.com/laravel/laravel-starter-kit)
- [Nuno's Strict Laravel Starter Kit](https://github.com/nunomaduro/laravel-starter-kit)
