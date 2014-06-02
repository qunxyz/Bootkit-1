<div id="workspace-wrapper">
	<header>
		<div style="float: right;">
			<a href="#/idea/new" class="button button-primary">Neue Idee</a>
			<a href="#/workspace/1/settings" class="button">Einstellungen</a>
		</div>
		<div class="workspace">Workspace</div>
		<h1 class="title"><%= Workspace.Title %></h1>
	</header>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Status</th>
				<th>Titel</th>
				<th>Verfasser</th>
				<th>Erstellt</th>
			</tr>
		</thead>
		<tbody>
			<% _.each(Ideas, function(Idea) { %>
				<tr>
					<td class="state">
						<span class="state state-0"></span>
						<span class="state-text">Eingereicht</span></td>
					<td class="title"><a href="<%= Idea.Url %>"><%= Idea.Title %></a></td>
					<td class="author"><%= Idea.Author.FirstName + " " + Idea.Author.Name %></td>
					<td class="created"><%= parseDatetime(Idea.Created) %></td>
				</tr>
			<% }) %>
		</tbody>
	</table>
</div>