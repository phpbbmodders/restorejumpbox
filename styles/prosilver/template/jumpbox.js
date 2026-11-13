document.addEventListener('DOMContentLoaded', () => {
	const button = document.querySelector('[aria-controls="restorejumpbox-links"]');
	const jumpbox = button.closest('.jumpbox');

	const updateExpanded = () => {
		button.setAttribute('aria-expanded', jumpbox.classList.contains('dropdown-visible'));
	};
	new MutationObserver(updateExpanded).observe(jumpbox, {
		attributes: true,
		attributeFilter: ['class'],
	});

	jumpbox.addEventListener('keydown', (event) => {
		if (event.key === 'Escape' && jumpbox.classList.contains('dropdown-visible')) {
			event.preventDefault();
			button.click();
			button.focus();
		}
	});
});
