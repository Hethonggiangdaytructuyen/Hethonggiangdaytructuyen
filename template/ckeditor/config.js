/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.height = "500px";
	config.filebrowserBrowseUrl = 'http://localhost:8080/service/admin/ckfinder/ckfinder.html';

	config.filebrowserImageBrowseUrl = 'http://localhost:8080/service/admin/ckfinder/ckfinder.html?type=Images';

	config.filebrowserFlashBrowseUrl = 'http://localhost:8080/service/admin/ckfinder/ckfinder.html?type=Flash';

	config.filebrowserUploadUrl = 'http://localhost:8080/service/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

	config.filebrowserImageUploadUrl = 'http://localhost:8080/service/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';

	config.filebrowserFlashUploadUrl = 'http://localhost:8080/service/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
