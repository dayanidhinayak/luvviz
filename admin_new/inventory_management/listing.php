<?php
include_once("../function.php");
?>
<!doctype html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
   <link rel="stylesheet" type="text/css" href="../style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../menu.css" media="screen" />

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <script src="jquery-1.8.3.js"></script>
    <script src="jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <style>
    #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
    #sortable li span { position: absolute; margin-left: -1.3em; }
    </style>
    <script>

    $(function() {
	
	
	//$('#select_loc').change(function() {
//                     //alert($(this).val());
//					 var loc_id=$(this).val();
//					 alert(loc_id);
//                       });
//
//	
        $( "#sortable" ).sortable({
		
		
        start: function(event, ui) {
            var start_pos = ui.item.index();
            ui.item.data('start_pos', start_pos);
			//alert('start');
        },
        change: function(event, ui) {
            var start_pos = ui.item.data('start_pos');
            //alert(start_pos);
        },
        update: function(event, ui) {
		   var end_pos = ui.item.index();
            ui.item.data('end_pos', end_pos);
			
			var ids=$('#sortable').sortable("toArray");
	  //var endpos=
	  //alert($('#sortable').sortable("toArray"));
		//alert('list id:' +ids);
		//alert($('li').index("toArray"));
		var prior='';
		$('li').each(function()
		{
		var list=$(this).attr('id')+'--'+$('li').index($(this));
		prior=list+','+prior;
		
		//alert(list);
		//alert(prior);
		}
		
		)
		//var loc_id=$('#select_loc').val();
//		alert($('#select_loc').val());
//         
		var loc_id="<?= $id ?>";
		//alert(loc_id);
		 
			$.ajax({
                   
                    url: "insert_priority.php?id="+ui.item.attr('id')+"& pos="+end_pos+"& list="+prior+"& loc_id="+loc_id,
                    success: function (data) {
                        $('.result').html(data);
                    },
					
					
				//+"& loc_id="+loc_id
					
				
                });
				
            //alert(end_pos);
        }
	 });
      
	 
	   
	   // $( "#sortable" ).disableSelection();
    });
	
	
    </script>

</head>
<body>
 <div id="topbar100">
			<div id="topbar">
				<div style="padding:0px 10px; float:right; margin-right:10px; margin-top:5px;">
					
				</div>
			</div>
		</div>
		<div id="menubar100">
			<div id="menubar">
				<div class="menubar-left">
				
				</div>
		  </div>
		</div>
		
		<?php include_once("../menubar.php");?>
<div id="container100" style=" margin-top:10px; background:#ffffff;">
			<div id="container" style="">
			
			 	<div class="about-cont" style=" font-weight:normal;">
				<div class="container1-top" style="  height:35px;  background:#efefef; font-size:20px; text-align:left; line-height:1.8; padding-left:10px; border-bottom: 1px solid rgb(196, 196, 196); background:url(../img/titlebar.png) repeat-x; border-radius:5px 5px 5px 5px; -moz-border-radius:5px 5px 5px 5px; margin-top:1%; width:99%;color: #3856a0;">
									Listing Details <br/>
				</div>

<ul id="sortable" class="sorting">
 <?php 
$query=mysql_query("select * from `category` order by `priority`");

		while($result=mysql_fetch_array($query))

		{

		//$q1=mysql_query("select `id` from `promote` where `category_id`='$result[id]' and `status`='1'");

		//$count=mysql_num_rows($q1);
?>
 <li id="<?php echo $result['id'];?>" class="ui-state-default"><?php echo $result['category_name'];?> </li>
 
 <?php } ?> 

</ul>
 
 <div class="result"></div>

</div>
			</div>
		</div>
		
		<div id="footer100">
			<div id="footer" class="font1">
				<span style="float:left; margin-left:30px;">
					All Rights Reserved @ Map Cart
				</span>
				<span style="float:right; margin-right:30px;">
					
				</span>
			</div>
		</div>
</body>
</html>
