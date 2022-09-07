<?php 
session_start();
// Recives input from form.php
$_SESSION['selection']=$_POST['selection'];
$_SESSION['date']=$_POST['date'];
$_SESSION['selection1']=$_POST['selection1'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>HostGod : Edit Beneficiary Details</title>
	
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/demo/demo.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.edatagrid.js"></script>


	<script type="text/javascript">
		$(function(){
			$('#dg').edatagrid({
				url: 'get_benf.php',
				saveUrl: 'save_benf.php',
				updateUrl: 'update_benf.php',
				destroyUrl: 'destroy_benf.php'

    
			});
		});
	</script>
</head>

<body>
	<h2>Edit Beneficiary Details</h2>
	<div class="demo-info" style="margin-bottom:10px">
		<div class="demo-tip icon-tip">&nbsp;</div>
		<div>Double click the row to begin editing.</div>
	</div>
	
	<table id="dg" title="benf" style="width:100%;height:auto"
			toolbar="#toolbar"  idField="benf_id"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>


				<th field="benf_date" width="50" editor="{
		type:'datebox',
		options:{
			required:true,
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
	}">benf_date</th>
				<th field="project_id" width="50" editor="{type:'validatebox',options:{required:true}}">project_id</th>
				<th field="nps_id" width="50" editor="{type:'validatebox',options:{required:true}}">nps_id</th>
				<th field="benf_name" width="50" editor="{type:'validatebox',options:{required:true}}">benf_name</th>
				<th field="benf_fath_name" width="50" editor="{type:'validatebox',options:{required:false}}">benf_f_name</th>
				<th field="benf_contact_no" width="50" editor="text">contact_no</th>
				<th field="benf_vill" width="50" editor="{type:'validatebox',options:{required:false}}">benf_vill</th>
				<th field="benf_mandal" width="50" editor="{type:'validatebox',options:{required:false}}">benf_mandal</th>
				<th field="benf_dist" width="50" editor="{type:'validatebox',options:{required:false}}">benf_dist</th>
				<th field="benf_pin" width="50" editor="text">benf_pincode</th>	
				<th field="benf_remarks" width="50" editor="{type:'validatebox',options:{required:false}}">remarks</th>
				
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