<div class="product-card">
    <div class="product-image">
        <img src="{{ $p->cover }}" alt="{{ $p->name }}" width="200">
    </div>
    <div class="product-info">
        <h3>{{ $p->name }}</h3>
        <p class="brand">{{ $p->brand }}</p>
        <p class="price">
            @if($p->sale_price)
                <span class="old-price" style="text-decoration: line-through;">
                    {{ number_format($p->price) }}₫
                </span>
                <span class="sale-price" style="color:red;">
                    {{ number_format($p->sale_price) }}₫
                </span>
            @else
                <span class="price">{{ number_format($p->price) }}₫</span>
            @endif
        </p>
    </div>
</div>

<style>
.product-card {
    display: inline-block;
    margin: 10px;
    border: 1px solid #eee;
    border-radius: 8px;
    padding: 10px;
    text-align: center;
    transition: all 0.2s ease;
}
.product-card:hover {
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
}
.product-image img {
    border-radius: 6px;
}
</style>