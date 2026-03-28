<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>إضافة كتاب جديد</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container bg-white p-4 shadow rounded col-md-6">
        <h3 class="mb-4 text-center">📖 إضافة كتاب جديد</h3>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" name="title" placeholder="العنوان" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="text" name="author" placeholder="المؤلف" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="number" name="year_published" placeholder="السنة" class="form-control" required>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-success">حفظ الكتاب</button>
                <a href="{{ route('books.index') }}" class="btn btn-outline-secondary">رجوع للجدول</a>
            </div>
        </form>
    </div>
</body>
</html>