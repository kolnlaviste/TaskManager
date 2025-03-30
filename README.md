# Task Manager App

A full-stack Task Manager application built using React for the frontend and Laravel for the backend. The application allows users to manage tasks efficiently with features such as authentication, task creation, filtering, and optional notifications.

## Features

- User authentication (JWT-based)
- Create, update, and delete tasks
- Task filtering and sorting
- Optional notifications for task updates
- Responsive and modern UI

## Tech Stack

### Frontend:
- React.js (Vite)
- Tailwind CSS
- Axios for API requests
- React Router for navigation

### Backend:
- Laravel
- MySQL (or PostgreSQL) for the database
- Sanctum for authentication
- Laravel Queues for notifications (if implemented)

## Installation

### Prerequisites
Ensure you have the following installed:
- Node.js & npm
- Composer & PHP
- MySQL or PostgreSQL

### Backend Setup (Laravel)
1. Clone the repository:
   ```sh
   git clone https://github.com/yourusername/task-manager.git
   cd task-manager/backend
   ```
2. Install dependencies:
   ```sh
   composer install
   ```
3. Copy the environment file and configure the database:
   ```sh
   cp .env.example .env
   ```
4. Generate an application key:
   ```sh
   php artisan key:generate
   ```
5. Run database migrations:
   ```sh
   php artisan migrate --seed
   ```
6. Start the Laravel server:
   ```sh
   php artisan serve
   ```

### Frontend Setup (React)
1. Navigate to the frontend directory:
   ```sh
   cd ../frontend
   ```
2. Install dependencies:
   ```sh
   npm install
   ```
3. Start the development server:
   ```sh
   npm run dev
   ```

## API Endpoints

### Authentication
- `POST /api/register` - Register a new user
- `POST /api/login` - Authenticate user
- `POST /api/logout` - Logout user

### Tasks
- `GET /api/tasks` - Get all tasks
- `POST /api/tasks` - Create a new task
- `PUT /api/tasks/{id}` - Update a task
- `DELETE /api/tasks/{id}` - Delete a task

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License
This project is open-source and available under the [MIT License](LICENSE).
