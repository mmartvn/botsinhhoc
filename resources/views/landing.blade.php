<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bột Tẩy Trắng Enzyme Sinh Học</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Montserrat', sans-serif; color: #333; background: #fff; line-height: 1.6; }
        img { max-width: 100%; height: auto; }
        .container { max-width: 1100px; margin: 0 auto; padding: 0 20px; }
        .section { padding: 60px 0; position: relative; }
        .section-title { text-align: center; font-size: clamp(22px, 3vw, 32px); font-weight: 800; margin-bottom: 30px; color: #222; }

        /* ===== HEADER ===== */
        .header { background: #fff; padding: 10px 0; border-bottom: 1px solid #eee; position: sticky; top: 0; z-index: 100; box-shadow: 0 2px 10px rgba(0,0,0,.05); }
        .header-inner { display: flex; align-items: center; justify-content: space-between; max-width: 1100px; margin: 0 auto; padding: 0 20px; flex-wrap: wrap; gap: 8px; }
        .header .logo { display: flex; align-items: center; gap: 10px; }
        .header .logo img { height: 36px; }
        .header .hotline { color: #e52d27; font-weight: 700; font-size: 15px; }
        .header .btn-order { background: linear-gradient(135deg, #e52d27, #b31217); color: #fff; padding: 8px 24px; border-radius: 50px; text-decoration: none; font-weight: 700; font-size: 13px; letter-spacing: .5px; animation: pulseBtn 1s infinite; }

        /* ===== TOP BAR ===== */
        .top-bar { background: #1a1a2e; color: #fff; padding: 8px 0; text-align: center; font-size: 14px; font-weight: 600; }
        .top-bar span { color: #ffd700; }

        /* ===== HERO ===== */
        .hero { background: #fff; padding: 40px 0 30px; text-align: center; }
        .hero h1 { font-size: clamp(24px, 4vw, 36px); font-weight: 800; color: #222; margin-bottom: 8px; }
        .hero .sub { color: #666; font-size: 15px; margin-bottom: 16px; }
        .hero-stars { display: flex; justify-content: center; gap: 4px; margin-bottom: 10px; }
        .hero-stars svg { width: 18px; height: 18px; fill: #ffd700; }
        .hero-stats { display: flex; justify-content: center; gap: 24px; font-size: 13px; color: #666; margin-bottom: 16px; flex-wrap: wrap; }
        .hero-stats strong { color: #e52d27; }
        .hero-price { font-size: 14px; color: #666; margin-bottom: 10px; }
        .hero-price .old { text-decoration: line-through; }
        .hero-price .new { color: #e52d27; font-size: 32px; font-weight: 800; }
        .hero .gift { background: #fff3cd; border: 1px dashed #ffc343; border-radius: 10px; padding: 10px 16px; display: inline-block; font-size: 13px; font-weight: 600; margin: 10px 0; }
        .hero .btn-buy { display: inline-block; background: linear-gradient(135deg, #e52d27, #b31217); color: #fff; padding: 14px 48px; border-radius: 50px; font-weight: 700; font-size: 16px; text-decoration: none; margin: 12px 0; animation: pulseBtn 1s infinite; }
        .hero .guarantee { color: #e52d27; font-size: 13px; font-weight: 600; }

        /* ===== COUNTDOWN ===== */
        .countdown { display: flex; justify-content: center; gap: 10px; margin: 16px 0; }
        .countdown-item { background: #1a1a2e; color: #fff; padding: 8px 14px; border-radius: 8px; min-width: 56px; text-align: center; }
        .countdown-item .num { font-size: 22px; font-weight: 800; }
        .countdown-item .label { font-size: 10px; text-transform: uppercase; opacity: .7; }

        /* ===== GALLERY CAROUSEL ===== */
        .gallery-wrap { max-width: 600px; margin: 0 auto; position: relative; overflow: hidden; border-radius: 12px; }
        .gallery-track { display: flex; transition: transform .4s ease; }
        .gallery-track .slide { min-width: 100%; }
        .gallery-track .slide img { width: 100%; display: block; border-radius: 12px; }
        .gallery-dots { display: flex; justify-content: center; gap: 8px; margin-top: 12px; }
        .gallery-dots span { width: 10px; height: 10px; border-radius: 50%; background: #ccc; cursor: pointer; }
        .gallery-dots span.active { background: #e52d27; }
        .gallery-btn { position: absolute; top: 50%; transform: translateY(-50%); background: rgba(0,0,0,.5); color: #fff; border: none; width: 36px; height: 36px; border-radius: 50%; font-size: 18px; cursor: pointer; z-index: 2; }
        .gallery-btn.prev { left: 10px; }
        .gallery-btn.next { right: 10px; }

        /* ===== CERTIFICATION ===== */
        .cert { background: #f0f4f8; text-align: center; }
        .cert-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 24px; max-width: 700px; margin: 0 auto; }
        .cert-card { background: #fff; border-radius: 12px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,.06); }
        .cert-card h4 { color: #019abe; font-size: 14px; margin-bottom: 10px; }

        /* ===== AUTHENTICITY ===== */
        .auth { background: #f9f9f9; }
        .auth-wrap { max-width: 700px; margin: 0 auto; }
        .auth-list { list-style: none; margin: 20px 0; }
        .auth-list li { padding: 8px 0; font-size: 14px; display: flex; align-items: center; gap: 10px; }
        .auth-list li::before { content: '✓'; color: #019abe; font-weight: 700; font-size: 18px; }
        .auth .warning { background: #fff3cd; border-radius: 10px; padding: 12px 16px; font-size: 13px; color: #856404; margin: 16px 0; border: 1px solid #ffc107; }
        .auth .video-link { display: block; text-align: center; margin: 20px 0; }

        /* ===== VIDEO SECTION ===== */
        .video-wrap { max-width: 700px; margin: 0 auto; }
        .video-wrap video, .video-wrap img { width: 100%; border-radius: 12px; }

        /* ===== PAIN POINTS ===== */
        .pain { text-align: center; }
        .pain p { font-size: 16px; color: #666; max-width: 600px; margin: 0 auto 24px; }
        .pain-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px; max-width: 600px; margin: 0 auto; }
        .pain-card { background: #f9f9f9; border-radius: 12px; padding: 24px; border: 1px solid #eee; }
        .pain-card .icon { font-size: 32px; margin-bottom: 10px; }

        /* ===== BEFORE AFTER ===== */
        .ba-section { background: #dff1fb; text-align: center; }
        .ba-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px; }
        .ba-card { background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,.06); }
        .ba-card img { width: 100%; display: block; }

        /* ===== FEATURES ===== */
        .features { background: #f9f9f9; }
        .features-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px; max-width: 700px; margin: 0 auto; }
        .feature-item { background: #fff; border-radius: 10px; padding: 20px 16px; text-align: center; border: 1px solid #eee; }
        .feature-item .icon { font-size: 28px; margin-bottom: 8px; }
        .feature-item h4 { font-size: 14px; }

        /* ===== FABRIC TYPES ===== */
        .fabric-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)); gap: 16px; max-width: 700px; margin: 0 auto; }
        .fabric-item { background: #f0f4f8; border-radius: 10px; padding: 20px; text-align: center; font-weight: 600; font-size: 14px; border: 1px solid #e0eef5; }

        /* ===== REVIEW GALLERY ===== */
        .review-gallery { background: #f9f9f9; }
        .review-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 12px; }
        .review-grid img { width: 100%; border-radius: 8px; }

        /* ===== SOCIAL PROOF ===== */
        .proof { text-align: center; }
        .proof-stats { display: flex; justify-content: center; gap: 40px; margin-bottom: 24px; flex-wrap: wrap; }
        .proof-stats .num { font-size: 28px; font-weight: 800; color: #e52d27; }
        .proof-stats .label { font-size: 13px; color: #666; }

        /* ===== ORDER FORM ===== */
        .order-section { background: #f0f4f8; }
        .order-box { max-width: 600px; margin: 0 auto; background: #fff; border-radius: 16px; padding: 32px; box-shadow: 0 4px 20px rgba(0,0,0,.08); }
        .order-box h3 { text-align: center; font-size: 20px; margin-bottom: 16px; }
        .order-box .ship-note { text-align: center; font-size: 13px; color: #019abe; font-weight: 600; margin-bottom: 16px; }
        .order-product { text-align: center; margin-bottom: 16px; }
        .order-product .name { font-weight: 700; }
        .order-product .price { color: #e52d27; font-size: 24px; font-weight: 800; }
        .packages { display: grid; gap: 10px; margin-bottom: 20px; }
        .package { border: 2px solid #eee; border-radius: 10px; padding: 14px 16px; cursor: pointer; transition: all .2s; }
        .package:hover, .package.selected { border-color: #e52d27; background: #fff5f5; }
        .package .pkg-name { font-weight: 700; font-size: 14px; }
        .package .pkg-price { color: #e52d27; font-weight: 800; }
        .package .pkg-old { text-decoration: line-through; color: #999; font-size: 13px; }
        .package .pkg-gift { color: #019abe; font-size: 12px; font-weight: 600; }
        .form-group { margin-bottom: 14px; }
        .form-group label { display: block; margin-bottom: 4px; font-weight: 600; font-size: 13px; color: #333; }
        .form-group input, .form-group textarea, .form-group select { width: 100%; padding: 10px 14px; border: 1px solid #ddd; border-radius: 8px; font-size: 14px; font-family: inherit; outline: none; }
        .form-group input:focus, .form-group textarea:focus, .form-group select:focus { border-color: #e52d27; }
        .order-box .btn-submit { width: 100%; padding: 14px; background: linear-gradient(135deg, #e52d27, #b31217); color: #fff; border: none; border-radius: 50px; font-size: 16px; font-weight: 700; cursor: pointer; }

        /* ===== COMMITMENTS ===== */
        .commit-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; }
        .commit-card { background: #fff; border-radius: 12px; padding: 24px; text-align: center; border: 1px solid #e0eef5; box-shadow: 0 2px 10px rgba(0,0,0,.04); }
        .commit-card .icon { font-size: 32px; margin-bottom: 10px; }
        .commit-card h4 { font-size: 15px; margin-bottom: 6px; }
        .commit-card p { font-size: 13px; color: #666; }

        /* ===== COMMENTS ===== */
        .comments-wrap { max-width: 600px; margin: 0 auto; }
        .comment { display: flex; gap: 12px; margin-bottom: 20px; }
        .comment .avatar { width: 44px; height: 44px; border-radius: 50%; background: #ddd; flex-shrink: 0; overflow: hidden; }
        .comment .avatar img { width: 100%; height: 100%; object-fit: cover; }
        .comment .body { flex: 1; }
        .comment .name { font-weight: 700; font-size: 14px; }
        .comment .text { font-size: 14px; color: #333; margin: 2px 0; }
        .comment .actions { font-size: 12px; color: #999; display: flex; gap: 12px; }
        .comment .reply-box { background: #f0f2f5; border-radius: 12px; padding: 10px 14px; margin-top: 8px; font-size: 13px; }

        /* ===== FOOTER ===== */
        .footer { background: #1a1a2e; color: #ccc; padding: 40px 0 20px; }
        .footer-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 24px; }
        .footer h4 { color: #fff; font-size: 15px; margin-bottom: 12px; }
        .footer p, .footer li { font-size: 13px; line-height: 1.8; }
        .footer ul { list-style: none; }
        .footer a { color: #ccc; text-decoration: none; }
        .footer-bottom { text-align: center; padding-top: 16px; margin-top: 24px; border-top: 1px solid rgba(255,255,255,.1); font-size: 13px; }

        /* ===== TOAST ===== */
        .toast { position: fixed; top: 20px; right: 20px; background: #28a745; color: #fff; padding: 14px 24px; border-radius: 10px; font-weight: 600; font-size: 14px; box-shadow: 0 4px 20px rgba(0,0,0,.2); z-index: 999; }

        @keyframes pulseBtn { 0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(229,45,39,.5); } 50% { transform: scale(1.05); box-shadow: 0 0 0 12px rgba(229,45,39,0); } 100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(229,45,39,0); } }
        @media (max-width: 768px) {
            .header-inner { justify-content: center; text-align: center; }
            .section { padding: 40px 0; }
            .order-box { padding: 20px; }
        }
    </style>
</head>
<body>

@if (session('success'))
    <div class="toast">{{ session('success') }}</div>
@endif

<!-- ===== HEADER ===== -->
<header class="header">
    <div class="header-inner" style="flex-direction:column;gap:2px;">
        <div style="display:flex;align-items:center;justify-content:space-between;width:100%;">
            <div class="logo">
                @if (isset($images['banner']))
                    @php $logo = $images['banner']->firstWhere('title', 'logo-20251219161909-l7cin') @endphp
                    @if ($logo)
                        <img src="{{ asset('storage/' . $logo->image_path) }}" alt="Logo">
                    @endif
                @endif
                <div><strong style="color:#e52d27;">MEGA</strong><span style="color:#019abe;">MART</span></div>
            </div>
            <a href="#order" class="btn-order">NHẬN ƯU ĐÃI</a>
        </div>
        <div style="display:flex;align-items:center;justify-content:center;gap:16px;width:100%;">
            <div>📞 <span class="hotline">0325.449.402</span></div>
            <div style="background:#fff0f0;border:1px solid #e52d27;border-radius:20px;padding:2px 10px;font-weight:800;font-size:13px;color:#e52d27;white-space:nowrap;display:flex;align-items:center;gap:4px;">🔥<span style="font-size:18px;">70%</span> ƯU ĐÃI</div>
        </div>
    </div>
</header>

<!-- ===== 1. TOP BAR ===== -->
<div class="top-bar">🎉 <span>ƯU ĐÃI 70%</span> – Giảm Sốc Hôm Nay</div>

<!-- ===== 2. PRODUCT GALLERY CAROUSEL ===== -->
<section class="section" style="padding-bottom:0;">
    <div class="container">
        <div class="gallery-wrap">
            <div class="gallery-track" id="galleryTrack">
                @php $galleryImages = $images['gallery'] ?? collect(); @endphp
                @forelse ($galleryImages as $img)
                    <div class="slide"><img src="{{ asset('storage/' . $img->image_path) }}" alt="{{ $img->alt_text ?? $img->title }}"></div>
                @empty
                    <div class="slide" style="background:#e0e0e0;height:300px;display:flex;align-items:center;justify-content:center;color:#999;">Gallery</div>
                @endforelse
            </div>
            @if ($galleryImages->count() > 1)
                <button class="gallery-btn prev" onclick="moveGallery(-1)">‹</button>
                <button class="gallery-btn next" onclick="moveGallery(1)">›</button>
            @endif
        </div>
        <div class="gallery-dots" id="galleryDots">
            @for ($i = 0; $i < max(1, $galleryImages->count()); $i++)
                <span class="{{ $i === 0 ? 'active' : '' }}" onclick="goToSlide({{ $i }})"></span>
            @endfor
        </div>
    </div>
</section>

<!-- ===== 3. HERO ===== -->
<section class="hero" id="hero">
    <div class="container">
        <h1>BỘT TẨY TRẮNG ENZYME SINH HỌC</h1>
        <p class="sub">Công nghệ enzyme sinh học & oxy hoạt tính – Làm sạch mà không hư sợi vải</p>
        <div class="hero-stars">
            @for ($i = 0; $i < 5; $i++)
                <svg viewBox="0 0 20 20"><path d="M10 1l2.39 4.84 5.34.78-3.87 3.77.91 5.32L10 13.27l-4.77 2.51.91-5.32L2.27 6.62l5.34-.78L10 1z"/></svg>
            @endfor
        </div>
        <div class="hero-stats">
            <span>⭐ <strong>162.968+</strong> SẢN PHẨM ĐÃ BÁN</span>
            <span>💬 <strong>6.382+</strong> NHẬN XÉT</span>
        </div>
        <div class="countdown">
            <div class="countdown-item"><div class="num" id="days">00</div><div class="label">Ngày</div></div>
            <div class="countdown-item"><div class="num" id="hours">00</div><div class="label">Giờ</div></div>
            <div class="countdown-item"><div class="num" id="minutes">00</div><div class="label">Phút</div></div>
            <div class="countdown-item"><div class="num" id="seconds">00</div><div class="label">Giây</div></div>
        </div>
        <div class="hero-price">
            <span class="old">Giá gốc: 299.000₫</span><br>
            <span class="new">99.000₫</span> <span style="font-size:14px;color:#666;">/ lọ 260gr</span>
        </div>
        <div class="gift">🎁 TẶNG KÈM TÚI THƠM THẢO MỘC (TRỊ GIÁ 30K) – LƯU HƯƠNG ĐẾN 3 THÁNG</div>
        <a href="#order" class="btn-buy">NHẬN ƯU ĐÃI</a>
        <div class="guarantee">✅ Hoàn tiền 100% nếu sử dụng không hiệu quả</div>
    </div>
</section>

<!-- ===== 4. CERTIFICATION ===== -->
<section class="section cert">
    <div class="container">
        <h2 class="section-title">HÀNG NHẬP KHẨU <span style="color:#e52d27;">CHÍNH NGẠCH</span></h2>
        <p style="text-align:center;color:#666;font-size:14px;margin-bottom:24px;">Sản phẩm được Hải quan kiểm tra an toàn, có giấy VAT và chứng từ nhập khẩu.</p>
        <div class="cert-grid">
            <div class="cert-card">
                <h4>📄 GIẤY VAT</h4>
                <p style="font-size:13px;color:#666;">Chứng minh nguồn gốc xuất xứ rõ ràng</p>
            </div>
            <div class="cert-card">
                <h4>📋 CHỨNG TỪ NHẬP KHẨU</h4>
                <p style="font-size:13px;color:#666;">Hàng nhập khẩu chính ngạch đầy đủ giấy tờ</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== 5. AUTHENTICITY ===== -->
<section class="section auth">
    <div class="container">
        <div class="auth-wrap">
            <h2 class="section-title">NÓI KHÔNG VỚI <span style="color:#e52d27;">HÀNG GIẢ</span></h2>
            <p style="text-align:center;color:#666;font-size:14px;margin-bottom:16px;">Cam kết hàng chính hãng, rõ nguồn gốc</p>
            <div class="warning">⚠️ Chúng tôi chỉ bán tại website này, không bán trên Shopee, TikTok, Lazada</div>
            <ul class="auth-list">
                <li>Hàng chính hãng – có tem chống giả</li>
                <li>Lọ 260 Gram, có mã QR kiểm tra</li>
                <li>Hạn sử dụng 3 năm</li>
                <li>Kiểm tra hàng trước khi thanh toán</li>
            </ul>
            <div class="video-link">
                <a href="#video" style="background:#e52d27;color:#fff;padding:12px 32px;border-radius:50px;text-decoration:none;font-weight:700;display:inline-block;">▶ XEM VIDEO GIỚI THIỆU</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== 6. VIDEO ===== -->
<section class="section" id="video">
    <div class="container">
        <div class="video-wrap">
            @php $videoItem = isset($images['video']) && $images['video']->count() ? $images['video']->first() : null; @endphp
            @php $videoSrc = $videoItem ? asset('storage/' . $videoItem->image_path) : asset('storage/anh_ldp/viideo%20b%E1%BA%AFt%20sh.mp4'); @endphp
            <div style="position:relative;">
                <video id="introVideo" autoplay muted loop playsinline controls poster="{{ asset('storage/anh_ldp/0.png') }}" style="width:100%;border-radius:12px;">
                    <source src="{{ $videoSrc }}" type="video/mp4">
                </video>
                <button id="unmuteBtn" onclick="toggleSound()" style="position:absolute;bottom:16px;right:16px;background:rgba(0,0,0,.6);color:#fff;border:none;border-radius:50%;width:40px;height:40px;font-size:20px;cursor:pointer;z-index:3;display:flex;align-items:center;justify-content:center;">🔇</button>
            </div>
        </div>
    </div>
</section>
<script>
var video = document.getElementById('introVideo');
if (video) {
    var unmuteBtn = document.getElementById('unmuteBtn');
    var soundOn = false;
    function toggleSound() {
        soundOn = !soundOn;
        video.muted = !soundOn;
        unmuteBtn.innerHTML = soundOn ? '🔊' : '🔇';
        if (soundOn && video.paused) video.play().catch(function(){});
    }
    document.addEventListener('click', function() {
        if (!soundOn) { video.muted = false; soundOn = true; unmuteBtn.innerHTML = '🔊'; if (video.paused) video.play().catch(function(){}); }
    }, { once: true });
    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(e) {
            e.isIntersecting ? video.play().catch(function(){}) : video.pause();
        });
    }, { threshold: 0.3 });
    observer.observe(video);
}
</script>

<!-- ===== 7. PAIN POINTS ===== -->
<section class="section pain">
    <div class="container">
        <h2 class="section-title">BẠN ĐANG <span style="color:#e52d27;">ĐAU ĐẦU</span> BỞI?</h2>
        <p>Các vết bẩn cứng đầu, ố vàng giặt mãi không sạch, quần áo nhem nhuốc.</p>
        <div class="pain-grid">
            <div class="pain-card">
                <div class="icon">👕</div>
                <h4>Quần áo bị ố vàng</h4>
                <p style="font-size:13px;color:#666;">Vết ố vàng lâu ngày khó giặt sạch</p>
            </div>
            <div class="pain-card">
                <div class="icon">🧦</div>
                <h4>Vải bị mốc</h4>
                <p style="font-size:13px;color:#666;">Nấm mốc do thời tiết ẩm ướt</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== 8. BEFORE / AFTER ===== -->
<section class="section ba-section">
    <div class="container">
        <h2 class="section-title">TRƯỚC VÀ SAU KHI <span style="color:#e52d27;">DÙNG SẢN PHẨM</span></h2>
        <div class="ba-grid">
            @php $baImages = $images['before_after'] ?? collect(); @endphp
            @forelse ($baImages as $img)
                <div class="ba-card">
                    <img src="{{ asset('storage/' . $img->image_path) }}" alt="{{ $img->alt_text ?? $img->title }}">
                </div>
            @empty
                <div class="ba-card"><div style="height:200px;background:#ddd;display:flex;align-items:center;justify-content:center;color:#999;">Trước & Sau</div></div>
            @endforelse
        </div>
    </div>
</section>

<!-- ===== 9. FEATURES ===== -->
<section class="section features">
    <div class="container">
        <h2 class="section-title">CÔNG NGHỆ <span style="color:#e52d27;">ENZYME SINH HỌC</span></h2>
        <p style="text-align:center;color:#666;font-size:14px;margin-bottom:24px;">Làm sạch mà không hư sợi vải, an toàn cho da</p>
        <div class="features-grid">
            @php $featureIcons = ['👶','💪','🎨','🌿','🧪','🧴']; $featureNames = ['Phù hợp cả quần áo trẻ em','Xử lý mọi vết bẩn cứng đầu','Không loang màu quần áo','Không ám mùi sau khi giặt','Không Clo – không hại vải','An toàn cho da tay, không cay rát']; @endphp
            @for ($i = 0; $i < 6; $i++)
                <div class="feature-item"><div class="icon">{{ $featureIcons[$i] }}</div><h4>{{ $featureNames[$i] }}</h4></div>
            @endfor
        </div>
    </div>
</section>

<!-- ===== 10. FABRIC TYPES ===== -->
<section class="section">
    <div class="container">
        <h2 class="section-title">ĐẶT ĐƯỢC TRÊN <span style="color:#e52d27;">NHIỀU LOẠI VẢI</span></h2>
        <div class="fabric-grid">
            @php $fabrics = ['Vải bông','Vải kaki','Vải sợi','Vải voan','Vải tổng hợp','Các loại vải màu']; @endphp
            @foreach ($fabrics as $f)
                <div class="fabric-item">🧶 {{ $f }}</div>
            @endforeach
        </div>
    </div>
</section>

<!-- ===== 11. CUSTOMER REVIEWS ===== -->
<section class="section review-gallery">
    <div class="container">
        <h2 class="section-title">ĐÁNH GIÁ CỦA <span style="color:#e52d27;">KHÁCH HÀNG</span></h2>
        <div class="review-grid">
            @php $reviewImages = $images['review'] ?? collect(); @endphp
            @forelse ($reviewImages as $img)
                <img src="{{ asset('storage/' . $img->image_path) }}" alt="{{ $img->alt_text ?? $img->title }}">
            @empty
                @for ($i = 0; $i < 6; $i++)
                    <div style="height:180px;background:#e0e0e0;border-radius:8px;display:flex;align-items:center;justify-content:center;color:#999;">Review</div>
                @endfor
            @endforelse
        </div>
    </div>
</section>

<!-- ===== 12. SOCIAL PROOF ===== -->
<section class="section proof">
    <div class="container">
        <h2 class="section-title">HIỆU QUẢ ĐÃ ĐƯỢC <span style="color:#e52d27;">KIỂM CHỨNG</span></h2>
        <div class="proof-stats">
            <div><div class="num">162.968+</div><div class="label">📦 Đã bán</div></div>
            <div><div class="num">6.382+</div><div class="label">💬 Đánh giá tích cực</div></div>
        </div>
        <div class="ba-grid" style="margin-bottom:20px;">
            @php $productImages = $images['product'] ?? collect(); @endphp
            @forelse ($productImages as $img)
                <div class="ba-card"><img src="{{ asset('storage/' . $img->image_path) }}" alt="{{ $img->alt_text ?? $img->title }}"></div>
            @empty
                <div class="ba-card"><div style="height:160px;background:#ddd;display:flex;align-items:center;justify-content:center;color:#999;">Sản phẩm</div></div>
            @endforelse
        </div>
        <div style="display:flex;align-items:center;justify-content:space-between;background:#fff;border-radius:12px;padding:16px 24px;margin-top:16px;">
            <div style="font-weight:900;font-size:40px;color:#e52d27;line-height:1;">🔥 ƯU ĐÃI <span style="font-size:56px;">70%</span></div>
            <a href="#order" class="btn-buy" style="display:inline-block;background:linear-gradient(135deg,#e52d27,#b31217);color:#fff;padding:14px 48px;border-radius:50px;font-weight:700;font-size:16px;text-decoration:none;animation:pulseBtn 1s infinite;">NHẬN ƯU ĐÃI</a>
        </div>
    </div>
</section>

<!-- ===== 13. TRUST BADGE ===== -->
<section class="section" style="padding:20px 0;text-align:center;">
    <div class="container">
        <div style="font-size:24px;font-weight:800;color:#019abe;border:2px dashed #019abe;border-radius:16px;padding:24px;display:inline-block;">
            ⭐ 1000+ KHÁCH HÀNG TIN DÙNG
        </div>
    </div>
</section>

<!-- ===== 14. SEPARATOR ===== -->
<section style="background:#f6e4db;height:60px;display:flex;align-items:center;justify-content:center;">
    <div style="width:60px;height:4px;background:#e52d27;border-radius:2px;"></div>
</section>

<!-- ===== 15. ORDER FORM ===== -->
<section class="section order-section" id="order">
    <div class="container">
        <div class="order-box">
            <h3>📋 THÔNG TIN ĐẶT HÀNG</h3>
            <div class="ship-note">🚚 SHIP HÀNG TOÀN QUỐC – KIỂM TRA HÀNG TRƯỚC KHI THANH TOÁN</div>
            <div class="order-product">
                <div class="name">🧺 Bột Tẩy Trắng Enzyme Sinh Học</div>
                <div class="discount" style="color:#e52d27;font-size:13px;font-weight:600;">🔥 Giảm 70% hôm nay</div>
            </div>
            <div class="countdown" style="margin:10px 0;">
                <div class="countdown-item"><div class="num" id="days2">00</div><div class="label">Ngày</div></div>
                <div class="countdown-item"><div class="num" id="hours2">00</div><div class="label">Giờ</div></div>
                <div class="countdown-item"><div class="num" id="minutes2">00</div><div class="label">Phút</div></div>
                <div class="countdown-item"><div class="num" id="seconds2">00</div><div class="label">Giây</div></div>
            </div>
            <div class="packages">
                <div class="package">
                    <div class="pkg-name">Mua 1 lọ</div>
                    <div><span class="pkg-old">299.000₫</span> <span class="pkg-price">99.000₫</span></div>
                    <div class="pkg-gift">+ 30.000₫ phí ship</div>
                </div>
                <div class="package">
                    <div class="pkg-name">🔥 Mua 2 lọ</div>
                    <div><span class="pkg-old">598.000₫</span> <span class="pkg-price">189.000₫</span></div>
                    <div class="pkg-gift">🎁 Miễn phí ship + Tặng 2 túi thơm thảo mộc (trị giá 60.000₫)</div>
                </div>
                <div class="package">
                    <div class="pkg-name">🔥 Mua 3 lọ</div>
                    <div><span class="pkg-old">897.000₫</span> <span class="pkg-price">249.000₫</span></div>
                    <div class="pkg-gift">🎁 Miễn phí ship + Tặng 3 túi thơm thảo mộc (trị giá 90.000₫)</div>
                </div>
                <div class="package">
                    <div class="pkg-name">🔥 Mua 5 lọ</div>
                    <div><span class="pkg-old">1.495.000₫</span> <span class="pkg-price">349.000₫</span></div>
                    <div class="pkg-gift">🎁 Miễn phí ship + Tặng 5 túi thơm thảo mộc (trị giá 150.000₫)</div>
                </div>
            </div>
            <p style="font-size:12px;color:#e52d27;text-align:center;margin-bottom:16px;">⚠️ Chỉ còn duy nhất 32 phần quà tặng</p>
            <div id="pkgErr" style="color:#e52d27;font-size:13px;text-align:center;margin-bottom:10px;display:none;">⚠️ Vui lòng chọn gói sản phẩm</div>
            <form id="orderForm" onsubmit="return submitOrder(event)">
                <input type="hidden" name="product" id="selectedPackage" value="">
                <div class="form-group">
                    <label>Họ và tên *</label>
                    <input type="text" name="name" required placeholder="Nhập họ tên">
                </div>
                <div class="form-group">
                    <label>Số điện thoại *</label>
                    <input type="tel" name="phone" placeholder="Nhập số điện thoại (10 số)">
                    <div id="phoneErr" style="color:#e52d27;font-size:12px;margin-top:4px;display:none;">SĐT phải đúng 10 số</div>
                </div>
                <div class="form-group">
                    <label>Tỉnh / Thành phố</label>
                    <select name="province" id="provinceSelect">
                        <option value="">-- Chọn Tỉnh / Thành --</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Quận / Huyện</label>
                    <select name="district" id="districtSelect">
                        <option value="">-- Chọn Quận / Huyện --</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Phường / Xã</label>
                    <select name="ward" id="wardSelect">
                        <option value="">-- Chọn Phường / Xã --</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Địa chỉ cũ (số nhà, tên đường)</label>
                    <input type="text" name="address" placeholder="VD: 123 Nguyễn Huệ">
                </div>
                <button type="submit" class="btn-submit">✅ XÁC NHẬN ĐẶT HÀNG</button>
            </form>
            <script>
            function submitOrder(e) {
                e.preventDefault();
                const f = document.getElementById('orderForm');
                const btn = f.querySelector('button[type=submit]');
                const phone = f.phone.value.replace(/\D/g, '');
                document.getElementById('phoneErr').style.display = 'none';
                document.getElementById('pkgErr').style.display = 'none';
                if (phone.length !== 10) {
                    document.getElementById('phoneErr').style.display = 'block';
                    f.phone.focus();
                    return false;
                }
                if (!f.product.value) {
                    document.getElementById('pkgErr').style.display = 'block';
                    document.querySelector('.packages').scrollIntoView({ behavior: 'smooth', block: 'center' });
                    return false;
                }
                btn.disabled = true; btn.textContent = '⏳ Đang gửi...';
                var pkgIdx = Array.from(document.querySelectorAll('.package')).findIndex(p => p.classList.contains('selected'));
                var amt = [' - 129.000₫',' - 189.000₫',' - 249.000₫',' - 349.000₫'][pkgIdx] || '';
                const data = { name: f.name.value, phone: f.phone.value, address: f.address.value, province: f.province.value, district: f.district.value, ward: f.ward.value, product: f.product.value + amt };
                fetch('https://script.google.com/macros/s/AKfycbw8Itk_xbcBeMIIbnjIwv1RGTlSZVHUExn7aOs21jbTJm-p-bJutz0EqXnQcVfQHfQx/exec', {
                    method: 'POST', mode: 'no-cors', body: JSON.stringify(data), headers: { 'Content-Type': 'text/plain' }
                }).then(() => {
                    btn.textContent = '✅ ĐÃ GỬI! CẢM ƠN BẠN';
                    btn.style.background = '#28a745';
                    f.reset();
                    document.getElementById('thankupopup').style.display = 'flex';
                    setTimeout(() => { btn.disabled = false; btn.textContent = '✅ XÁC NHẬN ĐẶT HÀNG'; btn.style.background = ''; }, 3000);
                }).catch(() => {
                    btn.textContent = '❌ LỖI! THỬ LẠI';
                    btn.disabled = false;
                    setTimeout(() => btn.textContent = '✅ XÁC NHẬN ĐẶT HÀNG', 2000);
                });
                return false;
            }
            </script>
        </div>
    </div>
</section>

<!-- ===== 16. COMMITMENTS + USAGE ===== -->
<section class="section">
    <div class="container">
        <div style="background:#fff3cd;border:1px dashed #ffc107;border-radius:12px;padding:16px;font-size:14px;text-align:center;margin-bottom:32px;">
            💡 Lưu ý: Nếu có thời gian nên ngâm qua đêm cho sạch sâu và trắng hơn. Sản phẩm không chứa Clo, không lo mục vải.
        </div>
        <h2 class="section-title">CAM KẾT VÀ CHÍNH SÁCH <span style="color:#e52d27;">BÁN HÀNG</span></h2>
        <div class="commit-grid">
            <div class="commit-card">
                <div class="icon">📦</div>
                <h4>Hàng chính hãng</h4>
                <p>Nhập khẩu chính ngạch, đầy đủ chứng từ VAT</p>
            </div>
            <div class="commit-card">
                <div class="icon">🔄</div>
                <h4>Chính sách đổi trả</h4>
                <p>Hoàn tiền nếu không đúng như quảng cáo</p>
            </div>
            <div class="commit-card">
                <div class="icon">🔍</div>
                <h4>Kiểm tra hàng</h4>
                <p>Kiểm tra kỹ trước khi thanh toán</p>
            </div>
            <div class="commit-card">
                <div class="icon">🚚</div>
                <h4>Giao hàng toàn quốc</h4>
                <p>Giao nhanh 2-4 ngày</p>
            </div>
        </div>
        @if (isset($images['usage']) && $images['usage']->count())
            <div style="max-width:500px;margin:24px auto 0;">
                <img src="{{ asset('storage/' . $images['usage']->first()->image_path) }}" alt="Hướng dẫn sử dụng" style="width:100%;border-radius:12px;">
            </div>
        @endif
    </div>
</section>

<!-- ===== 17. COMMENTS ===== -->
<section class="section" style="background:#f9f9f9;">
    <div class="container">
        <h2 class="section-title">💬 <span style="color:#e52d27;">6.382</span> BÌNH LUẬN</h2>
        <div class="comments-wrap">
            @php $commentNames = ['Minh Tuấn','Thu Hà','Văn Nam','Hồng Nhung','Quốc Anh','Kim Vân','Hoàng Long','Nhã Hiền']; $commentTexts = ['Sản phẩm tốt lắm shop ơi, mình dùng thử 1 lần là sạch hết vết ố luôn','Mình đặt 2 lọ rồi, giao hàng nhanh, hiệu quả bất ngờ','Lần đầu mua nhưng rất ưng, sẽ ủng hộ shop dài dài', 'Đã dùng được 1 tháng, áo trắng sáng hẳn lên, không bị vàng cổ áo nữa', 'Bột tan nhanh, không mùi hắc, an toàn cho da tay', 'Mình mua tặng mẹ, mẹ khen sạch và thơm lắm ạ', 'Shop tư vấn nhiệt tình, đóng gói cẩn thận, cảm ơn shop!', 'Hàng chuẩn chính hãng, có mã QR kiểm tra, yên tâm sử dụng']; $commentReplies = ['Cảm ơn bạn Minh Tuấn đã dùng thử! Bột enzyme của shop tan nhanh không lo bám cặn nên sạch sâu mà vải vẫn bền ạ 😊','Dạ cảm ơn Thu Hà đã tin tưởng đặt 2 lọ! Khi nào dùng hết bạn nhắn shop sớm nhé để được giá ưu đãi riêng ạ','Em cảm ơn Văn Nam đã ủng hộ! Bộ sưu tập mới vừa về, anh ghé xem thêm combo tiết kiệm nha','Tuyệt vời! Hồng Nhung dùng đúng cách là áo trắng sáng bền lắm. Cứ ngâm qua đêm cho hiệu quả tối ưu nhất ạ','Chuẩn luôn ạ! Bột enzyme sinh học không Clo nên an toàn tuyệt đối, không lo mục vải hay hại da tay','Cảm ơn Kim Vân! Mẹ vui là shop vui rồi ạ. Có nhu cầu gì thêm cứ để shop hỗ trợ nha','Dạ cảm ơn Hoàng Long! Shop luôn cố gắng đóng gói kỹ lưỡng để hàng đến tay khách là ưng ý nhất ạ','Yên tâm nha Nhã Hiền! Toàn bộ sản phẩm đều có tem QR chính hãng, truy xuất nguồn gốc rõ ràng ạ']; @endphp
            @php $customAvatars = isset($images['comment_avatar']) ? $images['comment_avatar']->values() : null; @endphp
            @for ($i = 0; $i < 8; $i++)
            <div class="comment">
                <div class="avatar" style="display:flex;align-items:center;justify-content:center;overflow:hidden;border-radius:50;">@if($i >= 6)<span style="font-weight:700;font-size:16px;color:#fff;background:#999;width:100%;height:100%;display:flex;align-items:center;justify-content:center;">{{ ['HL','NH'][$i-6] }}</span>@else<img src="{{ $customAvatars && isset($customAvatars[$i]) ? asset('storage/' . $customAvatars[$i]->image_path) : asset('/storage/avatars/default/avatar_' . $i . '.jpg') }}" alt="" style="width:100%;height:100%;object-fit:cover;">@endif</div>
                <div class="body">
                    <div class="name">{{ $commentNames[$i] }}</div>
                    <div class="text">{{ $commentTexts[$i] }}</div>
                    <div class="actions">
                        <span>👍 Like</span>
                        <span>💬 Reply</span>
                        <span>{{ rand(1,59) }} phút trước</span>
                    </div>
                    <div class="reply-box">
                        <strong>MEGA MART VN</strong> – {{ $commentReplies[$i] }}
                    </div>
                </div>
            </div>
            @endfor
            <div style="display:flex;align-items:center;gap:6px;margin-top:12px;padding:8px 0;font-size:13px;color:#999;">
                <span style="display:inline-flex;gap:2px;">
                    <span class="typing-dot" style="width:6px;height:6px;border-radius:50%;background:#999;display:inline-block;"></span>
                    <span class="typing-dot" style="width:6px;height:6px;border-radius:50%;background:#999;display:inline-block;"></span>
                    <span class="typing-dot" style="width:6px;height:6px;border-radius:50%;background:#999;display:inline-block;"></span>
                </span>
                <span>Ai đó đang bình luận</span>
            </div>
            <div style="text-align:center;margin-top:4px;">
                <span style="color:#e52d27;font-weight:600;font-size:13px;cursor:pointer;opacity:.7;">Xem thêm 6266 bình luận</span>
            </div>
        </div>
    </div>
</section>

<style>
.typing-dot { animation: typingPulse 1.4s infinite; }
.typing-dot:nth-child(2) { animation-delay: .2s; }
.typing-dot:nth-child(3) { animation-delay: .4s; }
@keyframes typingPulse { 0%,60%,100% { opacity: .3; transform: scale(1); } 30% { opacity: 1; transform: scale(1.3); } }
</style>

<!-- ===== 18. FOOTER ===== -->
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div>
                <h4>🧺 Bột Tẩy Trắng Enzyme Sinh Học</h4>
                <p>Sản phẩm chất lượng cao – Chính hãng – An toàn</p>
            </div>
            <div>
                <h4>Liên hệ</h4>
                <ul>
                    <li>📍 720A Điện Biên Phủ, Vinhomes Tân Cảng, Bình Thạnh, HCM</li>
                    <li>📞 0325.449.402</li>
                    <li>✉️ cskh@megamart.vn</li>
                </ul>
            </div>
            <div>
                <h4>Dịch vụ khách hàng</h4>
                <ul>
                    <li><a href="#">Hướng dẫn mua hàng</a></li>
                    <li><a href="#">Chính sách đổi trả</a></li>
                    <li><a href="#">Chính sách vận chuyển</a></li>
                    <li><a href="#">Câu hỏi thường gặp</a></li>
                </ul>
            </div>
            <div>
                <h4>Thanh toán</h4>
                <p>Visa, Mastercard, Chuyển khoản</p>
                <p style="margin-top:8px;font-size:11px;color:#999;">Đã thông báo Bộ Công Thương</p>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2026 Mega Mart. Tất cả quyền được bảo lưu.
        </div>
    </div>
</footer>

<script>
    // Gallery carousel
    let currentSlide = 0;
    const track = document.getElementById('galleryTrack');
    const dots = document.querySelectorAll('#galleryDots span');
    const totalSlides = document.querySelectorAll('.slide').length;

    function moveGallery(dir) { goToSlide(currentSlide + dir); }

    function goToSlide(idx) {
        if (idx < 0) idx = totalSlides - 1;
        if (idx >= totalSlides) idx = 0;
        currentSlide = idx;
        if (track) { track.style.transform = 'translateX(-' + (idx * 100) + '%)'; }
        dots.forEach((d, i) => { d.classList.toggle('active', i === idx); });
    }

    // Package selection
    var pkgNames = ['Mua 1 lọ','Mua 2 lọ','Mua 3 lọ','Mua 5 lọ'];
    var pkgAmounts = ['129.000₫','189.000₫','249.000₫','349.000₫'];
    document.querySelectorAll('.package').forEach((pkg, idx) => {
        pkg.addEventListener('click', function() {
            var inp = document.getElementById('selectedPackage');
            if (this.classList.contains('selected')) {
                this.classList.remove('selected');
                inp.value = '';
            } else {
                document.querySelectorAll('.package').forEach(p => p.classList.remove('selected'));
                this.classList.add('selected');
                inp.value = pkgNames[idx];
            }
            document.getElementById('pkgErr').style.display = 'none';
        });
    });

    // Countdown
    var countdownStarted = false; var countdownTimer = null;
    var countdownObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(e) {
            if (e.isIntersecting && !countdownStarted) {
                countdownStarted = true;
                var endDate = new Date(); endDate.setMinutes(endDate.getMinutes() + 44); endDate.setSeconds(endDate.getSeconds() + 15);
                function updateCountdown() {
                    var diff = endDate - new Date();
                    if (diff <= 0) { ['days','hours','minutes','seconds'].forEach(function(id){ var el=document.getElementById(id); if(el) el.textContent='00'; var el2=document.getElementById(id+'2'); if(el2) el2.textContent='00'; }); return; }
                    var d = Math.floor(diff/(1000*60*60*24)), h = Math.floor((diff%(1000*60*60*24))/(1000*60*60)), m = Math.floor((diff%(1000*60*60))/(1000*60)), s = Math.floor((diff%(1000*60))/1000);
                    ['days','hours','minutes','seconds'].forEach(function(id, i){
                        var val = [d,h,m,s][i];
                        var el = document.getElementById(id); if(el) el.textContent = String(val).padStart(2,'0');
                        var el2 = document.getElementById(id+'2'); if(el2) el2.textContent = String(val).padStart(2,'0');
                    });
                }
                updateCountdown();
                countdownTimer = setInterval(updateCountdown, 1000);
            }
        });
    }, { threshold: 0.1 });
    var countdownEl = document.querySelector('.countdown'); if(countdownEl) countdownObserver.observe(countdownEl);

    // Auto hide toast
    setTimeout(() => { document.querySelector('.toast')?.remove(); }, 4000);

    // ===== Cascading location dropdowns =====
    (function() {
        var pSel = document.getElementById('provinceSelect');
        var dSel = document.getElementById('districtSelect');
        var wSel = document.getElementById('wardSelect');
        if (!pSel) return;
        fetch('https://provinces.open-api.vn/api/p/').then(function(r){ return r.json(); }).then(function(provinces) {
            provinces.forEach(function(p) {
                var opt = document.createElement('option');
                opt.value = p.name; opt.setAttribute('data-code', p.code); opt.textContent = p.name;
                pSel.appendChild(opt);
            });
        });
        pSel.addEventListener('change', function() {
            dSel.innerHTML = '<option value="">-- Chọn Quận / Huyện --</option>';
            wSel.innerHTML = '<option value="">-- Chọn Phường / Xã --</option>';
            var code = this.options[this.selectedIndex]?.getAttribute('data-code');
            if (!code) return;
            fetch('https://provinces.open-api.vn/api/p/' + code + '?depth=2').then(function(r){ return r.json(); }).then(function(data) {
                (data.districts || []).forEach(function(d) {
                    var opt = document.createElement('option');
                    opt.value = d.name; opt.setAttribute('data-code', d.code); opt.textContent = d.name;
                    dSel.appendChild(opt);
                });
            });
        });
        dSel.addEventListener('change', function() {
            wSel.innerHTML = '<option value="">-- Chọn Phường / Xã --</option>';
            var code = this.options[this.selectedIndex]?.getAttribute('data-code');
            if (!code) return;
            fetch('https://provinces.open-api.vn/api/d/' + code + '?depth=2').then(function(r){ return r.json(); }).then(function(data) {
                (data.wards || []).forEach(function(w) {
                    var opt = document.createElement('option');
                    opt.value = w.name; opt.textContent = w.name;
                    wSel.appendChild(opt);
                });
            });
        });
    })();
</script>

<div id="thankupopup" style="display:none;position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,.5);z-index:9999;align-items:center;justify-content:center;">
    <div style="background:#fff;border-radius:20px;padding:40px 32px 28px;text-align:center;max-width:400px;width:90%;box-shadow:0 10px 40px rgba(0,0,0,.2);">
        <div style="font-size:56px;margin-bottom:12px;">🎉</div>
        <h3 style="font-size:20px;color:#333;margin:0 0 6px;">ĐẶT HÀNG THÀNH CÔNG!</h3>
        <p style="font-size:14px;color:#333;line-height:1.5;margin:0 0 8px;font-weight:600;">Đơn hàng của anh chị đã được xác nhận và gửi đi ngay hôm nay</p>
        <div style="font-size:13px;color:#666;line-height:1.6;margin-bottom:10px;text-align:left;background:#f9f9f9;border-radius:12px;padding:12px 16px;">
            <div>🚚 <strong>Miền Nam:</strong> 2-4 ngày nhận hàng</div>
            <div>🚚 <strong>Miền Trung:</strong> 3-5 ngày nhận hàng</div>
            <div>🚚 <strong>Miền Bắc:</strong> 4-6 ngày nhận hàng</div>
        </div>
        <p style="font-size:13px;color:#e52d27;font-weight:600;margin:0 0 20px;">📞 Anh chị nhớ chú ý điện thoại — sẽ có nhân viên gọi lại xác nhận đơn hàng!</p>
        <button onclick="this.closest('#thankupopup').style.display='none';window.scrollTo({top:0,behavior:'smooth'})" style="background:linear-gradient(135deg,#e52d27,#b31217);color:#fff;border:none;border-radius:50px;padding:12px 32px;font-weight:700;font-size:15px;cursor:pointer;">TRỞ VỀ TRANG CHỦ</button>
    </div>
</div>

</body>
</html>
