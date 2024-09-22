![Schema Diagram](https://github.com/user-attachments/assets/064f9b73-c661-45ed-b6fd-b25dc587036f)
المشروع غير مكتمل
المشروع ضخم جدا ويحتاج إلى وقت كبير

```markdown
# مشروع Laravel 10

## مقدمة
هذا المشروع هو عبارة عن تطبيق مبني باستخدام Laravel 10 مع نظام مصادقة تم ضبطه بواسطة Breeze. يتميز المشروع بتصميم قاعدة بيانات مدروس تم إنشاؤه باستخدام موقع [drawsql.app](https://drawsql.app) لإنشاء مخطط الداتا بيس والـSchema.

## التقنيات المستخدمة
- **Laravel 10**: لإدارة النظام وتطوير التطبيق.
- **Laravel Breeze**: لضبط المصادقة وتوفير واجهة مستخدم بسيطة.
- **drawsql.app**: لإنشاء مخطط قاعدة البيانات بناءً على متطلبات المشروع.
- **Tailwind CSS**: لتنسيق وتصميم الواجهة.
- **Flowbite**: لجلب الـComponents الجاهزة من [flowbite.com](https://flowbite.com).

## خطوات العمل

1. **إنشاء مخطط قاعدة البيانات**:  
   تم إنشاء مخطط قاعدة البيانات باستخدام [drawsql.app](https://drawsql.app) لتحديد العلاقات بين الجداول والخصائص اللازمة لكل جدول.

2. **إنشاء المشروع باستخدام Laravel 10**:  
   تم إنشاء مشروع Laravel 10 جديد باستخدام الأمر `composer create-project laravel/laravel`.

3. **إعداد المصادقة باستخدام Breeze**:  
   تم استخدام Laravel Breeze لضبط نظام المصادقة الأساسي للتطبيق. تم تثبيت الحزمة باستخدام الأمر:
   ```
   composer require laravel/breeze --dev
   php artisan breeze:install
   npm install && npm run dev
   ```

4. **إنشاء الـModels والـMigrations**:  
   بعد إعداد مخطط قاعدة البيانات، تم إنشاء الـModels اللازمة لكل جدول باستخدام الأمر:
   ```
   php artisan make:model ModelName -m
   ```
   حيث تم إنشاء الـMigrations وإضافة الخصائص المناسبة وفقًا للـSchema.

5. **ضبط العلاقات بين الـModels**:  
   تم إضافة الـMethods اللازمة إلى كل Model لضبط العلاقات بين الجداول (مثل `hasMany`، `belongsTo`، إلخ).

6. **إنشاء الـControllers والـRoutes وصفحات الـCRUD**:  
   بعد إنشاء الـModels، تم إنشاء الـControllers والـRoutes اللازمة لكل Model. بالإضافة إلى ذلك، تم إنشاء صفحات الـCRUD (Create, Read, Update, Delete) لكل Model.

7. **استخدام Layout مخصص لصفحات الـCRUD**:  
   تم تصميم Layout خاص لصفحات الـCRUD ليتناسب مع متطلبات المشروع.

8. **استخدام Tailwind و Flowbite**:  
   تم استخدام Tailwind CSS لتنسيق وتصميم الواجهة، وتم جلب بعض الـComponents الجاهزة من [Flowbite](https://flowbite.com) لتسريع عملية التطوير.

## التعليمات
لتشغيل المشروع محليًا، اتبع الخطوات التالية:

1. **نسخ المستودع**:
   ```bash
   git clone https://github.com/your-repo/project-name.git
   cd project-name
   ```

2. **تثبيت الحزم**:
   ```bash
   composer install
   npm install
   ```

3. **تهيئة ملف .env**:
   قم بنسخ ملف `.env.example` إلى `.env` وتعديل الإعدادات المناسبة.

4. **تشغيل الـMigrations**:
   ```bash
   php artisan migrate
   ```

5. **تشغيل السيرفر**:
   ```bash
   php artisan serve
   ```

## ملاحظات إضافية
- تم استخدام Tailwind CSS لتنسيق الواجهة.
- تم جلب بعض الـComponents الجاهزة من [Flowbite](https://flowbite.com).
- الحزم الإضافية المستخدمة تتضمن `backpack/translation-manager` لضبط الترجمات و `mcamara/laravel-localization` لدعم اللغات المتعددة.
```

هذا التعديل يوضح أنك قمت بإنشاء الـControllers والـRoutes وإعداد صفحات الـCRUD مع تصميم Layout مخصص لها.


