<?php

namespace App\Services;

class ExplodeService
{
    public function clearOrderName($data,$keys)
    {
        $lines = explode("\n", $data);
        array_shift($lines); // Bỏ đi dòng đầu tiên
        $result = array_map('trim', $lines);
        $result = array_filter($result);
        //tôi muốn clearBreakLine tại đây
        return $this->clearBreakLine($result,$keys);
    }

    public function clearBreakLine($data,$keys)
    {
        $finalResult = [];

        foreach ($data as $line) {
            // Tách các giá trị trong dòng theo dấu '|'
            $parts = explode('|', $line);

            // Tạo mảng tạm thời để lưu trữ dữ liệu theo key từ $keys
            $row = [];
            foreach ($keys as $index => $key) {
                $row[$key] = $parts[$index] ?? null;
            }

            $finalResult[] = $row;
        }

        return $finalResult;
    }
}
