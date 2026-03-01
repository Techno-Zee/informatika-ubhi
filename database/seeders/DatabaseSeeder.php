<?php
// database/seeders/DatabaseSeeder.php
namespace Database\Seeders;

use App\Models\{
    User,
    Role,
    ClassRoom,
    Lecturer,
    Student,
    LetterType,
    LetterRequest,
    Announcement,
    Achievement,
    AchievementStudent,
    Article,
    ActivityLogs,
    Banner,
    RoleUser,
    Setting
};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // =====================================================
        // 1. USER & ROLE (dengan pivot)
        // =====================================================
        // Buat roles khusus
        $roles = [
            ['name' => 'Super Admin', 'description' => 'Memiliki akses penuh ke sistem'],
            ['name' => 'Admin', 'description' => 'Mengelola data master dan pengguna'],
            ['name' => 'Lecturer', 'description' => 'Dosen yang dapat mengelola surat dan prestasi'],
            ['name' => 'Student', 'description' => 'Mahasiswa yang dapat mengajukan surat'],
            ['name' => 'Guest', 'description' => 'Hanya melihat informasi publik'],
        ];

        foreach ($roles as $roleData) {
            Role::firstOrCreate(['name' => $roleData['name']], $roleData);
        }
        User::factory(20)->create();
        RoleUser::factory(10)->create();
        ClassRoom::factory(5)->create();
        Lecturer::factory(10)->create();
        Student::factory(50)->create();
        LetterType::factory(10)->create();
        LetterRequest::factory(30)->create();
        Announcement::factory(15)->create();
        Achievement::factory(20)->create();
        Article::factory(40)->create();
        AchievementStudent::factory(10)->create();



        Article::factory(20)->create();
        ActivityLogs::factory(20)->create();
        Banner::factory(8)->create();
        $settings = [
            ['config_key' => 'app_name', 'config_value' => 'Sistem Informasi Surat'],
            ['config_key' => 'app_logo', 'config_value' => '/storage/logo.png'],
            ['config_key' => 'max_file_upload', 'config_value' => '5120'],
            ['config_key' => 'contact_email', 'config_value' => 'info@example.com'],
            ['config_key' => 'contact_phone', 'config_value' => '+62 21 12345678'],
            ['config_key' => 'address', 'config_value' => 'Jl. Kampus No.1, Jakarta'],
            ['config_key' => 'academic_year', 'config_value' => '2024/2025'],
            ['config_key' => 'smtp_host', 'config_value' => 'smtp.mailtrap.io'],
            ['config_key' => 'smtp_port', 'config_value' => '2525'],
            ['config_key' => 'smtp_encryption', 'config_value' => 'tls'],
        ];

        foreach ($settings as $setting) {
            Setting::firstOrCreate(
                ['config_key' => $setting['config_key']],
                ['config_value' => $setting['config_value']]
            );
        }

        // Tambah setting random
        Setting::factory(5)->create();
    }
}
