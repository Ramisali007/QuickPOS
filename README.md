# QuickPOS Landing Page

A modern, responsive Point of Sale (POS) system landing page built with PHP and Bootstrap 5.

## 📋 Project Structure

```
QuickPOS/
├── public/
│   ├── index.php          # Main landing page
│   ├── contact.php        # Contact form handler
│   └── thank-you.html     # Success page
├── assets/
│   ├── css/
│   │   └── style.css      # Custom styles
│   ├── js/
│   │   └── script.js      # JavaScript
│   └── images/            # Project images
├── .gitignore
├── README.md
└── contact_log.txt        # Contact submissions log
```

## 🚀 Quick Start

### Prerequisites
- PHP 8.0 or higher
- Git

### Installation

1. **Clone the repository:**
```bash
git clone <your-repo-url>
cd QuickPOS
```

2. **Start PHP development server:**
```bash
php -S localhost:8000 -t public
```

3. **Open in browser:**
Navigate to `http://localhost:8000`

## ✨ Features

- ✅ Responsive Navigation with Mobile Menu
- ✅ Hero Section with Call-to-Action
- ✅ Features Showcase (3 key features)
- ✅ Pricing Table (3 tiers)
- ✅ Contact Form with PHP Validation
- ✅ Thank You Page
- ✅ Professional Footer
- ✅ Smooth Animations
- ✅ Mobile-First Design
- ✅ Bootstrap 5 + Font Awesome Icons

## 🛠️ Technologies Used

- **Backend:** PHP 8.5
- **Frontend:** HTML5, CSS3, JavaScript
- **Framework:** Bootstrap 5.3
- **Icons:** Font Awesome 6.4
- **Version Control:** Git & GitHub

## 📝 Contact Form

The contact form:
- Validates required fields (Name, Email, Message)
- Validates email format
- Logs submissions to `contact_log.txt`
- Redirects to thank you page on success
- Shows error messages on validation failure

## 🔄 Development Workflow

1. Create a feature branch:
```bash
git checkout -b feature/POS-XXX-feature-name
```

2. Make changes and test locally

3. Commit with Jira ticket number:
```bash
git commit -m "[POS-XXX] Add feature description"
```

4. Push to GitHub:
```bash
git push origin feature/POS-XXX-feature-name
```

5. Create a Pull Request on GitHub

6. Request review from Tech Lead

7. Merge to main after approval

## 👥 Team Roles

- **Product Owner:** Defines features & approves deliverables
- **Project Manager & QA:** Manages Jira, runs sprints, tests features
- **Tech Lead:** Manages GitHub, code reviews, branching strategy
- **Lead Developer:** Writes feature code, works with Tech Lead

## 📊 Project Management

- **Jira:** [Create your Jira project link]
- **GitHub:** [Add your GitHub repo link]
- **Slack:** [Add your Slack channel]

## 🎯 Epics

- [POS-1] Navigation & Header
- [POS-2] Hero Section
- [POS-3] Features Section
- [POS-4] Pricing Section
- [POS-5] Contact Form
- [POS-6] Footer

## 📞 Support

For issues or questions, contact the development team on Slack.

## 📄 License

© 2025 QuickPOS. All rights reserved.