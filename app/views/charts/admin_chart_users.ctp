<div class="clearfix js-responses js-loadadmin-chart-users-ctp ">
	<?php
		$chart_title = __l('User Registration');
		$chart_y_title = __l('Users');
		$page_title = __l('User');
		$user_type_id = ($this->request->data['Chart']['user_type_id'])?$this->request->data['Chart']['user_type_id']:ConstUserTypes::User;
		?>
		<?php
 		$arrow = "down-arrow";
 		if(isset($this->request->params['named']['is_ajax_load'])){
 		$arrow = "up-arrow";
	   }
 ?>
	<div class="main-tl">
		<div class="main-tr">
			<div class="main-tm"> </div>
		</div>
	</div>
	<div class="main-left-shadow">
		<div class="main-right-shadow">
			<div class="main-inner clearfix">
			<div class="admin-side1-tc admin-side1-tc1 clearfix">
				<h2 class="chart-dashboard-title ribbon-title clearfix">
                    <?php echo __l('Registration').' - '.$page_title; ?>
               		<span class="js-chart-showhide <?php echo $arrow; ?> {'chart_block':'admin-dashboard-user<?php echo $user_type_id; ?>', 'dataloading':'div.js-loadadmin-chart-users-ctp',  'dataurl':'admin/charts/chart_users/is_ajax_load:1/user_type_id:<?php echo $user_type_id; ?>'}"><?php echo $arrow;?></span>
                       </h2>
               
					<div class="admin-center-block clearfix dashboard-center-block " id="admin-dashboard-user<?php echo $user_type_id; ?>">
					<div class="clearfix">
						<?php
                       echo $this->Form->create('Chart' , array('class' => 'language-form', 'action' => 'chart_users')); ?>
						<?php
                   			echo $this->Form->input('is_ajax_load', array('type' => 'hidden', 'value' => 1));
							echo $this->Form->input('user_type_id', array('type' => 'hidden'));
							echo $this->Form->input('select_range_id', array('class' => 'js-chart-autosubmit', 'label' => __l('Select Range')));
						?>
						<div class="hide"> <?php echo $this->Form->submit('Submit');  ?> </div>
						<?php echo $this->Form->end(); ?>
					</div>
						<div class="clearfix">
					<div class="js-load-line-graph chart-half-section {'data_container':'user_line_data<?php echo $user_type_id; ?>', 'chart_container':'user_line_chart<?php echo $user_type_id; ?>', 'chart_title':'<?php echo $chart_title ;?>', 'chart_y_title': '<?php echo $chart_y_title;?>'}">
						<div class="dashboard-tl">
							<div class="dashboard-tr">
								<div class="dashboard-tc"></div>
							</div>
						</div>
						<div class="dashboard-cl">
							<div class="dashboard-cr">
								<div class="dashboard-cc clearfix">
									<div id="user_line_chart<?php echo $user_type_id; ?>" class="admin-dashboard-chart"></div>
									<div class="hide">
										<table id="user_line_data<?php echo $user_type_id; ?>" class="list">
											<thead>
												<tr>
													<th>Period</th>
													<?php foreach($chart_periods as $_period): ?>
														<th><?php echo $_period['display']; ?></th>
													<?php endforeach; ?>
												</tr>
											</thead>
											<tbody>
												<?php foreach($chart_data as $display_name => $chart_data): ?>
													<tr>
														<th><?php echo $display_name; ?></th>
														<?php foreach($chart_data as $val): ?>
															<td><?php echo $val; ?></td>
														<?php endforeach; ?>
													</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="dashboard-bl">
							<div class="dashboard-br">
								<div class="dashboard-bc"></div>
							</div>
						</div>
					</div>
				
					<?php if(!empty($chart_pie_data)): ?>
					
						<div class="js-load-pie-chart chart-half-section {'data_container':'user_pie_data<?php echo $user_type_id; ?>', 'chart_container':'user_pie_chart<?php echo $user_type_id; ?>', 'chart_title':'<?php echo $chart_title;?>', 'chart_y_title': '<?php echo $chart_y_title;?>'}">
							<div class="dashboard-tl">
								<div class="dashboard-tr">
									<div class="dashboard-tc"></div>
								</div>
							</div>
							<div class="dashboard-cl">
								<div class="dashboard-cr">
									<div class="dashboard-cc clearfix">
										<div id="user_pie_chart<?php echo $user_type_id; ?>" class="admin-dashboard-chart"></div>
										<div class="hide">
											<table id="user_pie_data<?php echo $user_type_id; ?>" class="list">
												<tbody>
													<?php foreach($chart_pie_data as $display_name => $val): ?>
														<tr>
															<th><?php echo $display_name; ?></th>
															<td><?php echo $val; ?></td>
														</tr>
													<?php endforeach; ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="dashboard-bl">
								<div class="dashboard-br">
									<div class="dashboard-bc"></div>
								</div>
							</div>
						</div>
					
						<h3><?php echo __l('Demographics'); ?></h3>
					
						<?php echo $this->element('chart-user_demographics', array('chart_y_title'=> $chart_y_title, 'user_type_id' => $user_type_id)); ?>
                
                	<?php endif; ?>
                		</div>
				</div>
			</div> </div>
		</div>
	</div>
	<div class="main-bl">
		<div class="main-br">
			<div class="main-bm"> </div>
		</div>
	</div>
</div>