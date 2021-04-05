/*Модальное окно для секции Contact us*/

let btn = document.querySelector('.floatBtnContact'), //для открытия модального окна -> кнопка "Get in touch" 
    mdl = document.querySelector('.popup'),
    closeBtn = document.querySelector('.closeBtn');

//открытие модального окна
btn.addEventListener('click', function() {
    mdl.style.display = "flex";
})

//закрытие модального окна по клику на кнопку Close
closeBtn.addEventListener('click', function() {
    mdl.style.display = "none";

})

//закрытие модального окна по клику на экран
window.addEventListener('click', function(event) {
    if (event.target == mdl) {
        mdl.style.display = "none";

    }
});