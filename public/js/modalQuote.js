document.addEventListener("DOMContentLoaded", () => {
    const btn = document.querySelector(".btn-quote");
    const modal = document.getElementById("quoteModal");
  
    if (btn && modal) {
      btn.addEventListener("click", () => modal.style.display = "block");
      window.closeModal = () => modal.style.display = "none";
    }
  });
  