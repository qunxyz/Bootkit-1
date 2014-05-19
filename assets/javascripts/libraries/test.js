require(["underscore", "jquery", "backbone"], function(_, $, Backbone) {

	var NewIdeaView = Backbone.View.extend({
		el: "#template-wrapper",
		render: function() {
			var that = this;
			document.title = "Neue Idee erstellen";
			var template = _.template($("#new-idea-template").html(), {});
			that.$el.html(template);
		},
		events: {

		}
	});

	var newideaview 	   = new NewIdeaView();

	var Router = Backbone.Router.extend({
	    routes: {
	        "idea/new": "newIdea",
	    }
	});

	var router = new Router;

	router.on("route:newIdea",  function() { newideaview.render(); });

	Backbone.history.start();

});