<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Tải lên File</title>
    <style>
        /* CSS cho cắt ngắn nội dung và thêm dấu "..." */
        .truncate {
            max-width: 200px; /* Chiều rộng tối đa của cột */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>
<body>
    {{-- @if(session('data'))
        @dd(session('data'))
    @endif --}}
    <div class="container mt-5">
       <div class="row">
        <div class="col-md-6">
            <h2 class="text-center"><a href="{{route('home')}}"> Tải lên File txt </a></h2>

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
                <div class="container row">
                    <div class="form-group col-md-6">
                        <label for="fileUpload">Tải file</label>
                        <input type="file" class="form-control-file" id="fileUpload" name="file" required>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group">
                            <label for="fileSelect">Chọn mẫu</label>
                            <select class="form-control" id="fileSelect" name="keys" required>
                                <option value="" disabled selected>-Chọn-</option>
                                <option value="1">'uid','name','pass','token','email'</option>
                                <option value="2">'uid','pass','2fa','cookies','email'</option>
                                <option value="3">'uid','pass','cookies'</option>
                                <option value="6">'uid','pass'</option>
                                <option value="5">'uid','pass','2fa','email','cookies'</option>
                                <option value="4">'uid','pass','2fa','birthday','email','email_password','cookies'</option>
                                <!-- Thêm các tùy chọn file khác nếu cần -->
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fileUpload">Tên nguồn</label>
                        <input type="text" class="form-control-file" id="source_name" name="source_name" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fileUpload">Link nguồn</label>
                        <input type="text" class="form-control-file" id="source_link" name="source_link" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fileUpload">Giá</label>
                        <input type="text" class="form-control-file" id="price" name="price" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fileUpload">Mã đơn hàng</label>
                        <input type="text" class="form-control-file" id="order_code" name="order_code" required>
                    </div>
                </div>
                <div class="container mt-5">
                    <div class="row">
                        <!-- Nút Gửi -->
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary btn-block">Tải lên</button>
                        </div>
                        <div class="col-md-4">
                            <a href="{{route('import.txt')}}">Nhập vào</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <h2 class="text-center">Tải lên File xlxs</h2>

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
                        <!-- Nút Gửi -->
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary btn-block">Tải lên</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
       </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="table-responsive mt-5">
                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" onclick="sortTable(0)">ID</th>
                            <th scope="col" onclick="sortTable(0)">UID</th>
                            <th scope="col" onclick="sortTable(1)">Họ tên</th>
                            <th scope="col" onclick="sortTable(2)">Pass</th>
                            <th scope="col" onclick="sortTable(3)">Token</th>
                            <th scope="col" onclick="sortTable(4)">Cookie</th>
                            <th scope="col" onclick="sortTable(5)">Email</th>
                            <th scope="col" onclick="sortTable(6)">Nguồn</th>
                            <th scope="col" onclick="sortTable(7)">Giá</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @dd($data) --}}
                        @if(isset($data))
                            @foreach($data as $info)
                                <tr>
                                    @if(isset($info['id']))
                                        <td>{{ $info['id'] }}</td>
                                    @else
                                        <td>-</td>
                                    @endif
                                    {{-- $keys = ['uid', 'name', 'pass', 'token', 'email']; --}}
                                    <td class="truncate">{{ $info['uid']  }}</td>
                                    <td class="truncate">{{ $info['name'] ?? ''}}</td>
                                    <td class="truncate">{{ $info['pass'] ?? ''}}</td>
                                    <td class="truncate">{{ $info['token'] ?? ''}}</td>
                                    <td class="truncate">{{ $info['cookie'] ?? ''}}</td>
                                    <td class="truncate">{{ $info['email'] ?? ''}}</td>
                                    <td class="truncate">{{ $info['source_name'] ?? ''}}</td>
                                    <td class="truncate">{{ $info['price'] ?? ''}}</td>
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
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
