<html>
 <head>
  <title>Electroday</title>
 </head>
 <body>
 <?php 
include 'send.php';
//include 'vars.php';
?>
 </body>
 <!-- <script>// 1. Создаём новый XMLHttpRequest-объект
let xhr = new XMLHttpRequest();

// 2. Настраиваем его: GET-запрос по URL /article/.../load
xhr.open('POST', 'https://api.telegram.org/bot1425170162:AAH2rGYtNZciI-ylC39jYVWwWxowd9Pjx34/sendmessage?chat_id=548679581&text=HelloFromPhp');

// 3. Отсылаем запрос
xhr.send();

// 4. Этот код сработает после того, как мы получим ответ сервера
xhr.onload = function() {
  if (xhr.status != 200) { // анализируем HTTP-статус ответа, если статус не 200, то произошла ошибка
    alert(`Ошибка ${xhr.status}: ${xhr.statusText}`); // Например, 404: Not Found
  } else { // если всё прошло гладко, выводим результат
    alert(`Готово, получили ${xhr.response.length} байт`); // response -- это ответ сервера
  }
};

// xhr.onprogress = function(event) {
//   if (event.lengthComputable) {
//     alert(`Получено ${event.loaded} из ${event.total} байт`);
//   } else {
//     alert(`Получено ${event.loaded} байт`); // если в ответе нет заголовка Content-Length
//   }

// };

xhr.onerror = function() {
  alert("Запрос не удался");
};</script> -->
</html>