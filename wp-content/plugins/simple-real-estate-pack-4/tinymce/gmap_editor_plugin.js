// Docu : http://wiki.moxiecode.com/index.php/TinyMCE:Create_plugin/3.x#Creating_your_own_plugins

(function() {
	// Load plugin specific language pack
	tinymce.PluginManager.requireLangPack('srp_GMap');

	tinymce.create('tinymce.plugins.srp_GMap', {
		/**
		 * Initializes the plugin, this will be executed after the plugin has been created.
		 * This call is done before the editor instance has finished it's initialization so use the onInit event
		 * of the editor instance to intercept that event.
		 *
		 * @param {tinymce.Editor} ed Editor instance that the plugin is initialized in.
		 * @param {string} url Absolute URL to where the plugin is located.
		 */
		init : function(ed, url) {
			// Register the command so that it can be invoked by using tinyMCE.activeEditor.execCommand('mcesrp_GMap');
			ed.addCommand('mcesrp_GMap', function() {
				ed.windowManager.open({
					file : ajaxurl + '?action=srp_tinymce&plugin=gmap_window',
					width : 360 + ed.getLang('srp_GMap.delta_width', 0),
					height : 370 + ed.getLang('srp_GMap.delta_height', 0),
					inline : 1
				}, {
					plugin_url : url // Plugin absolute URL
				});
			});
			// Register srp_GMap button
			ed.addButton('srp_GMap', {
				title : 'Google Map',
				cmd : 'mcesrp_GMap',
				image : url + '/gmap.png'
			});
			// Add a node change handler, selects the button in the UI when a image is selected
			ed.onNodeChange.add(function(ed, cm, n) {
				cm.setActive('srp_GMap', n.nodeName == 'IMG');
			});
		},
		/**
		 * Creates control instances based in the incomming name. This method is normally not
		 * needed since the addButton method of the tinymce.Editor class is a more easy way of adding buttons
		 * but you sometimes need to create more complex controls like listboxes, split buttons etc then this
		 * method can be used to create those.
		 *
		 * @param {String} n Name of the control to create.
		 * @param {tinymce.ControlManager} cm Control manager to use inorder to create new control.
		 * @return {tinymce.ui.Control} New control instance or null if no control was created.
		 */
		createControl : function(n, cm) {
			return null;
		},
		/**
		 * Returns information about the plugin as a name/value array.
		 * The current keys are longname, author, authorurl, infourl and version.
		 *
		 * @return {Object} Name/value array containing information about the plugin.
		 */
		getInfo : function() {
			return {
				longname : 'srp_GMap Plugin',
				author : 'Max Chirkov',
				authorurl : 'http://www.PhoenixHomes.com',
				infourl : 'http://www.PhoenixHomes.com',
				version : "1.0"
			};
		}
	});

	// Register plugin
	tinymce.PluginManager.add('srp_GMap', tinymce.plugins.srp_GMap);
})();