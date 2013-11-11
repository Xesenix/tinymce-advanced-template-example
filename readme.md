tinymce-advanced-template-example
=================================

Simple example of using template with arguments passed to server.

  tinymce.init({
		selector: "textarea",
		plugins: ["template"],
		toolbar: "template",
		templates : [
		  {
		    title: "Template with params",
		    url: "templates/ajax.php",
		    description: "Template loaded via ajax with some additional arguments.",
		    options: {
		      title: { type: 'textbox', label: 'document name', value: 'Passport' },
		      name: { type: 'textbox', label: 'name', value: 'whats your name?' },
		      age: { type: 'textbox', label: 'age', value: '21' }
		    }
		  },
		  {
		    title: "Template without params",
		    url: "templates/static.html",
		    description: "Just some static content."
		  }
		]
  });

Options are objects that are passed to:

  tinymce.ui.Factory.create(option)
