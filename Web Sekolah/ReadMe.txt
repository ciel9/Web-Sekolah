Cara kerja:
Import database (uschool.sql)
1. Buka folder XAMPP, Run XAMPP_Control, klik start Apache dan MYSQL.
2. Masih pada folder XAMPP, buka htdocs, kemudian hapus isi yang ada didalam htdocs.
3. Buka browser yang Google Chrome, Mozilla, dll.
4. Ketik localhost/phpmyadmin, klik import kemudian import database uschool.sql
5. Selesai

Login Page (loginpage.php)
1. Ketik localhost pada browser anda. Anda akan dialihkan ke Login Page U-School.
2. Pada session sudah otomatis dialihkan ke bagian loginpage.php
3. Loginlah menggunakan akun yang sudah digunakan jika admin User ID: 1000 dan Password: admin

Index (index.php)
1. Pada page index terdapat beberapa fitur yaitu logout (logout.php), coder's profile (profile.php),
   show, add, delete, search, dan detail.

Logout (logout.php)
1. Pada saat session dimulai, jika menekan tombol logout. seluruh session akan ditutup dan dikembalikan ke 
   loginpage.php

Coder's Profile (profile.php)
1. Pada saat diklik akan menampilkan profile yang membuat website ini
2. Tombol home digunakan untuk kembali ke index dengan memasukan history page sebelumnya.

Add User (add.php)
1. Terdapat tombol add dan cancel.
2. Apabila menekan tombol cancel, maka akan dikembalikan ke page index.php.
3. Saat menekan tombol add, maka seluruh data yang telah diisi akan dimasukkan ke database Insert Into user.

Check Role (check_role.php)
1. Pada saat melakukan login, maka database akan mengambil role_id dari masing-masing akun.
   Setelah itu melakukan pengecekan, jika role 1 maka tampilan pada index.php akan menyesuaikan dengan role 1 (admin)
   dan seterusnya.

Delete (delete.php)
1. Pada klik icon delete, maka program akan menghapus data user yang ada didalam database Delete from user.
   Setelah itu akan kembali ke index.php