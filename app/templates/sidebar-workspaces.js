<ul class="workspaces">
	<% _.each(Workspaces, function(Workspace) { %>
		<li class="workspace"><a href="<%= Workspace.Url %>"><%= Workspace.Title %></a></li>
	<% }); %>
</ul>