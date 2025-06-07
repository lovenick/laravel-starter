# Laravel Starter

A modern Laravel starter kit built with Livewire, Flux UI, and Tailwind CSS v4. This starter provides a solid foundation for building web applications with a complete authentication system and user settings management.

## Tech Stack

- **Laravel 12.17.0** - The PHP framework for web artisans
- **Livewire** - Full-stack framework for Laravel that makes building dynamic interfaces simple
- **Flux UI Pro** - Premium UI components built for Livewire (requires separate license)
- **Tailwind CSS v4** - A utility-first CSS framework
- **Vite** - Next generation frontend tooling
- **SQLite** - Lightweight database perfect for development
- **Pest PHP** - Elegant PHP testing framework
- **Laravel Pint** - Opinionated PHP code style fixer

## Features

### 🔐 Complete Authentication System

- User registration with email verification
- Login with remember me functionality
- Password reset via email
- Email verification flow
- Password confirmation for sensitive actions
- Session management

### ⚙️ User Settings Dashboard

- **Profile Management** - Update name and email
- **Password Management** - Change password with current password confirmation
- **Appearance Settings** - Theme preferences and UI customization
- **Account Management** - Delete account with proper confirmation flow

### 🎨 Modern UI/UX

- Responsive design with mobile-first approach
- Multiple authentication layout options (card, simple, split)
- Clean and modern interface using Flux UI components
- Consistent design patterns throughout the application
- Custom Flux UI component overrides for branding

### 🧪 Testing Suite

- Comprehensive authentication tests
- Feature tests for all user flows
- Unit test examples
- In-memory SQLite for fast test execution

### 🛠️ Developer Experience

- Hot module replacement with Vite
- Laravel Pint for consistent code formatting
- Composer scripts for common tasks
- Well-organized directory structure
- Clear separation of concerns

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js & NPM
- SQLite

## Installation

1. Clone the repository:

```bash
git clone <repository-url>
cd laravel-starter
```

2. Install PHP dependencies:

```bash
composer install
```

3. Install Flux UI Pro:

    - Purchase a license from [fluxui.com](https://fluxui.com)
    - Follow the installation instructions provided with your license

4. Install NPM dependencies:

```bash
npm install
```

5. Copy the environment file:

```bash
cp .env.example .env
```

6. Generate application key:

```bash
php artisan key:generate
```

7. Run database migrations:

```bash
php artisan migrate
```

8. Start the development server:

```bash
composer run dev
```

This will start:

- Laravel development server on `http://localhost:8000`
- Vite dev server for hot module replacement
- Queue worker for background jobs
- Real-time log streaming with Laravel Pail

## Development Commands

### Running the Application

```bash
# Start all development services
composer run dev

# Or run services individually:
php artisan serve       # Laravel server
npm run dev            # Vite dev server
php artisan queue:listen   # Queue worker
php artisan pail       # Log streaming
```

### Testing

```bash
# Run all tests
composer test

# Run specific test file
php artisan test tests/Feature/Auth/LoginTest.php

# Create new test
php artisan pest:test Feature/MyNewTest
```

### Code Quality

```bash
# Format code with Laravel Pint
./vendor/bin/pint

# Build assets for production
npm run build
```

## Project Structure

```
laravel-starter/
├── app/
│   ├── Livewire/         # Livewire components
│   │   ├── Auth/         # Authentication components
│   │   └── Settings/     # User settings components
│   └── Models/           # Eloquent models
├── resources/
│   ├── views/
│   │   ├── components/   # Blade components
│   │   ├── flux/        # Flux UI overrides
│   │   └── livewire/    # Livewire component views
│   ├── css/             # Stylesheets
│   └── js/              # JavaScript files
├── routes/              # Application routes
├── tests/               # Test suite
└── database/            # Migrations and seeders
```

## Customization

### Flux UI Components

Custom Flux UI component overrides are located in `resources/views/flux/`. You can override any Flux component by creating a file with the same path structure.

### Authentication Flows

All authentication components are in `app/Livewire/Auth/`. You can customize the authentication logic by modifying these components.

### Styling

The application uses Tailwind CSS v4. You can customize the design system in `tailwind.config.js` and add custom styles in `resources/css/app.css`.

## Additional Setup

### For Claude AI Development

Add puppeteer MCP to Claude for browser automation testing:

```bash
claude mcp add puppeteer npx -- -y @modelcontextprotocol/server-puppeteer
```

## License

This starter kit is open-sourced software. Please ensure you have proper licenses for any premium components used (such as Flux UI Pro).
