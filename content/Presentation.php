<div class="jumbotron">
  <div class="container">
    <h1 class="page-header">Presentation Submission of BEST Conference 2015</h1>
    <!-- <p>We are very welcome to receive your presentation submission ! Please fill your first name, last name, and E-Mail, then select the file you want to submit ! Thank you again !</p> -->
    <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>-->
  </div>
</div>
<!-- <div class="container"> -->
	<div class="row">
		<div class="col-xs-12 col-md-9">
			<div class="page-header">
				<h3>Information about Presentation Submission</h3>
			</div>
<!-- 			<div class="alert alert-warning" role="alert">
				<p><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		  		<span class="sr-only">Warning:</span>
				&nbsp&nbsp Only when you input your <strong>First Name, Last Name, and E-Mail</strong>, then you can select files to upload !!</p>
				<p><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		  		<span class="sr-only">Warning:</span>
				&nbsp&nbsp Each time you can have up to <strong>5 files</strong> upload, and each file can have up to <strong>10 MB</strong> file size !!</p>
				<p><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		  		<span class="sr-only">Warning:</span>
				&nbsp&nbsp You can upload compressed file, such as <strong>*.zip,*.rar,*.gz,*.tgz</strong>. Or document file, such as <strong>*.ppt,*.pptx,*.pdf</strong> !!</p>
			</div> -->
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="form-horizontal">
					<div class="form-group">
						<label for="inputFirstName" class="col-md-3 control-label"> First Name</label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
						</div>
					</div>
					<div class="form-group">
						<label for="inputLastName" class="col-md-3 control-label"> Last Name</label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail" class="col-md-3 control-label"> E-Mail</label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="inputEmail" placeholder="example@example.com">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-9">
							<input type="hidden" class="form-control" id="inputType" placeholder="" value="presentation">
						</div>
					</div>

					<div class="form-group">
						<label for="inputFileUpload" class="col-md-3 control-label"> File Upload</label>
						<div class="col-md-9">
<!-- 							<div id="inputFileUpload">Upload</div>
							<button type="submit" id="inputFileUpload">Upload</button> -->
							<input type="file" id="inputFileUpload" class="file" name="upload_file[]" multiple="true">
							
						</div>
					</div>
				</div>
				<div class="col-md-12" id ="inputUploadError"></div>
				<div class="col-md-12" id="inputUploadSuccess"></div>
			</div>
<!-- 			<div class="col-xs-12 col-md-5">
				<div class="container">
					<h4>Presentation Submission Start Date:</h4>
					<span><p>Apr 4, 2015</p></span>
				</div>
				<div class="container">
					<h4>Presentation Submission Due Date:</h4>
					<span><p>May 15, 2015</p></span>
				</div>
			</div> -->
		</div>
		<div class="col-xs-12 col-md-3">
	        <?php
	          include($pageroot . "/content/AnnounceList.php");
	        ?>
		</div>
	</div>
<!-- </div> -->

<script>
	var canSelect = false;

	$("#inputFileUpload").fileinput({
		uploadUrl: "<?= $siteroot ?>/php/upload.php",
		showCaption: true,
		showPreview: false,
		allowedFileExtensions: ["ppt", "pdf", "pptx"],
		maxFileSize: 10240,
		maxFilesNum: 5,
		uploadExtraData: function() {
			var exData = {};
			exData["firstname"] = $("#inputFirstName").val();
			exData["lastname"] = $("#inputLastName").val();
			exData["email"] = $("#inputEmail").val();
			exData["type"] = $("#inputType").val();
			return exData;
		},
		elErrorContainer: "#inputUploadError"
	});

	$("#inputFileUpload").on('filebatchuploadsuccess', function(event, data, previewId, index) {
		var form = data.form;
		var files = data.files;
		var extra = data.extra;

		var strSuccess = '';

		strSuccess += '<li>Thank you for your submission. Your file has been successfully uploaded.</li>';
		
		$("#inputUploadSuccess").html('<div class="alert alert-success" role="alert"><ul class="text-left">' + strSuccess + '</ul></div>');
	});

	$("#inputFileUpload").on('filebrowse', function(event) {
		$("#inputUploadSuccess").html('');
		$("#inputUploadError").html('');
	});

	$("#inputFirstName").keyup(function() {
		var validEmail = check_email($("#inputEmail").val());
		canSelect = ($(this).val() != "") && ($("#inputLastName").val() != "") && (validEmail);
		check_file_upload(canSelect);
	});

	$("#inputLastName").keyup(function() {
		var validEmail = check_email($("#inputEmail").val());
		canSelect = ($(this).val() != "") && ($("#inputFirstName").val() != "") && (validEmail);
		check_file_upload(canSelect);
	});
	
	$("#inputEmail").keyup(function() {
		var validEmail = check_email($("#inputEmail").val());
		canSelect = (validEmail) && ($("#inputFirstName").val() != "") && ($("#inputLastName").val() != "");
		check_file_upload(canSelect);
	});

	function check_email(email) {
		var regEmail = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		return email.match(regEmail);
	}

	function check_file_upload(canSelect) {
		if (canSelect) {
			$("#inputFileUpload").parent().parent().popover('destroy');
			$("#inputFileUpload").parent().removeClass('btn-danger').addClass('btn-primary');
			$("#inputFileUpload").fileinput('enable');
		} else {
			$("#inputFileUpload").fileinput('disable');
			$("#inputFileUpload").parent().parent().popover({
				animation: true,
				content: 'Please enter your first name, last name and email first, and then you will be able to select a file.',
				placement: 'bottom',
				container: 'body',
				title: 'Error:',
				trigger: 'hover'
			});
			$("#inputFileUpload").parent().removeClass('btn-primary').addClass('btn-danger');
		}
	}

	$(function() {
		check_file_upload(false);
	});
</script>
