# QuickPOS Landing Page

**Student Name:** Ramis Ali  
**Roll Number:** 22f-3703  
**Project:** Web Engineering Semester Project  

---

A modern, responsive Point of Sale (POS) system landing page built with PHP and Bootstrap 5, featuring a premium "Interstellar" dark aesthetic.

## 📋 Project Structure

```
QuickPOS/
├── public/
│   ├── assets/
│   │   ├── css/
│   │   │   └── style.css      # Premium Dark Theme Styles
│   │   ├── js/
│   │   │   └── script.js      # Animations & Logic
│   │   └── img/               # Images
│   ├── index.php              # Main Landing Page
│   ├── contact.php            # Form Handling Logic
│   ├── thank-you-new.html     # Premium Success Page
│   └── contact_log.txt        # Submission Logs
├── .gitignore
└── README.md
```

## 🚀 Quick Start

### Prerequisites
- PHP 8.0 or higher
- Git

### Installation

1. **Clone the repository:**
```bash
git clone https://github.com/Ramisali007/QuickPOS.git
cd QuickPOS
```

2. **Start PHP development server:**
```bash
php -S localhost:8000 -t public
```

3. **Open in browser:**
Navigate to `http://localhost:8000`

## ✨ Features

- **Premium "Interstellar" Aesthetic:** Deep mesh gradients, glassmorphism cards, and neon glow effects.
- **3D Interactions:** Hero section features a 3D-tilting dashboard preview.
- **Responsive Navigation:** Glass-effect navbar that adapts on scroll.
- **Contact Form:** Fully functional PHP form with validation and logging.
- **Thank You Page:** Animated success page with countdown redirection.
- **Performance:** Smooth scroll animations using Intersection Observer.

## 🛠️ Technologies Used

- **Backend:** PHP 8.x
- **Frontend:** HTML5, CSS3 (Custom Glassmorphism), JavaScript (ES6+)
- **Framework:** Bootstrap 5.3
- **Fonts:** 'Outfit' (Headings) & 'Plus Jakarta Sans' (Body)
- **Icons:** Font Awesome 6.4

## 📝 Contact Form Workflow

1. User submits form on `index.php`.
2. Data is POSTed to `contact.php`.
3. Server validates inputs (Name, Email, Message).
4. If valid:
   - Logs data to `public/assets/contact_log.txt`.
   - Redirects to `thank-you-new.html` with user's name.
5. If invalid:
   - Returns errors to `index.php` (stored in session).

## 🔄 Development Process

This project followed a rigorous development process using:
- **Jira:** For Agile project management (Epics, Stories, Tasks).
- **GitHub:** [https://github.com/Ramisali007/QuickPOS](https://github.com/Ramisali007/QuickPOS)
- **Slack:** For team communication and status updates.

## 👥 Team Roles

**Ramis Ali (22f-3703)** - Lead Developer & Product Owner
- Implemented core PHP logic.
- Designed the "World's Best" UI/UX.
- Managed repository and deployment.

## 📄 License

© 2025 QuickPOS. All rights reserved.
