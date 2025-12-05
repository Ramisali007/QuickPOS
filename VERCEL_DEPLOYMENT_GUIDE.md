# 🚀 Complete Vercel Deployment Guide for QuickPOS

## Prerequisites

✅ Your code is already pushed to GitHub: `https://github.com/Ramisali007/QuickPOS`  
✅ Your project structure is ready with `api/` and `public/` directories  
✅ `vercel.json` is configured

---

## Step-by-Step Deployment Instructions

### Method 1: Deploy via Vercel Dashboard (Recommended)

#### Step 1: Sign Up / Sign In to Vercel
1. Go to [https://vercel.com](https://vercel.com)
2. Click **"Sign Up"** (or **"Log In"** if you have an account)
3. Sign up with your **GitHub account** (recommended for easy integration)

#### Step 2: Import Your Project
1. After logging in, you'll see the Vercel Dashboard
2. Click the **"Add New..."** button (or **"Import Project"**)
3. Select **"Import Git Repository"**
4. You'll see a list of your GitHub repositories
5. Find and click on **"QuickPOS"** (or search for `Ramisali007/QuickPOS`)
6. Click **"Import"**

#### Step 3: Configure Project Settings
Vercel will auto-detect your project. Configure these settings:

**Project Settings:**
- **Project Name**: `quick-pos` (or your preferred name)
- **Framework Preset**: Select **"Other"** or leave as **"Auto-detect"**
- **Root Directory**: Leave as **`.`** (root)
- **Build Command**: Leave **EMPTY** (no build needed for PHP)
- **Output Directory**: Leave **EMPTY**
- **Install Command**: Leave **EMPTY**

**Environment Variables:**
- No environment variables needed for this project (unless you add them later)

#### Step 4: Deploy
1. Click the **"Deploy"** button
2. Wait for the deployment to complete (usually 1-2 minutes)
3. You'll see a success message with your deployment URL

#### Step 5: Access Your Site
- Your site will be live at: `https://your-project-name.vercel.app`
- Vercel automatically provides a production URL

---

### Method 2: Deploy via Vercel CLI

#### Step 1: Install Vercel CLI
```bash
npm install -g vercel
```

#### Step 2: Login to Vercel
```bash
vercel login
```
Follow the prompts to authenticate.

#### Step 3: Deploy
Navigate to your project directory and run:
```bash
cd C:\Users\ah350\OneDrive\Desktop\QuickPOS
vercel
```

**First Deployment:**
- Vercel will ask you questions:
  - **Set up and deploy?** → Yes
  - **Which scope?** → Select your account
  - **Link to existing project?** → No (for first time)
  - **Project name?** → `quick-pos` (or your choice)
  - **Directory?** → `.` (current directory)
  - **Override settings?** → No

**Subsequent Deployments:**
```bash
vercel --prod
```

---

## 🔧 Troubleshooting Common Issues

### Issue 1: "@vercel/php is not published on npm registry"

**Solution A: Remove builds section (Auto-detect)**
If you get this error, update your `vercel.json`:

```json
{
  "version": 2,
  "routes": [
    {
      "src": "/assets/(.*)",
      "dest": "/public/assets/$1"
    },
    {
      "src": "/thank-you-new.html",
      "dest": "/public/thank-you-new.html"
    },
    {
      "src": "/thank-you.html",
      "dest": "/public/thank-you.html"
    },
    {
      "src": "/contact.php",
      "dest": "/api/contact.php"
    },
    {
      "src": "/(.*\\.(html|css|js|jpg|jpeg|png|gif|svg|ico|woff|woff2|ttf|eot))",
      "dest": "/public/$1"
    },
    {
      "src": "/(.*)",
      "dest": "/api/index.php"
    }
  ]
}
```

**Solution B: Check Vercel Project Settings**
1. Go to your project in Vercel Dashboard
2. Click **Settings** → **General**
3. Under **Build & Development Settings**:
   - **Framework Preset**: Set to **"Other"**
   - **Build Command**: Leave empty
   - **Output Directory**: Leave empty

### Issue 2: 404 Error on Deployment

**Possible Causes:**
1. **Incorrect routing** - Check `vercel.json` routes
2. **Missing files** - Ensure `api/index.php` and `api/contact.php` exist
3. **Path issues** - Verify asset paths use `/assets/` (absolute paths)

**Solution:**
- Check deployment logs in Vercel Dashboard
- Verify all files are committed and pushed to GitHub
- Ensure `vercel.json` is in the root directory

### Issue 3: Assets Not Loading (CSS/JS/Images)

**Solution:**
- Verify asset paths in `api/index.php` use absolute paths: `/assets/css/style.css`
- Check that files exist in `public/assets/` directory
- Clear browser cache and try again

---

## 📋 Post-Deployment Checklist

After successful deployment:

- [ ] Visit your site URL: `https://your-project.vercel.app`
- [ ] Test the homepage loads correctly
- [ ] Test the contact form submission
- [ ] Verify CSS and JavaScript load properly
- [ ] Check that images display correctly
- [ ] Test on mobile device (responsive design)

---

## 🔄 Updating Your Deployment

### Automatic Deployments (Recommended)
- Vercel automatically deploys when you push to your `main` branch
- Every push triggers a new deployment
- You can view deployment history in the Vercel Dashboard

### Manual Deployment
```bash
git push origin main
```
Vercel will automatically detect the push and redeploy.

---

## 🌐 Custom Domain (Optional)

To add a custom domain:

1. Go to your project in Vercel Dashboard
2. Click **Settings** → **Domains**
3. Click **Add Domain**
4. Enter your domain name
5. Follow DNS configuration instructions
6. Wait for DNS propagation (can take up to 24 hours)

---

## 📊 Monitoring & Analytics

- **Deployment Logs**: View in Vercel Dashboard → Deployments
- **Analytics**: Available in Vercel Dashboard (may require upgrade)
- **Error Tracking**: Check Function Logs in Vercel Dashboard

---

## ⚠️ Important Notes

1. **File System**: Vercel's file system is read-only. File logging (`contact_log.txt`) will fail gracefully (code handles this).

2. **Sessions**: PHP sessions work but may not persist across function invocations in serverless environment.

3. **Cold Starts**: First request after inactivity may be slower (serverless cold start).

4. **Free Tier Limits**:
   - 100GB bandwidth/month
   - Unlimited deployments
   - Serverless function execution limits

---

## 🆘 Need Help?

- **Vercel Documentation**: [https://vercel.com/docs](https://vercel.com/docs)
- **Vercel Support**: Available in Dashboard
- **Community**: [Vercel Discord](https://vercel.com/discord)

---

## ✅ Quick Reference

**Your Repository**: `https://github.com/Ramisali007/QuickPOS`  
**Project Structure**: 
- PHP files in `api/`
- Static files in `public/`
- Config: `vercel.json`

**Deploy Command**: Just push to GitHub or use `vercel --prod`

---

Good luck with your deployment! 🚀

