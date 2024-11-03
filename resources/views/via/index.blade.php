<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Tải lên File</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Tải lên File</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('file.upload.txt') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="fileUpload">Tải lên file tại đây</label>
                <input type="file" class="form-control-file" id="fileUpload" name="file" required>
            </div>

            <div class="container mt-5">
                <div class="row">
                    {{-- <!-- Dropdown đầu tiên -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" id="category0" name="categories[]">
                                <option value="0">UID</option>
                                <option value="1">Password</option>
                                <option value="2">2FA Key</option>
                            </select>
                        </div>
                    </div>

                    <!-- Nút thêm tùy chọn nhập -->
                    <div class="col-md-4">
                        <button type="button" class="btn btn-secondary btn-block" onclick="addDropdown()">Thêm tùy chọn nhập</button>
                    </div> --}}

                    <!-- Nút Gửi -->
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary btn-block">Tải lên</button>
                    </div>
                </div>
            </div>

        </form>

        <div class="table-responsive mt-4">
            <table class="table table-bordered table-striped" id="sortableTable">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" onclick="sortTable(0)">UID</th>
                        <th scope="col" onclick="sortTable(1)">Họ tên</th>
                        <th scope="col" onclick="sortTable(2)">Pass</th>
                        <th scope="col" onclick="sortTable(3)">Token</th>
                        <th scope="col" onclick="sortTable(4)">Email</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @dd($data) --}}
                    @if(isset($data))
                        @foreach($data as $info)
                            <tr>
                                <td>{{ $info[0] }}</td>
                                <td>{{ $info[1] }}</td>
                                <td>{{ $info[2] }}</td>
                                <td>{{ $info[3] }}</td>
                                <td>{{ $info[4] }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-center">No data available</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <script>
        // Hàm thêm dropdown
        let dropdownCount = 1;

        function addDropdown() {
            if (dropdownCount >= 10) {
                alert("Bạn chỉ có thể thêm tối đa 10 tùy chọn nhập.");
                return;
            }

            const container = document.getElementById("dropdownContainer");

            const newDropdown = document.createElement("div");
            newDropdown.classList.add("form-group");
            newDropdown.innerHTML = `
                <label for="category${dropdownCount}">Chọn danh mục</label>
                <select class="form-control" id="category${dropdownCount}" name="categories[]">
                    <option value="0">UID</option>
                    <option value="1">Password</option>
                    <option value="2">2FA Key</option>
                </select>
            `;

            container.appendChild(newDropdown);
            dropdownCount++;
        }

        // Hàm sắp xếp bảng
        function sortTable(columnIndex) {
            const table = document.getElementById("sortableTable");
            const tbody = table.tBodies[0];
            const rows = Array.from(tbody.querySelectorAll("tr"));
            const isAscending = table.getAttribute("data-sort-dir") !== "asc";
            table.setAttribute("data-sort-dir", isAscending ? "asc" : "desc");

            // Sắp xếp hàng
            rows.sort((rowA, rowB) => {
                const cellA = rowA.cells[columnIndex].innerText.trim();
                const cellB = rowB.cells[columnIndex].innerText.trim();

                if (!isNaN(cellA) && !isNaN(cellB)) {
                    return isAscending ? cellA - cellB : cellB - cellA;
                }
                return isAscending ? cellA.localeCompare(cellB) : cellB.localeCompare(cellA);
            });

            // Cập nhật bảng
            rows.forEach(row => tbody.appendChild(row));
        }
    </script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
