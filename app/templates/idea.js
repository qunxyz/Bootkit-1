<div id="idea-wrapper" class="wrapper">

	<header>
		<div class="idea-icon"></div>
		<a href="#/workspace/1" class="workspace">Workspace ::</a>
		<h1 class="title"><%= Idea.Title %></h1>
	</header>
	<div class="action-bar">
		<div class="thumb thumb-up"></div>
		<div class="thumb thumb-down"></div>
	</div>
	<div class="description">
		<%= Idea.Description %>
	</div>

</div>

<section id="comment-wrapper">
	<div class="new-comment">
		<textarea class="form-control" rows="3"></textarea>
	</div>
</section>