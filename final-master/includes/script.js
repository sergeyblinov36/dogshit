
/*form */
$(function(){
	$.validator.setDefaults({
		highlight: function(element){
			$(element)
			.closest('.form-group')
			.addClass('has-error')
		},
		unhighlight: function(element){
			$(element)
			.closest('.form-group')
			.removeClass('has-error')
		}
	});
	
	$.validate({
		rules:
		{	
		    password: "required",
			birthDate: "required",
			weight: {
			    required:true,
			    number:true
			},
			height:  {
			    required:true,
			    number:true
			},
			email: {
				required: true,
				email: true
			}
		},
			messages:{			
				email: {
				required: true,
				email: true
			}
		},
				password: {
					required: " Please enter password"
				},
				birthDate: {
					required: " Please enter birthdate"
				},
				email: {
					required: ' Please enter email',
					email: ' Please enter valid email'
				},
				weight: {
					required: " Please enter your weight",
					number: " Only numbers allowed"
				},
				height: {
					required: " Please enter your height",
					number: " Only numbers allowed"
				},
			}
    
    });
});






/*for galary - page 'myDoginfoPage.html' */
jQuery(document).ready(function($) {
 
    $('#myCarousel').carousel({
            interval: 5000
    });

    $('#carousel-text').html($('#slide-content-0').html());

    //Handles the carousel thumbnails
   $('[id^=carousel-selector-]').click( function(){
        var id = this.id.substr(this.id.lastIndexOf("-") + 1);
        var id = parseInt(id);
        $('#myCarousel').carousel(id);
    });


    // When the carousel slides, auto update the text
    $('#myCarousel').on('slid.bs.carousel', function (e) {
             var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-'+id).html());
    });
});
/*----------------------------------------------------------------*/

var audio;
var playlist;
var tracks;
var current;

init();
function init(){
    current = 0;
    audio = $('#audio');
    playlist = $('#playlist');
    tracks = playlist.find('li a');
    len = tracks.length - 1;
    audio[0].volume = 0.5;
    audio[0].play();
    playlist.find('a').click(function(e){
        e.preventDefault();
        link = $(this);
        current = link.parent().index();
        run(link, audio[0]);
    });
    audio[0].addEventListener('ended',function(e){
        current++;
        if(current == len){
            current = 0;
            link = playlist.find('a')[0];
        }else{
            link = playlist.find('a')[current];    
        }
        run($(link),audio[0]);
    });
}
function run(link, player){
        player.src = link.attr('href');
        par = link.parent();
        par.addClass('active').siblings().removeClass('active');
        audio[0].load();
        audio[0].play();
}





$(document).ready(function(){

	var fileSelect = document.getElementById("fileSelect"),
	  draggableFile = document.getElementById("draggableFile"),
	  result = document.getElementById("result"),
	  wrapper = document.getElementById("wrapper");
	xhr = new XMLHttpRequest();
	if (window.File && window.FileList && window.FileReader) {
	  function setupReader(file, handler) {
		var reader = new FileReader();
		reader.onloadend = handler;
		reader.readAsDataURL(file);
	  }
	
	  function overFile(e) {
		e.stopPropagation();
		e.preventDefault();
		wrapper.className = "visible";
	  }
	
	  function endFile(e) {
		e.stopPropagation();
		e.preventDefault();
		wrapper.className = "";
	  }
	
	  function dropFile(e) {
		e.stopPropagation();
		e.preventDefault();
		var files = e.target.files || e.dataTransfer.files;
		for (var i = 0; i < files.length; i++) {
		  var eachFile = files[i],
			type = eachFile.type == "" || eachFile.type == null
			  ? eachFile.name.split(".")[1]
			  : eachFile.type;
		  setupReader(eachFile, function(e) {
			$("#result").append('<div class="item"><i class="fa fa-file-o" aria-hidden="true"></i><p>'+eachFile.name +'</p></div>');
		  });
		}
		result.style.display = "block";
		wrapper.className = "";
		$(".input-select-wrap").css({
		  bottom: "30px",
		  top: "inherit",
		  transform: "none"
		});
	
		setTimeout(function() {
		  $(".item").draggable({
			revert: true,
			start: function() {
			  $(".folder").css({
				"background-color": "rgba(0,0,0,0.05)"
			  });
			  $(this).css({
				display: "inline-block"
			  });
			},
			stop: function() {
			  $(".folder").css({
				"background-color": "rgba(0,0,0,0)"
			  });
			  $(this).css({
				display: "block"
			  });
			},
			drag: function(event, ui) {
			  $(this).css("z-index", "999");
			}
		  });
		}, 300);
	  }
	
	  if (xhr.upload) {
		wrapper.addEventListener("dragover", overFile);
		wrapper.addEventListener("dragenter", overFile);
		draggableFile.addEventListener("dragleave", endFile);
		draggableFile.addEventListener("drop", dropFile);
		fileSelect.addEventListener("change", dropFile);
	  }
	}
	
	$(document).ready(function() {
	  var targetFolder;
	  var folderID;
	  var zIndex;
	
	  $(".folder").droppable({
		accept: ".item, .file",
		over: function(event, ui) {
		  $(this).find("i.fa-file").css({
			transform: "scale(1.1)",
			opacity: "0.5"
		  });
		  $(this).find("p").css({
			opacity: "0.5"
		  });
		  $(this).css({
			background: "rgba(0,0,0,0.0)",
			border: "1px solid rgba(0,0,0,0.1)"
		  });
		  targetFolder = $(".ui-droppable-hover").attr("id") + "-content";
		  folderID = $(".ui-droppable-hover").attr("id");
		},
		out: function(event, ui) {
		  $(this).find("i.fa-file").css({
			transform: "scale(1)",
			opacity: "1"
		  });
		  $(this).find("p").css({
			opacity: "1"
		  });
		  $(this).css({
			background: "rgba(0,0,0,0.05)",
			border: "1px solid rgba(0,0,0,0)"
		  });
		},
		drop: function() {
		  dropItemToFolder(targetFolder, folderID);
		  updateFilesNumbers();
		}
	  });
	
	  $(".left").sortable({
		revert: true
	  });
	
	  $(".folder-content").droppable({
		drop: function() {
		  var eLtarget = $(this).attr("id");
		  var eLFolder = $(this).attr("id").slice(0, -8);
		  if (!$(".ui-draggable-dragging").hasClass(eLtarget + "-item")) {
			dropItemToFolder(eLtarget, eLFolder);
			updateFilesNumbers();
		  }
		}
	  });
	  var eLfolderindex;
	  var draggieWindow = $(".folder-content").draggabilly();
	  draggieWindow.on("dragStart", function(event, pointer) {
		(zIndex = $(".folder-content")
		  .map(function() {
			return $(this).css("z-index");
		  })
		  .get()), (currentzIndex = Math.max.apply(null, zIndex));
		$(this).css({
		  display: "block",
		  "z-index": currentzIndex + 1
		});
	  });
	  $(".folder-content").resizable({
		minWidth: 250,
		minHeight: 150,
		start: function(event, ui) {
		  $(".folder-content").draggabilly("disable");
		},
		stop: function(event, ui) {
		  $(".folder-content").draggabilly("enable");
		}
	  });
	  $(".top-droppable").topDroppable({
			drop: function (e, ui) {
			   console.log("dropped into " + $(this).attr('id'));
			}
		});
	
	  $(".close-folder-content").click(function() {
		var eLfolder = $(this).parent();
		eLfolder.addClass("easeout2").addClass("closed");
		setTimeout(function() {
		  eLfolder.css("display", "none");
		}, 300);
	  });
	
	  $(".folder").dblclick(function() {
		(zIndex = $(".folder-content")
		  .map(function() {
			return $(this).css("z-index");
		  })
		  .get()), (currentzIndex = Math.max.apply(null, zIndex));
	
		var eLfolder = $(this).attr("id");
	
		$("#" + eLfolder + "-content").css({
		  display: "block",
		  "z-index": currentzIndex + 1
		});
		setTimeout(function() {
		  $("#" + eLfolder + "-content").addClass("easeout2").removeClass("closed");
		}, 5);
		setTimeout(function() {
		  $("#" + eLfolder + "-content").removeClass("easeout2");
		}, 300);
	  });
	
	  toolTiper();
	});
	
	function toolTiper() {
	  $(".tooltiper").each(function() {
		var eLcontent = $(this).attr("data-tooltip"),
		  eLtop = $(this).position().top,
		  eLleft = $(this).position().left;
		$(this).append('<span class="tooltip">' + eLcontent + "</span>");
	  });
	}
	
	function dragTheFiles() {
	  setTimeout(function() {
		$(".file").draggable({
		  revert: true,
		  start: function() {
			$(".folder-content").draggabilly("disable");
			$(".folder").css({
			  "background-color": "rgba(0,0,0,0.05)"
			});
			$(this).css({
			  "background-color": "rgba(0,0,0,0.02)"
			});
		  },
		  stop: function() {
			$(".folder-content").draggabilly("enable");
			$(".folder").css({
			  "background-color": "rgba(0,0,0,0)"
			});
			$(this).css({
			  "background-color": "rgba(0,0,0,0.0)"
			});
		  },
		  drag: function(event, ui) {
			$(this).css({
			  "z-index": "999"
			});
		  }
		});
	  }, 300);
	}
	
	function dropItemToFolder(target, folderid) {
	  $(".ui-draggable-dragging").draggable({
		revert: false
	  });
	  $(".ui-draggable-dragging").addClass("is-dropped");
	  $("#" + folderid).addClass("item-dropped");
	  $(".folder").css({
		background: "rgba(0,0,0,0.05)",
		border: "1px solid rgba(0,0,0,0)"
	  });
	  $(".folder .fa-folder").css({
		transform: "scale(1)",
		opacity: "1"
	  });
	  $(".folder p").css({
		opacity: "1"
	  });
	  setTimeout(function() {
		$(".is-dropped").appendTo("#" + target);
		$(".is-dropped").removeClass().addClass(target + "-item").addClass("file");
		$("." + target + "-item").draggable("destroy");
		$("." + target + "-item").css({
		  left: "0",
		  top: "0"
		});
	  }, 300);
	  setTimeout(function() {
		$("#" + folderid).removeClass("item-dropped");
	  }, 1000);
	  dragTheFiles();
	}
	
	
	function updateFilesNumbers() {
	  setTimeout(function(){
		$('.folder-content').each(function(){
		  var eLFolder = $(this).attr("id").slice(0, -8);
		  var filesCount = $(this).find('.file').length;
		  $('#'+eLFolder).find('.tooltip').html(filesCount+' file(s)');
		});
	  },300);
	}
	});
