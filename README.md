# E-SO9 E-Commerce Platform

This is a professional E-commerce application built with Laravel, styled with Vanilla CSS, and enhanced with GSAP animations. The project is fully Dockerized using Laravel Sail.

## Prerequisites

- Docker Desktop (or Engine) installed and running.
- PHP & Composer (for initial setup, though Sail handles the rest).
- Node.js & NPM (for frontend assets).

## Getting Started

1.  **Start Docker Containers**
    The application uses Laravel Sail for a simple Docker development environment.
    ```bash
    ./vendor/bin/sail up -d
    ```
    *Note: The first time you run this, it may take a few minutes to build the images.*

2.  **Install Frontend Dependencies**
    Install the Node dependencies including GSAP.
    ```bash
    npm install
    ```

3.  **Compile Assets**
    Run the Vite development server for hot module replacement.
    ```bash
    npm run dev
    ```

4.  **Access the Application**
    Open your browser and visit:
    [http://localhost](http://localhost)

## Project Structure

- **Backend**: Laravel 11 (PHP 8.2+)
- **Frontend**: Blade Templates, Vanilla CSS, Vanilla JS
- **Animations**: GSAP (GreenSock Animation Platform)
- **Database**: PostgreSQL (configured in Docker)
- **Styling**: Custom CSS in `resources/css/app.css` (No Tailwind, as per request)

## UI Features

- **Hero Section**: Animated entry using GSAP.
- **Product Grid**: Responsive grid layout with staggered animations.
- **Navigation**: Sticky navbar with glassmorphism effect.
- **Cart**: Functional UI for cart management.

## Contributing

1.  Fork the repository.
2.  Create a feature branch.
3.  Commit your changes.
4.  Push to the branch.
5.  Create a Pull Request.

## License

The MIT License (MIT).
# E-SO9
