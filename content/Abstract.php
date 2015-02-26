<div class="jumbotron">
  <div class="container">
    <h1 class="page-header">Abstract Submission 2015</h1>
    <p>We are very welcome to receive your abstract submission ! Please fill your first name and last name, and select the file you want to submit ! Thank you again !</p>
    <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>-->
  </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="page-header">
				<h3>Information about Abstract Submission</h3>
			</div>
			<div class="col-md-7">
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
			<div class="col-md-5">
				<div class="container">
					<h4>Abstract Submission Start Date:</h4>
					<span><p>Soon ...</p></span>
				</div>
				<div class="container">
					<h4>Abstract Submission Due Date:</h4>
					<span><p>May 1, 2015</p></span>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$("#inputFileUpload").fileinput({
		uploadUrl: "<?= $siteroot ?>/php/upload.php",
		showCaption: true,
		showPreview: false,
		allowedFileExtensions: ["zip", "rar", "gz", "tgz", "doc", "pdf", "docx"],
		maxFileSize: 10240,
		maxFilesNum: 5,
		uploadExtraData: function() {
			var exData = [];
			exData['first_name'] = $("#inputFirstName").val();
			exData['last_name'] = $("#inputLastName").val();
			return exData;
		},
		elErrorContainer: "#inputUploadError"
	});

	$(document).ready(function() {
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
