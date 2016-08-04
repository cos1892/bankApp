(function() {
  
	var app = {
		
		initialize : function () {			
			this.modules();
			this.setUpListeners();
		},

		modules: function () {

		},

		setUpListeners: function () {
			$('form').on('submit',app.submitForm);
		},

		submitForm: function () {
			e.preventDefault();
			console.log('submit!!!');

		}		
		
	}

	app.initialize();

}());