/**
 * Nav-Toggle Scripts
 */
const toggle = document.querySelector( '.nav-toggle' );

toggle.addEventListener( 'click', function () {
	this.classList.toggle( 'opened' );
} );
