let cursor = document.querySelector('.cursor');
let miniCursor = document.querySelector('.mini_cursor');
let links = document.querySelectorAll('.header_links li');

window.addEventListener('mousemove', customCursor);

function customCursor(e) {
    cursor.style.top = e.pageY + "px";
    cursor.style.left = e.pageX + "px";

    miniCursor.style.top = e.pageY + "px";
    miniCursor.style.left = e.pageX + "px";
}
