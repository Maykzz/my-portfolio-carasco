@echo off
echo ========================================
echo   Preparing Laravel Portfolio for Railway
echo ========================================
echo.

echo 1. Checking if git is initialized...
if not exist .git (
    echo Initializing git repository...
    git init
    echo ✓ Git initialized
) else (
    echo ✓ Git already initialized
)

echo.
echo 2. Adding all files to git...
git add .

echo.
echo 3. Creating commit...
set /p commit_msg="Enter commit message (default: Prepare for Railway deployment): "
if "%commit_msg%"=="" set commit_msg=Prepare for Railway deployment
git commit -m "%commit_msg%"

echo.
echo 4. Checking git remote...
git remote -v | findstr origin >nul
if errorlevel 1 (
    echo.
    echo ⚠️  No GitHub remote found!
    echo Please add your GitHub repository:
    echo git remote add origin https://github.com/YOUR_USERNAME/my-portfolio-carasco.git
    echo.
) else (
    echo ✓ GitHub remote found
    echo.
    echo 5. Pushing to GitHub...
    git push origin main
    if errorlevel 1 (
        echo Trying to push with -u flag...
        git push -u origin main
    )
)

echo.
echo ========================================
echo   ✅ Preparation Complete!
echo ========================================
echo.
echo Next steps:
echo 1. Go to railway.app and create account
echo 2. Connect your GitHub repository
echo 3. Add PostgreSQL database
echo 4. Set environment variables
echo 5. Deploy!
echo.
echo Full guide: See RAILWAY-DEPLOYMENT.md
echo.
pause
