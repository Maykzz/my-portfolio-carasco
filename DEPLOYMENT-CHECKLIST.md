# 🎓 Railway Deployment Checklist - GitHub Student Pack

## Before You Start
- [ ] GitHub Student Pack activated
- [ ] Laravel portfolio working locally (✅ Confirmed working)
- [ ] Portfolio images in `/public/images/portfolio/` (✅ 4 images found)

## GitHub Setup
- [ ] Create GitHub repository: `my-portfolio-carasco`
- [ ] Run `deploy-prep.bat` or manually:
  ```bash
  git init
  git add .
  git commit -m "Initial commit - Laravel Portfolio"
  git remote add origin https://github.com/YOUR_USERNAME/my-portfolio-carasco.git
  git push -u origin main
  ```

## Railway Setup
- [ ] Visit [railway.app](https://railway.app)
- [ ] Sign up with GitHub account
- [ ] Claim Railway credits from GitHub Student Pack
- [ ] Create new project from GitHub repo
- [ ] Add PostgreSQL database

## Environment Variables (Set in Railway Dashboard)
```env
APP_NAME=Mike Carasco Portfolio
APP_ENV=production  
APP_KEY=base64:z0T6e7XRayomk0lCnu+yWZYLZkDvqTF1u61Qc9efePY=
APP_DEBUG=false
APP_URL=https://YOUR-APP-NAME.railway.app

LOG_CHANNEL=stack
LOG_LEVEL=error

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

# Email settings (for contact form)
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME=Mike Carasco Portfolio
```

## Post-Deployment
- [ ] Test all pages: Home, About, Portfolio, Contact
- [ ] Verify contact form works
- [ ] Check portfolio images load correctly
- [ ] Test responsive design on mobile

## Files Created for Deployment
- ✅ `Procfile` - Railway startup command
- ✅ `railway.json` - Railway configuration  
- ✅ `build.sh` - Build optimization script
- ✅ `.env.production` - Production environment template
- ✅ `RAILWAY-DEPLOYMENT.md` - Complete deployment guide
- ✅ `deploy-prep.bat` - Windows deployment preparation script

## GitHub Student Pack Benefits
- 💰 $5/month Railway credits for 12 months
- 🚀 More than enough for personal portfolio hosting
- 🌍 Global CDN and auto-scaling included

## Quick Commands

### Initial Setup:
```bash
# Run the prep script
deploy-prep.bat

# Or manually:
git add .
git commit -m "Prepare for Railway deployment"  
git push origin main
```

### Future Updates:
```bash
git add .
git commit -m "Update portfolio"
git push origin main
# Railway auto-deploys!
```

## Your Portfolio Features (Ready for Production)
- ✅ Laravel 10 framework
- ✅ 4 portfolio projects with images
- ✅ Contact form with validation
- ✅ Responsive design
- ✅ Professional layout
- ✅ Database integration ready

## Expected URL
Your live portfolio: `https://your-app-name.railway.app`

---

**Need Help?** Check `RAILWAY-DEPLOYMENT.md` for detailed instructions!
