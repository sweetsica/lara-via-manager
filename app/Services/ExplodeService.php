<?php

namespace App\Services;

class ExplodeService
{
    public function clearOrderName($data)
    {
        $lines = explode("\n", $data);
        array_shift($lines); // Bỏ đi dòng đầu tiên
        $result = array_map('trim', $lines);
        $result = array_filter($result);
        //tôi muốn clearBreakLine tại đây
        return $this->clearBreakLine($result);
    }

    public function clearBreakLine($data)
    {
         // Phân tách mỗi dòng thành mảng con
         $finalResult = array_map(function ($line) {
            return explode('|', $line); // Phân tách theo dấu '|'
        }, $data );

        return $finalResult;
    }
}
