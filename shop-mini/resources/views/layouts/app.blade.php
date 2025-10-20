<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title','E-Store')</title>
  <meta name="description" content="@yield('meta_desc','Thể thao & thời trang')">
 <link rel="preload" href="{{ asset('css/app.css') }}" as="style">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}" defer></script>


</head>
<body class="min-h-dvh bg-white text-gray-900">
  {{-- Header --}}
  <header x-data="{open:false, mega:false}" class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b">
    <div class="max-w-7xl mx-auto px-4 py-3 flex items-center gap-4">
      <a href="{{ route('home') }}" class="font-black text-xl tracking-tight">E-STORE</a>

      <nav class="hidden md:flex gap-6">
        <div class="relative" @mouseenter="mega=true" @mouseleave="mega=false">
          <button class="font-medium hover:opacity-70">Nam</button>
          <div x-show="mega" x-transition
               class="absolute left-0 top-full w-[900px] bg-white shadow-xl border mt-2 p-6 grid grid-cols-4 gap-6">
            @foreach($mega['men'] ?? [] as $col)
              <div>
                <p class="text-sm font-semibold mb-2">{{ $col['title'] }}</p>
                <ul class="space-y-1">
                  @foreach($col['links'] as $l)
                    <li><a href="{{ $l['href'] }}" class="text-sm hover:underline">{{ $l['label'] }}</a></li>
                  @endforeach
                </ul>
              </div>
            @endforeach
          </div>
        </div>

        <a href="{{ route('category','women') }}" class="font-medium hover:opacity-70">Nữ</a>
        <a href="{{ route('category','kids') }}" class="font-medium hover:opacity-70">Trẻ em</a>
        <a href="{{ route('category','sale') }}" class="font-medium text-red-600">SALE</a>
      </nav>

      <div class="ml-auto flex items-center gap-3">
        <form action="{{ route('search') }}" class="hidden md:block">
          <input name="q" placeholder="Tìm giày, áo, phụ kiện…"
                 class="rounded-full bg-gray-100 px-4 py-2 text-sm focus:outline-none focus:ring"
                 value="{{ request('q') }}">
        </form>
        <a href="{{ route('cart.index') }}" class="relative">
          <svg class="w-6 h-6"><use href="#icon-bag" /></svg>
          @if(session('cart_count',0))
            <span class="absolute -top-1 -right-1 bg-black text-white text-[10px] rounded-full px-1">
              {{ session('cart_count') }}
            </span>
          @endif
        </a>
        @auth
          <a href="{{ route('account') }}" class="text-sm">Tài khoản</a>
        @else
          <a href="{{ route('login') }}" class="text-sm">Đăng nhập</a>
        @endauth
        <button class="md:hidden" @click="open=!open">
          <svg class="w-6 h-6">
            <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_1920,w_1920/6237774_CAM_Onsite_FW_25_Everyday_Running_23_Sep_SEA_Masthead_DT_2880x1280_Rest_of_SEA_b7142c1d13.jpg" width=" 500px hight= 700px" " alt="adidas Vietnam Online - Shop Sports &amp; Originals | adidas VN" jsname="kn3ccd">
          </svg>
        </button>
      </div>
    </div>

    {{-- Mobile drawer --}}
    <div x-show="open" x-transition class="md:hidden border-t bg-white">
      <div class="px-4 py-3 space-y-3">
        <a href="{{ route('category','men') }}" class="block">Nam</a>
        <a href="{{ route('category','women') }}" class="block">Nữ</a>
        <a href="{{ route('category','kids') }}" class="block">Trẻ em</a>
        <a href="{{ route('category','sale') }}" class="block text-red-600">SALE</a>
        <form action="{{ route('search') }}">
          <input name="q" class="w-full bg-gray-100 px-3 py-2 rounded" placeholder="Tìm kiếm…">
        </form>
      </div>
    </div>
  </header>

  {{-- Nội dung --}}
  <main>@yield('content')</main>

  {{-- Footer --}}
  <footer class="mt-20 border-t">
    <div class="max-w-7xl mx-auto px-4 py-10 grid md:grid-cols-4 gap-8 text-sm">
      <div>
        <p class="font-semibold mb-2">Hỗ trợ</p>
        <ul class="space-y-1">
          <li><a href="#">Trung tâm trợ giúp</a></li>
          <li><a href="#">Theo dõi đơn hàng</a></li>
          <li><a href="#">Chính sách đổi trả</a></li>
        </ul>
      </div>
      <div>
        <p class="font-semibold mb-2">Về chúng tôi</p>
        <ul class="space-y-1">
          <li><a href="#">Câu chuyện</a></li>
          <li><a href="#">Tuyển dụng</a></li>
        </ul>
      </div>
      <div class="md:col-span-2">
        <p class="font-semibold mb-2">Nhận tin ưu đãi</p>
        <form class="flex gap-2">
          <input class="flex-1 bg-gray-100 px-3 py-2 rounded" placeholder="Email của bạn">
          <button class="bg-black text-white px-4 rounded">Đăng ký</button>
        </form>
      </div>
    </div>
    <div class="text-xs text-center text-gray-500 py-4">© {{ date('Y') }} E-Store — All rights reserved.</div>
  </footer>

  @include('partials.icons') {{-- SVG sprite --}}
</body>
</html>