document.getElementById('burger-button').addEventListener('click', function () {
	const navList = document.getElementById('nav-list');
	navList.classList.toggle('active');
});

const datePick = document.getElementById('rent-pickup-input');
const dateReturn = document.getElementById('rent-return-date-input');
const today = new Date();
const dd = String(today.getDate()).padStart(2, '0');
const mm = String(today.getMonth() + 1).padStart(2, '0');
const yyyy = today.getFullYear();

const formattedDate = `${yyyy}-${mm}-${dd}`;

datePick.value = formattedDate;
dateReturn.value = formattedDate;


document.getElementById('toggle-button').addEventListener('click', function () {
	const hiddenCards = document.querySelectorAll('.catalog-card.hidden');
	const button = this;

	if (hiddenCards.length > 0) {
		// Показать скрытые карточки
		hiddenCards.forEach(card => card.classList.remove('hidden'));
		button.textContent = 'Hide';
	} else {
		// Скрыть последние 3 карточки
		const allCards = document.querySelectorAll('.catalog-card');
		for (let i = allCards.length - 3; i < allCards.length; i++) {
			allCards[i].classList.add('hidden');
		}
		button.textContent = 'View All Cars';
	}
});
