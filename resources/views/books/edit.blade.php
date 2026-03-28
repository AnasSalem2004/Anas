<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تعديل بيانات الكتاب</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container bg-white p-4 shadow rounded col-md-6 border-top border-warning border-5">
        <h3 class="mb-4 text-center text-dark fw-bold">✏️ تعديل بيانات الكتاب</h3>
        
        <form action="{{ url('/books/update/'.$book->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-bold">العنوان</label>
                <input type="text" name="title" value="{{ $book->title }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">المؤلف</label>
                <input type="text" name="author" value="{{ $book->author }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">السنة</label>
                <input type="number" name="year_published" value="{{ $book->year_published }}" class="form-control" required>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-warning fw-bold shadow-sm">تحديث البيانات</button>
                <a href="{{ url('/books') }}" class="btn btn-outline-secondary">إلغاء والعودة للجدول</a>
            </div>
        </form>
    </div>
</body>
</html>