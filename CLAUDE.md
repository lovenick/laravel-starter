# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a Laravel 12.17.0 application using the official Laravel Livewire Starter Kit with Flux UI components. The project uses SQLite as the database and includes authentication scaffolding.

## Tech Stack

- **Backend**: Laravel 12.17.0 with PHP 8.2+
- **Frontend**: Livewire, Volt, Flux UI components
- **Styling**: Tailwind CSS v4 with Vite
- **Testing**: Pest PHP testing framework
- **Database**: SQLite (database/database.sqlite)
- **Code Quality**: Laravel Pint for code formatting

## Common Development Commands

### Development Server
```bash
# Start all development services (server, queue, logs, vite)
composer run dev

# Or run services individually:
php artisan serve              # Start Laravel server
npm run dev                     # Start Vite dev server
php artisan queue:listen        # Start queue worker
php artisan pail               # Stream application logs
```

### Testing
```bash
# Run all tests
composer test
# or
php artisan test

# Run specific test file
php artisan test tests/Feature/ExampleTest.php

# Create new test
php artisan pest:test Feature/MyNewTest
```

### Code Quality
```bash
# Format code with Laravel Pint
./vendor/bin/pint

# Run with specific configuration
./vendor/bin/pint --config pint.json
```

### Build for Production
```bash
npm run build
```

## Architecture Overview

### Directory Structure
- `app/Livewire/` - Livewire components organized by feature (Auth, Settings, etc.)
- `app/Models/` - Eloquent models
- `resources/views/` - Blade templates with component-based structure
- `resources/views/components/` - Reusable Blade components
- `resources/views/flux/` - Custom Flux UI component overrides

### Key Patterns
1. **Authentication**: Full authentication system using Livewire components in `app/Livewire/Auth/`
2. **Settings**: User settings management in `app/Livewire/Settings/` with profile, password, appearance, and account deletion
3. **Component Structure**: Uses Flux UI components with custom overrides in `resources/views/flux/`
4. **Routing**: Standard Laravel routing with dedicated `routes/auth.php` for authentication routes

### Testing Approach
- Uses Pest PHP for testing
- Tests organized in `tests/Feature/` and `tests/Unit/`
- Authentication tests already provided in `tests/Feature/Auth/`
- Database refreshed in memory for each test (SQLite :memory:)

## Important Notes
- Database migrations run automatically on project creation
- Uses Composer scripts for common tasks (see `composer.json` scripts section)
- Vite configured with Laravel plugin for hot module replacement
- Tailwind CSS v4 integrated with Vite plugin