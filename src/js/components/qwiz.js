document.addEventListener("DOMContentLoaded",  () => {
    if ( document.querySelector('.qwiz') )  {
        const qwiz = document.querySelector('.qwiz');
    
        let steps = 1;
        
        // прогресс бар
        const qwizProgress = qwiz.querySelector('.qwiz-progress__inner');
        const qwizProgressNumber = qwiz.querySelector('.qwiz-progress__procent');
        const qwizStepWrapper = qwiz.querySelector('.qwiz-step'); //все шаги
        const qwizStepItem = qwiz.querySelectorAll('.qwiz-step__item'); //все шаги
        const qwizStepCount = qwizStepItem.length; //кол-во шагов

        //Кнопки
        const qwizBtnPrev = qwiz.querySelector('.qwiz-btn__prev');
        const qwizBtnNext = qwiz.querySelector('.qwiz-btn__next');

        let stepWidth = document.querySelector('.qwiz-step').offsetWidth;//Ширина 

        const generateError = function (text) {
            const error = document.createElement('div')
            error.className = 'form-error'
            error.innerHTML = text
            return error
        }
            
        const removeValidation = function (form) {
            const errors = form.querySelectorAll('.form-error')
            for (let i = 0; i < errors.length; i++) {
                errors[i].remove()
            }
        }
            
        const checkFieldsPresence = function (fields, form) {
            for (let i = 0; i < fields.length; i++) {      
                if (!fields[i].value) {
                    const error = generateError('Поле обязательно для заполнения');
                    console.log(`form` + form[i]);
                    console.log(`fields` + fields[i]);
                    form[i].parentElement.insertBefore(error, fields[i])
                }
            }
        }

        function progress(steps, qwizStepCount) {
            let accomplishment = Math.round(100/qwizStepCount * (steps-0.5));
            qwizProgress.style.width = accomplishment + '%';
            qwizProgressNumber.innerHTML = accomplishment + '%';
        }

        //Задаем ширину слайда
        function widthItem() {
            qwizStepItem.forEach( (item) => {
                item.style.width = stepWidth + 'px';
            });
        }

        function disableBtn(steps) {
            if (steps == 1 ){
                qwizBtnPrev.disabled = true;
            } else {
                qwizBtnPrev.disabled = false;
            }

            // if (steps == qwizStepCount ){
            //     qwizBtnNext.disabled = true;
            // } else {
            //     qwizBtnNext.disabled = false;
            // }
        }

        //нажатие кнопку "Далее"
        qwizBtnNext.addEventListener( "click" , () => {
            let offset = steps * stepWidth;
            // let sec = new Date().getSeconds() % 10;
            // qwizStepWrapper.style.transitionDelay = '-' + sec + 's';
            qwizStepWrapper.style.transform = `translate(-${offset}px, 0)`;

            steps++;
            
            init();
        });

        //нажатие кнопку "Назад"
        qwizBtnPrev.addEventListener( "click" , () => {
            steps--;
            let offset;

            if (steps == 1) {
                offset = 0;
            } else {
                offset = (steps-1) * stepWidth;
            } 
            
            // let sec = new Date().getSeconds() % 10;
            // qwizStepWrapper.style.transitionDelay = '-' + sec + 's';
            qwizStepWrapper.style.transform = `translate(-${offset}px, 0)`;
            init();
        });

        //Проверяем выбрал ли пользователь элемент
        function checkAnswer(steps){
            // Узнать какой шаг, найти элементы данного шага
            // Проверить есть ли выбранные элементы
            qwizBtnNext.disabled = true
            let activeSteps = qwiz.querySelector(`#step${steps}`);
            let answers = activeSteps.querySelectorAll('.qwiz-answer__item .input');

            answers.forEach(el => {
                if (el.checked != ''){
                    console.info(el.value);
                    qwizBtnNext.disabled = false;
                }

                el.addEventListener('change', function () {
                    qwizBtnNext.disabled = false;
                    // console.info('что то сделали');
                })
            });
        }

        function init() {
            progress(steps, qwizStepCount);
            disableBtn(steps);
            checkAnswer(steps);
        }

        widthItem();
        init();


        qwiz.onsubmit = async (e) => {
            const formQwiz = qwiz.querySelector('.qwiz-final-form');
            console.log(formQwiz);
            const validate = formQwiz.querySelectorAll('.field-validate');
            e.preventDefault();

            removeValidation(formQwiz);
            //checkFieldsPresence(validate, formQwiz);
            console.log(validate);
            
        
            // let response = await fetch('send.php', {
            //   method: 'POST',
            //   body: new FormData(qwiz)
            // });
        
            // let result = await response.json();
        
            //alert(result.message);
        };


    }
    
});