<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    private array $sectionByDirHex = [
        '636d74206769e1baa32c2073c3aa70207468656f207468e1bba92074e1bbb12063c4836e206368e1bb896e68206e68c3a9' => 'review',
        '63e1baa76d207370' => 'product',
        '66616b652074696e206e68e1baaf6e' => 'review',
        'e1baa36e68207472c6b0e1bb9b6320736175' => 'before_after',
    ];

    public function run(): void
    {
        $sortOrder = 0;
        $storageDir = __DIR__ . '/../../public/storage/anh_ldp';
        $items = scandir($storageDir);

        foreach ($items as $item) {
            if ($item === '.' || $item === '..') continue;

            $fullPath = "$storageDir/$item";

            if (is_dir($fullPath)) {
                $hexName = bin2hex($item);
                $section = $this->sectionByDirHex[$hexName] ?? 'gallery';
                $files = glob("$fullPath/*.{png,jpg,jpeg,webp,gif}", GLOB_BRACE);
                sort($files);
                foreach ($files as $f) {
                    $filename = basename($f);
                    Image::create([
                        'title' => pathinfo($filename, PATHINFO_FILENAME),
                        'alt_text' => $filename,
                        'image_path' => "anh_ldp/$item/$filename",
                        'section' => $section,
                        'sort_order' => $sortOrder++,
                        'is_active' => true,
                    ]);
                }
            } else {
                $ext = strtolower(pathinfo($item, PATHINFO_EXTENSION));
                if (!in_array($ext, ['png', 'jpg', 'jpeg', 'webp', 'gif', 'mp4', 'webm', 'ogg'])) continue;

                $filename = $item;
                $section = $this->classifyRootFile($filename);
                Image::create([
                    'title' => pathinfo($filename, PATHINFO_FILENAME),
                    'alt_text' => $filename,
                    'image_path' => "anh_ldp/$filename",
                    'section' => $section,
                    'sort_order' => $sortOrder++,
                    'is_active' => true,
                ]);
            }
        }

        $this->command->info('Đã thêm ' . $sortOrder . ' ảnh vào database.');
    }

    private function classifyRootFile(string $filename): string
    {
        $lower = mb_strtolower($filename);

        if (str_contains($lower, 'logo')) return 'banner';
        if (str_contains($lower, 'hướng dẫn') || str_contains($lower, 'huong dan')) return 'usage';
        if (str_contains($lower, 'thời gian') || str_contains($lower, 'thoi gian')) return 'commitment';
        if (str_contains($lower, 'đánh giá') || str_contains($lower, 'danh gia')) return 'review';
        if (str_contains($lower, 'vai-mau') || str_contains($lower, 'vải mẫu')) return 'product';
        if (str_contains($lower, '2x')) return 'product';
        if (str_contains($lower, 'giá làm form') || str_contains($lower, 'cuổi cùng')) return 'banner';

        if (in_array(pathinfo($filename, PATHINFO_EXTENSION), ['mp4', 'webm', 'ogg'])) return 'video';
        if (preg_match('/^(\d+)\./', $filename, $m)) {
            $num = (int) $m[1];
            if ($num <= 2) return 'banner';
            if ($num <= 7) return 'gallery';
            return 'product';
        }

        return 'gallery';
    }
}
