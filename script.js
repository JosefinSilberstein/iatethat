document.addEventListener("DOMContentLoaded", function () {

  const imageInput = document.getElementById("img-upload");

  if (imageInput) {
    imageInput.addEventListener("change", function () {
      const file = this.files[0];

      if (file) {
        const reader = new FileReader();

        reader.addEventListener("load", function () {
          const uploadArea = document.querySelector(".upload-area");
          const container = document.getElementById("image-preview-container");

          let preview = document.getElementById("image-preview");

          if (!preview) {
            preview = document.createElement("img");
            preview.id = "image-preview";
            preview.style.maxWidth = "100%";
            preview.style.borderRadius = "8px";

            container.appendChild(preview);
          }

          preview.src = reader.result;

          if (uploadArea) {
            uploadArea.style.display = "none";
          }

          let changeBtn = document.getElementById("change-image-btn");

          if (!changeBtn) {
            changeBtn = document.createElement("button");
            changeBtn.id = "change-image-btn";
            changeBtn.type = "button";
            changeBtn.textContent = "Byt bild";
            changeBtn.style.marginTop = "8px";
            changeBtn.className = "btn-cancel";

            changeBtn.addEventListener("click", function () {
              imageInput.click();
            });

            container.appendChild(changeBtn);
          }
        });

        reader.readAsDataURL(file);
      }
    });
  }

  const form = document.querySelector("form");

  if (form) {
    form.addEventListener("submit", function (event) {
      const titleInput = document.getElementById("recipe-title");
      const descInput = document.getElementById("recipe-desc");
      const ingredient1 = document.getElementById("ing1");
      const cookTime = document.getElementById("cook-time");
      const imageInput = document.getElementById("img-upload");

      let errors = [];

      if (!titleInput || titleInput.value.trim() === "") {
        errors.push("Du måste ange en titel för receptet.");
      }

      if (!descInput || descInput.value.trim() === "") {
        errors.push("Du måste ange en kort beskrivning.");
      }

      if (!ingredient1 || ingredient1.value.trim() === "") {
        errors.push("Du måste ange minst en ingrediens.");
      }

      if (!cookTime || cookTime.value.trim() === "") {
        errors.push("Du måste ange tillagningstid.");
      }

      if (!imageInput || imageInput.files.length === 0) {
        errors.push("Du måste ladda upp en bild.");
      }

      const errorBox = document.getElementById("error-box");
      const errorList = document.getElementById("error-list");

      if (errors.length > 0) {
        event.preventDefault();

        if (errorBox && errorList) {
          errorList.innerHTML = "";

          errors.forEach(function (msg) {
            const li = document.createElement("li");
            li.textContent = msg;
            errorList.appendChild(li);
          });

          errorBox.style.display = "block";
          errorBox.scrollIntoView({ behavior: "smooth" });
        }
      } else {
        if (errorBox) {
          errorBox.style.display = "none";
        }
      }
    });
  }

  // Prevent card navigation when clicking the like button
  document.querySelectorAll(".recipe-card").forEach(function (card) {
    card.addEventListener("click", function (event) {
      if (event.target.classList.contains("react-pill") && event.target.textContent.includes("❤️")) {
        event.preventDefault();
      }
    });
  });

  const likeButtons = document.querySelectorAll(".react-pill");

  likeButtons.forEach(function (button) {
    if (!button.textContent.includes("❤️")) return;

    button.style.cursor = "pointer";

    button.addEventListener("click", function (event) {
      event.stopPropagation();
      const text = button.textContent.trim();
      const parts = text.split(" ");
      let count = parseInt(parts[1]);

      if (button.classList.contains("liked")) {
        count = Math.max(0, count - 1);
        button.classList.remove("liked");
      } else {
        count++;
        button.classList.add("liked");
      }

      button.textContent = "❤️ " + count;
    });
  });

  const deleteButtons = document.querySelectorAll(".btn-delete-sm");

  deleteButtons.forEach(function (button) {
    button.addEventListener("click", function (event) {
      const isSaved = button.textContent.includes("📌");
      const message = isSaved
        ? "Är du säker på att du vill ta bort detta från sparade?"
        : "Är du säker på att du vill radera detta recept?";

      const confirmed = confirm(message);

      if (!confirmed) {
        event.preventDefault();
      }
    });
  });

  const addIngredientBtn = document.getElementById("add-ingredient-btn");
  const ingredientsList = document.getElementById("ingredients-list");

  if (addIngredientBtn && ingredientsList) {

    let ingredientCount = ingredientsList.children.length;

    addIngredientBtn.addEventListener("click", function () {

      ingredientCount++;

      const group = document.createElement("div");
      group.className = "form-group";

      const label = document.createElement("label");
      label.className = "form-label";
      label.setAttribute("for", "ing" + ingredientCount);
      label.textContent = "Ingrediens " + ingredientCount;

      const input = document.createElement("input");
      input.id = "ing" + ingredientCount;
      input.className = "form-input";
      input.type = "text";
      input.placeholder = "Lägg till ingrediens...";

      group.appendChild(label);
      group.appendChild(input);

      ingredientsList.appendChild(group);
      input.focus();
    });
  }

  // Teckenteller för beskrivningsfältet
  const descInput = document.getElementById("recipe-desc");
  const descCounter = document.getElementById("desc-counter");

  if (descInput && descCounter) {
    descInput.addEventListener("input", function () {
      const count = descInput.value.length;
      descCounter.textContent = count + "/100 tecken";

      if (count > 100) {
        descCounter.style.color = "#e05c5c";
      } else {
        descCounter.style.color = "var(--muted)";
      }
    });
  }

  // Tagg-input: tryck Enter för att lägga till en tagg
  const tagInput = document.querySelector(".tag-input");
  const tagsRow = document.querySelector(".tags-row");

  if (tagInput && tagsRow) {
    tagInput.addEventListener("keydown", function (event) {
      if (event.key !== "Enter") return;

      event.preventDefault();

      const tagText = tagInput.value.trim();

      if (tagText === "") return;

      const badge = document.createElement("span");
      badge.className = "tag-badge";
      badge.textContent = tagText;

      tagsRow.insertBefore(badge, tagInput);
      tagInput.value = "";
    });
  }

  // Spara-knapp: uppdatera text vid toggle
  const saveToggle = document.getElementById("save-toggle");
  const saveLabel = document.querySelector("label[for='save-toggle']");

  if (saveToggle && saveLabel) {
    saveToggle.addEventListener("change", function () {
      if (saveToggle.checked) {
        saveLabel.textContent = "✅ Sparat!";
      } else {
        saveLabel.textContent = "📌 Spara recept";
      }
    });
  }

  const likeToggle = document.getElementById("like-toggle");
  const likeLabel = document.querySelector("label[for='like-toggle']");

  if (likeToggle && likeLabel) {
    likeToggle.addEventListener("change", function () {
      const parts = likeLabel.textContent.trim().split(" ");
      let count = parseInt(parts[1]);

      if (likeToggle.checked) {
        count++;
      } else {
        count = Math.max(0, count - 1);
      }

      likeLabel.textContent = "❤️ " + count + " Gilla";
    });
  }

  const commentInput = document.querySelector(".comment-input");
  const sendBtn = document.querySelector(".btn-send");
  const commentSection = document.getElementById("kommentarer");

  if (sendBtn && commentInput && commentSection) {
    sendBtn.addEventListener("click", function () {
      const text = commentInput.value.trim();

      if (text === "") return;

      // Simulerad AJAX: inaktivera knappen och visa laddningstext
      sendBtn.disabled = true;
      sendBtn.textContent = "Skickar...";

      setTimeout(function () {
        const item = document.createElement("div");
        item.className = "comment-item";

        const avatar = document.createElement("div");
        avatar.className = "comment-avatar";
        avatar.textContent = "L";

        const bubble = document.createElement("div");
        bubble.className = "comment-bubble";

        const author = document.createElement("div");
        author.className = "comment-author";
        author.textContent = "Du";

        const body = document.createElement("div");
        body.className = "comment-text";
        body.textContent = text;

        const time = document.createElement("div");
        time.className = "comment-time";
        time.textContent = "Just nu";

        bubble.appendChild(author);
        bubble.appendChild(body);
        bubble.appendChild(time);
        item.appendChild(avatar);
        item.appendChild(bubble);

        commentSection.appendChild(item);

        const heading = commentSection.querySelector(".section-heading");
        if (heading) {
          const current = parseInt(heading.textContent.match(/\d+/)) || 0;
          heading.textContent = "Kommentarer (" + (current + 1) + ")";
        }

        const commentPill = document.querySelector(".int-btn[href='#kommentarer']");
        if (commentPill) {
          const pillCount = parseInt(commentPill.textContent.match(/\d+/)) || 0;
          commentPill.textContent = "💬 " + (pillCount + 1) + " Kommentarer";
        }

        commentInput.value = "";
        sendBtn.disabled = false;
        sendBtn.textContent = "Skicka";

        item.scrollIntoView({ behavior: "smooth" });

      }, 600);
    });
  }

});
