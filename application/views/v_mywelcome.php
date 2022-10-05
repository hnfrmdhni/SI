<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistem Informasi</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
		integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
		integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
	</script>
	<script src="https://code.jquery.com/jquery-3.6.1.js"
	integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			// alert("HAIIIII!")

			$(".nav-link").click(function () {
				$(".nav-link").removeClass("active");
				$(this).addClass("active");
			})
			$("#btn_home").click(function () {
				viewHome();
			})
			$("#btn_profile").click(function () {
				viewProfile();
			})
		});

		function viewHome() {
			$.ajax({
					method: "POST",
					url: "index.php/C_MyWelcome/getHome",
					data: {}
				})
				.done(function (msg) {
					$("#content").html(msg);
				});
		}
		function viewProfile() {
			$.ajax({
					method: "POST",
					url: "index.php/C_MyWelcome/getProfile",
					data: {}
				})
				.done(function (msg) {
					$("#content").html(msg);
				});
		}

	</script>
</head>

<body>
	<div class="container text-center">
		<div class="row">
			<div class="col col-12 bg-success p-2" style="--bs-bg-opacity: .3;">
				Header
			</div>

			<div class="col col-2 bg-success p-2" style="--bs-bg-opacity: .5;">
				<ul class="nav nav-pills">
					<div class="row">
						<li class="nav-item" id="btn_home">
							<a class="nav-link " aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item" id="btn_profile">
							<a class="nav-link" href="#">Profile</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled">Disabled</a>
						</li>
				</ul>

			</div>
			<div class="col col-10 bg-success p-2" style="--bs-bg-opacity: .2;">
				<div id="content">

				</div>
			</div>
		</div>
	</div>
	</div>
</body>

</html>
