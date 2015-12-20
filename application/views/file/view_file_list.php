<div class="sidebar" id="sidebar">
	<script type="text/javascript">
		try {
			ace.settings.check('sidebar', 'fixed');
		} catch (e) {
		}
	</script>
	<ul class="nav nav-list">
		<?php foreach ($menus as $menu): ?>
			<li class="active open">
				<a href="#" class="dropdown-toggle">
					<i class='icon-dashboard'></i>
					<span class="menu-text"><?php echo $menu['desc']; ?></span>
					<b class="arrow icon-angle-down"></b>
				</a>
				<ul class="submenu">
					<?php foreach ($menu['level2_menus'] as $level2_menu): ?>
						<li <?php if (preg_match($level2_menu['active_pattern'], $this->uri->uri_string())) echo 'class="active"'; ?>>
							<a href="<?php echo base_url($level2_menu['url']); ?>">
								<i class="icon-double-angle-right"></i><?php echo $level2_menu['desc']; ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</li>
		<?php endforeach; ?>
	</ul>

	<div class="sidebar-collapse" id="sidebar-collapse">
		<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
	</div>
</div>


<div class="panel-body" style="float:right;width:85%">
	<div class="table-responsive">
		<!-- 约定：表格显示的项及次序靠$item_descs来控制 -->
		<table class="table table-bordered table-hover table-striped tablesorter">
			<thead>
				<tr>
					<?php foreach ($item_descs as $item_desc): ?>
						<th><?php echo $item_desc; ?></th>
					<?php endforeach; ?>
				</tr>
			</thead>		
			<?php foreach ($file_infos as $report_item): ?>
				<tbody>
					<tr>
						<td><?php echo $report_item[0] ?></td>
						<td><?php echo $report_item[1]; ?></td>
						<td><a href="<?php echo site_url("file/add"); ?>">添加</a>
							<a href="<?php echo site_url("file/delete_file_info?id=$report_item[id]"); ?>">删除</a>
							<a href="<?php echo site_url("file/update?id=$report_item[id]"); ?>">更新</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<div>
	<ul>
		<li class="active">
			<a href="<?php echo base_url('file/file_post')?>">
			<i class="icon-double-angle-right"></i>
					文件上传
			</a>
			<br/>
			
			<a href="<?php echo base_url('file/file_down')?>">
			<i class="icon-double-angle-right"></i>
					文件下载
			</a>
			</li>

	</ul>
</div>