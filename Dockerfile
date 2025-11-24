# استخدم صورة PHP مع Apache
FROM php:8.2-apache

# انسخ كل ملفات المشروع إلى مجلد العمل في الحاوية
COPY . /var/www/html/

# اعطِ صلاحيات الكتابة على logs.txt
RUN chmod 666 /var/www/html/logs.txt
