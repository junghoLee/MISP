<li id="id_<?php echo $element_id;?>" class="templateTableRow">
	<div class="templateElementHeader" style="width:100%; position:relative;">
		<div class="templateGlass"></div>
		<div class ="templateElementHeaderText">File</div>
	</div>
	<table class="templateTable">
		<tr>
			<td>
				<div style="display:inline">
					<div class="templateTableTDName templateTableArea">
						<div class="templateTableColumnName">
							Name
						</div>
						<div class="">
							<?php echo h($element['TemplateElementFile'][0]['name']); ?>&nbsp;
						</div>
					</div>
					
					<div class="templateTableTDDescriptionFile templateTableArea">
						<div class="templateTableColumnName">
							Description
						</div>
						<div class="">
							<?php echo h($element['TemplateElementFile'][0]['description']); ?>&nbsp;
						</div>
					</div>
					
					<div class="templateTableTDCategory templateTableArea">
						<div class="templateTableColumnName">
							Category
						</div>
						<div class="">
							<?php echo h($element['TemplateElementFile'][0]['category']); ?>&nbsp;
						</div>
					</div>
					<div class="templateTableTDShort templateTableArea">
						<div class="templateTableColumnName">
							Malware
						</div>
						<div class="">
							<?php 
								if ($element['TemplateElementFile'][0]['malware']) echo 'Yes';
								else echo 'No';  
							?>&nbsp;
						</div>
					</div>
					<div class="templateTableTDShort templateTableArea">
						<div class="templateTableColumnName">
							Req.
						</div>
						<div class="">
							<?php 
								if ($element['TemplateElementFile'][0]['mandatory']) echo 'Yes';
								else echo 'No';  
							?>&nbsp;
						</div>
					</div>
					<div class="templateTableTDShort templateTableArea">
						<div class="templateTableColumnName">
							Batch
						</div>
						<div class="">
							<?php 
								if ($element['TemplateElementFile'][0]['batch']) echo 'Yes';
								else echo 'No'; 
							?>&nbsp;
						</div>
					</div>					
					<div class="templateTableTDActions templateTableArea">
						<div class="templateTableColumnName">
							Actions
						</div>
						<div class="">
							<?php 
								if ($mayModify) {
									echo $this->Form->create('TemplateElement', array('class' => 'inline-delete', 'style' => 'display:inline-block;', 'id' => 'TemplateElement_' . $element_id . '_delete', 'action' => 'delete'));
							?>
									<span class="icon-trash useCursorPointer" onClick="deleteObject('template_elements', 'delete' ,'<?php echo $element_id; ?>', '<?php echo $element['TemplateElement']['template_id']; ?>');"></span>
							<?php 
									echo $this->Form->end();
							?>
									<span class="icon-edit useCursorPointer" onClick="editTemplateElement('file' ,'<?php echo $element_id; ?>');"></span>
							<?php 
								} else {
									echo '&nbsp;';
								}
							?>
						</div>
					</div>
				</div>
			</td>
		</tr>
	</table>
</li>
