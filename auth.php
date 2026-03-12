<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>I ate that – Logga in</title>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,700;9..144,900&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- NAVIGATION -->
  <nav>
    <div class="nav-inner">
      <a href="feed.php" class="brand">🍜 I ate that</a>
      <div class="nav-links">
        <a href="auth.php" class="btn-login">Logga in</a>
      </div>
    </div>
  </nav>

  <!-- Tab-radioknappar måste vara syskon till flikinnehållet -->
  <input type="radio" id="atab-login"    name="auth-tab" class="auth-tab-radio" checked>
  <input type="radio" id="atab-register" name="auth-tab" class="auth-tab-radio">

  <div class="auth-page">
    <div class="auth-card">

      <!-- SIDOPANEL -->
      <div class="auth-aside">
        <div class="auth-aside-emoji">🍜</div>
        <div class="auth-aside-logo">I ate that</div>
        <div class="auth-aside-text">
          En plats för studenters riktiga mat. Ingen perfekt belysning, inga proffsfoton — bara äkta recept som faktiskt funkar med studentbudget.
        </div>
      </div>

      <!-- FORMULÄRPANEL -->
      <div class="auth-form-panel">

        <!-- FLIKAR -->
        <div class="auth-tabs">
          <label for="atab-login"    class="auth-tab-label">Logga in</label>
          <label for="atab-register" class="auth-tab-label">Registrera</label>
        </div>

        <div class="auth-form-panel-inner">

          <!-- LOGGA IN -->
          <div id="form-login" class="auth-panel">
            <div class="form-group">
              <label class="form-label" for="login-email">E-post</label>
              <input id="login-email" class="form-input" type="email" placeholder="din@mejl.se">
            </div>
            <div class="form-group">
              <label class="form-label" for="login-pw">Lösenord</label>
              <input id="login-pw" class="form-input" type="password" placeholder="••••••••">
            </div>
            <div id="login-error" class="error-box" style="display:none;"></div>
            <a id="btn-login" href="feed.php" class="btn-auth">Logga in →</a>
            <div class="auth-link">
              <a href="#">Glömt lösenord?</a>
            </div>
          </div>

          <!-- REGISTRERA -->
          <div id="form-register" class="auth-panel">
            <div class="form-group">
              <label class="form-label" for="reg-user">Användarnamn</label>
              <input id="reg-user" class="form-input" type="text" placeholder="student_lisa">
            </div>
            <div class="form-group">
              <label class="form-label" for="reg-email">E-post</label>
              <input id="reg-email" class="form-input" type="email" placeholder="din@mejl.se">
            </div>
            <div class="form-group">
              <label class="form-label" for="reg-pw">Lösenord</label>
              <input id="reg-pw" class="form-input" type="password" placeholder="••••••••">
            </div>
            <div class="form-group">
              <label class="form-label" for="reg-pw2">Bekräfta lösenord</label>
              <input id="reg-pw2" class="form-input" type="password" placeholder="••••••••">
            </div>
            <div id="register-error" class="error-box" style="display:none;"></div>
            <a id="btn-register" href="feed.php" class="btn-auth">Skapa konto →</a>
            <div class="auth-terms">
              Genom att registrera dig godkänner du våra <a href="#">villkor</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
