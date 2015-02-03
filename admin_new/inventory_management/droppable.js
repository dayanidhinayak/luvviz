 $(function() {
		var branchid="";
		var sourcediv='';
		var sourcedivsplit= new Array();
		var divexists = 1;
		var fromextdiv = 1;
		 //$(".droppable") .draggable( 'option', 'revert', true );
		 
		  $('.ui-draggable').draggable( {
			     //containment: '#content',
			     stack: '.ui-draggable',
			     cursor: 'move',
			     revert: true
   			} );
      
        $( ".droppable" ).droppable({
				
            drop: function( event, ui ) {
			divexists = 1;	 
	        
                $( this ).addClass( "ui-state-highlight " );
                   
					branchid=$(this).attr('id');
				alert(branchid);
					var itemname=$(ui.draggable).find('p').html();
					sourcediv=$(ui.draggable).attr("id");
					sourcedivsplit=sourcediv.split('-').length;
					fromextdiv = (sourcedivsplit<2 ? 1 : 0 ); 
					var dropid=$(ui.draggable).attr("id")+'-'+branchid;
					var i1=dropid.split('-');
					var i11=i1[0]+'-'+branchid;
					//alert(i11);
					var itemid=$(ui.draggable).attr("id");
					
				 if(!document.getElementById(i11))
				 {
					alert("not exist");
					divexists = 0 ;
					
					var i2=itemid.split('-');
					var i22=i2[1];
					////alert(i22);
					var newId = i11;
					//alert(fromextdiv+"-----"+divexists);
					if(fromextdiv && !divexists){
				alert('create div');
					$('<div>', {
						id: i11,
						'class': 'ui-widget-content drop1 draggableright',
						html:'<p>'+itemname+'</p>'
						
						}).appendTo('#'+branchid);
						$( "#"+i11 ).draggable();
						
						}else if(!fromextdiv && !divexists){
						alert("LD Exists in this category");
						$(ui.draggable).remove();
						
						$('<div>', {
						id: i11,
						'class': 'ui-widget-content drop1 draggableright',
						html:'<p>'+itemname+'</p>'
						
						}).appendTo('#'+branchid).draggable();
						
						
						
						
						}
						
					$.ajax({
						    url: 'insert_ajax1.php?branchid='+branchid+'&item='+itemid,
						    success: function (data) {
								alert(data);
							$('.result').html(data);
                                                       location.reload();
						    },
							});
				}
				else{
				//$(".droppable") .draggable( 'option', 'revert', true );
					
					}
					
					
				
              
					
            }
			
		
			
			
			
        });
        
        
        
      
    });
