(function () {
	const siteNavigation = document.getElementById('site-navigation');

	if (!siteNavigation) {
		return;
	}

	const button = siteNavigation.querySelector('.menu-toggle');
	const closeButton = siteNavigation.querySelector('.menu-close');
	const menu = siteNavigation.querySelector('ul');

	if (!button || !menu) {
		return;
	}

	if (!menu.classList.contains('nav-menu')) {
		menu.classList.add('nav-menu');
	}

	function toggleMenu() {
		siteNavigation.classList.toggle('toggled');
		const expanded = button.getAttribute('aria-expanded') === 'true' || false;
		button.setAttribute('aria-expanded', !expanded);
		document.body.classList.toggle('menu-open', !expanded);
	}

	button.addEventListener('click', toggleMenu);

	if (closeButton) {
		closeButton.addEventListener('click', toggleMenu);
	}

	// Закрытие по клику вне меню
	document.addEventListener('click', function (event) {
		if (!siteNavigation.contains(event.target) && siteNavigation.classList.contains('toggled')) {
			siteNavigation.classList.remove('toggled');
			button.setAttribute('aria-expanded', 'false');
			document.body.classList.remove('menu-open');
		}
	});

	// Поддержка клавиатуры и тач-устройств (оставим как есть)
	const links = menu.getElementsByTagName('a');
	const linksWithChildren = menu.querySelectorAll('.menu-item-has-children > a, .page_item_has_children > a');

	for (const link of links) {
		link.addEventListener('focus', toggleFocus, true);
		link.addEventListener('blur', toggleFocus, true);
	}

	for (const link of linksWithChildren) {
		link.addEventListener('touchstart', toggleFocus, false);
	}

	function toggleFocus() {
		if (event.type === 'focus' || event.type === 'blur') {
			let self = this;
			while (!self.classList.contains('nav-menu')) {
				if ('li' === self.tagName.toLowerCase()) {
					self.classList.toggle('focus');
				}
				self = self.parentNode;
			}
		}

		if (event.type === 'touchstart') {
			const menuItem = this.parentNode;
			event.preventDefault();
			for (const link of menuItem.parentNode.children) {
				if (menuItem !== link) {
					link.classList.remove('focus');
				}
			}
			menuItem.classList.toggle('focus');
		}
	}

	// В файле navigation.js или в отдельном скрипте
	window.addEventListener('scroll', function () {
		const header = document.querySelector('.site-header');
		if (window.scrollY > 10) {
			header.classList.add('scrolled');
		} else {
			header.classList.remove('scrolled');
		}
	});
}());