# PHP Final Project - Simple CRUD Application

A beginner-friendly PHP web application that demonstrates basic CRUD (Create, Read, Update, Delete) operations with a MySQL database.

## 🚀 What This Project Does

This is a simple student data management system where you can:
- Add new student records (NIS, Name, Address)
- View all student records in a table
- Update existing student information
- Delete student records

## 📋 Prerequisites

Before you start, make sure you have:
- **XAMPP** or **Laragon** installed (includes PHP, MySQL, Apache)
- **Web Browser** (Chrome, Firefox, etc.)
- **Code Editor** (VS Code recommended)

## 🛠️ Installation Guide for Beginners

### Step 1: Download the Project
1. Go to the GitHub repository: https://github.com/Tan25x/ict-phpfinalproject.git
2. Click the green "Code" button
3. Select "Download ZIP"
4. Extract the ZIP file to your computer

### Step 2: Place in Web Server Directory
**If using XAMPP:**
- Move the extracted folder to `C:/xampp/htdocs/`
- Rename it to `phpfinal` (or any name you prefer)

**If using Laragon:**
- Move the extracted folder to `C:/laragon/www/`
- Rename it to `phpfinal` (or any name you prefer)

### Step 3: Start Your Web Server
**For XAMPP:**
1. Open XAMPP Control Panel
2. Start Apache and MySQL services

**For Laragon:**
1. Open Laragon
2. Click "Start All"

### Step 4: Create the Database
1. Open your web browser
2. Go to `http://localhost/phpmyadmin` (for XAMPP) or `http://localhost:8080/phpmyadmin` (for Laragon)
3. Click "New" in the left sidebar
4. Enter database name: `phpfinal`
5. Click "Create"
6. Select the database you just created
7. Click "Import" tab
8. Choose the `database.sql` file from the project folder
9. Click "Go"

### Step 5: Configure Database Connection
1. Open the `connection.php` file in your code editor
2. Check if the database credentials match your setup:
   ```php
   $mysqli = new mysqli("localhost", "root", "", "phpfinal");
   ```
3. If your MySQL has a password, update it in the connection string

### Step 6: Access the Application
Open your web browser and go to:
- `http://localhost/phpfinal/` (for XAMPP)
- `http://localhost/phpfinal/` (for Laragon)

## 📁 Project Files Explained

| File Name | What It Does |
|-----------|--------------|
| `index.php` | Main form to add new student data |
| `display.php` | Shows all student records in a table |
| `execute.php` | Processes the form submission (creates new records) |
| `update.php` | Form to edit existing student data |
| `updateproses.php` | Processes the update request |
| `delete.php` | Handles record deletion |
| `connection.php` | Database connection settings |
| `database.sql` | Database structure and initial data |

## 🎯 How to Use the Application

### Adding New Students
1. Open `index.php`
2. Fill in the form:
   - **NIS**: Student ID number
   - **Nama**: Student name
   - **Alamat**: Student address
3. Click "KIRIM" to save

### Viewing All Students
1. On the main form (`index.php`), click the "Tampilkan Tabel" button
2. OR go directly to `display.php`
3. You'll see all student records with options to update or delete

### Updating Student Information
1. Go to the table view (`display.php`)
2. Click "Update" next to the student you want to edit
3. Modify the information (except NIS which is read-only)
4. Click "Update" to save changes

### Deleting Students
1. Go to the table view (`display.php`)
2. Click "Delete" next to the student you want to remove
3. Confirm the deletion in the popup dialog

## 🔧 Troubleshooting Common Issues

### "Connection Failed" Error
- Make sure Apache and MySQL are running
- Check database name in `connection.php`
- Verify MySQL username and password

### "Database Not Found" Error
- Make sure you created the database named `phpfinal`
- Check that you imported the `database.sql` file

### "404 Not Found" Error
- Verify you placed the files in the correct folder
- Check your URL spelling
- Make sure Apache is running

### White Screen/Blank Page
- Check PHP error logs
- Make sure all PHP files are properly saved
- Verify file permissions

## 🎨 Features Included

- ✅ Responsive design (works on mobile and desktop)
- ✅ Data validation (prevents empty submissions)
- ✅ Confirmation dialogs for destructive actions
- ✅ Clean, user-friendly interface
- ✅ Easy navigation between pages
- ✅ Secure database operations

## 📚 What You'll Learn

This project teaches:
- Basic PHP syntax and concepts
- Database connectivity with MySQLi
- HTML form handling
- SQL operations (INSERT, SELECT, UPDATE, DELETE)
- Basic web security practices
- File organization and structure

## 🤝 Contributing

If you want to improve this project:
1. Fork the repository
2. Create a new branch for your feature
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## 📄 License

This project is open source and available under the MIT License.

## 🆘 Need Help?

If you're stuck:
1. Check the troubleshooting section above
2. Make sure all prerequisites are installed
3. Verify your database connection
4. Check browser console for errors
5. Review PHP error logs

Happy coding! 🎉