/**
 * File : addUser.js
 * 
 * This file contain the validation of add user form
 * 
 * Using validation plugin : jquery.validate.js
 */

$(document).ready(function(){
	
	var addPostForm = $("#addPost");
	
	var validator = addPostForm.validate({
		
		rules:{
			ptitle :{ required : true },
			iurl : { required : true },
			author : { required : true, selected : true},
			category : { required : true, selected : true}
			pcontent : { required : true },
			psummery : { required : true }
		},
		messages:{
			ptitle :{ required : "This field is required" },
			iurl : { required : "This field is required" },
			author : { required : "This field is required", selected : "Please select atleast one option" },
			category : { required : "This field is required", selected : "Please select atleast one option" },
			pcontent :{ required : "This field is required" },
			psummery : { required : "This field is required" }			
		}
	});
});
