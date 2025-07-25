<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'mogitate')</title>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

  <!-- 共通CSS -->
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  <!-- ページごとのCSS -->
  @yield('css')

  <!-- Bootstrap CSS（必要な場合のみ） -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <!-- ロゴ -->
      <a href="/" class="header__logo">mogitate</a>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </header>

  <main class="main-content">
    @yield('content')
  </main>

  <!-- ページごとのJS -->
@yield('js')

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>