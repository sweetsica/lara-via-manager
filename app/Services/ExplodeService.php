<?php

namespace App\Services;

class ExplodeService
{
    public function clearOrderName($data,$keys,$order_info)
    {
        $lines = explode("\n", $data);
        array_shift($lines); // Bỏ đi dòng đầu tiên
        $result = array_map('trim', $lines);
        $result = array_filter($result);
        //tôi muốn clearBreakLine tại đây
        return $this->clearBreakLine($result,$keys,$order_info);
    }

    public function clearBreakLine($data,$keys,$order_info)
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
            // Chèn thêm các giá trị từ $order_info vào $row
            $row['source_name'] = $order_info[0] ?? null;
            $row['source_link'] = $order_info[1] ?? null;
            $row['price'] = $order_info[2] ?? null;
            $row['order_code'] = $order_info[3] ?? null;

            $finalResult[] = $row;
        }

        return $finalResult;
    }
}
