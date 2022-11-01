// JavaScript
const btn = document.querySelector("#btn");
if(btn){
    btn.addEventListener("click",myhendler);
}

function myhendler(e){
    e.defaultPrevented;
    let formData = new FormData(document.forms.person);
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "/hend");
    xhr.send(formData);
//  Этот код сработает после того, как мы получим ответ сервера
    xhr.onload = function() {
        if (xhr.status != 200) { // анализируем HTTP-статус ответа, если статус не 200, то произошла ошибка
            alert(`Ошибка ${xhr.status}: ${xhr.statusText}`); // Например, 404: Not Found
        } else { // если всё прошло гладко, выводим результат
            alert(`Готово, получили ${xhr.response.length} байт`); // response -- это ответ сервера
        }
    };
    xhr.onerror = function() {
        alert("Запрос не удался");
    };
}

// JQuery

( function( $ ) {
    $(document).ready(function () {

        $( "#jbtn" ).on( "click", mysend );

        function mysend(e){
            e.defaultPrevented;

            let formData = new FormData(document.forms.jperson);

            $.ajax({
                url: '/jend',
                method: 'post',
                dataType: 'html',
                data: formData,
                success: function(data){
                    alert(data);
                }
            });

        }

    });
}( jQuery ) );
