// Wait for the DOM to be fully loaded before executing the code
document.addEventListener("DOMContentLoaded", function () {
  // Get the element representing the moving text
  const movingText = document.getElementById("moving-text");

  // Get the container element that holds the moving text
  const container = document.querySelector(".animation-container");

  // Initialize containerRect to the initial bounding rectangle of the container
  let containerRect = container.getBoundingClientRect();

  // Set the speed at which the text will move
  const speed = 0.8;

  // Initialize direction variables for both x and y axes
  let xDirection = 1;
  let yDirection = 1;

  // Function to get a random direction (either 1 or -1)
  function getRandomDirection() {
    return Math.random() > 0.5 ? 1 : -1;
  }

  // Function to update the containerRect when the window is resized
  function updateContainerRect() {
    containerRect = container.getBoundingClientRect();
  }

  // Add an event listener for window resize events to update containerRect
  window.addEventListener("resize", updateContainerRect);

  // Function to move the text within the container
  function moveText() {
    // Get the current bounding rectangle of the moving text
    const rect = movingText.getBoundingClientRect();

    // Change direction randomly when a certain probability is met
    if (Math.random() > 0.998) {
      xDirection = getRandomDirection();
      yDirection = getRandomDirection();
    }

    // Calculate the new positions based on the current direction and speed
    const newY = rect.top + speed * yDirection;
    const newX = rect.left + speed * xDirection;

    // Calculate the maximum values for y and x to keep text within the container
    const maxY = container.clientHeight - rect.height;
    const maxX = container.clientWidth - rect.width;

    // If the text reaches the top or bottom edge, reverse the y direction
    if (newY < 0 || newY > maxY) {
      yDirection *= -1;
    }

    // If the text reaches the left or right edge, reverse the x direction
    if (newX < 0 || newX > maxX) {
      xDirection *= -1;
    }

    // Update the position of the text based on the calculated values
    movingText.style.top = Math.min(maxY, Math.max(0, newY)) + "px";
    movingText.style.left = Math.min(maxX, Math.max(0, newX)) + "px";

    // Request the next animation frame to create smooth animation
    requestAnimationFrame(moveText);
  }

  // Update containerRect when the page loads
  updateContainerRect();

  // Start the animation loop to move the text
  moveText();
});
