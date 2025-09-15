# EasyDine - Restaurant Reservation System

EasyDine is a web-based restaurant reservation system that allows users to sign up, log in, view menus, and reserve tables at their favorite restaurants. The project is built using PHP, MySQL, HTML, CSS, and JavaScript, and leverages the Restoran Bootstrap Restaurant Template by HTML Codex.

## Features
- User authentication (sign up, log in, log out)
- Restaurant menu display
- Table reservation system
- Responsive design using Bootstrap
- Animated UI elements and carousels

## Project Structure
- `index.html` / `index.php`: Home page/dashboard
- `login.php`, `signup.php`, `logout.php`: User authentication
- `menu.php`: Restaurant menu
- `reserve.php`, `final.html`: Table reservation
- `about.php`, `service.php`: Informational pages
- `connection.php`: Database connection
- `functions.php`: Common PHP functions (e.g., authentication)
- `css/`, `js/`, `img/`, `lib/`: Static assets and libraries

## Setup Instructions
1. **Clone the repository:**
   ```
   git clone https://github.com/sampriti-gopisetti/Restaurant-Reservation-System.git
   ```
2. **Configure the database:**
   - Create a MySQL database named `login_sample_db` (or update `connection.php` with your DB details).
   - Create a `users` table with columns: `user_id` (varchar), `username` (varchar), `password` (varchar).
3. **Set up a local server:**
   - Place the project folder in your web server's root directory (e.g., `htdocs` for XAMPP).
   - Start Apache and MySQL services.
   - Access the app at `http://localhost/EasyDine/`.

## Dependencies
- PHP >= 7.x
- MySQL
- Bootstrap 5 (included)
- jQuery, FontAwesome, and other JS/CSS libraries (included in `lib/`)

## Credits
- Template: [Restoran - Bootstrap Restaurant Template](https://htmlcodex.com/bootstrap-restaurant-template) by HTML Codex
- See `LICENSE.txt` for template license details.

## License
See `LICENSE.txt` for details.
