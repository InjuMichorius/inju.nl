const root = document.querySelector(':root');
console.log('hello world');

const accentColors = ['168, 0, 255,', '0, 121, 255,', '0, 241, 29,', '255, 239, 0,', '255, 127, 0,', '255, 9, 0,']

let randomColor = Math.floor(Math.random() * accentColors.length);
console.log(randomColor)
root.style.setProperty('--accent', accentColors[randomColor]);