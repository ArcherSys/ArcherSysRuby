Ext.data.JsonP.dev_howtos_basic_configuration({"guide":"<!--\n<div class='toc'>\n<p><strong>Contents</strong></p>\n<ol>\n<li><a href='#!/guide/dev_howtos_basic_configuration-section-how-do-i-change-the-default-ckeditor-configuration%3F'>How Do I Change the Default CKEditor Configuration?</a></li>\n<li>\n<a href='#!/guide/dev_howtos_basic_configuration-section-how-do-i-find-the-ckeditor-configuration-settings-to-change%3F'>How Do I Find the CKEditor Configuration Settings to Change?</a></li>\n<li>\n<a href='#!/guide/dev_howtos_basic_configuration-section-how-do-i-remove-unneeded-ckeditor-functionality%3F'>How Do I Remove Unneeded CKEditor Functionality?</a></li>\n<li>\n<a href='#!/guide/dev_howtos_basic_configuration-section-how-do-i-find-code-examples-showing-ckeditor-customization%3F'>How Do I Find Code Examples Showing CKEditor Customization?</a></li></ol>\n</div>\nCopyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.\nFor licensing, see LICENSE.md.\n-->\n\n\n<h1 id='dev_howtos_basic_configuration-section-basic-configuration-and-customization'>Basic Configuration and Customization</h1>\n\n<h2 id='dev_howtos_basic_configuration-section-how-do-i-change-the-default-ckeditor-configuration%3F'>How Do I Change the Default CKEditor Configuration?</h2>\n\n<p>CKEditor is a highly flexible tool that you can easily customize to your needs. If you want to change the editor configuration, refer to the <a href=\"#!/guide/dev_configuration\">Setting Configuration</a> page from the Developer's Guide. Your custom configuration will help you adjust the CKEditor look and feel to the requirements of your project.</p>\n\n<h2 id='dev_howtos_basic_configuration-section-how-do-i-find-the-ckeditor-configuration-settings-to-change%3F'>How Do I Find the CKEditor Configuration Settings to Change?</h2>\n\n<p>A full listing of configuration settings that you can change in order to customize the editor to your needs can be found in the CKEditor JavaScript API. Use the methods described in the  <a href=\"#!/guide/dev_configuration\">Setting Configuration</a> article from the Developer's Guide.</p>\n\n<h2 id='dev_howtos_basic_configuration-section-how-do-i-remove-unneeded-ckeditor-functionality%3F'>How Do I Remove Unneeded CKEditor Functionality?</h2>\n\n<p>CKEditor is a truly flexible tool with a modular structure — most editor functionality is based on plugins. Some core plugins are necessary for the editor to work or depend on one another, however, there are lots of optional plugins that you can skip when you do not need the functionality that they provide.</p>\n\n<p>If you want to disable some functionality that comes from a CKEditor plugin, you can use the CKEDITOR.config.removePlugins setting to prevent the plugin from loading.</p>\n\n<pre><code>// Remove one plugin.\nconfig.removePlugins = 'elementspath';\n\n// Remove multiple plugins.\nconfig.removePlugins = 'elementspath,save,font';\n</code></pre>\n\n<p>You can also use the <a href=\"http://ckeditor.com/builder\">CKBuilder Online service</a> to download a truly customized version of CKEditor.</p>\n\n<h2 id='dev_howtos_basic_configuration-section-how-do-i-find-code-examples-showing-ckeditor-customization%3F'>How Do I Find Code Examples Showing CKEditor Customization?</h2>\n\n<p>Each CKEditor installation package available on the official download site contains a <code>samples/</code> folder.</p>\n\n<p>Once you download CKEditor, open the <code>samples/index.html</code> file in your browser to see a list of samples presenting a broad range of usage scenarios and customization options for CKEditor. Each sample contains a short description along with a code snippet as well as one or more CKEditor instances to play with.</p>\n\n<p>If you are interested in learning how to create your own code to embed, configure, and customize CKEditor, have a look at the source code of the sample pages.</p>\n\n<p>The figure below presents one of the CKEditor samples, Massive inline editing (<code>inlineall.html</code>), opened in a browser.</p>\n\n<p><p><img src=\"guides/dev_howtos_basic_configuration/inlineall.png\" alt=\"One of the CKEditor samples as viewed in Google Chrome\" width=\"900\" height=\"655\"></p></p>\n","title":"Basic Configuration","meta_description":"Most frequently asked questions and answers.","meta_keywords":"ckeditor, editor, wysiwyg, howto, howtos, faq, questions, answers, configuration, configure, settings, setting, option"});