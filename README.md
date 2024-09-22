![Schema Diagram](https://github.com/user-attachments/assets/064f9b73-c661-45ed-b6fd-b25dc587036f)
المشروع غير مكتمل
المشروع ضخم جدا ويحتاج إلى وقت كبير

# مشروع Laravel 10

## مقدمة
هذا المشروع هو عبارة عن تطبيق مبني باستخدام Laravel 10 مع نظام مصادقة تم ضبطه بواسطة Laravel Breeze. يتميز المشروع بتصميم قاعدة بيانات مدروس تم إنشاؤه باستخدام موقع [drawsql.app](https://drawsql.app).

## التقنيات المستخدمة
- **Laravel 10**: لإدارة النظام وتطوير التطبيق.
- **Laravel Breeze**: لضبط المصادقة وتوفير واجهة مستخدم بسيطة.
- **drawsql.app**: لإنشاء مخطط قاعدة البيانات بناءً على متطلبات المشروع.
- **Tailwind CSS**: لتنسيق وتصميم الواجهة.
- **Flowbite**: لجلب الـComponents الجاهزة من [Flowbite](https://flowbite.com).

## خطوات العمل

1. **إنشاء مخطط قاعدة البيانات**:  
   تم إنشاء مخطط قاعدة البيانات باستخدام [drawsql.app](https://drawsql.app).

2. **إنشاء المشروع باستخدام Laravel 10**:  
   تم إنشاء مشروع Laravel 10 جديد باستخدام الأمر:
   ```bash
   composer create-project laravel/laravel
إعداد المصادقة باستخدام Breeze:
تم استخدام Laravel Breeze لضبط نظام المصادقة الأساسي:

bash
نسخ الكود
composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev
إنشاء الـModels والـMigrations:
بعد إعداد مخطط قاعدة البيانات، تم إنشاء الـModels لكل جدول باستخدام:

bash
نسخ الكود
php artisan make:model ModelName -m
ضبط العلاقات بين الـModels:
تم إضافة الـMethods اللازمة لضبط العلاقات بين الجداول.
