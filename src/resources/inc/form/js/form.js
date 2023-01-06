(function ($) {
    "use strict";

    /*----------------------------------------------------*/
    /*  AddProducts
    /*----------------------------------------------------*/    

    $(function () {
        let formCheck = $('.c-interesting__form--checkboxes');
        let formSend = formCheck.closest('[class*=col-]').next().find('form').first();

        formCheck.on('change', function () {
            let fileds = $(this).serializeArray();
            let count = fileds.length;
            let products = '';
            $.each( fileds, function( i, field ) {
                products += field.value;

                if ( i < count - 1 )
                    products += ', ';
            });

            formSend.find('[name="product"]').val(products);
        });

    });

    /*----------------------------------------------------*/
    /*	File
    /*----------------------------------------------------*/

    $(document).ready(function () {
        $(".c-file-load").find("input[type='file']").change(function () {
            var parent = $(this).closest('.c-file-load'),
                filename = $(this).val().replace(/.*\\/, ""),
                text = parent.find('.c-file-load__text').text(),
                textOriginal = $(this).data('text'),
                textLoad = "Файл загружен";

            if (text !== textLoad)
                $(this).data('text', text);

            if (filename != '') {
                $(this).addClass('is-load');
                parent.find('.c-file-load__text').text(textLoad);
            } else {
                $(this).removeClass('is-load');
                parent.find('.c-file-load__text').text(textOriginal);
            }

            if (!parent.find('*').is('.c-file-load__name'))
                parent.append("<div class='c-file-load__name'></div>");

            $(".c-file-load__name").text(filename);
        });
    });

    /*----------------------------------------------------*/
    /*	Form
    /*----------------------------------------------------*/
// ------------------------------------------------------
//Прописываем в поле дискрипшн все описание форм и чекбоксов
$(function () {
    var btn = $('.lk-btn--js'); // Обьявляем все кнопки по классу
    var Description = $('input[name="description"]'); // Обьявляем скрытое поле description в форме
    var comment = $('input[name="comment"]'); // Обьявляем скрытое поле comment

    $('input[type="checkbox"]').on('change', function(){ // Триггерим класс чекбоксу
        $(this).toggleClass('checked');
    });

    btn.on('click', function(){ // Функция по клику на кнопку
        var productDescription = $(this).closest('.c-product__inner').data('description'); // Обьявляем описание продуктов. Важно сохранять иерархию.
        var cartDescription = $(this).closest('.c-cart-product__item').data('description'); // Получаем описание блока карточки по клику из этой кнопки
        var formGoal = $(this).closest('form').data('goal'); // Получаем data-goal из формы, по кнопке которой кликнули.
        var formDescription = $(this).closest('.section-promo__wrap-form').data('description'); // Получаем значение дата-описания формы, места откуда мы кликаем
        var comments = []; // Обьявляем массив для поля коммент.
        if(productDescription){ // Если у нас есть продуктовое описание, то добавляем в скрытое поле формы это значение
            Description.val(productDescription);
        }
        if(cartDescription){ // Если у нас есть описание карточки, то добавляем в скрытое поле формы это значение
            Description.val(cartDescription);
        }
        if( formGoal === 'formHeader'  || formGoal === 'formFooter'){ // Если у нас есть описание формы data-goal = header или footer, то добавляем в скрытое поле формы это значение
            Description.val(formDescription);
        }
        if($(this).data('description')){ // Если сама кнопка имеет описание, записываем в поле описания
            Description.val($(this).data('description'));
        }

        $('input.checked').each(function(){ // Ищем чекбоксы с классом и добавляем их значение в массив comment
            comments.push($(this).val());
        });
        
        comment.val(comments.join(', ')); // Форматируем массив через запятую
    });


});
// ------------------------------------------------------

    function closeFancybox() {
        //$.fancybox.close(true);
        fancybox.close();
    }

    function submitMSG(form, valid, msg) {
        if (valid) {
            Fancybox.show([{
                src: '#success',
                type: 'inline'
            }]);

            setTimeout(() => {
                Fancybox.close([{
                    src: '#success',
                    type: 'inline'
                }]);
            }, 2000);

            //$('.c-modal.--success').fadeIn().delay(2000).fadeOut();


            
        } else {
            $('.c-modal.--error').fadeIn().delay(2000).fadeOut();
        }    
    }

    function formSuccess(form) {
        //alert( $("body").data("yandex-metrica") ); 
        var goal = $(form).data('goal');
        var counter  = $("body").data("yandex-metrica");

        ym(counter, 'reachGoal', goal); 

        //yaCounter73179826.reachGoal(goal);

        // fbq('track', 'Lead', {
        //     content_name: goal,
        //     content_category: 'Отправка формы',
        //     value: 1.00,
        //     currency: 'RUB'
        // });

        $(form).find('input').val('');

        submitMSG(form, true, "Сообщение отправлено");

        if ($(form).parents().hasClass('fancybox-container')) {
            setTimeout(closeFancybox, 3000);
        }
    }

    function formError(form) {
        submitMSG(form, false, "Ошибка отправки");    
    }

    function formSubmit(form) {
        var formFields = $(form).serialize(),
            formFieldsArray = $(form).serializeArray(),
            counter  = $("body").data("yandex-metrica");


        var formData = new FormData(form);
        ym(counter, 'getClientID', function(clientID) {
            $.ajax({
                type: "POST",
                url: "/inc/form/send.php",
                contentType: false,
                processData: false,
                data: formData,
                dataType: 'json',
                success: function (response) {
                    //lead
                    var params = {
                        lead: 1, 
                        comment: '', 
                        metrika_client_id: clientID, 
                        url: window.location.href
                    };

                    $.each(formFieldsArray, function () {
                        if (this.value) {
                            params[this.name] = this.value; 
                        }
                    });

                    if (response["success"] === true) {
                        formSuccess(form);
                    } else {
                        formError(form);
                    }

                    $.post(
                        "/lead.php",
                        params,
                        function (id) {
                            if (id) {
                                console.log(id);
                                ym(counter, 'params', {'wbooster': id});
                            }
                        }
                    );
                },
                error: function () {
                    formError(form);
                }
            });
        });

        return false;
    }

    $.each($(".form-validate"), function () {

        $('.c-form__label').removeClass("c-form__input--error-label");

        $(this).validate({
            rules: {
                phone: {
                  required: true,
                  minlength: 10
                }
            },
            errorElement: 'span',
            errorClass: "c-form__input--error-text",
            highlight: function ( element, errorClass, validClass ) {
                $( element ).addClass("c-form__input--error-input").removeClass("no-text-error");
                // $( element ).siblings('.c-form__label').addClass("c-form__input--error-label");
            },
            submitHandler: function (form) {
                formSubmit(form);
            }
        });
    });
})(jQuery);


document.addEventListener("DOMContentLoaded", function () {
    var phoneInputs = document.querySelectorAll('input[type="tel"]');

    var getInputNumbersValue = function (input) {
        // Return stripped input value — just numbers
        return input.value.replace(/\D/g, '');
    }

    var onPhonePaste = function (e) {
        var input = e.target,
            inputNumbersValue = getInputNumbersValue(input);
        var pasted = e.clipboardData || window.clipboardData;
        if (pasted) {
            var pastedText = pasted.getData('Text');
            if (/\D/g.test(pastedText)) {
                // Attempt to paste non-numeric symbol — remove all non-numeric symbols,
                // formatting will be in onPhoneInput handler
                input.value = inputNumbersValue;
                return;
            }
        }
    }

    var onPhoneInput = function (e) {
        var input = e.target,
            inputNumbersValue = getInputNumbersValue(input),
            selectionStart = input.selectionStart,
            formattedInputValue = "";

        if (!inputNumbersValue) {
            return input.value = "";
        }

        if (input.value.length != selectionStart) {
            // Editing in the middle of input, not last symbol
            if (e.data && /\D/g.test(e.data)) {
                // Attempt to input non-numeric symbol
                input.value = inputNumbersValue;
            }
            return;
        }

        if (["7", "8", "9"].indexOf(inputNumbersValue[0]) > -1) {
            if (inputNumbersValue[0] == "9") inputNumbersValue = "7" + inputNumbersValue;
            var firstSymbols = (inputNumbersValue[0] == "8") ? "8" : "+7";
            formattedInputValue = input.value = firstSymbols + " ";
            if (inputNumbersValue.length > 1) {
                formattedInputValue += '(' + inputNumbersValue.substring(1, 4);
            }
            if (inputNumbersValue.length >= 5) {
                formattedInputValue += ') ' + inputNumbersValue.substring(4, 7);
            }
            if (inputNumbersValue.length >= 8) {
                formattedInputValue += '-' + inputNumbersValue.substring(7, 9);
            }
            if (inputNumbersValue.length >= 10) {
                formattedInputValue += '-' + inputNumbersValue.substring(9, 11);
            }
        } else {
            formattedInputValue = '+' + inputNumbersValue.substring(0, 16);
        }
        input.value = formattedInputValue;
    }
    var onPhoneKeyDown = function (e) {
        // Clear input after remove last symbol
        var inputValue = e.target.value.replace(/\D/g, '');
        if (e.keyCode == 8 && inputValue.length == 1) {
            e.target.value = "";
        }
    }
    for (var phoneInput of phoneInputs) {
        phoneInput.addEventListener('keydown', onPhoneKeyDown);
        phoneInput.addEventListener('input', onPhoneInput, false);
        phoneInput.addEventListener('paste', onPhonePaste, false);
    }
})
