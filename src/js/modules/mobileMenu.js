/**
 * Mobile Menu Scripts
 */

export default () => {
	const navToggle = document.querySelector( '.nav-toggle' );
	const headerMobNav = document.querySelector( '.header__mob-navigation' );

	navToggle.addEventListener( 'click', function () {
		this.classList.toggle( 'opened' );
		headerMobNav.classList.toggle( 'opened' );
	} );
};
