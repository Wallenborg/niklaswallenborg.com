// Hämta skärmens bredd
var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

// Ange gränsen för mindre skärmar (t.ex. 768px)
var smallScreenBreakpoint = 768;

// Kolla om skärmen är mindre än gränsen
if (windowWidth < smallScreenBreakpoint) {
    // Här kan du placera din JavaScript-kod som du bara vill köra på mindre skärmar
    // Exempel: Dropdown-logik för små skärmar
    // Hitta dropdown-elementet
    var dropdown = document.querySelector('.dropdown');

    // Hitta dropdown-innehållet
    var dropdownContent = dropdown.querySelector('.dropdown-content');

    // Klickhändelse för att visa/dölja dropdown på små skärmar
    dropdown.addEventListener('click', function () {
        if (dropdownContent.style.display === 'block') {
            dropdownContent.style.display = 'none';
        } else {
            dropdownContent.style.display = 'block';
        }
    });

    // Stäng dropdown när användaren klickar någon annanstans på sidan
    document.addEventListener('click', function (event) {
        if (!dropdown.contains(event.target)) {
            dropdownContent.style.display = 'none';
        }
    });
}
