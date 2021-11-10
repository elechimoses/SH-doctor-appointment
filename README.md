## Doctor Appointment Project

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
