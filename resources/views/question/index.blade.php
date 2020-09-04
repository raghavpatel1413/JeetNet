<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<style>
</style>
</head>
<body>
	<div class="container">
		<form action="{{route('question.store')}}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="row">
				<div class="col col-sm-12">
					<h1>Questions</h1>
				</div>
				<div class="col col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupFileEnglish">English Question</span>
						</div>
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="inputGroupFileEng" id="inputGroupFileEng" aria-describedby="inputGroupFileEnglish">
							<label class="custom-file-label" for="inputGroupFileEng">Choose file</label>
						</div>
					</div>
				</div>
				<div class="col col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupFileHindi">Hindi Question</span>
						</div>
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="inputGroupFileHind" id="inputGroupFileHind" aria-describedby="inputGroupFileHindi">
							<label class="custom-file-label" for="inputGroupFileHin">Choose file</label>
						</div>
					</div>
				</div>
				<div class="col col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupFileGujarati">Gujarati Question</span>
						</div>
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="inputGroupFileGuj" id="inputGroupFileGuj" aria-describedby="inputGroupFileGujarati">
							<label class="custom-file-label" for="inputGroupFileGuj">Choose file</label>
						</div>
					</div>
				</div>
				<div class="col col-sm-12">
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="rb_subject" id="inlineRadio1" value="1">
						<label class="form-check-label" for="inlineRadio1">Maths</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="rb_subject" id="inlineRadio2" value="2">
						<label class="form-check-label" for="inlineRadio2">Physics</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="rb_subject" id="inlineRadio3" value="3">
						<label class="form-check-label" for="inlineRadio3">chemistry</label>
					</div>
				</div>
				<div class="col col-sm-12">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroupFileBatch">Batch Question</span>
						</div>
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="inputGroupFileBat" id="inputGroupFileBat" aria-describedby="inputGroupFileBatch">
							<label class="custom-file-label" for="inputGroupFileBat">Choose file</label>
						</div>
					</div>
				</div>
				<input type="submit" class="btn btn-success btn-block" value="Add Question">
			</div>
		</form>
	</div>
</body>
</html>