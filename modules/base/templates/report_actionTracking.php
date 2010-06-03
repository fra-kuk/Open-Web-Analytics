<? include('report_dimensionalTrend.php');?>


<table width="100%">
	<TR>
		<TD valign="top" style="width:50%;">
			<div class="owa_reportSectionContent">
				<div class="section_header">Actions by Name</div>
				<div style="min-width:250px;" id="actionsByNameExplorer"></div>
				<script>
				
				var aurl = '<?php echo $this->makeApiLink(array('do' => 'getResultSet', 
																  'metrics' => 'actions', 
																  'dimensions' => 'actionName', 
																  'sort' => 'actions-', 
																  'resultsPerPage' => 5,
																  'format' => 'json'), true);?>';
																  
				rsh = new OWA.resultSetExplorer('actionsByNameExplorer');
				var link = '<?php echo $this->makeLink(array('do' => 'base.reportActionDetail', 'actionName' => '%s'), true);?>';
				rsh.addLinkToColumn('actionName', link, ['actionName']);
				rsh.asyncQueue.push(['refreshGrid']);
				rsh.load(aurl, 'grid');
				</script>
			</div>
		</TD>
		
		<TD valign="top" style="width:50%;">
			<div class="owa_reportSectionContent">
				<div class="section_header">Actions By Group</div>
				<div style="min-width:300px;" id="actionsByGroupExplorer"></div>
				<script>
				var url = '<?php echo $this->makeApiLink(array('do' => 'getResultSet', 
															  'metrics' => 'actions', 
															  'dimensions' => 'actionGroup', 
															  'sort' => 'actions-', 
															  'resultsPerPage' => 5,
															  'format' => 'json'), true);?>';
															  
				rshre = new OWA.resultSetExplorer('actionsByGroupExplorer');
				rshre.asyncQueue.push(['refreshGrid']);
				rshre.load(url);
				</script>
			</div>
		</TD>
	</TR>
</table>
