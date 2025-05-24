<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Skill;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample projects - 3rd Year BSIT Student (Mobile & Web Development Focus)
        Project::create([
            'title' => 'Laravel Portfolio Website',
            'description' => 'A responsive personal portfolio built with Laravel 10, featuring smooth animations, contact form with validation, and dynamic content management. This project demonstrates my understanding of MVC architecture, Blade templating, and database integration.',
            'image' => null,
            'url' => 'https://portfolio-mikecarasco.netlify.app',
            'github_url' => 'https://github.com/mikecarasco/laravel-portfolio',
            'technologies' => ['Laravel', 'PHP', 'MySQL', 'Bootstrap', 'JavaScript', 'Blade'],
            'featured' => true
        ]);

        Project::create([
            'title' => 'Flutter Weather App',
            'description' => 'My first mobile app built with Flutter and Dart. Features weather forecasts, location-based data, and offline storage. This project helped me learn cross-platform mobile development and API integration.',
            'image' => null,
            'url' => null,
            'github_url' => 'https://github.com/mikecarasco/flutter-weather',
            'technologies' => ['Flutter', 'Dart', 'REST API', 'SQLite', 'Provider'],
            'featured' => true
        ]);

        Project::create([
            'title' => 'React Native Student Planner',
            'description' => 'A student planner mobile app built with React Native and Expo. Features include task management, class schedules, and grade tracking. Currently learning React Native for cross-platform development.',
            'image' => null,
            'url' => null,
            'github_url' => 'https://github.com/mikecarasco/student-planner-rn',
            'technologies' => ['React Native', 'Expo', 'AsyncStorage', 'Navigation', 'Context API'],
            'featured' => false
        ]);

        Project::create([
            'title' => 'PHP CRUD Student Management',
            'description' => 'A web-based student information system with complete CRUD operations. Built as a class project using vanilla PHP and MySQL. Features user authentication, data validation, and responsive design.',
            'image' => null,
            'url' => null,
            'github_url' => 'https://github.com/mikecarasco/student-management-php',
            'technologies' => ['PHP', 'MySQL', 'HTML5', 'CSS3', 'JavaScript', 'Bootstrap'],
            'featured' => false
        ]);

        Project::create([
            'title' => 'Progressive Web App (PWA) Notes',
            'description' => 'A note-taking Progressive Web App with offline functionality. Built with vanilla JavaScript, featuring service workers, local storage, and responsive design. Learning modern web technologies.',
            'image' => null,
            'url' => 'https://pwa-notes-mike.netlify.app',
            'github_url' => 'https://github.com/mikecarasco/pwa-notes',
            'technologies' => ['JavaScript', 'PWA', 'Service Workers', 'IndexedDB', 'CSS3'],
            'featured' => false
        ]);

        Project::create([
            'title' => 'Android Calculator App',
            'description' => 'A basic calculator app for Android built with Java and Android Studio. Features scientific calculations and history. This was my introduction to native Android development.',
            'image' => null,
            'url' => null,
            'github_url' => 'https://github.com/mikecarasco/android-calculator',
            'technologies' => ['Java', 'Android Studio', 'XML', 'SQLite'],
            'featured' => false
        ]);

        // Create technical skills - 3rd Year BSIT (Core Technologies for Mobile & Web Development)
        $technicalSkills = [
            // Mobile Development (Learning/Intermediate)
            ['name' => 'Flutter', 'category' => 'technical', 'proficiency' => 70, 'icon' => 'fas fa-mobile-alt text-primary'],
            ['name' => 'Dart', 'category' => 'technical', 'proficiency' => 60, 'icon' => 'fas fa-code text-info'],
            ['name' => 'React Native', 'category' => 'technical', 'proficiency' => 50, 'icon' => 'fab fa-react text-info'],

            // Backend & Cloud Services (Basic to Intermediate)
            ['name' => 'Firebase', 'category' => 'technical', 'proficiency' => 65, 'icon' => 'fas fa-fire text-warning'],

            // Web Development (Stronger Foundation - studied longer)
            ['name' => 'HTML5', 'category' => 'technical', 'proficiency' => 80, 'icon' => 'fab fa-html5 text-danger'],
            ['name' => 'Bootstrap', 'category' => 'technical', 'proficiency' => 70, 'icon' => 'fab fa-bootstrap text-purple'],

            // Backend Web Development (Current focus)
            ['name' => 'Laravel', 'category' => 'technical', 'proficiency' => 65, 'icon' => 'fab fa-laravel text-danger'],
            ['name' => 'PHP', 'category' => 'technical', 'proficiency' => 75, 'icon' => 'fab fa-php text-primary'],
        ];

        foreach ($technicalSkills as $skill) {
            Skill::create($skill);
        }

        // Create soft skills - 3rd Year Student Level
        $softSkills = [
            ['name' => 'Quick Learning', 'category' => 'soft', 'proficiency' => 75, 'icon' => 'fas fa-graduation-cap'],
            ['name' => 'Problem Solving', 'category' => 'soft', 'proficiency' => 65, 'icon' => 'fas fa-lightbulb'],
            ['name' => 'Team Collaboration', 'category' => 'soft', 'proficiency' => 70, 'icon' => 'fas fa-users'],
            ['name' => 'Communication', 'category' => 'soft', 'proficiency' => 60, 'icon' => 'fas fa-comments'],
            ['name' => 'Time Management', 'category' => 'soft', 'proficiency' => 55, 'icon' => 'fas fa-clock'],
            ['name' => 'Adaptability', 'category' => 'soft', 'proficiency' => 80, 'icon' => 'fas fa-sync-alt'],
            ['name' => 'Attention to Detail', 'category' => 'soft', 'proficiency' => 65, 'icon' => 'fas fa-search'],
            ['name' => 'Self-Motivation', 'category' => 'soft', 'proficiency' => 70, 'icon' => 'fas fa-rocket'],
        ];

        foreach ($softSkills as $skill) {
            Skill::create($skill);
        }
    }
}
