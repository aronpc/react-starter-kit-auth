# React Starter Kit with Auth

<p>
    <a href="https://github.com/aronpc/react-starter-kit-auth/actions"><img src="https://github.com/aronpc/react-starter-kit-auth/actions/workflows/tests.yml/badge.svg" alt="Build Status"></a>
    <a href="https://github.com/aronpc/react-starter-kit-auth/blob/main/LICENSE.md"><img src="https://img.shields.io/github/license/aronpc/react-starter-kit-auth" alt="License"></a>
    <a href="https://github.com/aronpc/react-starter-kit-auth"><img src="https://img.shields.io/github/stars/aronpc/react-starter-kit-auth" alt="GitHub Stars"></a>
</p>

## 📋 Overview

A modern, production-ready Laravel starter kit featuring React 19, TypeScript, and Inertia.js with full authentication system. This starter kit provides opinionated modern tooling setup with best practices for rapid application development.

## 🛠️ Tech Stack

### Backend
- **Laravel 12**: Latest Laravel framework with PHP 8.4+
- **Inertia.js**: Modern monolith architecture connecting Laravel with React
- **Laravel Fortify**: Headless authentication backend
- **Laravel Wayfinder**: Type-safe routing for frontend
- **SQLite**: Default database (configurable to MySQL/PostgreSQL)
- **Queue & Cache**: Database-backed (configurable to Redis)

### Frontend
- **React 19**: Latest React with modern hooks and concurrent features
- **TypeScript 5.7**: Full type safety across the frontend
- **Vite 7**: Lightning-fast build tool and dev server
- **Tailwind CSS 4.0**: Utility-first CSS framework
- **Radix UI**: Accessible, unstyled UI components
- **Lucide Icons**: Beautiful icon library
- **Inertia.js React**: Seamless SPA experience with SSR support

### Code Quality & Testing
- **Pest**: Modern PHP testing framework
- **PHPStan/Larastan**: Static analysis for Laravel
- **Rector**: Automated code refactoring and upgrades
- **Pint**: Opinionated PHP code formatter
- **ESLint**: JavaScript/TypeScript linting
- **Prettier**: Code formatting for frontend
- **Architecture Tests**: Enforce code quality and conventions

### Development Tools
- **Laravel Boost**: MCP server for AI assistant integration
- **Laravel Pail**: Real-time log viewer
- **Laravel Sail**: Docker development environment
- **Laravel IDE Helper**: Enhanced IDE autocompletion
- **Concurrently**: Run multiple dev servers simultaneously

## 📋 Requirements

- **PHP 8.4+** with required extensions (see `composer.json`)
- **Node.js 18+** and npm (for frontend assets)
- **Composer 2+** for PHP dependency management
- **Database**: SQLite (default), MySQL 8+, or PostgreSQL 13+

## 🚀 Quick Start

### Using Laravel Installer (Recommended)

```bash
# Create a new project using Laravel installer
laravel new my-project --using=aronpc/react-starter-kit-auth

# Start development servers
composer run dev
```

### Using Git Clone

```bash
# Clone the repository
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

# Start development servers (Laravel, Queue, Logs, Vite)
composer run dev
```

## 📜 Available Scripts

### Composer Scripts (PHP)

```bash
# Development
composer run dev              # Start all dev servers (artisan, queue, pail, vite)
composer run dev:ssr          # Start dev servers with SSR support

# Code Quality
composer run fix              # Auto-fix code with Rector and Pint
composer run refactor         # Run Rector code refactoring

# Testing
composer run test             # Run all tests (unit, types, refactor checks)
composer run test:unit        # Run Pest unit and feature tests
composer run test:unit:coverage  # Run tests with coverage report
composer run test:types       # Run PHPStan static analysis
composer run test:refactor    # Check Rector refactoring suggestions (dry-run)
composer run test:lint        # Check code style with Pint (no changes)

# Direct tool access
./vendor/bin/pint             # Format code with Pint
./vendor/bin/phpstan analyse  # Run static analysis
./vendor/bin/rector           # Run Rector
php artisan test              # Run Pest tests
```

### NPM Scripts (Frontend)

```bash
npm run dev                   # Start Vite dev server with HMR
npm run build                 # Build for production
npm run build:ssr             # Build for production with SSR

# Code Quality
npm run lint                  # Run ESLint with auto-fix
npm run format                # Format code with Prettier
npm run format:check          # Check formatting without changes
npm run types                 # Run TypeScript type checking
```

## 🔧 Environment Variables

Key environment variables (see `.env.example` for full list):

```bash
# Application
APP_NAME=Laravel              # Application name
APP_ENV=local                 # Environment (local, production)
APP_KEY=                      # Generate with: php artisan key:generate
APP_URL=http://localhost      # Application URL
APP_LOCALE=pt_BR              # Default locale (pt_BR, en, etc.)

# Database
DB_CONNECTION=sqlite          # Database type (sqlite, mysql, pgsql)
# For MySQL/PostgreSQL, configure: DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD

# Session & Cache
SESSION_DRIVER=database       # Session storage (database, redis, file)
CACHE_STORE=database          # Cache driver (database, redis, file)
QUEUE_CONNECTION=database     # Queue driver (database, redis, sync)

# Mail (for auth emails)
MAIL_MAILER=log               # Mail driver (log, smtp, mailgun, etc.)
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

# Frontend
VITE_APP_NAME="${APP_NAME}"   # Exposed to frontend
```

For production deployment, ensure you configure proper database, cache, queue, and mail settings.

## 📦 Key Packages

### Backend (PHP)
- `laravel/framework` - Laravel 12 framework
- `inertiajs/inertia-laravel` - Inertia.js server adapter
- `laravel/fortify` - Authentication backend
- `laravel/wayfinder` - Type-safe routing
- `nunomaduro/essentials` - Essential Laravel packages
- `archtechx/enums` - Enhanced PHP enums

### Frontend (JavaScript/TypeScript)
- `react` & `react-dom` - React 19
- `@inertiajs/react` - Inertia.js React adapter
- `typescript` - TypeScript support
- `vite` - Build tool and dev server
- `tailwindcss` - Utility-first CSS
- `@radix-ui/*` - Accessible UI components
- `lucide-react` - Icon library

### Development Tools
- `pestphp/pest` - Testing framework
- `larastan/larastan` - Static analysis
- `rector/rector` - Code refactoring
- `laravel/pint` - Code formatter
- `laravel/boost` - MCP server for AI
- `laravel/sail` - Docker environment
- `eslint` & `prettier` - Frontend code quality

## 📁 Project Structure

```
├── app/
│   ├── Contracts/          # Interfaces and traits (HasEnumFeatures)
│   ├── Http/
│   │   ├── Controllers/    # Auth, Settings controllers
│   │   ├── Middleware/     # Inertia, Appearance middleware
│   │   └── Requests/       # Form request validation
│   ├── Models/             # Eloquent models (User)
│   └── Providers/          # Service providers (Fortify, App)
├── resources/
│   ├── css/
│   │   └── app.css         # Tailwind CSS entry point
│   ├── js/
│   │   ├── actions/        # Server actions (App, Illuminate, Laravel)
│   │   ├── components/     # React components and UI library
│   │   ├── hooks/          # Custom React hooks
│   │   ├── layouts/        # Page layouts (app, auth, settings)
│   │   ├── pages/          # Inertia pages (auth, dashboard, settings)
│   │   ├── routes/         # Wayfinder type-safe routes
│   │   ├── types/          # TypeScript definitions
│   │   ├── app.tsx         # Main React entry point
│   │   └── ssr.tsx         # SSR entry point
│   └── views/
│       └── app.blade.php   # Root Blade template for Inertia
├── routes/
│   ├── web.php             # Application routes
│   ├── auth.php            # Authentication routes
│   └── console.php         # Artisan commands
├── tests/
│   ├── Feature/            # Feature tests
│   └── Unit/               # Unit tests
├── database/
│   ├── migrations/         # Database migrations
│   └── seeders/            # Database seeders
├── config/                 # Laravel configuration files
├── composer.json           # PHP dependencies and scripts
├── package.json            # Node dependencies and scripts
├── vite.config.ts          # Vite build configuration
├── phpunit.xml             # PHPUnit/Pest configuration
├── phpstan.neon            # PHPStan configuration
├── rector.php              # Rector configuration
├── pint.json               # Pint configuration
├── tsconfig.json           # TypeScript configuration
├── eslint.config.js        # ESLint configuration
└── boost.json              # Laravel Boost MCP configuration
```

### Entry Points

**Backend:**
- `artisan` - Laravel CLI entry point
- `public/index.php` - HTTP entry point

**Frontend:**
- `resources/js/app.tsx` - Client-side React application
- `resources/js/ssr.tsx` - Server-side rendering entry point
- `resources/css/app.css` - CSS entry point with Tailwind

## 🤖 Laravel Boost - MCP Server

This starter kit includes [Laravel Boost](https://github.com/laravel/boost), an official Laravel MCP (Model Context Protocol) server that enhances AI assistant capabilities when working with Laravel projects.

### Features

- **Project Context**: Provides AI assistants with deep understanding of your Laravel project structure
- **Code Intelligence**: Enables better code suggestions and refactoring recommendations
- **Laravel Expertise**: Offers Laravel-specific knowledge and best practices
- **Seamless Integration**: Works automatically with Claude Code and other MCP-compatible AI tools

### Configuration

MCP server is configured in `.mcp.json` and `boost.json`. Laravel Boost is pre-configured and ready to use - no additional setup required.

```bash
# MCP server runs via:
php artisan boost:mcp
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

## 🙏 Acknowledgments

This starter kit is based on and inspired by:

- [ShipFast Labs - Modern React Starter Kit with Auth](https://github.com/shipfastlabs/modern-react-starter-kit-auth)
- [Laravel Starter Kit](https://github.com/laravel/laravel-starter-kit)
- [Nuno's Strict Laravel Starter Kit](https://github.com/nunomaduro/laravel-starter-kit)
