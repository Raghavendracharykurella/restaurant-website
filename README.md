# Restaurant Website

## 🍽️ The Golden Spoon - Fine Dining Restaurant

A modern, responsive restaurant website built with HTML, CSS, JavaScript, PHP, and MySQL. This project showcases a complete full-stack web application with an elegant user interface and dynamic backend functionality.

## ✨ Features

### Frontend Features
- **Responsive Design**: Fully responsive layout that works seamlessly across all devices (desktop, tablet, mobile)
- **Interactive Navigation**: Smooth scrolling navigation with mobile hamburger menu
- **Hero Section**: Eye-catching landing section with call-to-action
- **Dynamic Menu**: Tab-based menu system with categories (Appetizers, Main Course, Desserts, Beverages)
- **Reservation Form**: Interactive booking form with validation
- **Contact Section**: Complete contact information with embedded Google Maps
- **Smooth Animations**: Scroll-based animations and transitions
- **Modern UI/UX**: Clean and professional design with hover effects

### Backend Features (PHP & MySQL)
- **Database Integration**: MySQL database for storing reservations and menu items
- **Form Processing**: PHP backend to handle reservation submissions
- **Data Validation**: Server-side validation for security
- **Dynamic Content**: Menu items loaded from database
- **Customer Management**: Store and manage customer information

## 🛠️ Technologies Used

- **HTML5**: Semantic markup and structure
- **CSS3**: Modern styling with Flexbox and Grid
- **JavaScript (ES6+)**: Interactive features and DOM manipulation
- **PHP**: Server-side logic and database operations
- **MySQL**: Database management system
- **Font Awesome**: Icons library
- **Google Fonts**: Typography

## 📁 Project Structure

```
restaurant-website/
│
├── index.html          # Main HTML file
├── style.css           # Stylesheet
├── script.js           # JavaScript functionality
├── db.php              # Database connection
├── reservation.php     # Reservation form handler
├── menu.php            # Menu data handler
└── README.md           # Project documentation
```

## 🚀 Getting Started

### Prerequisites
- Web server (Apache/Nginx)
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web browser (Chrome, Firefox, Safari, Edge)

### Installation

1. **Clone the repository**
```bash
git clone https://github.com/Raghavendracharykurella/restaurant-website.git
cd restaurant-website
```

2. **Set up the database**
```sql
CREATE DATABASE restaurant;

USE restaurant;

CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    guests INT NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE menu_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(50) NOT NULL,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

3. **Configure database connection**

Edit `db.php` with your database credentials:
```php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "restaurant";
```

4. **Deploy to web server**
- Copy all files to your web server's document root (e.g., `/var/www/html/` or `htdocs/`)
- Ensure PHP and MySQL are properly configured

5. **Access the website**
- Open your browser and navigate to: `http://localhost/restaurant-website/`

## 💡 Usage

### For Users
1. **Browse Menu**: Click on different categories to view menu items
2. **Make Reservation**: Fill out the reservation form with your details
3. **Contact**: View contact information and location on the map

### For Developers
- Modify `menuData` object in `script.js` to update menu items
- Customize colors and styles in `style.css`
- Add more PHP endpoints for additional features

## 🎨 Customization

### Colors
Main colors used in the design:
- Primary: `#2a9d8f`
- Secondary: `#f4a261`
- Accent: `#e76f51`
- Dark: `#264653`

### Fonts
- Body: Segoe UI, Tahoma, Geneva, Verdana, sans-serif
- Icons: Font Awesome 6.0

## 📱 Responsive Breakpoints

- Desktop: > 768px
- Tablet: 768px
- Mobile: < 480px

## 🔐 Security Features

- Input validation (client-side and server-side)
- SQL injection prevention using prepared statements
- XSS protection
- CSRF token implementation (recommended for production)

## 📝 Future Enhancements

- [ ] Online payment integration
- [ ] User authentication and profiles
- [ ] Order management system
- [ ] Email notifications for reservations
- [ ] Admin dashboard
- [ ] Photo gallery
- [ ] Customer reviews and ratings
- [ ] Multi-language support

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

## 👨‍💻 Author

**Raghavendra Chary Kurella**
- GitHub: [@Raghavendracharykurella](https://github.com/Raghavendracharykurella)
- Portfolio: [raghavendracharykurella.github.io/portfolio](https://raghavendracharykurella.github.io/portfolio/)

## 🙏 Acknowledgments

- Font Awesome for icons
- Unsplash for images
- Google Fonts for typography

## 📞 Support

For support, email raghavendrachary@example.com or create an issue in this repository.

---

⭐ If you find this project helpful, please give it a star!

Made with ❤️ by Raghavendra Chary Kurella
