## Routing

*Routing* adalah kumpulan daftar alamat website yang sudah di daftarkan. Sehingga setiap alamat website yang terdaftar pada *routing* dapat diakses pengguna maupun mengirim informasi kepada pengguna.

Dalam *routing* terdapat beberapa *method* atau metode penerimaan *routing* yang terdiri dari:

1. GET adalah Metode penerimaan ini digunakan untuk meminta data sesuai dengan alamat website yang dituju & didaftarkan.
2. POST adalah Metode penerimaan ini digunakan untuk mengirim data untuk diproses oleh sistem sesuai dengan alamat website yang dituju & didaftarkan.
3. DELETE adalah Metode penerimaan ini digunakan untuk menghapus data sesuai dengan alamat website yang dituju & didaftarkan.
4. PUT adalah Metode penerimaan ini digunakan untuk melakukan perubahan data sesuai dengan alamat webiste yang dituju & didaftarkan

### Routing Web

*Routing web* berisi daftar alamat website yang dapat diakses oleh pengguna yang berupa proses sesuai dengan alamat website yang dituju.

Daftar *routing web* yang terdaftar:

1. Route::get("{collection}", 'ResourcesController@index')   
   
*Routing* ini menggunakan *method* GET dan nama alamat website untuk diakses pengguna adalah {collection}, dan {collection} disini merupakan nama *model* atau nama tabel basis data yang sudah dibuat. Ketika mengakses *routing* ini maka untuk prosesnya akan diterukan ke *controller* bernama *ResourcesController* dengan nama *function* index. setelah proses persiapan data pada *controller* sudah selesai, maka hasil data tersebut akan diteruskan kepada pengguna.
   
contoh alamat website:
- `https://www.example.com/countries`
- `https://www.example.com/provinces`

pada contoh alamat website `https://www.example.com/countries` akan meminta data dari basis data dengan tabel countries   
pada contoh alamat website `https://www.example.com/provinces` akan meminta data dari basis data dengan tabel provinces   
   
2. Route::get("{collection}/trash", 'ResourcesController@trash')   
   

3. Route::get("{collection}/create", 'ResourcesController@create')
4. Route::post("{collection}", 'ResourcesController@store')
5. Route::get("{collection}/import", 'ResourcesController@import')
6. Route::post("{collection}/import", 'ResourcesController@doImport')
7. Route::get("{collection}/export", 'ResourcesController@export')
8. Route::post("{collection}/export", 'ResourcesController@doExport')
9. Route::get("{collection}/{id}", 'ResourcesController@show')
10. Route::get("{collection}/{id}/edit", 'ResourcesController@edit')
11. Route::put("{collection}/{id}", 'ResourcesController@update')
12. Route::delete("{collection}/{id}", 'ResourcesController@destroy')
13. Route::get("{collection}/{id}/trashed", 'ResourcesController@trashed')
14. Route::put("{collection}/{id}/restore", 'ResourcesController@restore')
15. Route::delete("{collection}/{id}/delete", 'ResourcesController@delete')
16. Route::delete("{collection}/trash/empty", 'ResourcesController@empty')
17. Route::put("{collection}/trash/restore", 'ResourcesController@putBack')