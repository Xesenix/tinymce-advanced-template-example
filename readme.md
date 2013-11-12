TinyMCE advanced template example
=================================

![alt Advanced template editor](/images/screen00.png "Advanced template editor")

Simple example of using template with arguments passed to server.

Original change made in fork to tinymce: https://github.com/Xesenix/tinymce

If you add options parameter to template configuration setup button will appear for that template.

	tinymce.init({
		selector: "textarea",
		plugins: ["template"],
		toolbar: "template",
		templates : [
			{
				title: "Template with params",
				url: "templates/ajax.php",
				description: "Template loaded via ajax with some additional arguments.",
				// if this options exist the button will appear
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

So anything you working with ui factory will work here also options keys are names of arguments passed to url.