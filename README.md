# Laravel CRUD Application

This repository contains a simple Laravel application that demonstrates the implementation of basic CRUD (Create, Read, Update, Delete) operations.

## Features

- Create, read, update, and delete records using a MySQL database.
- Clean, modular code structure following Laravel's MVC architecture.
- Blade templates for user-friendly UI.

---

## Installation and Setup

### Step 1: Set Up Laravel Project

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd crud-app
   ```

2. Install Laravel dependencies:
   ```bash
   composer install
   ```

3. Configure the `.env` file:
   - Update database settings:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database_name
     DB_USERNAME=your_username
     DB_PASSWORD=your_password
     ```

4. Start the Laravel development server:
   ```bash
   php artisan serve
   ```

   The application will run locally at [http://127.0.0.1:8000](http://127.0.0.1:8000).

---

### Step 2: Database Setup

1. Create a database manually in MySQL.
2. Run migrations to set up the database tables:
   ```bash
   php artisan migrate
   ```

---

### Step 3: Define the Model

1. Generate the `Post` model:
   ```bash
   php artisan make:model Post
   ```

2. Add fillable fields to `app/Models/Post.php`:
   ```php
   protected $fillable = ['title', 'content'];
   ```

---

### Step 4: Create the Controller

1. Generate the `PostController`:
   ```bash
   php artisan make:controller PostController
   ```

2. Define CRUD methods:
   - `index()`: Display all posts.
   - `create()`: Show form to create a new post.
   - `store()`: Save a new post to the database.
   - `edit()`: Show form to edit an existing post.
   - `update()`: Update post data.
   - `destroy()`: Delete a post.

---

### Step 5: Define Routes

1. Open `routes/web.php` and register resource routes:
   ```php
   Route::resource('posts', PostController::class);
   ```

---

### Step 6: Create Views

1. Create Blade templates in the `resources/views/posts` directory:
   - `index.blade.php`: List all posts.
   - `create.blade.php`: Form to add a new post.
   - `edit.blade.php`: Form to edit an existing post.

2. Use Laravel's Blade templating for rendering data and forms.

---

### Step 7: Add Validation

1. Validate form input in the `store()` and `update()` methods of `PostController`:
   ```php
   $request->validate([
       'title' => 'required|string|max:255',
       'content' => 'required|string',
   ]);
   ```

---

## Running the Application

1. Navigate to [http://127.0.0.1:8000/posts](http://127.0.0.1:8000/posts) to view the application.
2. Use the interface to create, view, edit, and delete posts.

---

## License

This project is licensed under the MIT License.
