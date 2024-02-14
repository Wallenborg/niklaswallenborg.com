// Ange ditt måldatum här (år, månad (0-11), dag)
const targetDate = new Date("2026-09-13").getTime();

function updateCountdown() {
  const currentDate = new Date().getTime();
  const timeRemaining = targetDate - currentDate;
  const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));

  document.getElementById("countdown").innerHTML = days;
}

// Uppdatera räknaren varje dag (86400 000 millisekunder)
setInterval(updateCountdown, 86400000);

// Omedelbart visa räknaren när sidan laddas
updateCountdown();
