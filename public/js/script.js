const Btn = document.querySelector('#mobileBtn');
const list = document.querySelector('#list');

Btn.addEventListener('click',()=>{
    list.classList.toggle('hidden');
});
