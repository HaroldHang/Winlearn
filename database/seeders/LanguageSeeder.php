<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('languages')->insert([
            [
                'name' => 'PHP',
                'description' => 'Server-side scripting language used for web development, offering extensive features and frameworks like Laravel for building dynamic and robust websites.'
            ],
            [
                'name' => 'Python',
                'description' => 'Versatile and beginner-friendly language known for its simplicity and readability, used for web development, data analysis, artificial intelligence, and automation.'
            ],
            [
                'name' => 'Javascript',
                'description' => 'Widely used scripting language for front-end web development, enabling interactivity and dynamic content on websites.'
            ],
            [
                'name' => 'C#',
                'description' => 'Object-oriented language primarily used for building Windows applications, web services, and game development using the .NET framework.'
            ],
            [
                'name' => 'C++',
                'description' => 'Powerful and versatile language with a wide range of applications, including game development, systems programming, and building high-performance software.'
            ],
            [
                'name' => 'C',
                'description' => 'Low-level, high-performance language used for system programming, embedded systems, and developing efficient and portable applications.'
            ],
            [
                'name' => 'Dart',
                'description' => 'Client-optimized language used for building mobile, web, and desktop applications. Developed by Google and widely used with the Flutter framework.'
            ],
            [
                'name' => 'Java',
                'description' => 'General-purpose language known for its "write once, run anywhere" principle. Used for building enterprise-level applications, Android apps, and server-side development.'
            ],
            [
                'name' => 'XML',
                'description' => 'Extensible Markup Language used for storing and transporting data, widely used for defining document structure and data exchange between systems.'
            ],
            [
                'name' => 'HTML',
                'description' => 'Hypertext Markup Language, the standard language for creating web pages and defining their structure and content.'
            ],
            [
                'name' => 'Css',
                'description' => 'Cascading Style Sheets used to control the presentation and layout of web pages, enhancing the visual appeal and user experience.'
            ],
            [
                'name' => 'Go',
                'description' => 'Efficient and statically typed language designed for simplicity and ease of use. Used for building scalable and concurrent systems.'
            ],
            [
                'name' => 'Kotlin',
                'description' => 'Modern programming language for Android app development, known for its conciseness, safety, and interoperability with Java.'
            ]
        ]);
    }
}
