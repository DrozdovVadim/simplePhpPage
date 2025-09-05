import Inputmask from "inputmask";
document.addEventListener("DOMContentLoaded", function() {
	const form = document.querySelector('#main-form');
	const tel = form.querySelector('input[type=tel]');
	let im = new Inputmask("+7(999)-999-99-99");
	im.mask(tel);
	const btn = document.querySelector('#send-btn');
	const messageBlock = document.querySelector('#feedback-message');
	btn.addEventListener('click', (e) => {
		
		
		const ans = [];
		const inputArray = form.querySelectorAll('[required]');
		inputArray.forEach( item => {
			if (item['type'] == 'checkbox')
			{
				if ( !item['checked']) {
					ans.push("Проверьте, заполнено ли поле " + item.dataset.name)
				}
			}
			else if (item['type'] != 'checkbox') {
				if (item['value'].length <3)
				{
					ans.push("Проверьте, заполнено ли поле " + item.dataset.name)
				}
			}
			
		})
		const tel = form.querySelector('input[type=tel]');
		const mail = form.querySelector('input[type=email]');
		tel['value'].length || mail['value'].length ? '' : ans.push("Необходимо заполнить одно из полей " + tel.dataset.name + " или "+ mail.dataset.name);
		
		if(ans.length>0)
		{
			e.preventDefault();
			messageBlock.innerHTML = ans.join('<br>');
			messageBlock.classList.add("b-forms-form__message");
		}
		else {
			messageBlock.innerHTML = "Ваше сообщение успешно отправлено";
			messageBlock.classList.add("b-forms-form__message");
		}
	})

});