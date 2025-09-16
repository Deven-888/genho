<!doctype html>
<html lang="zh-Hant">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>伺服馬達・減速機・運動控制的專家</title>
  <meta name="description" content="伺服馬達、減速機、變頻與運動控制整合方案。含產品分類、產業應用、最新消息、品牌與支援服務。單檔HTML，可直接部署。">
  <style>
    :root{
      --bg:#fff; --surface:#0f1a30; --muted:#a9b3c9; --line:#233454; --brand:#3cd4c9; --brand2:#81e6b0; --text:#e6eefc;
      --chip:#142446; --pill:#112448; --radius:16px; --shadow:0 12px 30px rgba(0,0,0,.25);
    }
    *{box-sizing:border-box}
    body{margin:0;background:linear-gradient(180deg,#f7f8fa,#fafafb);color:var(--text);font-family:system-ui,-apple-system,Segoe UI,Roboto,Helvetica,Arial,'Noto Sans TC','PingFang TC','Microsoft JhengHei',sans-serif}
    a{color:var(--brand);text-decoration:none}
    .wrap{max-width:1200px;margin:auto;padding:0 20px}
    header{position:sticky;top:0;z-index:50;background:rgba(9,13,26,.7);backdrop-filter:saturate(160%) blur(10px);border-bottom:1px solid var(--line)}
    nav{display:flex;align-items:center;gap:16px;height:64px}
    .brand{display:flex;align-items:center;gap:10px;font-weight:800}
    .brand svg{width:28px;height:28px}
    .spacer{flex:1}
    .nav-links{display:flex;gap:16px;align-items:center}
    .nav-links > details{position:relative}
    .nav-links summary{list-style:none;cursor:pointer;padding:8px 10px;border-radius:8px}
    .nav-links summary::-webkit-details-marker{display:none}
    .menu{position:absolute;top:44px;left:0;display:grid;grid-template-columns:repeat(3, minmax(180px,1fr));gap:12px;background:var(--surface);border:1px solid var(--line);padding:14px;border-radius:12px;box-shadow:var(--shadow);min-width:640px}
    .menu a{display:block;padding:8px 10px;border-radius:8px;color:#dce8ff;border:1px solid transparent}
    .menu a:hover{background:#0c1730;border-color:#23406f}
    .btn{display:inline-flex;align-items:center;gap:8px;padding:10px 14px;border-radius:10px;font-weight:700;background:linear-gradient(135deg,var(--brand),var(--brand2));color:#071424;border:0}
    .btn.ghost{background:transparent;border:1px solid var(--line);color:var(--text)}
    .mobile{display:none}

    /* hero */
    .hero{position:relative;padding:72px 0 48px;border-bottom:1px solid var(--line)}
    .hero h1{font-size:clamp(28px,4vw,44px);line-height:1.12;margin:0 0 12px}
    .hero p{color:var(--muted);max-width:760px}
    .badges{display:flex;gap:10px;flex-wrap:wrap;margin-top:16px}
    .chip{background:var(--chip);border:1px solid var(--line);padding:7px 12px;border-radius:999px;color:#d7e6ff;font-size:13px}
    .hero-cta{display:flex;gap:10px;flex-wrap:wrap;margin-top:22px}
    /*.glow{position:absolute;inset:auto -20% -50% -20%;height:560px;background:radial-gradient(40% 40% at 30% 20%, rgba(60,212,201,.28), transparent 60%), radial-gradient(50% 50% at 65% 70%, rgba(129,230,176,.25), transparent 60%)}*/

    section{padding:48px 0}
    h2{margin:0 0 8px;font-size:clamp(22px,3vw,32px);color: #155191b8;}
    .sub{color:var(--muted);margin:0 0 20px}

    /* category tiles */
    .grid{display:grid;grid-template-columns:repeat(12,1fr);gap:16px}
    .card{grid-column:span 6;background: white;border: 2px solid #007BFF;border-radius:var(--radius);padding:18px;box-shadow:var(--shadow)}
    .card h3{margin:0 0 6px;color: #375e89;}
    .card p{color:var(--muted);margin:6px 0 0}
    .card .act{display:flex;gap:10px;margin-top:12px;flex-wrap:wrap}
    .card .act a{padding:8px 12px;border-radius:8px;border:1px solid var(--line)}
    .card .act a.primary{background:linear-gradient(135deg,var(--brand),var(--brand2));color:#071424;border:0;font-weight:800}

    /* features */
    .features{display:grid;grid-template-columns:repeat(12,1fr);gap:16px}
    .feature{grid-column:span 4;background:linear-gradient(180deg,#0f1a33,#0c162b);border:1px solid var(--line);border-radius:14px;padding:16px}
    .feature h4{margin:6px 0}
    .feature p{color:var(--muted);margin:4px 0 0}

    /* news */
    .news{display:grid;grid-template-columns:repeat(12,1fr);gap:16px}
    .news .item{grid-column:span 4;background:#0d172e;border:1px solid var(--line);border-radius:14px;padding:14px}
    .news time{color:#9cb7ff;font-size:13px}

    /* brands */
    .brands{display:grid;grid-template-columns:repeat(12,1fr);gap:16px;align-items:center}
    .brands .logo{grid-column:span 2;padding:16px;display:flex;align-items:center;justify-content:center}

    /* table */
    .table{background:#0f1b33;border:1px solid var(--line);border-radius:14px;overflow:auto}
    table{width:100%;border-collapse:collapse;min-width:720px}
    th,td{padding:12px 14px;border-bottom:1px solid #1b2d51;text-align:left}
    th{background:#102243;color:#dbe9ff;position:sticky;top:0}
    tr:hover td{background:#0c162b}

    /* footer */
    footer{border-top:1px solid var(--line);padding:30px 0;color:#9db0ce}

    /* responsive */
    @media (max-width: 960px){
      .card{grid-column:span 12}
      .feature{grid-column:span 6}
      .news .item{grid-column:span 6}
      .brands .logo{grid-column:span 3}
    }
    @media (max-width: 640px){
      .mobile{display:block}
      .nav-links{display:none}
      .feature,.news .item,.brands {grid-column:span 12}
      .logo{grid-column:span 4}
    }
    
    /*.hero-media { position:absolute; inset:0; z-index:-1; }
    .hero-video {
      width:100%; height:100%; object-fit:cover;
      filter: none;            
    }*/
    .hero {
      position: relative;
      /* 你要的區塊高度：一個螢幕高，或自己調整 */
      height: 100vh;               /* 或用 clamp(480px, 100svh, 860px) */
      overflow: hidden;
    }

    /* 讓影片鋪滿整個 hero 區塊 */
    .hero-media,
    .hero-video {
      position: absolute;
      inset: 0;                    /* top/right/bottom/left: 0 */
      width: 100%;
      height: 100%;
    }

    .hero-video {
      object-fit: cover;           /* 鋪滿，不留黑邊，會裁切 */
      object-position: center;     /* 可改 'center top' 把重點放上方 */
    }

/* 不需要設定 .hero-media 的 height:80% 了 */

    .capabilities { margin-block: 32px; }
    .capabilities h2 { margin: 0 0 12px; font-weight: 800; }

    .caps {
      display: grid;
      grid-template-columns: repeat(12, 1fr);
      gap: 16px;
      margin: 0; padding: 0;
    }

    .cap {
      grid-column: span 6;
      background: #fff;                 /* 或 transparent */
      border: 2px solid #007BFF;        /* 品牌藍框線 */
      border-radius: 12px;               /* 也可用 var(--radius) */
      padding: 16px 18px;
    }

    .cap dt {
      margin: 0 0 6px;
      font-weight: 800;
      color: #0f1b34;                    /* 或 var(--title) */
      display: flex; align-items: center; gap: 8px;
    }

    .cap dd {
      margin: 0;
      color: #4b5563;                    /* 或 var(--muted) */
      line-height: 1.6;
    }

    .icon { font-size: 1.2em; }

    /* 窄螢幕改為單欄 */
    @media (max-width: 768px){
      .cap { grid-column: span 12; }
}

    .cap-image {
      text-align: center;       /* 置中顯示 */
    }

    .cap-image img {
      max-width: 100%;          /* 最寬不超過容器（螢幕寬度） */
      height: auto;             /* 保持比例 */
      display: inline-block;    /* 讓 text-align: center 生效 */
    }

    /*--===================================================--*/
    #products .card{
      grid-column: span 3;        /* 桌機：12/3 = 4 個一排 */
    }

    /* 平板/手機：2 欄 */
    @media (max-width: 960px){
      #products .card{ grid-column: span 6; }  /* 12/6 = 2 個一排 */
    }
    @media (max-width: 640px){
      #products .card{ grid-column: span 6; }  /* 保持 2 個一排 */
    }

    /* 置中卡片內的圖片 */
    #products .card img{
      display: block;
      margin: 8px auto 12px; /* 上 8、中置、下 12 */
    }

    /* 置中「查看型錄」按鈕區 */
    #products .card .act{
      display: flex;
      justify-content: center;
      gap: 10px;
    }

    /* map —— responsive embed */
    .map-embed{
      position: relative;
      width: 100%;
      border: 1px solid var(--line);
      border-radius: 14px;
      overflow: hidden;
      box-shadow: var(--shadow);
    }
    /* 16:9 比例，可依需要改成 3/2、4/3 等 */
    .map-embed::before{
      content: "";
      display: block;
      padding-top: 56.25%;
    }
    .map-embed iframe{
      position: absolute; inset: 0;
      width: 100%; height: 100%;
      border: 0;
    }
  </style>
</head>
<body>
  <header>
    <div class="wrap">
      <nav>
        <a class="brand" href="#" aria-label="brand">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true"><path d="M3 12a9 9 0 1 1 18 0" stroke="url(#g)" stroke-width="2"/><path d="M6 12a6 6 0 1 0 12 0" stroke="#81e6b0" stroke-width="2"/><defs><linearGradient id="g" x1="3" y1="3" x2="21" y2="21"><stop stop-color="#3cd4c9"/><stop offset="1" stop-color="#81e6b0"/></linearGradient></defs></svg>
          <span>精禾科技股份有限公司</span>
        </a>
        <div class="spacer"></div>
        <button class="btn ghost mobile" onclick="document.querySelector('.nav-links')?.classList.toggle('open')">選單</button>
        <div class="nav-links">
          <a href="#solutions">解決方案</a>
          <details>
            <summary>產品 ▾</summary>
            <div class="menu" role="menu">
              <div>
                <strong>Motion Control</strong>
                <a href="#p-ipc">IPC</a>
                <a href="#p-ctrl">Motion / CNC / PLC</a>
                <a href="#p-hmi">HMI / Ethernet / Remote I/O</a>
                <a href="#p-sense">Sensor / Power / Measurement</a>
              </div>
              <div>
                <strong>VFD & Servo</strong>
                <a href="#p-vfd">VFD & Energy Saving</a>
                <a href="#p-servo">Servo Drive / Motor / Linear / DD</a>
                <a href="#p-slide">Slide & Positioning</a>
              </div>
              <div>
                <strong>Mechanical Transmission</strong>
                <a href="#p-reducer">Reducer</a>
                <a href="#p-coupling">Coupling / Power‑Lock</a>
                <a href="#p-brake">Clutch / Brake</a>
                <a href="#p-linear">Ball Screw / Linear Guide</a>
                <a href="#p-bearing">Bearing / Freebear</a>
              </div>
            </div>
          </details>
          <a href="#brands">合作品牌</a>
          <a href="#support">技術支援</a>
          <a class="btn" href="#contact">How to Buy</a>
        </div>
      </nav>
    </div>
  </header>

  <main>
    <section class="hero">
       
        <div class="hero-media">
          <video class="hero-video" autoplay muted loop playsinline preload="auto" poster="hero.jpg">
            <source src="images/cover_video.mp4"  type="video/mp4">
            你的瀏覽器不支援影片。
          </video>
        </div>
  
    </section>
    
        <div class="wrap">
            <h2>快速查詢產品</h2>
            <p class="sub">輸入關鍵字（品名、型號或類別），按查詢會在新頁顯示結果。</p>

           <form style="display:flex; gap:10px;" method="get" action="search.php" aria-label="product search">
            
              <input
                name="q"
                style="width:100%;padding:10px;border-radius:8px;border:1px solid var(--line);background:#ffffff;color:var(--text)"
                required>
           
            <button class="btn" type="submit">查詢</button>
          </form>
        </div>

    </section>

    <section id="products">
      <div class="wrap">
        <h2>產品分類</h2>
        
        <div class="grid">
          <article class="card" id="p-servo">
            <h3>馬達</h3>
             <img src="images/M1.jpg" alt="XXX" width="100">
            <!--<p>涵蓋伺服驅動器、伺服馬達、直線/直驅馬達、滑台與定位模組，滿足高速、高精度定位需求。</p>-->
            <div class="act">
              <a class="primary" href="#spec">查看型錄</a>
             
            </div>
          </article>
          <article class="card" id="p-reducer">
            <h3>伺服馬達</h3>
            <img src="images/M2.jpg" alt="XXX" width="100">
            <!--<p>行星、直角、同軸型減速機與聯軸器、緊定套，提供低背隙與高剛性組合，對應多品牌伺服法蘭。</p>-->
            <div class="act">
              <a class="primary" href="#spec">查看型錄</a>
             
            </div>
          </article>
          <article class="card" id="p-ctrl">
            <h3>減速機</h3>
            <img src="images/M3.jpg" alt="XXX" width="100">
            <!--<p>IPC、運動控制卡/CNC/PLC、HMI、Ethernet 與遠端 I/O，整合感測、電源與高精度量測設備。</p>-->
            <div class="act">
              <a class="primary" href="#contact">查看型錄</a>
             
            </div>
          </article>
          <article class="card" id="p-pneumatic">
            <h3>其它元件</h3>
            <img src="images/M1.jpg" alt="XXX" width="100">
            <!--<p>空壓處理組合、電磁閥、汽缸、接頭、真空與流量/簧片開關等，支援工廠多元應用。</p>-->
            <div class="act">
              <a class="primary" href="#contact">查看型錄</a>
             
            </div>
          </article>
        </div>
      </div>
      
    </section>
    <section class="capabilities">
      <div class="wrap">
      <h2>我們的核心能力</h2>
      <dl class="caps">
        <div class="cap">
          <dt><span class="icon" aria-hidden="true">📦</span> 產品種類齊全</dt>
          <dd>包括擺線、齒輪、蝸輪、螺旋、軸上型與微型減速機等多款機型，能夠滿足從小型應用到大型重載的不同場景需求。</dd>
        </div>

        <div class="cap">
          <dt><span class="icon" aria-hidden="true">⚙️</span> 行業解決方案</dt>
          <dd>應用於機械手臂、輸送系統、自動化組裝、電梯與大型設備等，提供客製化與系統整合服務。</dd>
        </div>

        <div class="cap">
          <dt><span class="icon" aria-hidden="true">✅</span> 品質與信賴保證</dt>
          <dd>每件產品均通過嚴謹測試與品質控管，依專案環境條件搭配最適合的產品，確保性能與壽命。</dd>
        </div>

        <div class="cap">
          <dt><span class="icon" aria-hidden="true">🤝</span> 專業服務與售後支援</dt>
          <dd>不只是銷售，更提供長期的產品維護、定期檢查與即時替換，與客戶建立長期合作和信任。</dd>
        </div>
      </dl>
      <div class="cap-image">
        <img src="images/core-abilities.png" alt="我們的核心能力結構圖">
      </div>
      </div>
    </section>

    <section id="solutions">
      <div class="wrap">
         <h2>我們的願景與使命</h2>
        <p class="sub">精禾不只提供機械元件，而是為客戶架構完整的機械自動化解決方案。我們秉持以下理念：</p>
        <div class="features">
          <div class="feature">
            <h4>使命必達</h4>
            <p>客戶的需求就是我們的目標，每個專案都是我們共同打造的使命。</p>
          </div>
          <div class="feature">
            <h4>系統整合能力</h4>
            <p>從零件搭配到整體系統運作，我們協助客戶設計、串聯與調校所有關鍵環節。</p>
          </div>
          <div class="feature">
            <h4>全球視野</h4>
            <p>服務遍及台灣、中國大陸、美國、日本、印度等地。未來，我們持續向國際市場擴展，提供穩定、專業、值得信賴的產品與服務。</p>
          </div>
        </div>
      </div>
    </section>

   

    <section id="brands">
      <div class="wrap">
        <h2>品牌代理</h2>
        <p class="sub">主要代理/合作夥伴</p>
        <div class="brands">
          <div class="logo"><span><img src="images/b01.jpg" width="100"></span></div>
          <div class="logo"><span><img src="images/b02.jpg" width="100"></span></div>
          <div class="logo"><span><img src="images/b03.jpg" width="100"></span></div>
          <div class="logo"><span><img src="images/b04.jpg" width="100"></span></div>
          <div class="logo"><span><img src="images/b05.jpg" width="100"></span></div>
          <div class="logo"><span><img src="images/b06.jpg" width="100"></span></div>
          <div class="logo"><span><img src="images/b07.jpg" width="100"></span></div>
          <div class="logo"><span><img src="images/b08.jpg" width="100"></span></div>
        </div>
      </div>
    </section>

    <section id="spec">
      <div class="wrap">
        <h2>規格速覽</h2>
        <p class="sub">示範規格表：可替換為實際產品型號、減速比、額定扭矩與容許背隙等。</p>
        <div class="table">
          <table>
            <thead>
              <tr><th>型號</th><th>系列</th><th>減速比</th><th>額定扭矩</th><th>背隙</th><th>對應伺服法蘭</th></tr>
            </thead>
            <tbody>
              <tr><td>PX60‑L</td><td>行星（低背隙）</td><td>3~100</td><td>35 N·m</td><td>≤ 5 arc‑min</td><td>60/70</td></tr>
              <tr><td>RX90‑H</td><td>直角（高剛性）</td><td>5~50</td><td>120 N·m</td><td>≤ 8 arc‑min</td><td>80/90</td></tr>
              <tr><td>IN120‑S</td><td>同軸（標準）</td><td>3~30</td><td>180 N·m</td><td>≤ 10 arc‑min</td><td>110/130</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section id="downloads">
      <div class="wrap">
        <h2>資料下載</h2>
        <p class="sub">提供型錄、2D/3D 圖檔與操作手冊（示範連結）。</p>
        <div class="grid">
          <div class="card"><h3>產品型錄</h3><p class="muted">PDF / 15 MB</p><div class="act"><a class="primary" href="#">下載</a><a href="#">線上瀏覽</a></div></div>
          <div class="card"><h3>CAD / STEP</h3><p class="muted">共用介面尺寸檔</p><div class="act"><a class="primary" href="#">下載</a><a href="#">尺寸表</a></div></div>
          <div class="card"><h3>使用手冊</h3><p class="muted">驅動器參數設定</p><div class="act"><a class="primary" href="#">下載</a><a href="#">FAQ</a></div></div>
        </div>
      </div>
    </section>

    <section id="support">
      <div class="wrap">
        <h2>支援服務</h2>
        <p class="sub">RMA / 技術支援 / 保固說明與據點。</p>
        <div class="features">
          <div class="feature"><h4>RMA</h4><p>提供維修申請與維修進度查詢。</p></div>
          <div class="feature"><h4>Technical Service</h4><p>線上諮詢、到廠調機與教育訓練。</p></div>
          <div class="feature"><h4>Warranty</h4><p>標準保固政策與延伸保固方案。</p></div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="wrap">
        <h2>How to Buy｜聯絡我們</h2>
        <p class="sub">留下需求，取得選型與報價建議。</p>
        <form onsubmit="event.preventDefault(); alert('已送出（示範）。');" class="grid" aria-label="contact form">
          <div class="card" style="grid-column:span 6">
            <label>公司 / 姓名<br><input required style="width:100%;padding:10px;border-radius:8px;border:1px solid var(--line);background:#0b1428;color:var(--text)"></label>
          </div>
          <div class="card" style="grid-column:span 6">
            <label>Email / 電話<br><input required type="email" style="width:100%;padding:10px;border-radius:8px;border:1px solid var(--line);background:#0b1428;color:var(--text)"></label>
          </div>
          <div class="card" style="grid-column:span 12">
            <label>需求描述<br><textarea rows="4" style="width:100%;padding:10px;border-radius:8px;border:1px solid var(--line);background:#0b1428;color:var(--text)"></textarea></label>
          </div>
          <div style="grid-column:span 12"><button class="btn" type="submit">送出需求</button></div>
        </form>
      </div>
    </section>

    <section id="map">
  <div class="wrap">
    <h2>公司位置</h2>
    <p class="sub">407台中市西屯區工業區三十八路80號精禾科技股份有限公司）</p>
    <div class="map-embed" role="region" aria-label="公司地圖">
      <iframe
        src="https://www.google.com/maps?q=407台中市西屯區工業區三十八路80號&output=embed"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        allowfullscreen
      ></iframe>
    </div>
    <p class="sub" style="margin-top:12px">
      <a class="btn ghost" href="https://www.google.com/maps/search/?api=1&query=407台中市西屯區工業區三十八路80號" target="_blank" rel="noopener">
        在 Google 地圖開啟
      </a>
    </p>
  </div>
</section>

  </main>

  <footer>
    <div class="wrap">
     
          <strong>精禾科技股份有限公司/ 24696009</strong>
         
    </div>
  </footer>

  <script>
    // 關閉其他 details 以模擬單一開啟的 mega menu 體驗
    document.querySelectorAll('.nav-links details').forEach(d => {
      d.addEventListener('toggle', () => {
        if (d.open) document.querySelectorAll('.nav-links details').forEach(o => { if (o!==d) o.removeAttribute('open'); });
      });
    });
  </script>

  <!----=============================================-->
<!-- 浮動 LINE 按鈕：請放在 </body> 前 -->
<a
  href="https://page.line.me/yourlineid"
  class="floating-line"
  target="_blank"
  rel="noopener"
  aria-label="加 LINE 與我們聯繫"
>
  <svg viewBox="0 0 36 36" aria-hidden="true">
    <circle cx="18" cy="18" r="18" fill="#06C755"></circle>
    <path fill="#fff" d="M26.5 16.3c0-3.7-3.8-6.7-8.5-6.7s-8.5 3-8.5 6.7c0 3.4 3.2 6.2 7.4 6.7.29.04.67.12.77.28.09.14.06.36.03.51l-.12.71c-.03.14-.11.56.49.31 2.19-.96 4.44-2.74 6.06-4.17 1.84-1.62 2.58-3.28 2.58-4.31zM12.9 17.6h-1.4v-4h1.4v4zm3.3 0h-1.4v-4h1.4v4zm3.3 0h-1.4v-4h1.4v4zm3.3 0h-1.4v-4h1.4v4z"/>
  </svg>
</a>

<style>
  .floating-line{
    position: fixed;
    /* 先給通用的安全距離，配合 clamp() 在窄螢幕時自動往左縮 */
    left: clamp(8px, 4vw, 20px);
    bottom: clamp(12px, 4vh, 20px);

    width: 56px;
    height: 56px;
    display: grid;
    place-items: center;
    border-radius: 50%;
    background: #06C755;
    box-shadow: 0 8px 20px rgba(0,0,0,.18);
    z-index: 2147483647;
    transition: transform .15s ease, box-shadow .15s ease;
  }
  .floating-line:hover{ transform: translateY(-2px); box-shadow: 0 10px 24px rgba(0,0,0,.22); }
  .floating-line svg{ width: 70%; height: 70%; }

  /* 支援 iPhone 瀏海安全區：在原本距離上再加 safe-area */
  @supports (bottom: env(safe-area-inset-bottom)) {
    .floating-line{
      left: calc(clamp(8px, 4vw, 20px) + env(safe-area-inset-right));
      bottom: calc(clamp(12px, 4vh, 20px) + env(safe-area-inset-bottom));
    }
  }

  /* 超窄螢幕再微調，避免貼邊或被底部工具列遮到 */
  @media (max-width: 360px){
    .floating-line{
      left: 10px;
      bottom: 80px;
      width: 64px;
      height: 64px;
    }
  }

  /* 列印時隱藏 */
  @media print{ .floating-line{ display: none !important; } }
</style>


<!----=============================================-->
</body>
</html>
