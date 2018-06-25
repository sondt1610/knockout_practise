define(['lib/knockout-2.2.0.debug'], function (ko) {
	return function AppViewModel() {
		window.dataModel = this;
	    	this.firstName = ko.observable("Bert");
	    	this.lastName = ko.observable("Bertington");
		this.fullName = ko.computed(function() {
	    		return this.firstName() + " " + this.lastName();    
		}, this);
	}
});

