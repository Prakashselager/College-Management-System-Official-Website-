# College Management System (Official Website)

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.x-4479A1?logo=mysql&logoColor=white)
![License](https://img.shields.io/badge/license-MIT-green)

A comprehensive, fully responsive PHP-MySQL based web application designed to serve as the official website and management portal for a college.

## ✨ Features

### Public Website
- 🏛️ Modern landing page with college highlights
- 📚 Course and department listings
- 👨‍🏫 Faculty directory
- 📝 Online admission enquiry form
- 📱 Fully responsive design for mobile and desktop

### Admin Management Portal
- 🔐 Secure admin login
- 📊 Dashboard with statistics (students, courses, enquiries)
- 🎓 Manage student records (Add, Edit, Delete)
- 📖 Manage courses and departments
- 📬 View and manage admission enquiries

## 🛠️ Tech Stack
- **Backend:** PHP 8.x
- **Database:** MySQL 8.x
- **Frontend:** HTML5, CSS3, JavaScript, Bootstrap
- **Icons:** Font Awesome

## 🚀 Installation

### 1. Clone the repository
\`\`\`bash
git clone https://github.com/Prakashselager/College-Management-System-Official-Website-
cd college-management-system
\`\`\`

### 2. Set up the database
- Open **phpMyAdmin** or MySQL CLI.
- Create a new database named `college_db`.
- Import the `database/db.sql` file.

### 3. Configure the connection
- Rename `includes/config.sample.php` to `includes/config.php`.
- Open it and update your database credentials:
\`\`\`php
define('DB_HOST', 'localhost');
define('DB_USER', 'your_db_username');
define('DB_PASS', 'your_db_password');
define('DB_NAME', 'college_db');
\`\`\`

### 4. Run the project
- Move the project folder to your local server directory (e.g., `htdocs/` for XAMPP).
- Open your browser and go to: `http://localhost/college-management-system/`
- Admin Login: `http://localhost/college-management-system/admin/`

**Default Admin Credentials:**
- Username: `admin`
- Password: `admin123` *(Change this immediately after login)*

## 📄 License
This project is licensed under the MIT License.
