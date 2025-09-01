document.addEventListener('DOMContentLoaded', function() {
	const params = document.querySelectorAll('#paramTitle');
	console.log(params);
	params.addEventListener('click', () => {
		const paramChild = document.querySelector('#paramChild');
		paramChild.classList.toggle('show-param');
		paramChild.classList.toggle('b-books-detail__params-hidden');
	});
});