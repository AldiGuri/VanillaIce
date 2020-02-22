const text = document.querySelector('.main_title');
const stringText = text.textContent;
const splitText = stringText.split('');
text.textContent = '';

for (let i = 0; i < splitText.length; i++) {
  text.innerHTML += '<span>' + splitText[i] + '</span>';
}

let char = 0;

let timer = setInterval(() => {
  const span = text.querySelectorAll('span')[char];
  span.classList.add('fade');
  char++;
  if (char === splitText.length) {
    clearInterval(timer);
    timer = null;
    return;
  }
}, 100);
