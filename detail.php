<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>I ate that – Pastaskogen</title>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,700;9..144,900&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- NAVIGATION -->
  <nav>
    <div class="nav-inner">
      <a href="feed.php" class="brand">🍜 I ate that</a>
      <div class="nav-search">
        <span>🔍</span>
        <input type="text" placeholder="Sök recept...">
      </div>
      <div class="nav-links">
        <a href="feed.php"    class="nav-link">Feed</a>
        <a href="create.php"  class="nav-link">+ Lägg upp</a>
        <a href="profile.php" class="nav-link">Min profil</a>
        <a href="profile.php" class="nav-avatar">L</a>
        <a href="auth.php"    class="btn-login">Logga ut</a>
      </div>
    </div>
  </nav>

  <!-- MAIN CONTENT -->
  <div class="container">
    <div class="detail-layout">

      <a href="feed.php" class="back-link">← Tillbaka till feed</a>

      <!-- HERO BILD -->
      <div class="detail-hero-img">🍝</div>

      <!-- RUBRIK & METADATA -->
      <div class="detail-title">Pastaskogen</div>

      <div class="detail-author-row">
        <div class="detail-author-avatar">L</div>
        <div>
          <div class="detail-author-name">student_lisa</div>
          <div class="detail-author-date">Publicerad 14 februari 2026</div>
        </div>
      </div>

      <div class="detail-pills">
        <span class="pill-lg">💸💸 Billig (2/5)</span>
        <span class="pill-lg">⏰ 15 min</span>
        <span class="pill-lg">🌿 pasta</span>
        <span class="pill-lg">⚡ snabb</span>
        <span class="pill-lg">🥦 veg</span>
      </div>

      <p class="detail-description">
        Den klassiska studenträtten som räddat otaliga tentor-kvällar. Ingen bedömning här – vi gör det enkelt, vi gör det gott. Funkar med i princip vilken pasta som helst och ketchup som du har stående. Tillsätt lite smör så blir det faktiskt riktigt bra.
      </p>

      <!-- INGREDIENSER & INSTRUKTIONER -->
      <div class="detail-grid">
        <div class="info-box">
          <div class="info-box-title">🛒 Ingredienser</div>
          <div class="ingredient-item"><div class="ingredient-dot"></div>200g pasta (valfri sort)</div>
          <div class="ingredient-item"><div class="ingredient-dot"></div>3 msk ketchup</div>
          <div class="ingredient-item"><div class="ingredient-dot"></div>1 msk smör</div>
          <div class="ingredient-item"><div class="ingredient-dot"></div>Salt och peppar</div>
          <div class="ingredient-item"><div class="ingredient-dot"></div>(valfritt) 1 ägg</div>
        </div>
        <div class="info-box">
          <div class="info-box-title">📋 Instruktioner</div>
          <div class="step-item">
            <div class="step-num">1</div>
            <div class="step-text">Koka pastan enligt förpackningens anvisning i saltat vatten</div>
          </div>
          <div class="step-item">
            <div class="step-num">2</div>
            <div class="step-text">Häll av vattnet och lägg tillbaka pastan i kastrullen</div>
          </div>
          <div class="step-item">
            <div class="step-num">3</div>
            <div class="step-text">Blanda ner smöret medan pastan är varm</div>
          </div>
          <div class="step-item">
            <div class="step-num">4</div>
            <div class="step-text">Tillsätt ketchup efter smak, rör om ordentligt</div>
          </div>
          <div class="step-item">
            <div class="step-num">5</div>
            <div class="step-text">Smaka av med salt och peppar. Servera varmt!</div>
          </div>
        </div>
      </div>

      <!-- INTERAKTIONSRAD — CSS checkbox-trick för gilla & spara -->
      <div class="interaction-bar">
        <input type="checkbox" id="like-toggle" class="like-toggle" checked>
        <label for="like-toggle" class="int-btn">❤️ 124 Gilla</label>

        <input type="checkbox" id="save-toggle" class="save-toggle">
        <label for="save-toggle" class="int-btn">📌 Spara recept</label>

        <a href="#kommentarer" class="int-btn">💬 23 Kommentarer</a>
        <a href="edit.php?id=1" class="int-btn" style="margin-left: auto">✏️ Redigera</a>
       <a href="remove.php?id=1" class="int-btn-danger">🗑️ Radera</a>

      </div>

      <!-- KOMMENTARER -->
      <div id="kommentarer">
        <div class="section-heading">Kommentarer (23)</div>
        <div class="comment-form-row">
          <div class="comment-avatar">L</div>
          <textarea class="comment-input" rows="2" placeholder="Skriv en kommentar..."></textarea>
          <button class="btn-send">Skicka</button>
        </div>

        <div class="comment-item">
          <div class="comment-avatar">R</div>
          <div class="comment-bubble">
            <div class="comment-author">ramenlover_98</div>
            <div class="comment-text">Ser gott ut! Testade med soja istället för ketchup, blev faktiskt bra!</div>
            <div class="comment-time">3 timmar sedan</div>
          </div>
        </div>
        <div class="comment-item">
          <div class="comment-avatar" style="background: var(--cream)">P</div>
          <div class="comment-bubble">
            <div class="comment-author">pasta4ever</div>
            <div class="comment-text">Hur mycket pasta behövs egentligen? 200g räcker väl inte? 😅</div>
            <div class="comment-time">6 timmar sedan</div>
          </div>
        </div>
        <div class="comment-item">
          <div class="comment-avatar">L</div>
          <div class="comment-bubble owner-bubble">
            <div class="comment-author">student_lisa <span class="creator-badge">· skapare</span></div>
            <div class="comment-text">@pasta4ever haha du har rätt, gör dubbel sats om du är hungrig! 🍝</div>
            <div class="comment-time">6 timmar sedan</div>
          </div>
        </div>
      </div>

      <!-- RELATERADE RECEPT -->
      <hr class="divider">
      <div class="section-heading">Fler recept från student_lisa</div>
      <div class="related-grid">
        <a href="detail.php" class="mini-recipe-card">
          <div class="mini-card-img">🍜</div>
          <div class="mini-card-body">
            <div class="mini-card-title">Ketchupramen</div>
            <div class="mini-card-meta">💸 · ⏰ 5 min</div>
          </div>
        </a>
        <a href="detail.php" class="mini-recipe-card">
          <div class="mini-card-img" style="background: linear-gradient(135deg, #f9d976, #f39f86)">🍳</div>
          <div class="mini-card-body">
            <div class="mini-card-title">Äggröra DX</div>
            <div class="mini-card-meta">💸 · ⏰ 8 min</div>
          </div>
        </a>
        <a href="detail.php" class="mini-recipe-card">
          <div class="mini-card-img" style="background: linear-gradient(135deg, #d4a0ff, #a066cc)">🥞</div>
          <div class="mini-card-body">
            <div class="mini-card-title">Pannkake-chaos</div>
            <div class="mini-card-meta">💸💸 · ⏰ 20 min</div>
          </div>
        </a>
      </div>

    </div>
  </div>

  <footer>
    <a href="#">Om oss</a>
    <a href="#">Kontakt</a>
    <a href="#">Integritetspolicy</a>
    <span style="margin-left: 12px">© 2026 I ate that</span>
  </footer>

</body>
</html>
