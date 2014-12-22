# Lara4strap

Template source code cơ bản cho hướng dẫn học lập trình Laravel 4 trên http://laptrinh.io


## Cài đặt

Các bạn sử dụng `Composer` để tiến hành cài đặt project.

```
$ composer create-project laptrinhio/lara4strap TEN-PROJECT-CUA-BAN dev-master
```

Sau đó các bạn sẽ thấy thư mục project của ban được cấu hình sẵn. 
Tại đây bạn có thể tiến hành sử dụng và tiến hành các bài lập trình trên http://laptrinh.io

## Cấu hình

Trong project tạo ra có hai file cấu hình cho hai môi trường là **local** và **production** trong hai files tương ứng là:

```
.env.local.php
.env.php
```

Các bạn sử dụng hai files này để cấu hình các tham số và khoá muốn sử dụng trong project.

Trong file **/bootstrap/environment.php** có trả về môi trường sử dụng hiện tại, các bạn dùng file này để chỉ định môi trường sử dụng.

## Kiểm tra

Để kiểm tra môi trường hiện tại, các bạn sử dụng câu lệnh sau:

```
$ php artisan env
```

Để tiến hành chạy server trên project hiện tại:

```
$ php artisan serve
```

## Liên hệ

**Lập Trình Sư** : **contact@laptrinh.io**

Ngoài ra các bạn có thể liên hệ qua các kênh xã hội khác tại trang chủ http://laptrinh.io
