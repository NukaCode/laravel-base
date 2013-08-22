<div class="row-fluid">
	<div class="span2">
		<ul class="nav nav-tabs nav-stacked">
			<li class="nav-title">Moderation Panel</li>
			<li>
				<a href="javascript: void(0);" class="ajaxLink" id="reported-posts">
					Reported Posts
					<span class="badge pull-right">{{ $reportedPostsCount }}</span>
				</a>
			</li>
			<li>
				<a href="javascript: void(0);" class="ajaxLink" id="report-logs">
					Report Logs
					<span class="badge pull-right">{{ $reportLogsCount }}</span>
				</a>
			</li>
		</ul>
	</div>
	<div class="span10">
		<div id="ajaxContent"></div>
	</div>
</div>
<script>
	@section('onReadyJs')
		$.AjaxLeftTabs('/forum/moderation/', 'reported-posts');
	@endsection
</script>