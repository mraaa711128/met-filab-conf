<div class="jumbotron">
  <div class="container">
    <h1 class="page-header">Presentation Submission 2015</h1>
    <p>We are very welcome to receive your presentation submission ! Please fill your first name, last name, and E-Mail, then select the file you want to submit ! Thank you again !</p>
    <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>-->
  </div>
</div>
<!-- <div class="container"> -->
	<div class="row">
		<div class="col-xs-12 col-md-9">
			<div class="page-header">
				<h3>Information about Presentation Submission</h3>
			</div>
			<div class="alert alert-warning" role="alert">
				<p><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		  		<span class="sr-only">Warning:</span>
				&nbsp&nbsp Only when you input your <strong>First Name, Last Name, and E-Mail</strong>, then you can select files to upload !!</p>
<!-- 			</div>
			<div class="alert alert-warning" role="alert"> -->
				<p><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		  		<span class="sr-only">Warning:</span>
				&nbsp&nbsp Each time you can have up to <strong>5 files</strong> upload, and each file can have up to <strong>10 MB</strong> file size !!</p>
<!-- 			</div>
			<div class="alert alert-warning" role="alert"> -->
				<p><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		  		<span class="sr-only">Warning:</span>
				&nbsp&nbsp You can upload compressed file, such as <strong>*.zip,*.rar,*.gz,*.tgz</strong>. Or document file, such as <strong>*.ppt,*.pptx,*.pdf</strong> !!</p>
			</div>
			<div class="col-xs-12 col-md-7">
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
							<div id ="inputUploadError"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="container">
					<h4>Presentation Submission Start Date:</h4>
					<span><p>Soon ...</p></span>
				</div>
				<div class="container">
					<h4>Presentation Submission Due Date:</h4>
					<span><p>May 1, 2015</p></span>
				</div>
			</div>
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
		allowedFileExtensions: ["zip", "rar", "gz", "tgz", "ppt", "pdf", "pptx"],
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

	$("#inputFirstName").keypress(function() {
		canSelect = ($(this).val() != "") && ($("#inputLastName").val() != "") && ($("#inputEmail").val() != "");

		if (canSelect) {
			$("#inputFileUpload").fileinput('enable');
		} else {
			$("#inputFileUpload").fileinput('disable');
		}
	});

	$("#inputLastName").keypress(function() {
		canSelect = ($(this).val() != "") && ($("#inputFirstName").val() != "") && ($("#inputEmail").val() != "");

		if (canSelect) {
			$("#inputFileUpload").fileinput('enable');
		} else {
			$("#inputFileUpload").fileinput('disable');
		}
	});
	
	$("#inputEmail").keypress(function() {
		canSelect = ($(this).val() != "") && ($("#inputFirstName").val() != "") && ($("#inputLastName").val() != "");

		if (canSelect) {
			$("#inputFileUpload").fileinput('enable');
		} else {
			$("#inputFileUpload").fileinput('disable');
		}
	});

	$(document).ready(function() {
		$("#inputFileUpload").fileinput('disable');
		// $("#inputFileUpload").uploadFile({
		// 	url:"<?= $siteroot ?>/php/upload.php",
		// 	fileName:"upload_file",
		// 	allowedTypes:"pdf,doc,docx",
		// 	showProgress:true,
		// 	uploadButtonClass:"btn btn-primary",
		// 	uploadFolder:"<?= $pageroot ?>/upload/",
		// 	onSuccess: function (files, response, xhr, pd) {
		// 		for (var i = files.length - 1; i >= 0; i--) {
		// 			$("#inputFirstName").val(response + ",");
		// 		};
		// 	},
		// 	onError: function (files, status, message, pd) {
		// 		$("#inputFirstName").val(message);
		// 	}
		// });
	});
</script>
