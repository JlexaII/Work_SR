function isAsosiy() {
  window.location.href = '/';
}

// Пример стартового JavaScript для отключения отправки форм при наличии недопустимых полей
(function () {
  'use strict'

  // Получите все формы, к которым мы хотим применить пользовательские стили проверки Bootstrap
  var forms = document.querySelectorAll('.needs-validation')

  // Зацикливайтесь на них и предотвращайте отправку
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

$('body').on('click', '.password-control', function(){
	if ($('#exampleInputPassword1, exampleInputPassword2').attr('type') == 'password'){
		$(this).addClass('view');
		$('#exampleInputPassword1, exampleInputPassword2').attr('type', 'text');
	} else {
		$(this).removeClass('view');
		$('#exampleInputPassword1, exampleInputPassword2').attr('type', 'password');
	}
	return false;
});

