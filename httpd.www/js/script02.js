// Funktion för att generera ett slumpmässigt heltal mellan min och max (inklusive min och max)
function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

// Funktion för att generera en slumpmässig färg i hexadecimalformat
function getRandomColor() {
  return '#' + Math.floor(Math.random() * 16777215).toString(16);
}

// Funktion för att placera ut en ny ruta
function placeRandomBox() {
  const box = document.createElement('div');
  const screenWidth = window.innerWidth;
  const screenHeight = window.innerHeight;
  const boxSize = 10; // Storleken på rutan (1x1 pixel)

  // Generera slumpmässiga positioner och färg för rutan
  const leftPosition = getRandomInt(0, screenWidth - boxSize);
  const topPosition = getRandomInt(0, screenHeight - boxSize);
  const color = getRandomColor();

  // Slumpmässigt z index mellan 1 och 100
  const zIndex = getRandomInt(1, 100);

  // Sätt rutan med slumpmässiga egenskaper
  box.style.position = 'absolute';
  box.style.left = `${leftPosition}px`;
  box.style.top = `${topPosition}px`;
  box.style.width = `${boxSize}px`;
  box.style.height = `${boxSize}px`;
  box.style.backgroundColor = color;
  box.style.zIndex = zIndex;

  // Lägg till rutan i body-elementet
  document.body.appendChild(box);
}

// Funktion för att kontinuerligt placera ut nya rutor varannan sekund
function generateRandomBoxes() {
  console.log("Generating random boxes...");
  setInterval(placeRandomBox, 500); // 500 ms = 0.5 sekunder
}

// Starta programmet när webbsidan är laddad
window.onload = generateRandomBoxes;