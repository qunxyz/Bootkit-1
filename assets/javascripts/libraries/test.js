require(["underscore", "jquery", "backbone"], function(_, $, Backbone) {

	function readCookie(name) {
	    var nameEQ = name + "=";
	    var ca = document.cookie.split(';');
	    for(var i=0;i < ca.length;i++) {
	        var c = ca[i];
	        while (c.charAt(0)==' ') c = c.substring(1,c.length);
	        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	    }
	    return null;
	}

	var CSRF = readCookie("X-CSRF-Token");
	$.ajaxSetup({ cache: false });
	$.ajaxPrefilter(function(options, originalOptions, jqXHR) {
		jqXHR.setRequestHeader('X-CSRF-Token', CSRF);
	});

	var Idea = Backbone.Model.extend({ 
		urlRoot: "/app/api/idea.php",
		url: function() {
	        var base = this.urlRoot || (this.collection && this.collection.url) || "/";
	        if (this.isNew()) return base;
	        return base + "?id=" + encodeURIComponent(this.id);
	    },
		defaults: {
		    "Title":       "",
		    "Description": ""
		}
	});

	var Workspace = Backbone.Model.extend({ 
		urlRoot: "/app/api/workspace.php",
		url: function() {
	        var base = this.urlRoot || (this.collection && this.collection.url) || "/";
	        if (this.isNew()) return base;
	        return base + "?id=" + encodeURIComponent(this.id);
	    },
		defaults: {
		    "Title":       "",
		    "Description": ""
		}
	});

	var WorkspacePageView = Backbone.View.extend({
		el: "#template-wrapper",
		render: function(options) {
			var that = this;
			var workspace = new Workspace({id: 1});
			workspace.fetch({
				success: function(Json) {
					Json = Json.toJSON();
					document.title = "Neue Idee erstellen";
					var template = _.template($("#workspace-template").html(), {
						Ideas: Json.Ideas,
						Workspace: Json.Workspace
					});
					that.$el.html(template);
				}
			});
		}
	});

	var IdeaPageView = Backbone.View.extend({
		el: "#template-wrapper",
		render: function(options) {
			var that = this;
			var idea = new Idea({id: options.iid});
			idea.fetch({
				success: function(Json) {
					Json = Json.toJSON();
					var template = _.template($("#idea-template").html(), {
						Idea: Json
					});
					that.$el.html(template);
				}
			});
		}
	});

	var NewIdeaPageView = Backbone.View.extend({
		el: "#template-wrapper",
		render: function() {
			var that = this;
			document.title = "Neue Idee erstellen";
			var template = _.template($("#new-idea-template").html(), {});
			that.$el.html(template);
		},
		events: {
			"click #new-idea-save": "saveNewIdea"
		},
		saveNewIdea: function() {
			var idea = new Idea();
			idea.save({
				Title:       $("#new-idea-title").val(),
				Description: $("#new-idea-description").val()
			}, {
				success: function(data) {
					data = data.toJSON();
					window.location = "#/idea/" + data.InsertId;
				}
			});
		}
	});

	var newideapageview 	   = new NewIdeaPageView();
	var ideapageview 		   = new IdeaPageView();
	var workspacepageview      = new WorkspacePageView();

	var Router = Backbone.Router.extend({
	    routes: {
	        "idea/new": "newIdea",
	        "idea/:iid": "idea",
	        "workspace/:wid": "workspace"
	    }
	});

	var router = new Router;

	router.on("route:newIdea",    function() { newideapageview.render(); });
	router.on("route:workspace",  function(wid) { workspacepageview.render({wid: wid}); });
	router.on("route:idea",  function(iid) { ideapageview.render({iid: iid}); });

	Backbone.history.start();

});