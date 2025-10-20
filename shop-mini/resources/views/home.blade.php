@extends('layouts.app')
@section('title','Trang chủ')

@section('content')
  {{-- Hero banner --}}
  <section class="relative">
    <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_1920,w_1920/6237774_CAM_Onsite_FW_25_Everyday_Running_23_Sep_SEA_Masthead_DT_2880x1280_Rest_of_SEA_b7142c1d13.jpg" jsaction="" class="sFlh5c FyHeAf iPVvYb" style="max-width: 1920px; height: 142px; margin: 10px 0px; width: 320px;" alt="adidas Vietnam Online - Shop Sports &amp; Originals | adidas VN" jsname="kn3ccd">
    <div class="absolute inset-0 flex items-center">
      <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-3xl md:text-5xl font-black mb-4">Sẵn sàng bứt tốc</h1>
        <a href="{{ route('category','running') }}" class="bg-black text-white px-6 py-3 rounded">Mua ngay</a>
      </div>
    </div>
  </section>

  {{-- Danh mục nổi bật --}}
  <section class="max-w-7xl mx-auto px-4 py-12">
    <h2 class="text-xl font-semibold mb-4">Bộ sưu tập nổi bật</h2>
    <div class="grid md:grid-cols-3 gap-4">
      @foreach($collections as $c)
        <a href="{{ $c->link }}" class="group">
          <div class="aspect-[4/3] overflow-hidden rounded-xl">
            <img src="{{ $c->image }}" class="w-full h-full object-cover group-hover:scale-105 transition">
          </div>
          <div class="mt-2 font-medium">{{ $c->title }}</div>
        </a>
      @endforeach
    </div>
  </section>

  {{-- Sản phẩm trending --}}
  <section class="max-w-7xl mx-auto px-4 pb-16">
    <div class="flex items-center justify-between mb-4">
      <h2 class="text-xl font-semibold">Đang thịnh hành</h2>
      <a href="{{ route('category','new-arrivals') }}" class="text-sm underline">Xem tất cả</a>
    </div>
    <div class="grid xs:grid-cols-2 md:grid-cols-4 gap-4">
      @foreach($products as $p)
       @include('partials.product-card', ['p' => $p])
      @endforeach
    </div>
  </section>
@endsection