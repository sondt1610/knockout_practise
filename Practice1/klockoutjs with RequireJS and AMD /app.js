require(["lib/knockout-2.2.0.debug", "formbind"],//depends on formbind.js plugin to be loaded 
function (ko, formbindAppObject) { 
	ko.applyBindings(new formbindAppObject());
});
