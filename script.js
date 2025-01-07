function showMessage() {
    // Hide the card content
    const cardContent = document.querySelector(".card-content");
    cardContent.style.display = "none";
  
    // Show the full-screen Happy Birthday message
    const message = document.getElementById("message");
    message.classList.remove("hidden");
    message.style.display = "block";
  }
  