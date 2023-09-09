/**
 * Compiler configuration
 *
 * @see {@link https://roots.io/docs/sage sage documentation}
 * @see {@link https://bud.js.org/guides/configure bud.js configuration guide}
 *
 * @param {import('@roots/bud').Bud} app
 */
import path from 'path';

export default async (app) => {
  const resourcePath = app.fs.exists(app.path(`@src`));

  String.prototype.toKebabCase = function () {
    return this.match(/[A-Z]{2,}(?=[A-Z][a-z]+[0-9]*|\b)|[A-Z]?[a-z]+[0-9]*|[A-Z]|[0-9]+/g).join('-');
  };

  // blade files issues
  async function bladefiles() {
    let moduleEnPoints = {};
    const bladeFiles = await app.glob('@src/views/blocks/*.blade.php');
    for (const moduleFilePath of bladeFiles) {
      const name = path.basename(moduleFilePath, '.blade.php').toKebabCase().toLowerCase();
      moduleEnPoints[name] = { js: [], css: [] };

      const str = await app.fs.read(moduleFilePath);
      // moduleEnPoints[name].js = str.match(/script\[(.*?)\]script/gi).toString().replace(/script\[(.*?)\]script/gi, '$1');
      // moduleEnPoints[name].css = str.match(/style\[(.*?)\]style/gi).toString().replace(/style\[(.*?)\]style/gi, '$1');
      // moduleEnPoints[name] = str.match(/style\[(.*?)\]style/gi).toString().replace(/style\[(.*?)\]style/gi, '$1');
      moduleEnPoints[name] = str
        .match(/script\[(.*?)\]script/gi)
        .toString()
        .replace(/script\[(.*?)\]script/gi, '$1')
        .split(',')
        .concat(
          str
            .match(/style\[(.*?)\]style/gi)
            .toString()
            .replace(/style\[(.*?)\]style/gi, '$1')
            .split(',')
        );
    }
    return moduleEnPoints;
  }

  var filePath = '';

  const combinedModules = Object.entries(await bladefiles()).reduce((acc, [key, value]) => {
    acc[key] = value
      .map((fileName) => {
        console.log(fileName);
        if (fileName != '') {
          if (fileName.split('.').pop() == 'js') {
            filePath = '@scripts/modules/';
            if (fileName.split('.')[0] == 'app') {
              filePath = '@scripts/';
            }
          } else {
            filePath = '@styles/';
          }
          return path.join(filePath, fileName);
        } else {
          return;
        }
      })
      .filter(Boolean);
    return acc;
  }, {});
  // console.log(combinedModules);

  /**
   * Application assets & entrypoints
   *
   * @see {@link https://bud.js.org/docs/bud.entry}
   * @see {@link https://bud.js.org/docs/bud.assets}
   */
  // console.log(combinedModules);
  app.entry('app', ['@scripts/app', '@styles/app']).entry('editor', ['@scripts/editor', '@styles/editor']);
  Object.entries(combinedModules).forEach((element) => {
    app.entry(...element);
    // console.log(element);
  });

  app.assets(['images']).minimize().hash(false).splitChunks().runtime('single');

  /**
   * Set public path
   *
   * @see {@link https://bud.js.org/docs/bud.setPublicPath}
   */
  app.setPublicPath('/wp-content/themes/sage10/public/');

  /**
   * Development server settings
   *
   * @see {@link https://bud.js.org/docs/bud.setUrl}
   * @see {@link https://bud.js.org/docs/bud.setProxyUrl}
   * @see {@link https://bud.js.org/docs/bud.watch}
   */
  app
    .setUrl('http://localhost:3000')
    .setProxyUrl('http://outside-web-ui-kit.local')
    .watch(['resources/views', 'resources/styles', 'app']);

  /**
   * Generate WordPress `theme.json`
   *
   * @note This overwrites `theme.json` on every build.
   *
   * @see {@link https://bud.js.org/extensions/sage/theme.json}
   * @see {@link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json}
   */
  app.wpjson
    .set('settings.color.custom', false)
    .set('settings.color.customDuotone', false)
    .set('settings.color.customGradient', false)
    .set('settings.color.defaultDuotone', false)
    .set('settings.color.defaultGradients', false)
    .set('settings.color.defaultPalette', false)
    .set('settings.color.duotone', [])
    .set('settings.custom.spacing', {})
    .set('settings.custom.typography.font-size', {})
    .set('settings.custom.typography.line-height', {})
    .set('settings.spacing.padding', true)
    .set('settings.spacing.units', ['px', '%', 'em', 'rem', 'vw', 'vh'])
    .set('settings.typography.customFontSize', false)
    .enable();
};
