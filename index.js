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
