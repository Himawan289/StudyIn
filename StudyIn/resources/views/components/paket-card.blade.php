<div class="paket-card">
    <div class="paket-thumbnail">
        <img src="{{ $packageImg }}" alt="Thumbnail Paket">
    </div>
    <div class="paket-info">
        <h3 class="paket-title">{{ $packageTitle }}</h3>
        <p class="paket-description">{{ $packageDescription }}</p>
        <div class="paket-meta">
            <span class="paket-duration">
                <i class="fa-solid fa-clock"></i> {{ $packageDuration }}
            </span>
        </div>
        <div class="paket-price">
            <span class="price">{{ $packagePrice }}</span>
        </div>
        <button class="paket-button">
            <i class="fa-solid fa-cart-shopping"></i> Beli Sekarang
        </button>
    </div>
</div>
