<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>إنشاء حساب جديد - نظام الكتب</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f0f2f5; height: 100vh; display: flex; align-items: center; justify-content: center; font-family: 'Segoe UI', Tahoma, sans-serif; }
        .register-card { background: white; padding: 40px; border-radius: 15px; width: 100%; max-width: 450px; border-top: 5px solid #198754; }
    </style>
</head>
<body>
    <div class="register-card shadow">
        <div class="text-center mb-4">
            <h2 class="fw-bold text-success">📝 حساب جديد</h2>
            <p class="text-muted">أدخل بياناتك للوصول لنظام إدارة الكتب</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-bold">الاسم الكامل</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required autofocus placeholder="أدخل اسمك">
                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">البريد الإلكتروني</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required placeholder="example@test.com">
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">كلمة المرور</label>
                <input type="password" name="password" class="form-control" required placeholder="********">
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">تأكيد كلمة المرور</label>
                <input type="password" name="password_confirmation" class="form-control" required placeholder="********">
            </div>

            <button type="submit" class="btn btn-success w-100 fw-bold shadow-sm py-2">إنشاء الحساب والبدء</button>
            
            <div class="text-center mt-3">
                <a href="{{ route('login') }}" class="text-decoration-none small">لديك حساب بالفعل؟ سجل دخولك</a>
            </div>
        </form>
    </div>
</body>
</html>