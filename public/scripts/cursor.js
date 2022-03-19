let cursor = document.querySelector('.cursor');
let miniCursor = document.querySelector('.mini_cursor');
let links = document.querySelectorAll('.header_links li');

window.addEventListener('mousemove', customCursor);

function customCursor(e) {
    cursor.style.top = e.pageY + "px";
    cursor.style.left = e.pageX + "px";
    cursor.style.width = "2rem";
    cursor.style.height = "2rem";
    cursor.style.border = "2px solid black";

    miniCursor.style.top = e.pageY + "px";
    miniCursor.style.left = e.pageX + "px";
    miniCursor.style.width = "6px";
    miniCursor.style.height = "6px";
    miniCursor.style.backgroundColor = "rgba(var(--accent) 1)";
    miniCursor.style.transition = "all .05s ease";

    cursor.style.borderRadius = "50%";
    cursor.style.position = "absolute"
    cursor.style.transform = "translate(-50%, -50%)";
    cursor.style.pointerEvents = "none";
    cursor.style.transformOrigin = "100% 100%"; 
    cursor.style.zIndex = "1000";

    miniCursor.style.borderRadius = "50%";
    miniCursor.style.position = "absolute"
    miniCursor.style.transform = "translate(-50%, -50%)";
    miniCursor.style.pointerEvents = "none";
    miniCursor.style.transformOrigin = "100% 100%"; 
    miniCursor.style.zIndex = "1000";
}