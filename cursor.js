let cursor = document.querySelector('.cursor');
let links = document.querySelectorAll('.header_links li');

window.addEventListener('mousemove', customCursor);

function customCursor(e) {
    cursor.style.top = e.pageY + "px";
    cursor.style.left = e.pageX + "px";
}

links.forEach(link => {
    link.addEventListener('mousover', () => {
        cursor.classList.add('.link-grow')
    });
    link.addEventListener('mouseleave', () => {
        cursor.classList.remove('.link-grow')
    });
    console.log('Hello world')
});
