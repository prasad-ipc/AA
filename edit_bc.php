<?php
include 'login_check.php';
?>
<?php 
// Recives input from form.php
$_SESSION['selection']=$_POST['selection'];
$_SESSION['selection1']=$_POST['selection1'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>HostGod : Edit BC Details</title>
	
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/demo/demo.css">

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.edatagrid.js"></script>



	<script type="text/javascript">
		$(function(){
			$('#dg').edatagrid({
				url: 'get_bc.php',
				saveUrl: 'save_bc.php',
				updateUrl: 'update_bc.php',
				destroyUrl: 'destroy_bc.php'

    
			});
		});
	</script>
</head>

<body>
	<h2>Edit BC Details</h2>
	<div class="demo-info" style="margin-bottom:10px">
		<div class="demo-tip icon-tip">&nbsp;</div>
		<div>Double click the row to begin editing.</div>
	</div>
	
	<table id="dg" title="BC" style="width:100%;height:auto"
			toolbar="#toolbar" idField="id"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="bc_id" width="50" editor="{type:'validatebox',options:{required:true}}">bc_id</th>
				<th field="dc_id" width="50" editor="{type:'validatebox',options:{required:true}}">dc_id</th>
				<th field="block" width="50" editor="{type:'validatebox',options:{required:true}}">block</th>
				<th field="bc_name" width="50" editor="{type:'validatebox',options:{required:true}}">bc_name</th>
				<th field="contact_no" width="50" editor="text">contact_no</th>
				<th field="emp_vill" width="50" editor="{type:'validatebox',options:{required:false}}">emp_vill</th>
				<th field="emp_po" width="50" editor="{type:'validatebox',options:{required:false}}">emp_po</th>
				<th field="emp_mandal" width="50" editor="{type:'validatebox',options:{required:false}}">emp_mandal</th>
				<th field="emp_dist" width="50" editor="text">emp_dist</th>
				<th field="emp_id" width="50" editor="text">emp_id</th>
				
				<th field="emp_doj" width="50" editor="{
		type:'datebox',
		options:{
			required:false,
			formatter:function(date){
				var y = date.getFullYear();
				var m = date.getMonth()+1;
				var d = date.getDate();
				return y+'-'+(m<10?('0'+m):m)+'-'+(d<10?('0'+d):d);
			},
			parser:function(s){
				if (!s) return new Date();
				var ss = s.split('-');
				var y = parseInt(ss[0],10);
				var m = parseInt(ss[1],10);
				var d = parseInt(ss[2],10);
				if (!isNaN(y) && !isNaN(m) && !isNaN(d)){
					return new Date(y,m-1,d);
				} else {
					return new Date();
				}
			}
		}
	}">emp_doj</th>

				
				
			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="javascript:$('#dg').edatagrid('addRow')">New</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="javascript:$('#dg').edatagrid('destroyRow')">Destroy</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="javascript:$('#dg').edatagrid('saveRow')">Save</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-undo" plain="true" onclick="javascript:$('#dg').edatagrid('cancelRow')">Cancel</a>
 
	</div>
	
</body>
</html>