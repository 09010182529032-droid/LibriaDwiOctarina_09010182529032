<?php
namespace Database\Seeders;
use App\Models\Book; use App\Models\Category; use App\Models\User; use Illuminate\Database\Seeder; use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder { public function run(): void {
 $categories=[]; foreach([['Fiksi','Novel dan cerita fiksi'],['Teknologi','Buku komputer dan teknologi informasi'],['Pendidikan','Buku pembelajaran dan referensi']] as $c) $categories[$c[0]]=Category::create(['name'=>$c[0],'description'=>$c[1]]);
 foreach([
 ['Fiksi','Laskar Pelangi','Andrea Hirata','Bentang Pustaka',2005,7],['Fiksi','Bumi','Tere Liye','Gramedia Pustaka Utama',2014,5],['Teknologi','Pemrograman Laravel','Muhammad Ridwan','Informatika',2024,10],['Teknologi','Dasar-Dasar Basis Data','Abdul Kadir','Andi',2023,8],['Pendidikan','Pengantar Ilmu Komputer','Rosa A.S.','Modula',2022,6]
 ] as $b) Book::create(['category_id'=>$categories[$b[0]]->id,'title'=>$b[1],'author'=>$b[2],'publisher'=>$b[3],'year'=>$b[4],'stock'=>$b[5]]);
 User::updateOrCreate(['email'=>'admin@perpustakaan.test'],['name'=>'Admin Perpustakaan','password'=>Hash::make('password')]);
 }}
