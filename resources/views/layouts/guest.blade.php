<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>تسجيل الدخول - نظام الكتب</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f4f7f6; display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0; }
        .card { width: 100%; max-width: 400px; padding: 2rem; border: none; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
        .logo { text-align: center; margin-bottom: 1.5rem; }
        .logo svg { width: 60px; height: 60px; color: #ef4444; }
        input { border-radius: 8px !important; margin-bottom: 10px; padding: 10px !important; border: 1px solid #ddd !important; width: 100%; }
        button { background: #ef4444 !important; border: none !important; width: 100%; padding: 10px; border-radius: 8px; color: white; font-weight: bold; }
        a { color: #666; text-decoration: none; font-size: 0.9rem; }
    </style>
</head>
<body>
    <div class="card">
        <div class="logo">
             <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18 18.246 18.477 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
             <h4 class="mt-2">نظام إدارة الكتب</h4>
        </div>
        {{ $slot }}
    </div>
</body>
</html>