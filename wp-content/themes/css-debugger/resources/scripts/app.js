import domReady from '@roots/sage/client/dom-ready';
import { cssDebugger } from './utilities/css-debugger';
// import 'bootstrap/js/src/offcanvas.js'

/**
 * Application entrypoint
 */
domReady(async () => {
  console.log('first')
  cssDebugger();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
