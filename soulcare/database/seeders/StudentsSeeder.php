<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StudentsSeeder extends Seeder
{
    public function run()
    {
        // Path ke file CSV
        $file = storage_path('app/students.csv');

        // Buka file CSV
        $handle = fopen($file, 'r');
        if ($handle === false) {
            return;
        }

        // Lewati baris pertama (header)
        fgetcsv($handle);

        // Loop untuk membaca setiap baris
        while (($data = fgetcsv($handle, 1000, ',')) !== false) {
            // Cari class_id berdasarkan classname dan class_grade
            $class = DB::table('classes')
                ->where('name', $data[2]) // Kolom classname
                ->where('grade_level', $data[3]) // Kolom class_grade
                ->first();

            if ($class) {
                // Insert data ke tabel students
                DB::table('students')->insert([
                    'name' => utf8_encode($data[0]), // Konversi nama ke UTF-8
                    'gender' => $data[1],
                    'class_id' => $class->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        fclose($handle);
    }
}

