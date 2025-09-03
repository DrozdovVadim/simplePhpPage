    document.addEventListener("DOMContentLoaded", function() {
		const btn = document.querySelector('#send-btn');
		btn.addEventListener('click', () => {
			const inputs = document.querySelectorAll('[required]');
			const ans = [];
			inputs.forEach(i => {
				if(i['value'].length <3)
				{
					ans.push(i['name']);
				}
			});
		alert("Заполните обязательные поля "+ ans);
		})

    });