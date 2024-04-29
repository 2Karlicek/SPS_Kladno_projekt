var photo = document.getElementById('photo');
var dx = 5; // horizontální rychlost
var dy = 5; // vertikální rychlost
var lastMouseMovedTime = Date.now();

function movePhoto() {
    var maxX = window.innerWidth - photo.offsetWidth;
    var maxY = window.innerHeight - photo.offsetHeight;
    var x = parseInt(photo.style.left) || 0;
    var y = parseInt(photo.style.top) || 0;

    if (x+20 <= 0 || x >= maxX) {
        dx = -dx; // změň směr na osové X
    }
    if (y <= 0 || y >= maxY) {
        dy = -dy; // změň směr na osové Y
    }

    x += dx;
    y -= dy;

    photo.style.left = x + 'px';
    photo.style.top = y + 'px';

    
}

function resetLastMouseMovedTime() {
    lastMouseMovedTime = Date.now();
}

// Sledování událostí myši
document.addEventListener('mousemove', resetLastMouseMovedTime);

// Zkontroluje, zda uživatel v posledních 5 sekundách nehybá myší
function checkMouseInactivity() {
    var currentTime = Date.now();
    var inactivityDuration = currentTime - lastMouseMovedTime;
    if (inactivityDuration >= 5000) {
        photo.style.display ="inline";
        movePhoto();
    }
    else{
        photo.style.display ="none";
    }
    requestAnimationFrame(checkMouseInactivity);
}

// Spustí kontrolu nečinnosti myši
checkMouseInactivity();