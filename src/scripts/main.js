var filterSearch;
filterSearch = () => {
	// Declare variables
	let input,
		filter,
		targetSection,
		targetElement,
		a,
		i;
	input = $('#searchFilter');
	filter = input.value.toUpperCase();
	targetSection = $('.filter-list');
	targetElement = targetSection.getElementsByClassName('filter-item');

	// Loop through all list items, and hide those who don't match the search query
	for (i = 0; i < li.length; i++) {
		a = li[i].getElementsByTagName('a')[0];
		if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
			li[i].style.display = '';
		} else {
			li[i].style.display = 'none';
		}
	}
};
