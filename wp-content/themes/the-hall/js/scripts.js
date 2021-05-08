

const siteMenu = document.querySelector('.c-site-menu');
const navigation = document.querySelector('.site-header');
siteMenu.addEventListener('click', function() {
	siteMenu.classList.toggle('js-active');
	navigation.classList.toggle('js-show');
});