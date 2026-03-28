<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>نظام إدارة الكتب - أنس</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .container { margin-top: 50px; }
        .table thead { background-color: #212529; color: white; }
        .btn-sm { margin: 2px; }
    </style>
</head>
<body class="bg-light p-5">
    <div class="container bg-white p-4 shadow rounded border-top border-primary border-5">
        <div class="d-flex justify-content-between mb-4 align-items-center border-bottom pb-3">
            <h2 class="m-0 text-primary">📖 نظام إدارة الكتب</h2>
            <a href="{{ url('/books/create') }}" class="btn btn-success shadow-sm">+ إضافة كتاب جديد</a>
        </div>
        
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="text-center">
                    <th>العنوان</th>
                    <th>المؤلف</th>
                    <th>السنة</th>
                    <th width="200">العمليات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <td class="align-middle fw-bold">{{ $book->title }}</td>
                    <td class="align-middle">{{ $book->author }}</td>
                    <td class="align-middle text-center">{{ $book->year_published }}</td> 
                    <td class="text-center align-middle">
                        <a href="{{ url('/books/edit/'.$book->id) }}" class="btn btn-warning btn-sm">تعديل</a>

                        <form action="{{ url('/books/delete/'.$book->id) }}" method="POST" style="display:inline;">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('هل أنت متأكد من الحذف؟')">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        @if($books->isEmpty())
            <div class="alert alert-info text-center mt-3">لا توجد كتب مضافة حالياً. اضغط على "إضافة كتاب" للبدء.</div>
        @endif
    </div>
</body>
</html>