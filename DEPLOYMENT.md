# Vercel Deployment Guide

## Project Structure

```
QuickPOS/
├── api/                      # PHP Serverless Functions (Vercel)
│   ├── index.php            # Main landing page
│   └── contact.php          # Contact form handler
├── public/                   # Static Files
│   ├── assets/              # CSS, JS, Images
│   │   ├── css/
│   │   ├── js/
│   │   └── img/
│   ├── thank-you-new.html
│   └── thank-you.html
├── vercel.json              # Vercel configuration
└── README.md
```

## How It Works

### For Vercel Deployment:
- **PHP Files**: Located in `api/` directory (serverless functions)
- **Static Files**: Located in `public/` directory (HTML, CSS, JS, images)
- **Routing**: Handled by `vercel.json`

### For Local Development:
- **PHP Files**: Can use either `api/` or `public/` directory
- **Static Files**: Serve from `public/` directory
- **Command**: `php -S localhost:8000 -t public`

## Vercel Configuration

The `vercel.json` file routes requests as follows:
- `/assets/*` → `/public/assets/*` (static assets)
- `/contact.php` → `/api/contact.php` (PHP handler)
- `/*.html` → `/public/*.html` (HTML files)
- `/*` → `/api/index.php` (main page)

## Important Notes

1. **File System**: Vercel's file system is read-only. File logging will fail gracefully.
2. **Sessions**: PHP sessions work but may not persist across invocations.
3. **Paths**: All asset paths in PHP files use absolute paths (`/assets/...`).

## Deployment Steps

1. Push code to GitHub
2. Import project in Vercel dashboard
3. Vercel will auto-detect PHP and use `vercel.json`
4. Deploy!

