$(document).ready(function(){

	columnResponsive();

	$(window).resize(function(){

		columnResponsive();

	});/* RESIZE END */


});/* DOM END */

$(window).bind('load', function(){


});/* LOAD END */

$( window ).on( "orientationchange", function( event ) {

	/*location.reload();*/

});/* ORIENTATION END */

/* CONTROLA EL ANCHO DE LA VENTANA DEL NAVEGADOR, YA SEA MOVIL, TABLET O PC PARA MOVER LAS COLUMNAS CENTRAL E IZQUIERDA */
function columnResponsive(){

	if( $(window).width() >= 992 ){

		/* SI EL ANCHO DEL NAVEGADOR ES MAYOR O IGUAL A 992PX ( RESOLUCION DE TABLETS EN LANDSCAPE Y TODOS LOS MONITORES DE PC ) COLOCA LA COLUMNA CENTRAL DESPUES DE LA COLUMNA IZQUIERDA */
		$('.center-column').insertAfter('.left-column');

	}else{

		/* EN CASO CONTRARIO ( MOVILES Y TABLETS EN PORTRAIT O DISPOSITIVOS CON RESOLUCIONES MENORES A 992PX ) COLOCA LA COLUMNA IZQUIERDA DESPUES DE LA COLUMNA CENTRAL */
		$('.left-column').insertAfter('.center-column');

	}
}
