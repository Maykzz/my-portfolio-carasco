# 🚀 Deploy Mike Carasco Portfolio to Railway

## Prerequisites
- GitHub Student Pack (includes Railway credits)
- Git repository on GitHub
- Railway account connected to GitHub

## Step-by-Step Deployment Guide

### 1. Setup GitHub Repository

```bash
# Initialize git repository (if not already done)
git init
git add .
git commit -m "Initial commit - Laravel Portfolio"

# Add GitHub remote (replace with your GitHub username)
git remote add origin https://github.com/YOUR_USERNAME/my-portfolio-carasco.git
git push -u origin main
```

### 2. Railway Setup with GitHub Student Pack

1. **Get Railway Credits via GitHub Student Pack:**
   - Go to [GitHub Education](https://education.github.com/pack)
   - Apply for GitHub Student Pack if you haven't already
   - Find Railway in the benefits and claim your credits ($5/month for 12 months)

2. **Connect Railway to GitHub:**
   - Visit [Railway.app](https://railway.app)
   - Sign up/Login with GitHub
   - Authorize Railway to access your repositories

### 3. Deploy to Railway

1. **Create New Project:**
   - Click "New Project" in Railway dashboard
   - Select "Deploy from GitHub repo"
   - Choose your `my-portfolio-carasco` repository

2. **Add Database:**
   - In your Railway project dashboard
   - Click "New" → "Database" → "Add PostgreSQL"
   - Railway will automatically provision a PostgreSQL database
   - Database credentials will be auto-injected as environment variables

3. **Configure Environment Variables:**
   - Go to your service → "Variables" tab
   - Add these environment variables:

   ```env
   APP_NAME=Mike Carasco Portfolio
   APP_ENV=production
   APP_KEY=base64:z0T6e7XRayomk0lCnu+yWZYLZkDvqTF1u61Qc9efePY=
   APP_DEBUG=false
   APP_URL=https://your-app-name.railway.app
   
   LOG_CHANNEL=stack
   LOG_LEVEL=error
   
   BROADCAST_DRIVER=log
   CACHE_DRIVER=file
   FILESYSTEM_DISK=local
   QUEUE_CONNECTION=sync
   SESSION_DRIVER=file
   SESSION_LIFETIME=120
   
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.gmail.com
   MAIL_PORT=587
   MAIL_USERNAME=your-email@gmail.com
   MAIL_PASSWORD=your-app-password
   MAIL_ENCRYPTION=tls
   MAIL_FROM_ADDRESS=your-email@gmail.com
   MAIL_FROM_NAME=Mike Carasco Portfolio
   ```

4. **Generate Custom Domain (Optional):**
   - Go to "Settings" → "Networking"
   - Click "Generate Domain" or add custom domain
   - Update APP_URL with your new domain

### 4. Database Migration

Railway will automatically run migrations during deployment due to our railway.json configuration.

### 5. Post-Deployment Tasks

1. **Run Database Seeders (if needed):**
   - Open Railway project dashboard
   - Go to your service → "Deploy" tab
   - Open terminal/console
   - Run: `php artisan db:seed --class=PortfolioSeeder`

2. **Test Your Application:**
   - Visit your Railway app URL
   - Test all pages: Home, About, Portfolio, Contact
   - Verify contact form functionality
   - Check responsive design on mobile

### 6. Continuous Deployment

Railway automatically deploys when you push to your main branch:

```bash
# Make changes to your code
git add .
git commit -m "Update portfolio design"
git push origin main
# Railway will automatically deploy your changes
```

## Important Files for Railway Deployment

- `Procfile` - Tells Railway how to run your app
- `railway.json` - Railway-specific configuration
- `build.sh` - Build script for optimization
- `.env.production` - Production environment template

## Troubleshooting

### Common Issues:

1. **Database Connection Errors:**
   - Ensure PostgreSQL service is running in Railway
   - Check that DATABASE_URL is set automatically by Railway

2. **APP_KEY Errors:**
   - Generate new key: `php artisan key:generate --show`
   - Add to Railway environment variables

3. **Image Upload Issues:**
   - Images uploaded to `/public/images/portfolio/` are included in git
   - For user uploads, consider using Railway's persistent storage or external storage like AWS S3

4. **Mail Configuration:**
   - Use Gmail with App Password for email functionality
   - Enable 2FA and generate App Password in Google Account settings

## Monitoring and Scaling

- **View Logs:** Railway Dashboard → Your Service → "Deploy" tab
- **Monitor Usage:** Check Railway dashboard for usage metrics
- **Scaling:** Railway automatically scales based on traffic

## Student Pack Benefits

With GitHub Student Pack, you get:
- $5/month Railway credit for 12 months
- Perfect for hosting personal portfolio
- Enough for small to medium traffic websites

---

## Quick Deploy Commands

```bash
# 1. Prepare repository
git add .
git commit -m "Prepare for Railway deployment"
git push origin main

# 2. After Railway setup, any future updates:
git add .
git commit -m "Update portfolio"
git push origin main
# Railway auto-deploys!
```

Your portfolio will be live at: `https://your-app-name.railway.app`
