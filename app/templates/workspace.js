<header>
	<div style="float: right;">
		<a href="#/idea/new" class="button button-primary">Neue Idee</a>
		<a href="#/workspace/1/settings" class="button">Einstellungen</a>
	</div>
	<h1><%= Workspace.Title %></h1>
</header>

<% _.each(Ideas, function(Idea) { %>

	<div class="title"><%= Idea.Title %></div>

<% }) %>