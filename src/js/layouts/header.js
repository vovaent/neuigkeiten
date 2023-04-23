/**
 * Header scripts
 */

import gsap from 'gsap';

export default () => {
	const elHeader = document.querySelector( '.header' );
	const elMobNav = document.querySelector( '.mob-navigation' );

	const hideHeader = () => {
		gsap.to( elHeader, {
			y: '-100%',
			duration: 0.3,
		} );
	};

	const showHeader = () => {
		gsap.to( elHeader, {
			y: 0,
			duration: 0.3,
		} );
	};

	let scrollPosStart = 0;
	let scrollPosEnd = 0;
	let isHeaderVisible = true;

	window.addEventListener( 'scroll', function () {
		let isMobNavOpened = elMobNav.classList.contains( 'opened' );

		if ( isMobNavOpened ) return;

		scrollPosEnd = window.scrollY || window.pageYOffset;

		const isScrollDown =
			scrollPosEnd > 115 && scrollPosEnd > scrollPosStart;
		const isScrollUp = scrollPosEnd < scrollPosStart;

		/* scroll down */
		if ( isHeaderVisible && isScrollDown ) {
			hideHeader();

			isHeaderVisible = false;
		}

		/* scroll up */
		if ( ! isHeaderVisible && isScrollUp ) {
			showHeader();

			isHeaderVisible = true;
		}

		/* no scroll and position 0  */
		if ( scrollPosEnd == 0 ) {
			if ( elHeader ) {
				showHeader();
			}

			isHeaderVisible = true;
		}

		scrollPosStart = scrollPosEnd;
	} );
};
