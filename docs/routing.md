## Routing

*Routing* adalah kumpulan daftar alamat website yang sudah di daftarkan. Sehingga setiap alamat website yang terdaftar pada *routing* dapat diakses pengguna maupun mengirim informasi kepada pengguna.

Dalam *routing* terdapat beberapa *method* atau metode penerimaan *routing* yang terdiri dari:

1. GET adalah Metode penerimaan ini digunakan untuk meminta data sesuai dengan alamat website yang dituju & didaftarkan.
2. POST adalah Metode penerimaan ini digunakan untuk mengirim data untuk diproses oleh sistem sesuai dengan alamat website yang dituju & didaftarkan.
3. DELETE adalah Metode penerimaan ini digunakan untuk menghapus data sesuai dengan alamat website yang dituju & didaftarkan.
4. PUT adalah Metode penerimaan ini digunakan untuk melakukan perubahan data sesuai dengan alamat webiste yang dituju & didaftarkan

### Routing Web

*Routing web* berisi daftar alamat website yang dapat diakses oleh pengguna yang berupa proses sesuai dengan alamat website yang dituju. setiap *routing* akan membaca setelah `https://www.example.com/`

Daftar *routing web* yang terdaftar:

1. Route::get("{collection}", 'ResourcesController@index')   
   
*Routing* ini menggunakan *method* GET dan nama alamat website untuk diakses pengguna adalah `{collection}` dan `{collection}` disini merupakan nama *model* atau nama tabel basis data yang sudah dibuat. Ketika mengakses *routing* ini maka untuk prosesnya akan diterukan ke *controller* bernama *ResourcesController* dengan nama *function index*. setelah proses persiapan data pada *controller* sudah selesai, maka hasil data tersebut akan diteruskan kepada pengguna. pada *routing* ini akan menampilkan halaman list data dari `{collection}` yang dituju.
   
contoh alamat website:
- `https://www.example.com/countries`
- `https://www.example.com/provinces`

pada contoh alamat website `https://www.example.com/countries` akan meminta data dari basis data dengan tabel countries.   
pada contoh alamat website `https://www.example.com/provinces` akan meminta data dari basis data dengan tabel provinces.   
   
2. Route::get("{collection}/trash", 'ResourcesController@trash')   
   
*Routing* ini menggunakan *method* GET dan nama alamat website untuk diakses pengguna adalah `{collection}/trash` dan `{collection}` disini merupakan nama *model* atau nama tabel basis data yang sudah dibuat. Ketika mengakses *routing* ini maka untuk prosesnya akan diterukan ke *controller* bernama *ResourcesController* dengan nama *function trash*. setelah proses persiapan data pada *controller* sudah selesai, maka hasil data tersebut akan diteruskan kepada pengguna. pada *routing* ini akan menampilkan halaman list data dari `{collection}` yang telah melakukan *soft delete*.

contoh alamat website:
- `https://www.example.com/countries/trash`
- `https://www.example.com/provinces/trash`

pada contoh alamat website `https://www.example.com/countries/trash` akan meminta data dari basis data dengan tabel countries yang telah melakukan *soft delete*.   
pada contoh alamat website `https://www.example.com/provinces/trash` akan meminta data dari basis data dengan tabel provinces yang telah melakukan *soft delete*.   

3. Route::get("{collection}/create", 'ResourcesController@create')   
   
*Routing* ini menggunakan *method* GET dan nama alamat website untuk diakses pengguna adalah `{collection}/create` dan `{collection}` disini merupakan nama *model* atau nama tabel basis data yang sudah dibuat. Ketika mengakses *routing* ini maka untuk prosesnya akan diterukan ke *controller* bernama *ResourcesController* dengan nama *function create*. setelah proses persiapan data pada *controller* sudah selesai, maka hasil data tersebut akan diteruskan kepada pengguna. pada *routing* ini akan menampilkan halaman *create* atau pembuatan sesuai dengan nama `{collection}`.

contoh alamat website:
- `https://www.example.com/countries/create`
- `https://www.example.com/provinces/create`

pada contoh alamat website `https://www.example.com/countries/create` akan menampilkan halaman *create* atau pembuatan.   
pada contoh alamat website `https://www.example.com/provinces/create` akan menampilkan halaman *create* atau pembuatan.  

4. Route::post("{collection}", 'ResourcesController@store')
5. Route::get("{collection}/import", 'ResourcesController@import')  
  
*Routing* ini menggunakan *method* GET dan nama alamat website untuk diakses pengguna adalah `{collection}/import` dan `{collection}` disini merupakan nama *model* atau nama tabel basis data yang sudah dibuat. Ketika mengakses *routing* ini maka untuk prosesnya akan diterukan ke *controller* bernama *ResourcesController* dengan nama *function import*. setelah proses persiapan data pada *controller* sudah selesai, maka hasil data tersebut akan diteruskan kepada pengguna. pada *routing* ini akan menampilkan halaman *import* sesuai dengan nama `{collection}`.

contoh alamat website:
- `https://www.example.com/countries/import`
- `https://www.example.com/provinces/import`

pada contoh alamat website `https://www.example.com/countries/import` akan menampilkan halaman *import*.   
pada contoh alamat website `https://www.example.com/provinces/import` akan menampilkan halaman *import*.  

6. Route::post("{collection}/import", 'ResourcesController@doImport')
7. Route::get("{collection}/export", 'ResourcesController@export')  
  
*Routing* ini menggunakan *method* GET dan nama alamat website untuk diakses pengguna adalah `{collection}/export` dan `{collection}` disini merupakan nama *model* atau nama tabel basis data yang sudah dibuat. Ketika mengakses *routing* ini maka untuk prosesnya akan diterukan ke *controller* bernama *ResourcesController* dengan nama *function export*. setelah proses persiapan data pada *controller* sudah selesai, maka hasil data tersebut akan diteruskan kepada pengguna. pada *routing* ini akan menampilkan halaman *export* sesuai dengan nama `{collection}`.

contoh alamat website:
- `https://www.example.com/countries/export`
- `https://www.example.com/provinces/export`

pada contoh alamat website `https://www.example.com/countries/export` akan menampilkan halaman *export*.   
pada contoh alamat website `https://www.example.com/provinces/export` akan menampilkan halaman *export*.  

8. Route::post("{collection}/export", 'ResourcesController@doExport')
9. Route::get("{collection}/{id}", 'ResourcesController@show')  
  
*Routing* ini menggunakan *method* GET dan nama alamat website untuk diakses pengguna adalah `{collection}/{id}`, `{collection}` disini merupakan nama *model* atau nama tabel basis data yang sudah dibuat dan `{id}` disini merupakan *id* yang telah disimpan pada basis data di tabel `{collection}` yang dituju. Ketika mengakses *routing* ini maka untuk prosesnya akan diterukan ke *controller* bernama *ResourcesController* dengan nama *function show*. setelah proses persiapan data pada *controller* sudah selesai, maka hasil data tersebut akan diteruskan kepada pengguna. pada *routing* ini akan menampilkan halaman detail data sesuai dengan nama `{collection}` dan `{id}`.

contoh alamat website:
- `https://www.example.com/countries/1`
- `https://www.example.com/provinces/2`

pada contoh alamat website `https://www.example.com/countries/1` akan menampilkan halaman detail *countries* yang memiliki id 1.   
pada contoh alamat website `https://www.example.com/provinces/2` akan menampilkan halaman detail *provices* yang memiliki id 2.  

10. Route::get("{collection}/{id}/edit", 'ResourcesController@edit')  
  
*Routing* ini menggunakan *method* GET dan nama alamat website untuk diakses pengguna adalah `{collection}/{id}/edit`, `{collection}` disini merupakan nama *model* atau nama tabel basis data yang sudah dibuat dan `{id}` disini merupakan *id* yang telah disimpan pada basis data di tabel `{collection}` yang dituju. Ketika mengakses *routing* ini maka untuk prosesnya akan diterukan ke *controller* bernama *ResourcesController* dengan nama *function edit*. setelah proses persiapan data pada *controller* sudah selesai, maka hasil data tersebut akan diteruskan kepada pengguna. pada *routing* ini akan menampilkan halaman *edit* sesuai dengan nama `{collection}` dan `{id}`.

contoh alamat website:
- `https://www.example.com/countries/1/edit`
- `https://www.example.com/provinces/2/edit`

pada contoh alamat website `https://www.example.com/countries/1/edit` akan menampilkan halaman edit *countries* yang memiliki id 1.   
pada contoh alamat website `https://www.example.com/provinces/2/edit` akan menampilkan halaman edit *provices* yang memiliki id 2.  

11. Route::put("{collection}/{id}", 'ResourcesController@update')
12. Route::delete("{collection}/{id}", 'ResourcesController@destroy')
13. Route::get("{collection}/{id}/trashed", 'ResourcesController@trashed')  
  
*Routing* ini menggunakan *method* GET dan nama alamat website untuk diakses pengguna adalah `{collection}/{id}`, `{collection}` disini merupakan nama *model* atau nama tabel basis data yang sudah dibuat dan `{id}` disini merupakan *id* yang telah disimpan pada basis data di tabel `{collection}` yang dituju. Ketika mengakses *routing* ini maka untuk prosesnya akan diterukan ke *controller* bernama *ResourcesController* dengan nama *function trashed*. setelah proses persiapan data pada *controller* sudah selesai, maka hasil data tersebut akan diteruskan kepada pengguna. pada *routing* ini akan menampilkan halaman detail data yang sudah melakukan *soft delete* sesuai dengan nama `{collection}` dan `{id}`.

contoh alamat website:
- `https://www.example.com/countries/1/trashed`
- `https://www.example.com/provinces/2/trashed`

pada contoh alamat website `https://www.example.com/countries/1/trashed` akan menampilkan halaman detail *countries* yang memiliki id 1 yang sudah melakukan *soft delete*.   
pada contoh alamat website `https://www.example.com/provinces/2/trashed` akan menampilkan halaman detail *provices* yang memiliki id 2 yang sudah melakukan *soft delete*. 

14. Route::put("{collection}/{id}/restore", 'ResourcesController@restore')
15. Route::delete("{collection}/{id}/delete", 'ResourcesController@delete')
16. Route::delete("{collection}/trash/empty", 'ResourcesController@empty')
17. Route::put("{collection}/trash/restore", 'ResourcesController@putBack')