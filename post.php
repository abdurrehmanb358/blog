<?php

include("index.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>post page</title>
	<style>
		.require {
			color: #666;
		}

		label small {
			color: #999;
			font-weight: normal;
		}
	</style>

</head>

<body>
	<div class="container">
		<div class="row">

			<div class="col-md-8 col-md-offset-2">

				<h1>Create post</h1>

				<form action="submit.php" method="POST" enctype="multipart/form-data">
                   <div class="form-group">
						<label for="title">Title <span class="require">*</span></label>
						<input type="text" class="form-control" name="title" />
					</div>

					<div class="form-group">
						<label for="description">Content</label>
						<textarea rows="5" class="form-control" name="content"></textarea>
					</div>
                    <div class="form-group">
						<label for="title">image<span class="require">*</span></label>
						<input type="file" class="form-control" name="image" />
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">
							Create
						</button>
						<button class="btn btn-default">
							Cancel
						</button>
					</div>

				</form>
			</div>

		</div>
           </body>

            </html>