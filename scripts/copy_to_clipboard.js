document.querySelectorAll('span').forEach(item => {
    item.addEventListener('click', event => {
        navigator.clipboard.writeText(item.innerText);
    })
    })