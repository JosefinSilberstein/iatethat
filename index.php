<?php
// BOKENS INSTRUKTIONER
// hämtar poster från databasen via select-funktionen
require_once 'assets/functions/select.php';
?>

<!--mellan kommande kommentarer ska DOCTYPE och html-kod in (se sida 176 i boken)
här under fortsätter html (se sida 176 i boken) -->

<!--slut html-->
<?php
//kontrollerar om det finns poster
if ($stmt->rowCount() > 0) {
    //skriver ut alla poster
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '
  <a href="detail.php" class="recipe-card">
          <div class="card-img">
            🍝
            <span class="card-img-badge">⏰ ' . $row['cook_time'] . ' min</span>
          </div>
          <div class="card-body">
            <div class="card-author">
              <div class="author-avatar">L</div>
              <span class="author-name">student_lisa</span>
              <span class="author-time">2 timmar sedan</span>
            </div>
            <div class="card-title">' . $row['title'] . '</div>
            <div class="card-desc">' . $row['description'] . '</div>
            <div class="card-meta">
              <span class="meta-pill">💸💸 Billig</span>
              <span class="meta-pill">🌿 pasta</span>
              <span class="meta-pill">⚡ snabb</span>
              <span class="meta-pill">🥦 veg</span>
            </div>
            <div class="card-footer">
              <span class="react-pill liked">❤️ 124</span>
              <span class="react-pill">💬 23</span>
              <span class="react-pill">📌 47</span>
              <span class="btn-recipe">Se recept →</span>
            </div>
          </div>
        </a>
        ';
    }
} else {
    echo 'Inga poster hittades';
}

//kontrollerar om en variabel exsisterar
if (isset($_GET['delete'])) {
    echo '<div class="alert alert-danger">Receptet har raderats</div>';
}
?>

<!-- här under fortsätter html (se sida 176 i boken) -->
