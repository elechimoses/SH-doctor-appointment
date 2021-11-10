<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Benefit of the Project

-   Simplifying the Process of Finding a Doctor
-   Increasing Patient Satisfaction
-   Cutting Costs
-   Reducing Patient Wait Times

## Features of the Projects

-   Doctor Listings
-   Patient Profile
-   Notifications
-   Doctor’s Profile
-   Patient Database
-   Appointment Management

## Project Template

Front End - Bootstrap 5.0 Default Template

## How to Install

Clone this project to your pc
Requirement: Local Server - XAMPP, WAMPP, Laragon etc

copy .env.example and create a .env file

paste what you copied and edit to fit your description

run composer install to install all dependencies

run php artisan key:generate to create the base key

php artisan migrate after setting the database name

Thanks
## Screenshots

<img src="Screenshot (102).png" alt="screenshot">
<img src="Screenshot (103).png" alt="screenshot">
<img src="Screenshot (104).png" alt="screenshot">


## Suggested Database Schema
            ## User
            $table->string('fullname');
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('qualification')->nullable();
            $table->longText('description')->nullable();
            $table->enum('role', ['admin', 'doctor', 'patient'])->default('patient');
            $table->rememberToken();
            $table->timestamps();

            ##Models
            protected $fillable = [
                                        'fullname',
                                        'username',
                                        'phone',
                                        'email',
                                        'password',
                                        'qualification',
                                        'description',
                                        'role',
                                        'status',
                                    ];

            ## User Factory Methods

            public function definition()
                        {
                            return [
                                'fullname' => $this->faker->name(),
                                'email' => $this->faker->unique()->safeEmail(),
                                'email_verified_at' => now(),
                                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                                'phone' => $this->faker->phoneNumber,
                                'qualification' => $this->faker->title,
                                'description' => $this->faker->text,
                                'role' => $this->faker->randomElement(['admin', 'doctor', 'patient']),
                                'remember_token' => Str::random(10),
                            ];
                        }